<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content"><?= lang ('Surat Keterangan Mata Kuliah') ?></h6>
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
                    <label class="form-label"><?= lang ('Mata Kuliah') ?></label>
                    <select name="mata_kuliah" class="form-control" data-selected="<?= $data['mata_kuliah']??null ?>">
                        <option disabled selected><?= lang ('Pilih Opsi') ?></option>
                        <option value="Mata Kuliah 1"><?= lang ('Mata Kuliah 1') ?></option>
                        <option value="Mata Kuliah 2"><?= lang ('Mata Kuliah 2') ?></option>
                        <option value="Mata Kuliah 3"><?= lang ('Mata Kuliah 3') ?></option>
                    </select>
                </div>

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