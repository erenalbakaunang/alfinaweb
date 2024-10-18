<div class="row row-detail-page">
    <div class="col-lg-1 left-back-link">
        <a href="/">
            <i class="fa fa-arrow-left"></i>
        </a>
    </div>

    <div class="col-lg-11">
        <div class="row">
            <div class="col-lg-12">
                <h6 class="label-content">Surat Disetujui</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row bg-danger">
                            <br /><br /><br /><br /><br />
                        </div>

                        <h6>
                            <small>
                                <?= show_tanggal($last_data_surat_aktif_mahasiswa['Tanggal'] ?? '') ?>
                            </small><br />
                            Surat Aktif Mahasiswa
                        </h6>

                        <div class="container" style="padding-top:15px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_aktif_mahasiswa(null, 'disetujui')) ?> Surat</h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=disetujui_dataaktif">
                                        <button class="btn btn-danger">
                                            Lihat
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row bg-primary">
                            <br /><br /><br /><br /><br />
                        </div>

                        <h6>
                        <small>
                                <?= show_tanggal($last_data_surat_pengantar_mata_kuliah['Tanggal'] ?? '') ?>
                            </small><br />
                            Surat Keterangan Mata Kuliah
                        </h6>

                        <div class="container" style="padding-top:15px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_pengantar_mata_kuliah(null, 'disetujui')) ?> Surat</h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=disetujui_datamatkul">
                                        <button class="btn btn-danger">
                                            Lihat
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row bg-success">
                            <br /><br /><br /><br /><br />
                        </div>

                        <h6>
                        <small>
                                <?= show_tanggal($last_data_surat_pengantar_ta['Tanggal'] ?? '') ?>
                            </small><br />
                            Surat Keterangan Penelitian
                        </h6>

                        <div class="container" style="padding-top:15px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_pengantar_ta(null, 'disetujui')) ?> Surat</h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=disetujui_datapenelitian">
                                        <button class="btn btn-danger">
                                            Lihat
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row bg-warning">
                            <br /><br /><br /><br /><br />
                        </div>

                        <h6>
                        <small>
                                <?= show_tanggal($last_data_surat_pengantar_kp['Tanggal'] ?? '') ?>
                            </small><br />
                            Surat Keterangan Kerja Praktek / Magang
                        </h6>

                        <div class="container" style="padding-top:15px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_pengantar_kp(null, 'disetujui')) ?> Surat</h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=disetujui_datamagang">
                                        <button class="btn btn-danger">
                                            Lihat
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row bg-info">
                            <br /><br /><br /><br /><br />
                        </div>

                        <h6>
                        <small>
                                <?= show_tanggal($last_data_surat_dispensasi['Tanggal'] ?? '') ?>
                            </small><br />
                            Surat Dispensasi
                        </h6>

                        <div class="container" style="padding-top:15px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_dispensasi(null, 'disetujui')) ?> Surat</h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=disetujui_datadispen">
                                        <button class="btn btn-danger">
                                            Lihat
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row bg-primary">
                            <br /><br /><br /><br /><br />
                        </div>

                        <h6>
                        <small>
                                <?= show_tanggal($last_data_surat_rekomendasi_beasiswa['Tanggal'] ?? '') ?>
                            </small><br />
                            Surat Rekomendasi Beasiswa
                        </h6>

                        <div class="container" style="padding-top:15px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_rekomendasi_beasiswa(null, 'disetujui')) ?> Surat</h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=disetujui_databeasiswa">
                                        <button class="btn btn-danger">
                                            Lihat
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row bg-success">
                            <br /><br /><br /><br /><br />
                        </div>

                        <h6>
                        <small>
                                <?= show_tanggal($last_data_surat_berkelakuan_baik['Tanggal'] ?? '') ?>
                            </small><br />
                            Surat Berkelakuan Baik
                        </h6>

                        <div class="container" style="padding-top:15px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_berkelakuan_baik(null, 'disetujui')) ?> Surat</h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=disetujui_databaik">
                                        <button class="btn btn-danger">
                                            Lihat
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row bg-danger">
                            <br /><br /><br /><br /><br />
                        </div>

                        <h6>
                        <small>
                                <?= show_tanggal($last_data_surat_tugas_kompetisi['Tanggal'] ?? '') ?>
                            </small><br />
                            Surat Tugas Kompetisi
                        </h6>

                        <div class="container" style="padding-top:15px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_tugas_kompetisi(null, 'disetujui')) ?> Surat</h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=disetujui_datakompetisi">
                                        <button class="btn btn-danger">
                                            Lihat
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>