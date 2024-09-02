<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPSS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="img/logo_epss.png" rel="icon">
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
        /* Hover */
        .navbar-nav .nav-item:hover,
        .navbar-nav .nav-item.active{
            background-color: #FC6843;
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
            <img src="img/logo.png" alt="EPSS Logo" width="90" height="35">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="penilaian" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Penilaian
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="prinsipSDI">Prinsip Satu Data Indonesia</a>
                        <a class="dropdown-item" href="kualitasData">Kualitas Data</a>
                        <a class="dropdown-item" href="#">Proses Bisnis Statistik</a>
                        <a class="dropdown-item" href="#">Kelembagaan</a>
                        <a class="dropdown-item" href="#">Statistik Nasional</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rekap">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="penjelasan">Panduan Penggunaan</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hi, OPD
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="login">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.forEach(item => item.closest('.nav-item').classList.remove('active'));
                    this.closest('.nav-item').classList.add('active');
                });
            });
        });
    </script>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
