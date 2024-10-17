<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content">Surat Aktif Mahasiswa</h6>
    </div>

    <div class="col-lg-12 border">
        <form action="" class="form form-group" method="POST">
            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Bahasa Dokumen</label>
                    <select name="bahasa" class="form-control" data-selected="<?= $data['bahasa']??null ?>">
                        <option value="Bahasa">Bahasa</option>
                        <option value="English">English</option>
                    </select>
                </div>

                <div class="col-sm">
                    <label class="form-label">Tujuan</label>
                    <select name="tujuan" class="form-control" data-selected="<?= $data['tujuan']??null ?>">
                        <option></option>
                        <option value="Untuk Asuransi Kesehatan">Untuk Asuransi Kesehatan</option>
                        <option value="Untuk Visa">Untuk Visa</option>
                        <option value="Untuk Kehilangan KTM">Untuk Kehilangan KTM</option>
                        <option value="Untuk Kebutuhan Orang Tua">Untuk Kebutuhan Orang Tua</option>
                        <option value="Untuk Lomba Internasional">Untuk Lomba Internasional</option>
                        <option value="Untuk Lomba Nasional">Untuk Lomba Nasional</option>
                        <option value="Untuk Beasiswa">Untuk Beasiswa</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="col-sm">
                    <label class="form-label">Lainnya</label>
                    <input type="text" name="Lainnya" class="form-control" value="<?= $data['Lainnya']??null ?>" />
                    <small>Kosongkan jika pilihan lainnya tidak dipilih</small>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $loginData['nama'] ?>" readonly />
                </div>

                <div class="col-sm">
                <label class="form-label">NIM</label>
                    <input type="text" name="num" class="form-control" value="<?= $loginData['nim'] ?>" readonly />
                </div>

                <div class="col-sm">
                    <label class="form-label">Program Studi</label>
                    <input type="text" name="program_studi" class="form-control" value="<?= $loginData['program_studi'] ?>" readonly />
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $loginData['alamat'] ?>" readonly />
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Nama Orang Tua</label>
                    <input type="text" name="Nama_Ortu" class="form-control" value="<?= $data['Nama_Ortu']??null ?>" />
                </div>

                <div class="col-sm">
                    <label class="form-label">Pekerjaan Orang Tua</label>
                    <input type="text" name="Pekerjaan_Ortu" class="form-control" value="<?= $data['Pekerjaan_Ortu']??null ?>" />
                </div>

                <div class="col-sm">
                    <label class="form-label">Nomor Induk Pegawai Orang Tua</label>
                    <input type="text" name="Nip_Ortu" class="form-control" value="<?= $data['Nip_Ortu']??null ?>" />
                    <small>Kosongkan jika tidak ada nik orang tua</small>
                </div>
            </div>

            <div class="form-group fgb">
                <button class="btn btn-warning" type="submit">Simpan</button>
                <a href="">
                    <button class="btn btn-danger" type="button">Batalkan</button>
                </a>
            </div>
        </form>
    </div>
</div>