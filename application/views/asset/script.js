const selectTahun = document.getElementById('tahunLulus');
const tahunSekarang = new Date().getFullYear();
const tahunAwal = 1980;

for (let tahun = tahunSekarang; tahun >= tahunAwal; tahun--) {
  const option = document.createElement('option');
  option.value = tahun;
  option.textContent = tahun;
  selectTahun.appendChild(option);
}

const dataFakultas = {
  "Fakultas Pertanian": [
    "Teknik Pertanian", "Teknologi Pangan", "Agribisnis", "Agroteknologi", "Proteksi Tanaman"
  ],
  "Fakultas Biologi": [
    "Biologi", "Mikrobiologi", "Biologi Terapan"
  ],
  "Fakultas Ekonomi dan Bisnis": [
    "Ekonomi Pembangunan", "Manajemen", "Akuntansi", "Pendidikan Ekonomi"
  ],
  "Fakultas Peternakan": [
    "Peternakan"
  ],
  "Fakultas Hukum": [
    "Hukum"
  ],
  "Fakultas Ilmu Sosial dan Ilmu Politik": [
    "Administrasi Publik", "Ilmu Politik", "Sosiologi", "Ilmu Komunikasi", "Hubungan Internasional"
  ],
  "Fakultas Kedokteran": [
    "Pendidikan Dokter", "Kedokteran Gigi"
  ],
  "Fakultas Teknik": [
    "Teknik Elektro", "Teknik Mesin", "Teknik Sipil", "Teknik Industri", "Teknik Geologi", "Informatika", "Teknik Komputer"
  ],
  "Fakultas Ilmu-ilmu Kesehatan": [
    "Kesehatan Masyarakat", "Ilmu Gizi", "Keperawatan", "Farmasi", "Pendidikan Jasmani"
  ],
  "Fakultas Ilmu Budaya": [
    "Sastra Indonesia", "Sastra Inggris", "Sastra Jepang", "Pendidikan Bahasa Indonesia", "Pendidikan Bahasa Inggris", "Pendidikan Bahasa Jepang"
  ],
  "Fakultas Matematika dan Ilmu Pengetahuan Alam": [
    "Matematika", "Fisika", "Kimia", "Statistika"
  ],
  "Fakultas Perikanan dan Ilmu Kelautan": [
    "Ilmu Kelautan", "Manajemen Sumberdaya Perairan", "Akuakultur"
  ]
};


  // Populate Fakultas
  const fakultasSelect = document.getElementById('fakultas');
  const jurusanSelect = document.getElementById('jurusan');

  for (const fakultas in dataFakultas) {
    const opt = document.createElement('option');
    opt.value = fakultas;
    opt.textContent = fakultas;
    fakultasSelect.appendChild(opt);
  }

  // Update jurusan ketika fakultas dipilih
  fakultasSelect.addEventListener('change', function () {
    const selectedFakultas = this.value;
    jurusanSelect.innerHTML = '<option value="">-- Pilih Jurusan --</option>';

    if (dataFakultas[selectedFakultas]) {
      dataFakultas[selectedFakultas].forEach(jurusan => {
        const opt = document.createElement('option');
        opt.value = jurusan;
        opt.textContent = jurusan;
        jurusanSelect.appendChild(opt);
      });
    }
  });

  $(document).ready(function () {
    $('#tabelAlumni').DataTable({
      "pageLength": 10,
      "lengthChange": false,
      "info": false,
      "ordering": true,
      "language": {
        "paginate": {
          "previous": "←",
          "next": "→"
        },
        "search": "Cari:"
      },
      "pagingType": "simple_numbers"
    });

    // Custom CSS for pagination size (7 buttons)
    $('head').append(`<style>
      .dataTables_paginate .paginate_button {
        padding: 0.4rem 0.75rem;
        margin: 0 2px;
        border-radius: 8px;
        background-color: #E0F2FE;
        color: #1E3A8A !important;
        font-weight: 500;
      }
      .dataTables_paginate .paginate_button.current {
        background-color: #1E3A8A !important;
        color: white !important;
        font-weight: bold;
      }
      .dataTables_filter input {
        border-radius: 6px;
        border: 1px solid #ddd;
        padding: 0.35rem 0.6rem;
        margin-left: 0.5em;
      }
    </style>`);
  });

 
  
  
  

  