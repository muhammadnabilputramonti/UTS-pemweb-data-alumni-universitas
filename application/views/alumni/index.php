<h2 class="text-center my-4 text-primary fw-bold">Data Alumni KAIST</h2>

<div class="container mb-5">
    <div class="row g-4">

        <!-- Kiri: Data Alumni -->
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h4 class="card-title mb-4 text-primary">📋 Data Alumni</h4>

                    <!-- Tombol Tambah -->
                    <div class="d-flex justify-content-end mb-3">
                        <a href="<?= base_url('alumni/tambah') ?>" class="btn btn-primary rounded-pill shadow-sm">
                            <i class="bi bi-plus-circle me-1"></i> Tambahkan LekKu
                        </a>
                    </div>

                    <!-- Pie Chart Fakultas -->
                    <h5 class="text-center mt-4 mb-3 text-secondary">🎓 Diagram Alumni Berdasarkan Fakultas</h5>
                    <canvas id="pieChartFakultas" style="max-height: 400px;"></canvas>
                </div>
            </div>
        </div>

        <!-- Kanan: Statistik Jurusan -->
        <div class="col-lg-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h4 class="card-title text-primary">📊 Statistik Alumni</h4>
                    <p class="text-muted mb-4">Distribusi alumni berdasarkan jurusan</p>
                    <canvas id="jurusanChart" style="max-height: 400px;"></canvas>

                    <a href="<?= base_url('alumni/detail') ?>" class="btn btn-outline-primary mt-4 rounded-pill">
                        <i class="bi bi-bar-chart-line"></i> Lihat Detail
                    </a>
                </div>
            </div>
        </div>

        

    </div>
</div>


<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- DataTables CDN -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Bootstrap Icon (untuk ikon di tombol) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Chart JS: Jurusan -->
<script>
const ctxJurusan = document.getElementById('jurusanChart').getContext('2d');
const jurusanChart = new Chart(ctxJurusan, {
    type: 'doughnut',
    data: {
        labels: [
            <?php foreach ($alumniByJurusan as $row) {
                echo "'".$row['jurusan']."',";
            } ?>
        ],
        datasets: [{
            label: 'Jumlah Alumni per Jurusan',
            data: [
                <?php foreach ($alumniByJurusan as $row) {
                    echo $row['total'].",";
                } ?>
            ],
            backgroundColor: [
                '#1E3A8A', '#3B82F6', '#06B6D4', '#A5B4FC', '#FCD34D',
                '#FBBF24', '#FDE68A', '#D1D5DB', '#93C5FD', '#E0F2FE'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    boxWidth: 20,
                    padding: 10
                }
            }
        }
    }
});
</script>


