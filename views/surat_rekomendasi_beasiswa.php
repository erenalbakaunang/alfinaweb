<div class="row row-detail-page">
    <div class="col-lg-12">
        <h6 class="label-content">Surat Rekomendasi Beasiswa</h6>
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
                    <label class="form-label">Nama Beasiswa</label>
                    <input type="text" name="nama_beasiswa" class="form-control" value="<?= $data['nama_beasiswa']??null ?>" />
                </div>

                <div class="col-sm">
                    <label class="form-label">Link Eksternal</label>
                    <input type="text" name="link_eksternal" class="form-control" value="<?= $data['link_eksternal']??null ?>"/>
                    <small>Silahkan sertakan link eksternal jika tersedia</small>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm">
                    <label class="form-label">Bukti</label>
                    <input type="file" name="bukti" class="form-control" value="<?= $data['bukti']??null ?>"/>
                    <small>
                        Silahkan unggah dengan format .jpg/.jpeg/.pdf (Max. 5MB)<br/>
                        Poster,surat edaran,dokumen dan 
                        <u>surat pernyataan pribadi tidak menerima beasiswa</u>
                    </small>
                </div>

                <div class="col-sm">
                    <label class="form-label">Format Surat</label>
                    <input type="file" name="format_surat" class="form-control" value="<?= $data['format_surat']??null ?>"/>
                    <small>
                        Please upload in .doc/.docx/.pdf format. Leave blank if no letter format (max. 5MB)
                    </small>
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