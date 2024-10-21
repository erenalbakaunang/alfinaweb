<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content"><?= lang ('Surat Berkelakuan Baik') ?></h6>
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
                <div class="col-sm-4">
                    <label class="form-label"><?= lang ('Bahasa Dokumen') ?></label>
                    <select name="bahasa" class="form-control" data-selected="<?= $data['bahasa']??null ?>">
                        <option>English</option>
                        <option>Bahasa</option>
                    </select>
                </div>

                <div class="col-sm-8">
                    <label class="form-label"><?= lang ('Tujuan') ?></label>
                    <select name="tujuan" class="form-control" data-selected="<?= $data['tujuan']??null ?>">
                        <option></option>
                        <option value="Beasiswa"><?= lang ('Beasiswa') ?></option>
                        <option value="Pendaftaran Ormawa"><?= lang ('Pendaftaran Ormawa') ?></option>
                        <option value="Pendaftaran Mahasiswa Berprestasi"><?= lang ('Pendaftaran Mahasiswa Berprestasi') ?></option>
                        <option value="Pendaftaran Lomba"><?= lang ('Pendaftaran Lomba') ?></option>
                        <option value="Ekstensi ke Program Sarjana"><?= lang ('Ekstensi ke Program Sarjana') ?></option>
                        <option value="Pendaftaran Studi Magister"><?= lang ('Pendaftaran Studi Magister') ?></option>
                        <option value="Magang"><?= lang ('Magang') ?></option>
                        <option value="Pendaftaran Ketua Ormawa"><?= lang ('Pendaftaran Ketua Ormawa') ?></option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label"><?= lang ('Deskripsi Tujuan') ?></label>
                    <input type="text" name="deskripsi_tujuan" class="form-control" value="<?= $data['deskripsi_tujuan']??null ?>"/>
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