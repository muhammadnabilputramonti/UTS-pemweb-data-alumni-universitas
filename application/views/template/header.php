<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $judul; ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <!-- AOS Animation CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

  <style>
  body {
    background-color: #F8FAFC;
    font-family: 'Segoe UI', sans-serif;
  }

  .navbar {
    background-color: #1E3A8A !important;
    border-radius: 12px;
    padding: 0.8rem 1.5rem;
  }

  .navbar-brand,
  .nav-link,
  .btn-outline-success {
    color: #ffffff !important;
  }

  .nav-link {
    position: relative;
    font-weight: 500;
    transition: color 0.3s;
  }

  .nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 0%;
    height: 2px;
    background-color: #FCD34D;
    transition: width 0.3s ease-in-out;
  }

  

  .nav-link.active::after {
    width: 100%;
    animation: slide-in 0.4s ease forwards;
  }

  @keyframes slide-in {
    0% {
      width: 0%;
    }
    100% {
      width: 100%;
    }
  }

  .form-control:focus {
    border-color: #3B82F6;
    box-shadow: 0 0 0 0.15rem rgba(59, 130, 246, 0.25);
  }

  .main {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
  }

  .btn-outline-success {
    border-color: #FCD34D;
    color: #FCD34D;
  }

  .btn-outline-success:hover {
    background-color: #FCD34D;
    color: #1E3A8A;
  }

  .container {
    max-width: 90%;
  }
</style>

</head>

<body>

  <div class="container mt-4">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="<?= base_url(''); ?>">KAIST</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link <?= ($this->uri->segment(1) == '' ? 'active' : '') ?>" href="<?= base_url(''); ?>">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?= ($this->uri->segment(1) == 'alumni' ? 'active' : '') ?>" href="<?= base_url('alumni'); ?>">Alumni</a>
            </li>
          </ul>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    
  </div>

  <!-- Bootstrap JS (biar navbar bisa toggle di mobile) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
