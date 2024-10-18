<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content">Surat Pengantar Kerja Praktek - Magang</h6>
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
                <div class="col-sm">
                    <label class="form-label">Bahasa Dokumen</label>
                    <select name="bahasa" class="form-control" data-selected="<?= $data['bahasa']??null ?>">
                        <option value="Bahasa">Bahasa</option>
                        <option value="English">English</option>
                    </select>
                </div>

                <div class="col-sm">
                    <label class="form-label">Topik</label>
                    <input type="text" name="topik" class="form-control" value="<?= $data['topik']??null ?>"/>
                </div>

                <div class="col-sm"></div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Anggota</label>
                    <select name="anggota" class="form-control" data-selected="<?= $data['anggota']??null ?>">
                        <option></option>
                        <option value="Untuk Asuransi Kesehatan">Untuk Asuransi Kesehatan</option>
                        <option value="Untuk Visa">Untuk Visa</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Tanggal Mulai</label>
                    <div class="input-group">
                        <input type="text" name="tanggal_mulai" class="form-control datepicker" value="<?= $data['tanggal_mulai']??null ?>"/>
                        <span class="input-group-text dpspan">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>
                </div>

                <div class="col-sm">
                    <label class="form-label">Tanggal Selesai</label>
                    <div class="input-group">
                        <input type="text" name="tanggal_selesai" class="form-control datepicker" value="<?= $data['tanggal_selesai']??null ?>"/>
                        <span class="input-group-text dpspan">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>
                </div>

                <div class="col-sm"></div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" value="<?= $data['nama_perusahaan']??null ?>"/>
                </div>

                <div class="col-sm">
                    <label class="form-label">Nama Divisi</label>
                    <input type="text" name="nama_divisi" class="form-control" value="<?= $data['nama_divisi']??null ?>"/>
                    <small>Contoh: Divisi SDM</small>
                </div>

                <div class="col-sm">
                    <label class="form-label">Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" class="form-control" value="<?= $data['nama_jabatan']??null ?>"/>
                    <small>Contoh: Manager</small>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Alamat Perusahaan</label>
                    <input name="alamat_perusahaan" class="form-control" value="<?= $data['alamat_perusahaan']??null ?>"></input>
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