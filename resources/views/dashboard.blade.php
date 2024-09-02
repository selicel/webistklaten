<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                margin-left: 125px;
                margin-right: 75px;
            }
        </style>
    </head>
<body>
<!-- Include the Navbar -->
@include ('navbar')

<!-- Content Below Navbar -->
<div class="container mt-3">
    <h1>Dashboard</h1>
    <!-- Your dashboard content goes here -->
</div>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-danger">
                    <div class="card-header">Jumlah Indikator Belum dinilai</div>
                    <div class="card-body">
                        <h2 class="card-title">0</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning">
                    <div class="card-header">Jumlah Indikator Sedang diperiksa</div>
                    <div class="card-body">
                        <h2 class="card-title">0</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success">
                    <div class="card-header">Jumlah Indikator Dinilai</div>
                    <div class="card-body">
                        <h2 class="card-title">27</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-primary">
                    <div class="card-header">Jumlah Indikator Final</div>
                    <div class="card-body">
                        <h2 class="card-title">0</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Charts or other content here -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Nilai Mandiri</div>
                    <div class="card-body">
                        <h2>3.3</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Nilai Internal BPS</div>
                    <div class="card-body">
                        <h2>2.3</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graph (Using Chart.js for example) -->
        <div class="card">
            <div class="card-header">Evaluasi Penyelenggaraan Statistik Sektoral Berdasarkan Penilaian</div>
            <div class="card-body">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
                datasets: [{
                    label: 'Nilai Mandiri',
                    data: [3, 2.5, 3.2, 3.6, 4, 2.8, 3.1, 3.5, 3.8, 4, 3.7, 3.4],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Nilai Internal',
                    data: [2, 2.5, 2.1, 2.3, 2.8, 2.6, 2.4, 2.2, 2.7, 3, 2.9, 2.8],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
