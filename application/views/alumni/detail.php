<!-- Tabel Data Alumni -->
<div class="col-12 d-flex justify-content-center">
  <div class="card shadow-lg border-0 mt-4" style="width: 90%; border-radius: 16px;">
    <div class="card-body">
      <h4 class="mb-4 text-primary fw-bold">📑 Data Alumni</h4>

      <!-- Tombol Kembali -->
      <a href="<?= base_url('alumni/index') ?>" class="btn btn-outline-primary mb-4">
        <i class="bi bi-arrow-left-circle me-1"></i> Kembali ke Halaman Alumni
      </a>

      <!-- Filter Tahun -->
      <div class="mb-3">
        <label for="filterTahun" class="form-label fw-semibold text-secondary">🎯 Filter berdasarkan Tahun Lulus:</label>
        <select id="filterTahun" class="form-select w-auto d-inline-block ms-2">
          <option value="">Semua Tahun</option>
          <?php
            $tahunUnik = array_unique(array_column($dataAlumni, 'tahun_lulus'));
            rsort($tahunUnik);
            foreach ($tahunUnik as $tahun):
          ?>
            <option value="<?= $tahun ?>"><?= $tahun ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- Tabel Alumni -->
      <div class="table-responsive rounded shadow-sm">
        <table id="alumniTable" class="table table-hover align-middle mb-0">
          <thead class="text-white text-center" style="background-color: #1E40AF;">
            <tr>
              <th style="min-width: 60px;">NO</th>
              <th style="min-width: 180px;">Nama Alumni</th>
              <th style="min-width: 180px;">NIM</th>
              <th style="min-width: 130px;">Tahun Lulus</th>
              <th style="min-width: 160px;">Fakultas</th>
              <th style="min-width: 160px;">Jurusan</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($dataAlumni as $a): ?>
              <tr>
                <td class="text-center fw-semibold"><?= $no++ ?></td>
                <td><?= $a['nama_alumni'] ?></td>
                <td><?= $a['NIM'] ?></td>
                <td class="text-center"><?= $a['tahun_lulus'] ?></td>
                <td><?= $a['fakultas'] ?></td>
                <td><?= $a['jurusan'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  #alumniTable tbody tr:hover {
    background-color: #DBEAFE !important;
    transition: background-color 0.3s ease;
  }

  #alumniTable tbody tr:nth-child(even) {
    background-color: #F1F5F9;
  }

  #alumniTable tbody tr:nth-child(odd) {
    background-color: #F8FAFC;
  }

  #alumniTable td, #alumniTable th {
    vertical-align: middle;
    border: none;
    padding: 12px 16px;
  }

  .dataTables_wrapper .dataTables_filter input,
  .dataTables_wrapper .dataTables_length select {
    border-radius: 8px;
    padding: 6px 12px;
    border: 1px solid #CBD5E1;
    margin: 0 5px;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button {
    background-color: transparent;
    color: #1D4ED8 !important;
    border: 1px solid transparent;
    border-radius: 6px;
    padding: 6px 12px;
    margin: 0 2px;
    font-weight: 500;
    transition: all 0.2s ease;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: #EFF6FF !important;
    border-color: #93C5FD;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background-color: #1D4ED8 !important;
    color: #fff !important;
    border-color: #1D4ED8;
    font-weight: bold;
  }

  .dataTables_info, .dataTables_length, .dataTables_filter, .dataTables_paginate {
    margin-top: 1rem;
  }

  .dt-buttons .btn {
    margin-bottom: 1rem;
    margin-right: 0.5rem;
  }
</style>

<!-- Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- DataTables Buttons -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

<script>
  $(document).ready(function() {
    var table = $('#alumniTable').DataTable({
      paging: true,
      pageLength: 10,
      lengthMenu: [10, 25, 50, 100],
      dom: 'Bfrtip',
      buttons: [
        {
          extend: 'pdfHtml5',
          text: '<i class="bi bi-file-earmark-pdf-fill me-1"></i> Export PDF',
          className: 'btn btn-danger',
          title: 'Data Alumni',
          exportOptions: {
            columns: ':visible'
          }
        }
      ],
      language: {
        paginate: {
          previous: "«",
          next: "»"
        },
        lengthMenu: "Tampilkan _MENU_ entri",
        zeroRecords: "Data tidak ditemukan",
        info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
        infoEmpty: "Data kosong",
        search: "🔍 Cari:"
      }
    });

    $('#filterTahun').on('change', function () {
      var selectedTahun = $(this).val();
      if (selectedTahun) {
        table.column(3).search('^' + selectedTahun + '$', true, false).draw();
      } else {
        table.column(3).search('').draw();
      }
    });
  });
</script>
