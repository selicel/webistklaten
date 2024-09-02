<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPSS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="img/logo_epss.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>
    <!-- Include the Navbar -->
    @include('navbar')

    <!-- Content Below Navbar -->
    <div class="container mt-3">
        <h3>Dinas Kesehatan Kabupaten Klaten</h3>
        <!-- Your dashboard content goes here -->
    </div>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-danger">
                    <div class="card-header" style="font-size: 13.5px">Jumlah Indikator Belum Dinilai</div>
                    <div class="card-body">
                        <h2 class="card-title">0</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning">
                    <div class="card-header" style="font-size: 13.5px">Jumlah Indikator Sedang Diperiksa</div>
                    <div class="card-body">
                        <h2 class="card-title">0</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success">
                    <div class="card-header" style="font-size: 13.5px">Jumlah Indikator Dinilai</div>
                    <div class="card-body">
                        <h2 class="card-title">27</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-primary">
                    <div class="card-header" style="font-size: 13.5px">Jumlah Indikator Final</div>
                    <div class="card-body">
                        <h2 class="card-title">0</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Charts or other content here -->
        <div class="row" style="margin-top: 10px">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Nilai IPS Mandiri</div>
                    <div class="card-body">
                        <h2>3.3</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Nilai IPS Internal BPS</div>
                    <div class="card-body">
                        <h2>2.3</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graph (Using Chart.js for example) -->
        <div class="card" style="margin-top: 10px">
            <div class="card-header">Evaluasi Penyelenggaraan Statistik Sektoral Berdasarkan Penilaian</div>
            <div class="card-body">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('footer')

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
                        beginAtZero: true,
                        suggestedMin: 0, // Set minimum value to 0
                        suggestedMax: 5  // Set maximum value to 5
                    }
                }
            }
        });
    </script>
</body>
</html>
