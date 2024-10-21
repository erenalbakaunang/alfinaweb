<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content"><?= lang ('Surat Pengantar TA') ?></h6>
    </div>

    <div class="col-lg-12 border">
        <form action="" class="form form-group" method="POST">
            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label"><?= lang ('Nama') ?></label>
                    <input type="text" name="nama" class="form-control" value="<?= $loginData['nama'] ?>" readonly />
                </div>

                <div class="col-sm">
                <label class="form-label"><?= lang ('NIM') ?></label>
                    <input type="text" name="nim" class="form-control" value="<?= $loginData['nim'] ?>" readonly />
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Program Studi') ?></label>
                    <input type="text" name="program_studi" class="form-control" value="<?= $loginData['program_studi'] ?>" readonly />
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label"><?= lang ('Bahasa Dokumen') ?></label>
                    <select name="bahasa" class="form-control" data-selected="<?= $data['bahasa']??null ?>">
                        <option value="Bahasa">Bahasa</option>
                        <option value="English">English</option>
                    </select>
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Tipe Penelitian') ?></label>
                    <select name="tipe_penelitian" class="form-control" data-selected="<?= $data['tipe_penelitian']??null ?>">
                        <option disabled selected><?= lang ('Pilih Opsi') ?></option>
                        <option value="Disertasi"><?= lang ('Disertasi') ?></option>
                        <option value="Tesis"><?= lang ('Tesis') ?></option>
                        <option value="Tugas Akhir"><?= lang ('Tugas Akhir') ?></option>
                        <option value="Skripsi"><?= lang ('Skripsi') ?></option>
                    </select>
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Topik') ?></label>
                    <input type="text" name="topik" class="form-control" value="<?= $data['topik']??null ?>"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label"><?= lang ('Anggota') ?></label>
                    <select name="anggota" class="form-control" data-selected="<?= $data['anggota']??null ?>">
                        <option disabled selected><?= lang ('Pilih Opsi') ?></option>
                        <option value="Anggota 1"><?= lang ('Anggota 1') ?></option>
                        <option value="Anggota 2"><?= lang ('Anggota 2') ?></option>
                        <option value="Anggota 3"><?= lang ('Anggota 3') ?></option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label"><?= lang ('Nama Perusahaan') ?></label>
                    <input type="text" name="nama_perusahaan" class="form-control" value="<?= $data['nama_perusahaan']??null ?>"/>
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Nama Divisi') ?></label>
                    <input type="text" name="nama_divisi" class="form-control" value="<?= $data['nama_divisi']??null ?>"/>
                    <small><?= lang ('Contoh: Divisi SDM') ?></small>
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Nama Jabatan') ?></label>
                    <input type="text" name="nama_jabatan" class="form-control" value="<?= $data['nama_jabatan']??null ?>"/>
                    <small><?= lang ('Contoh: Manager') ?></small>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label"><?= lang ('Alamat Perusahaan') ?></label>
                    <input name="alamat_perusahaan" class="form-control" value="<?= $data['alamat_perusahaan']??null ?>"></input>
                </div>
            </div>

            <div class="form-group fgb">
                <button class="btn btn-warning" type="submit"><?= lang ('Simpan') ?></button>
                <a href="">
                    <button class="btn btn-danger" type="button"><?= lang ('Batalkan') ?></button>
                </a>
            </div>
        </form>
    </div>
</div>