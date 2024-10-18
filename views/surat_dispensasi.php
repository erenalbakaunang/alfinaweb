<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content">Surat Dispensasi</h6>
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
                        <option>English</option>
                        <option>Indonesia</option>
                    </select>
                </div>

                <div class="col-sm">
                    <label class="form-label">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" value="<?= $data['tujuan']??null ?>"/>
                </div>

                <div class="col-sm">
                    <label class="form-label">Bukti</label>
                    <?php if($is_view) { ?>
                        <button type="button" class="btn btn-danger btn-view-unduh">
                            <i class="fa fa-download"></i> &nbsp;
                            Unduh
                        </button>
                    <?php } else { ?>
                        <input type="file" name="bukti" class="form-control" value="<?= $data['bukti']??null ?>"/>
                        <small>
                            Silahkan unggah dengan format .jpg/.jpeg/.pdf.<br/>
                            Ukuran maksimal file 5120 KB.
                        </small>
                    <?php } ?>
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

                <div class="col-sm">
                    <label class="form-label">Link Eksternal</label>
                    <input type="text" name="link_eksternal" class="form-control" value="<?= $data['link_eksternal']??null ?>"/>
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