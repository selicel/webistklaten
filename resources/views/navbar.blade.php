<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPSS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="img/logo_epss2.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <style>
      /* Custom styles */
.navbar-custom {
    background-color: #103863; /* Adjust this to match the blue color */
}

.navbar-custom .navbar-brand,
.navbar-custom .navbar-nav .nav-link {
    color: white;
}

.navbar-custom .navbar-nav .dropdown-menu {
    background-color: white;
}

.navbar-custom .navbar-nav .dropdown-menu .dropdown-item {
    color: #007bff;
}

.navbar-custom .navbar-nav .dropdown-menu .dropdown-item:hover {
    background-color: #f8f9fa;
}

/* Centering navbar items */
.navbar-custom .navbar-nav {
    margin-left: 75px;
    margin-right: 75px;
}

/* Full height hover effect with border-radius */
.navbar-nav .nav-item {
    position: relative;
    height: 100%; /* Ensure nav-item takes the full height of the navbar */
}

.navbar-nav .nav-item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%; /* Full height of nav-item */
    background-color: transparent;/* Adjust for curvature */
    z-index: -1;
    transition: background-color 0.3s ease, border-radius 0.3s ease;
}

.navbar-nav .nav-item:hover::before,
.navbar-nav .nav-item.active::before {
    background-color: #FC6843;
    height: 100%;
}


        /* Adjust margin-top for body to avoid content overlap */
        body {
            padding-top: 56px; /* Adjust if navbar height changes */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <a class="navbar-brand" href="dashboard">
            <img src="{{ asset("img/logo2.png") }}" alt="EPSS Logo" width="90" height="35">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item" id="nav-dashboard">
                    <a class="nav-link" href="dashboard">Beranda</a>
                </li>
                <li class="nav-item dropdown" id="nav-penilaian">
                    <a class="nav-link dropdown-toggle" href="penilaian" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Penilaian
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="PrinsipSDI">Prinsip Satu Data Indonesia</a>
                        <a class="dropdown-item" href="KualitasData">Kualitas Data</a>
                        <a class="dropdown-item" href="ProsesBisnisStatistik">Proses Bisnis Statistik</a>
                        <a class="dropdown-item" href="Kelembagaan">Kelembagaan</a>
                        <a class="dropdown-item" href="StatistikNasional">Statistik Nasional</a>
                    </div>
                </li>
                <li class="nav-item" id="nav-rekap">
                    <a class="nav-link" href="rekap">Laporan</a>
                </li>
                <li class="nav-item" id="nav-penjelasan">
                    <a class="nav-link" href="penjelasan">Panduan Penggunaan</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown" id="nav-profil">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hi, Dinas Kesehatan
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="profil">Profile</a>
                        <a class="dropdown-item" href="login">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-item');
            const currentPath = window.location.pathname.split('/').pop();
            
            navLinks.forEach(link => {
                const linkPath = link.querySelector('a').getAttribute('href');
                if (linkPath === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>