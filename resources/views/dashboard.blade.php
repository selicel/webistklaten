<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        .card-header {
            font-weight: bold;
        }
        .card {
            margin-bottom: 20px;
        }
        .dashboard-header {
            background-color: #003366;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
        }
        .dashboard-header h1 {
            margin: 0;
        }
        .nav-link {
            color: white !important;
        }
    </style>
</head>
<body>

    <!-- Dashboard Header -->
    <div class="dashboard-header">
        <div class="container">
            <h1>EPSS</h1>
        </div>
    </div>

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
                    <div class="card-header">Nilai Kabupaten/Kota</div>
                    <div class="card-body">
                        <h2>3.3</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Nilai Provinsi</div>
                    <div class="card-body">
                        <h2>2.3</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graph (Using Chart.js for example) -->
        <div class="card">
            <div class="card-header">Penilaian Pelayanan Publik Berdasarkan Kabupaten/Kota</div>
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
                labels: ['Cilacap', 'Banyumas', 'Purbalingga', 'Banjarnegara', 'Kebumen', 'Purworejo', 'Wonosobo', 'Magelang', 'Boyolali', 'Klaten', 'Sukoharjo', 'Wonogiri', 'Karanganyar', 'Sragen', 'Grobogan', 'Blora', 'Rembang', 'Pati', 'Kudus', 'Jepara', 'Demak', 'Semarang', 'Temanggung', 'Kendal', 'Batang', 'Pekalongan', 'Pemalang', 'Tegal', 'Brebes'],
                datasets: [{
                    label: 'Nilai Kab/Kota',
                    data: [3, 2.5, 3.2, 3.6, 4, 2.8, 3.1, 3.5, 3.8, 4, 3.7, 3.4, 4, 3.6, 4.1, 4.3, 3.9, 4.2, 4.4, 4.5, 4.6, 4.7, 4.8, 4.9, 5, 4.5, 4.3, 4.7],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Nilai Provinsi',
                    data: [2, 2.5, 2.1, 2.3, 2.8, 2.6, 2.4, 2.2, 2.7, 3, 2.9, 2.8, 3.1, 2.9, 3.3, 3.5, 3.2, 3.1, 3.3, 3.4, 3.2, 3.1, 3.4, 3.5, 3.7, 3.4, 3.6, 3.9],
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
