<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content">Surat Berkelakuan Baik</h6>
    </div>

    <div class="col-lg-12 border">
        <form action="" class="form form-group" method="POST">
            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $loginData['nama'] ?>" readonly />
                </div>

                <div class="col-sm">
                <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?= $loginData['nim'] ?>" readonly />
                </div>

                <div class="col-sm">
                    <label class="form-label">Program Studi</label>
                    <input type="text" name="program_studi" class="form-control" value="<?= $loginData['program_studi'] ?>" readonly />
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="form-label">Bahasa Dokumen</label>
                    <select name="bahasa" class="form-control" data-selected="<?= $data['bahasa']??null ?>">
                        <option>English</option>
                        <option>Bahasa</option>
                    </select>
                </div>

                <div class="col-sm-8">
                    <label class="form-label">Tujuan</label>
                    <select name="tujuan" class="form-control" data-selected="<?= $data['tujuan']??null ?>">
                        <option></option>
                        <option value="Beasiswa">Beasiswa</option>
                        <option value="Pendaftaran Ormawa">Pendaftaran Ormawa</option>
                        <option value="Pendaftaran Mahasiswa Berprestasi">Pendaftaran Mahasiswa Berprestasi</option>
                        <option value="Pendaftaran Lomba">Pendaftaran Lomba</option>
                        <option value="Ekstensi ke Program Sarjana">Ekstensi ke Program Sarjana</option>
                        <option value="Pendaftaran Studi Magister">Pendaftaran Studi Magister</option>
                        <option value="Magang">Magang</option>
                        <option value="Pendaftaran Ketua Ormawa">Pendaftaran Ketua Ormawa</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Deskripsi Tujuan</label>
                    <input type="text" name="deskripsi_tujuan" class="form-control" value="<?= $data['deskripsi_tujuan']??null ?>"/>
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