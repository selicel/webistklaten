<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Penilaian EPSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="img/logo_epss.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <style>
        html, body {
            height: 100%;
            margin: 50;
        }
    
        .content {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
    
        footer {
            margin-bottom: 0;
        }
    </style>
    
    
</head>

<body>

<!-- Include the Navbar -->
@include ('navbar')

    <div class="container mt-5">
        <section class="content-header">
            <h2>Proses Bisnis Statistik</h2>
        </section>

        <div class="card card-body" style="height: max-content">
            <div class="table-responsive">  
            <table class="table" id="tabel-pelayanan">
                <thead>
                    <tr>
                        <th style="width:5%">No</th>
                        <!--<th style="width:5%">Kode</th> -->
                        <th style="width:30%">Aspek</th>
                        <th style="width:30%">Indikator</th>
                        <th style="width:15%">Tautan Bukti Dukung</th>
                        <th style="width:7%">Nilai Mandiri</th>
                        <th style="width:7%">Nilai BPS</th>
                        <th style="width:7%">Score BPS</th>
                        <th style="width:7%">Status</th>
                        <th style="width:10%" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr kode="1">
                        <td>1</td>
                        <td>Perencanaan Data</td>
                        <td>Tingkat Kematangan Pendefinisian Kebutuhan Statistik</td>
                        <td><a href="#"  target="_blank" class="btn btn-success"> <i class="fa fa-eye text-white" title="Bukti Dukung"> </i> Lihat</a></td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>			
                        <td><font color="32cd32">Dinilai </font></td>	
                        <td><a href="InputNilai" ><i class="bi bi-pen" title="Input Nilai"></i></a></td>
                        <!-- <td><a href="#" onclick="return f_kirim('271');"><i class="fa fa-send text-green" title="Kirim"></i></a></td> -->
                    </tr>
                    <tr kode="2">
                        <td></td>
                        <td></td>
                        <td>Tingkat Kematangan Desain Statistik</td>
                        <td><a href="#"  target="_blank" class="btn btn-success"> <i class="fa fa-eye text-white" title="Bukti Dukung"> </i> Lihat</a></td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>			   
                        <td><font color="32cd32">Dinilai </font></td>	
                        <td><a href="InputNilai" ><i class="bi bi-pen" title="Input Nilai"></i></a></td>
                        <!-- <td><a href="#" onclick="return f_kirim('272');"><i class="fa fa-send text-green" title="Kirim"></i></a></td> -->
                    </tr>
                    <tr kode="3">
                        <td></td>
                        <td></td>
                        <td>Tingkat Kematangan Penyiapan Instrumen</td>
                        <td><a href=#"  target="_blank" class="btn btn-success"> <i class="fa fa-eye text-white" title="Bukti Dukung"> </i> Lihat</a></td>
                        <td>3</td>
                        <td>3</td>
                        <td>0.21</td>			
                        <td><font color="32cd32">Dinilai </font></td>	
                        <td><a href="InputNilai" ><i class="bi bi-pen" title="Input Nilai"></i></a></td>
                        <!-- <td><a href="#" onclick="return f_kirim('273');"><i class="fa fa-send text-green" title="Kirim"></i></a></td> -->
                    </tr>
                    <tr kode="4">
                        <td>2</td>
                        <td>Pengumpulan Data</td>
                        <td>Tingkat Kematangan Proses Pengumpulan Data/Akuisisi Data</td>
                        <td><a href="#"  target="_blank" class="btn btn-success"> <i class="fa fa-eye text-white" title="Bukti Dukung"> </i> Lihat</a></td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>			
                        <td><font color="32cd32">Dinilai </font></td>	
                        <td><a href="InputNilai" ><i class="bi bi-pen" title="Input Nilai"></i></a></td>
                        <!-- <td><a href="#" onclick="return f_kirim('274');"><i class="fa fa-send text-green" title="Kirim"></i></a></td>     -->
                    </tr>
                    <tr kode="5">
                        <td>3</td>
                        <td>Pemeriksaan Data</td>
                        <td>Tingkat Kematangan Pengolahan Data</td>
                        <td><a href="#"  target="_blank" class="btn btn-success"> <i class="fa fa-eye text-white" title="Bukti Dukung"> </i> Lihat</a></td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>			
                        <td><font color="32cd32">Dinilai </font></td>	
                        <td><a href="InputNilai" ><i class="bi bi-pen" title="Input Nilai"></i></a></td>
                        <!-- <td><a href="#" onclick="return f_kirim('274');"><i class="fa fa-send text-green" title="Kirim"></i></a></td>     -->
                    </tr>
                    <tr kode="6">
                        <td></td>
                        <td></td>
                        <td>Tingkat Kematangan Analisis Data</td>
                        <td><a href="#"  target="_blank" class="btn btn-success"> <i class="fa fa-eye text-white" title="Bukti Dukung"> </i> Lihat</a></td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>			
                        <td><font color="32cd32">Dinilai </font></td>	
                        <td><a href="InputNilai" ><i class="bi bi-pen" title="Input Nilai"></i></a></td>
                        <!-- <td><a href="#" onclick="return f_kirim('274');"><i class="fa fa-send text-green" title="Kirim"></i></a></td>     -->
                    </tr>
                    <tr kode="7">
                        <td>4</td>
                        <td>Penyebarluasan Data</td>
                        <td>Tingkat Kematangan Diseminasi Data</td>
                        <td><a href="#"  target="_blank" class="btn btn-success"> <i class="fa fa-eye text-white" title="Bukti Dukung"> </i> Lihat</a></td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>			
                        <td><font color="32cd32">Dinilai </font></td>	
                        <td><a href="InputNilai" ><i class="bi bi-pen" title="Input Nilai"></i></a></td>
                        <!-- <td><a href="#" onclick="return f_kirim('274');"><i class="fa fa-send text-green" title="Kirim"></i></a></td>     -->
                    </tr>
                </tbody>
            </table>
            </div>

        </div>
    </div>

    <!-- Footer -->
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
