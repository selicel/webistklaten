<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .content {
            min-height: 250px;
            padding: 15px;
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
        }
    </style>
</head>
<body>
    @include('navbar')

    <!-- Main content -->
    <section class="content" style="width=100%">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- <form name="form_ubah" id="form_ubahpelayanan" action="https://webapps.bps.go.id/jateng/sinergiev/index.php/penilaian/saveupdatenilai" method="post" enctype="multipart/form-data" onload="getindikator()"> -->
                        <form name="form_ubah" id="form_ubahpelayanan">
                        <!-- <input type="hidden" name="tanggal" id="tanggal" value="2024-09-03">
                            <input type="hidden" name="status" id="status" value="Sedang Dibuat">
                            <input type="hidden" name="statusawal" id="statusawal" value="Sedang Dibuat">
                            <input type="hidden" name="id_aspek" id="id_aspek" value="1">
                            <input type="hidden" name="id_indikator" id="id_indikator" value="7">
                            <input type="hidden" name="id_transaksi" id="id_transaksi" value="277">
                            <input type="hidden" name="create" id="create" value="2024-06-10"> -->
                            <label><strong>Aspek</strong></label><textarea name="nama_indikator" id="nama_indikator" class="form-control" rows="1" readonly>Prinsip Satu Data Indonesia</textarea> <!-- Ambil database -->
                            <label><strong>Nama Indikator</strong></label><textarea name="nama_indikator" id="nama_indikator" class="form-control" rows="1" readonly>Tingat Kematangan Penerapan Standar Data Statistik (SDS)</textarea> <!-- Ambil database -->
                            <label><strong>Tingkat Kematangan</strong></label><br>
                            <textarea name="tingkat_kematangan" id="tingkat_kematangan" class="form-control" rows="7" readonly>Keterangan nilai tingkat kematangan:
1. Rintisan (Proses penyelenggaraan statistik sektoral belum dilakukan oleh seluruh unit kerja)
2. Terkelola (Proses penyelenggaraan statistik sektoral telah dilakukan oleh seluruh unit kerja, namun masih menggunakan standar yang hanya berlaku di unit kerja itu sendiri)
3. Terdefinisi (Proses penyelenggaraan statistik sektoral telah diharmonisasi dan kemudian ditetapkan sebuah standar/pedoman oleh unit yang melaksanakan fungsi manajemen dan berlaku untuk seluruh unit kerja dalam organisasi)
4. Terpadu dan Terukur (Proses penyelenggaraan statistik sektoral telah dilakukan secara terpadu dan telah berkontribusi pada kinerja organisasi. Kinerja penyelenggaraan statistik sektoral dapat diukur melalui kegiatan review dan evaluasi pada setiap proses)
5. Optimum (Proses penyelenggaraan statistik sektoral telah dilakukan peningkatan kualitas secara berkesinambungan berdasarkan hasil review dan evaluasi)</textarea>
                                                <input type="radio" name="kondisi" id="0" value="1"  /><label for="0">&nbsp; 1,00</label><br>
                                                <input type="radio" name="kondisi" id="0" value="2"  /><label for="0">&nbsp; 2,00</label><br>
                                                <input type="radio" name="kondisi" id="0" value="3"  /><label for="0">&nbsp; 3,00</label><br>
                                                <input type="radio" name="kondisi" id="0" value="4"  /><label for="0">&nbsp; 4,00</label><br>
                                                <input type="radio" name="kondisi" id="0" value="5"  /><label for="0">&nbsp; 5,00</label><br>
                            <label>Jumlah Bukti Dukung</label><input type="text" class="form-control" name="bukti_dukung" id="bukti_dukung" required>
                            <label>Tautan Bukti Dukung</label><input type="url" class="form-control" name="link_bukti_dukung" id="link_bukti_dukung" required>
                            <label>Catatan Penilaian</label><input type="text" name="catatan" id="catatan" class="form-control">
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary">Simpan</button>
                  <a href="javascript: history.go(-1)" class="btn btn-default" >Tutup</a>
                  <!--<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>-->
                </div>
                  </form>
              </div>      </section>

    @include('footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
