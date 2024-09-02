<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Penilaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ensure the body and html take full height */
        html, body {
            height: 100%;
        }

        /* Set up flexbox on the body */
        body {
            display: flex;
            flex-direction: column;
        }

        /* The main content should take up all remaining space */
        .content {
            flex: 1;
        }

        /* Footer styling */
        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Include the Navbar -->
    @include ('navbar')

    <!-- Main content area with flex-grow -->
    <div class="container mt-5 content">
        <div class="text-center mb-4">
            <h2>Rekap Penilaian Indeks Pembangunan Statistik</h2>
        </div>

        <div class="card">
            <div class="card-header">
                Rekap Penilaian tiap aspek
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Penilaian</th>
                            <th>Kabupaten/Kota</th>
                            <th>Pelayanan</th>
                            <th>Prinsip SDI</th>
                            <th>Kualitas Data</th>
                            <th>Proses Bisnis Statistik</th>
                            <th>Kelembagaan</th>
                            <th>Statistik Nasional</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BPS</td>
                            <td>Kabupaten Klaten</td>
                            <td>1.55</td>
                            <td>1.20</td>
                            <td>3.40</td>
                            <td>3.70</td>
                            <td>4.35</td>
                            <td>1.50</td>
                            <td>2.30</td>
                        </tr>
                        <tr>
                            <td>Mandiri</td>
                            <td>OPD</td>
                            <td>2.22</td>
                            <td>3.10</td>
                            <td>3.98</td>
                            <td>4.40</td>
                            <td>4.35</td>
                            <td>3.00</td>
                            <td>3.30</td>
                        </tr>
                    </tbody>
                </table>

                <div class="text-center mt-4">
                    <button class="btn btn-primary">
                        <i class="bi bi-download"></i> Download Data
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
