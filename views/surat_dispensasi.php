<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content"><?= lang ('Surat Dispensasi') ?></h6>
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
                        <option>English</option>
                        <option>Indonesia</option>
                    </select>
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Tujuan') ?></label>
                    <input type="text" name="tujuan" class="form-control" value="<?= $data['tujuan']??null ?>"/>
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Bukti') ?></label>
                    <?php if($is_view) { ?>
                        <button type="button" class="btn btn-danger btn-view-unduh">
                            <i class="fa fa-download"></i> &nbsp;
                            <?= lang ('Unduh') ?>
                        </button>
                    <?php } else { ?>
                        <input type="file" name="bukti" class="form-control" value="<?= $data['bukti']??null ?>"/>
                        <small>
                        <?= lang ('Silahkan unggah dengan format .jpg/.jpeg/.pdf.') ?><br/>
                        <?= lang ('Ukuran maksimal file 5120 KB.') ?>
                        </small>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label"><?= lang ('Tanggal Mulai') ?></label>
                    <div class="input-group">
                        <input type="text" name="tanggal_mulai" class="form-control datepicker" value="<?= $data['tanggal_mulai']??null ?>"/>
                        <span class="input-group-text dpspan">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Tanggal Selesai') ?></label>
                    <div class="input-group">
                        <input type="text" name="tanggal_selesai" class="form-control datepicker" value="<?= $data['tanggal_selesai']??null ?>"/>
                        <span class="input-group-text dpspan">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Link Eksternal') ?></label>
                    <input type="text" name="link_eksternal" class="form-control" value="<?= $data['link_eksternal']??null ?>"/>
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