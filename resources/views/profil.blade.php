<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPSS - Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="img/logo_epss.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="css/app.css">
    <style>
        body {
            display: grid;
            grid-template-rows: 1fr auto;
            min-height: 100vh;
            margin: 0;
    }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    @include('navbar')

    <!-- Main Content -->
    <div class="container mt-3">
        <h3>Profil Pengguna</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Informasi Profil</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="opdName">Nama OPD</label>
                                <input type="text" class="form-control" id="opdName" value="Dinas Kesehatan Kabupaten Klaten" readonly>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" value="Jl. Pemuda No.15, Klaten" readonly>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" value="admin123" readonly>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" value="********" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Change Password Section -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Ubah Password</div>
                    <div class="card-body">
                        <form id="changePasswordForm">
                            <div class="form-group">
                                <label for="currentPassword">Password Saat Ini</label>
                                <input type="password" class="form-control" id="currentPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="newPassword">Password Baru</label>
                                <input type="password" class="form-control" id="newPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="confirmPassword" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('footer')

    <!-- Optional JavaScript -->
    <script>
        document.getElementById('changePasswordForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var currentPassword = document.getElementById('currentPassword').value;
            var newPassword = document.getElementById('newPassword').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            if (newPassword !== confirmPassword) {
                alert('Password baru dan konfirmasi tidak cocok.');
                return;
            }

            // Add password update logic here (e.g., sending to the server)
            alert('Password berhasil diubah!');
        });
    </script>
</body>
</html>