<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content">Surat Tugas Kompetisi</h6>
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
                    <label class="form-label">Nama Lomba</label>
                    <input type="text" name="Nama_lomba" class="form-control" value="<?= $data['Nama_lomba']??null ?>"/>
                </div>

                <div class="col-sm">
                    <label class="form-label">Tanggal Kompetisi</label>
                    <div class="input-group">
                        <input type="text" name="tanggal_kompetisi" class="form-control datepicker" value="<?= $data['tanggal_kompetisi']??null ?>"/>
                        <span class="input-group-text dpspan">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="form-label">Jenis Kompetisi</label>
                    <select name="jenis_kompetisi" class="form-control" data-selected="<?= $data['jenis_kompetisi']??null ?>">
                        <option value="Kompetisi Internasional">Kompetisi Internasional</option>
                        <option value="Kompetisi Nasional">Kompetisi Nasional</option>
                    </select>
                </div>

                <div class="col-sm-8">
                    <label class="form-label">URL Kompetisi</label>
                    <input type="text" name="url" class="form-control" value="<?= $data['url']??null ?>"  />
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