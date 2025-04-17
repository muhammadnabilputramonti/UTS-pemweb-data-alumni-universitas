<div class="container my-5" style="max-width: 700px;">
  <div class="card shadow-lg border-0">
    <div class="card-body">
      <h3 class="card-title text-center mb-4 text-primary fw-bold">Tambah Data Alumni</h3>

      <?php if(validation_errors()): ?>
        <div class="alert alert-danger rounded">
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>

      <form action="" method="post" class="needs-validation" novalidate>

        <div class="mb-3">
          <label for="nama_alumni" class="form-label fw-semibold">Nama Alumni</label>
          <input type="text" name="nama_alumni" id="nama_alumni" class="form-control" placeholder="Christiano Ronaldo" required>
        </div>

        <div class="mb-3">
          <label for="NIM" class="form-label fw-semibold">NIM</label>
          <input type="text" name="NIM" id="NIM" class="form-control" placeholder="H1D000000" required>
        </div>

        <div class="mb-3">
          <label for="fakultas" class="form-label fw-semibold">Fakultas</label>
          <select id="fakultas" name="fakultas" onchange="updateJurusan()" class="form-select" required>
              <option value="">Pilih Fakultas</option>
              <!-- Tambahkan data fakultas dari controller -->
          </select>
        </div>

        <div class="mb-3">
          <label for="jurusan" class="form-label fw-semibold">Jurusan</label>
          <select id="jurusan" name="jurusan" class="form-select" required>
              <option value="">Pilih Jurusan</option>
              <!-- Dinamis berdasarkan fakultas -->
          </select>
        </div>

        <div class="mb-3">
          <label for="tahunLulus" class="form-label fw-semibold">Tahun Lulus</label>
          <select id="tahunLulus" name="tahun_lulus" class="form-select" required>
              <option value="">Pilih Tahun</option>
              <!-- Tahun di-generate oleh JS -->
          </select>
        </div>

        <div class="d-grid mt-4 mb-2">
          <button type="submit" name="tambah" class="btn btn-primary btn-lg rounded-pill">💾 Simpan</button>
        </div>

        <!-- Tombol kembali -->
        <div class="text-center mt-3">
          <a href="<?= base_url('alumni'); ?>" class="btn btn-outline-secondary rounded-pill">
            🔙 Kembali ke Data Alumni
          </a>
        </div>

      </form>
    </div>
  </div>
</div>

<script>
  // Isi dropdown tahun lulus (2000–tahun sekarang)
  const tahunLulusSelect = document.getElementById("tahunLulus");
  const currentYear = new Date().getFullYear();

  for (let year = currentYear; year >= 2000; year--) {
    const option = document.createElement("option");
    option.value = year;
    option.textContent = year;
    tahunLulusSelect.appendChild(option);
  }
</script>
