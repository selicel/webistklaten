<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjelasan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
         table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
        .domain {
            background-color: #d9d9d9;
            font-weight: bold;
        }
        .aspek {
            background-color: #f7f7f7;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Include the Navbar -->
    @include ('navbar')

    <!-- Accordion Content -->
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2>Evaluasi Penyelenggaraan Statistik Sektoral</h2>
        </div>

        <div class="accordion" id="accordionExample">
            <!-- Bab 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Penjelasan Umum
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem Ipsum.</strong> 
                        Statistik memiliki arti penting dalam penyusunan kebijakan pembangunan nasional. Kegiatan statistik dituntut untuk menghasilkan statistik yang berkualitas, cepat, dan bermanfaat sesuai kebutuhan pengguna. Oleh karena itu, diperlukan pelaksanaan Evaluasi Penyelenggaraan Statistik Sektoral (EPSS) untuk mengukur tingkat kematangan penyelenggaraan statistik pada instansi pemerintah.
                       <br> <br>EPSS adalah suatu proses penilaian yang dilakukan Badan Pusat Statistik (BPS) secara sistematis melalui verifikasi dan validasi informasi terhadap hasil penilaian mandiri untuk mengukur tingkat kematangan penyelenggaraan statistik sektoral. Secara detail, penyelenggaraan EPSS bertujuan untuk:
                        <ol style="list-style: lower-alpha"> 
                        <li>mengukur capaian kemajuan penyelenggaraan statistik sektoral pada instansi pusat dan pemerintah daerah;</li>
                        <li>meningkatkan kualitas penyelenggaraan statistik sektoral pada instansi pusat dan pemerintah daerah; dan</li>
                        <li>meningkatkan kualitas pelayanan publik di bidang statistik pada instansi pusat dan pemerintah daerah.</li>
                        </ol>
                        <br>Keluaran EPSS adalah Indeks Pembangunan Statistik (IPS), yaitu suatu indikator yang menggambarkan tingkat kematangan penyelenggaraan statistik sektoral di masing-masing instansi pemerintah penyelenggara kegiatan statistik sektoral. Indeks ini, selain disajikan secara umum, juga disajikan menurut domain dan aspek. IPS merupakan salah satu indikator penilaian Reformasi Birokrasi (RB) General untuk seluruh instansi pemerintah. Disamping itu, IPS juga dapat menjadi ukuran dalam pencapaian pelaksanaan Satu Data Indonesia dan penyelenggaraan urusan statistik di tingkat pemerintah daerah.
                    </div>
                </div>
            </div>

            <!-- Bab 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Dasar Hukum dan Cakupan Nilai
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Dasar Hukum.</strong>
                    <br>
                    <ol style="list-style: lower-alpha">
                        <li>Undang-Undang Nomor 16 Tahun 1997 tentang Statistik.</li>
                        <li>Peraturan Pemerintah Nomor 51 Tahun 1999 tentang Penyelenggaraan Statistik.</li>
                        <li>Peraturan Presiden Nomor 39 Tahun 2019 tentang Satu Data Indonesia.</li>
                        <li>Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 3 Tahun 2023 tentang Perubahan Atas Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 25 Tahun 2020 tentang Road Map Reformasi Birokrasi 2020–2024.</li>
                        <li>Peraturan Badan Pusat Statistik Nomor 3 Tahun 2022 tentang Evaluasi Penyelenggaraan Statistik Sektoral.</li>
                    </ol>
                    <br>
                    <strong>Cakupan nilai</strong>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Domain</th>
                                <th>Aspek & Indikator</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="domain" rowspan="2">Prinsip Satu Data Indonesia</td>
                                <td class="aspek">Standar Data Statistik</td>
                            </tr>
                            <tr>
                                <td>Standar Data Statistik, Metadata Statistik, Interoperabilitas Data, Kode Referensi Data/Induk</td>
                            </tr>
                            <tr>
                                <td class="domain" rowspan="3">Kualitas Data</td>
                                <td class="aspek">Relevansi</td>
                            </tr>
                            <tr>
                                <td>Relevansi Data, Identifikasi Kebutuhan, Akurasi Data, Ketepatan Waktu, Keterediaan Diseminasi</td>
                            </tr>
                            <tr>
                                <td>Ketersediaan Akses Media Penyebarluasan, Format Data, Keterbandingan Data, Konsistensi Penyebarluasan</td>
                            </tr>
                            <tr>
                                <td class="domain" rowspan="3">Proses Bisnis Statistik</td>
                                <td class="aspek">Perencanaan Data</td>
                            </tr>
                            <tr>
                                <td>Definisi Kebutuhan, Desain Statistik, Pengumpulan Data, Pemeriksaan Data, Penyebarluasan Data</td>
                            </tr>
                            <tr>
                                <td>Pemrosesan Data, Analisis Data, Diseminasi, Penyempurnaan Proses</td>
                            </tr>
                            <tr>
                                <td class="domain" rowspan="3">Kelembagaan</td>
                                <td class="aspek">Profesionalitas</td>
                            </tr>
                            <tr>
                                <td>Transparansi Informasi, Netralitas dan Objektivitas, SDM Statistik, Konfidensialitas Data</td>
                            </tr>
                            <tr>
                                <td>Kolaborasi dengan Forum SDI, Pengelolaan Wali Data, Tugas Validata</td>
                            </tr>
                            <tr>
                                <td class="domain" rowspan="2">Statistik Nasional</td>
                                <td class="aspek">Pemanfaatan Data Statistik</td>
                            </tr>
                            <tr>
                                <td>Penggunaan Statistik Dasar, Statistik Sektoral, Pemanfaatan Big Data, Literasi Statistik, Rekomendasi Kegiatan Statistik</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>

            <!-- Bab 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Tingkat Kematangan dan Kriteria dalam EPSS
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem Ipsum.</strong> 
                    <br> EPSS dilaksanakan pada seluruh instansi pusat, pemerintahan provinsi, dan pemerintahan kabupaten/kota yang menyelenggarakan kegiatan statistik sektoral. 
                    Penilaian EPSS dilakukan melalui berbagai tahapan, mencakup tahapan penilaian mandiri, penilaian dokumen, dan penilaian interview, serta penilaian visitas jika diperlukan.

                    <br> EPSS mengukurtingkat kematangan penyelenggaraan statistik sektoral pada instansi pemerintah yang terdiri dari 5 (lima) tingkat kematangan, yaitu:
                    <br style="text-align: center"> Tabel Kematangan dan Kriteria dalam EPSS
                    <table border="1" style="width:100%; border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th>Tingkat Kematangan</th>
                                <th>Kriteria</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Level 1: Rintisan</td>
                                <td>Proses penyelenggaraan statistik sektoral belum dilakukan oleh seluruh unit kerja</td>
                            </tr>
                            <tr>
                                <td>Level 2: Terkelola</td>
                                <td>Proses penyelenggaraan statistik sektoral telah dilakukan oleh seluruh unit kerja, namun masih menggunakan standar yang hanya berlaku di unit kerja itu sendiri</td>
                            </tr>
                            <tr>
                                <td>Level 3: Terdefinisi</td>
                                <td>Proses penyelenggaraan statistik sektoral telah diharmonisasi dan kemudian ditetapkan sebuah standar/pedoman oleh unit yang melaksanakan fingsu manajemen dan berlaku untuk sleuruh unit kerja dalam organisasi</td>
                            </tr>
                            <tr>
                                <td>Level 4: Terpadu dan Terukur</td>
                                <td>Proses penyelenggaraan statistik sektoral telah dilakukan secara terpadu dan telah berkontribusi pada kinerja organisasi. Kinerja penyelenggaran statistik sektoral dapat diukur melalui kegiatan review dan evaluasi pada setiap proses</td>
                            </tr>
                            <tr>
                                <td>Level 5: Optimum</td>
                                <td>Proses penyelenggaraan statistik sektoral telah dilakkan peningkatan kualitas secara berkesinambungan berdasarkan halis review dan evaluasi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>

            <!-- Bab 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Predikat Indeks Hasil EPSS
                    </button>
                </h2>

                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem Ipsum.</strong> EPSSmmenghasilkan Indeks Pembangunan Statistik dengan predikat sebagai berikut:
                    </div>
                    <table>
                        <thead>
                            <th>Nilai</th>
                            <th>Predikat</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
