<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content"><?= lang ('Surat Rekomendasi Beasiswa') ?></h6>
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
                    <label class="form-label"><?= lang ('Nama Beasiswa') ?></label>
                    <input type="text" name="nama_beasiswa" class="form-control" value="<?= $data['nama_beasiswa']??null ?>" />
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Link Eksternal') ?></label>
                    <input type="text" name="link_eksternal" class="form-control" value="<?= $data['link_eksternal']??null ?>"/>
                    <small><?= lang ('Silahkan sertakan link eksternal jika tersedia') ?></small>
                </div>
            </div>

            <div class="form-group row">
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
                        <?= lang ('Silahkan unggah dengan format .jpg/.jpeg/.pdf (Max. 5MB)') ?><br/>
                        Poster,surat edaran,dokumen dan
                            <u>surat pernyataan pribadi tidak menerima beasiswa</u>
                        </small>
                    <?php } ?>
                </div>

                <div class="col-sm">
                    <label class="form-label"><?= lang ('Format Surat') ?></label>
                    <?php if($is_view) { ?>
                        <button type="button" class="btn btn-danger btn-view-unduh">
                            <i class="fa fa-download"></i> &nbsp;
                            <?= lang ('Unduh') ?>  
                        </button>
                    <?php } else { ?>
                        <input type="file" name="format_surat" class="form-control" value="<?= $data['format_surat']??null ?>"/>
                        <small>
                        <?= lang ('Please upload in .doc/.docx/.pdf format. Leave blank if no letter format (max. 5MB)') ?>
                        </small>
                    <?php } ?>
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