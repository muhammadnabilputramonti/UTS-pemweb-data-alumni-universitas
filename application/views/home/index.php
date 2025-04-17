<div class="container mt-5">

    <!-- Perkenalan KAIST -->
    <div class="row mb-4" data-aos="fade-down">
        <div class="col-lg-12 text-center">
        <h2 class="fw-bold text-primary">🌟 Selamat Datang di <span class="text-dark">Dashboard Alumni KAIST</span></h2>
        <p class="lead mt-3 text-secondary">
            KAIST (Korea Advanced Institute of Science and Technology) adalah universitas riset terkemuka dunia
            yang berfokus pada teknologi dan inovasi. Di sini, kami menghargai setiap langkah para alumni yang telah berkontribusi di berbagai bidang di seluruh dunia.
        </p>
        <p class="text-muted">
            Temukan jejak karier, statistik alumni, serta kontribusi mereka dalam membangun masa depan yang lebih baik.
        </p>
        </div>
    </div>

    <!-- Gambar Banner -->
    <div class="row mb-5 justify-content-center" data-aos="zoom-in">
        <div class="col-auto" style="max-width: 70%; overflow:hidden;">
            <img src="https://ieltspresso.com/wp-content/uploads/2024/04/kaist2.jpg" class="img-fluid rounded-4 shadow-sm custom-img-width" alt="KAIST Campus">
        </div>
    </div>

    <!-- Statistik Alumni -->
    <div class="row text-center mb-5">
        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="100">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Total Alumni" style="height: 50px;" class="mb-2">
                    <h5 class="text-muted">Total Alumni</h5>
                    <h2 class="fw-bold text-primary"><?= $totalAlumni ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="200">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <img src="https://cdn-icons-png.flaticon.com/512/3079/3079052.png" alt="Fakultas" style="height: 50px;" class="mb-2">
                    <h5 class="text-muted">Fakultas</h5>
                    <h2 class="fw-bold text-success"><?= $jumlahFakultas ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="300">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <img src="https://cdn-icons-png.flaticon.com/512/3502/3502861.png" alt="Jurusan" style="height: 50px;" class="mb-2">
                    <h5 class="text-muted">Jurusan</h5>
                    <h2 class="fw-bold text-warning"><?= $jumlahJurusan ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="400">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="Tahun Lulus" style="height: 50px;" class="mb-2">
                    <h5 class="text-muted">Tahun Terakhir Lulus</h5>
                    <h2 class="fw-bold text-danger"><?= $tahunTerbaru -1 ?></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Ajakan dan Highlight -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
            <img src="https://media.suara.com/pictures/1600x840/2024/07/16/25436-kaist-tempat-kuliah-xaviera-putri.jpg"
                class="img-fluid rounded-4 shadow" alt="Students collaboration">
        </div>
        <div class="col-md-6" data-aos="fade-left">
            <h3 class="fw-bold text-primary">🎓 Menghubungkan Masa Lalu dan Masa Depan</h3>
            <p class="text-secondary mt-3">
                Website ini adalah jembatan yang menghubungkan alumni dengan komunitas KAIST secara global. Dengan data yang akurat dan antarmuka yang ramah pengguna, kami menghadirkan cara baru untuk menjelajahi sejarah dan kontribusi luar biasa dari para lulusan KAIST.
            </p>
            <ul class="list-unstyled text-secondary mt-3">
                <li>✅ Lihat statistik dan data alumni terkini</li>
                <li>✅ Temukan alumni berdasarkan fakultas dan jurusan</li>
                <li>✅ Dapatkan insight tentang tahun kelulusan dan persebaran alumni</li>
            </ul>
            <a href="<?= base_url('alumni') ?>" class="btn btn-primary mt-3">Lihat Data Alumni</a>
        </div>
    </div>
</div>
