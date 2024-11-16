<div class="row row-detail-page" style="padding-bottom:90px">
    <div class="col-lg-1 left-back-link">
        <a href="/">
            <i class="fa fa-arrow-left text-black" style="padding-top:25px"></i>
        </a>
    </div>

    <div class="col-lg-11">
        <div class="row">
            <div class="col-lg-12" style="padding-top:15px">
                <h6 class="label-content text-black"><?= lang ('Surat Ditolak') ?></h6>
            </div>
        </div>

        <div class="row" style="padding-top:15px; padding-left:10px; padding-right:0px">
            <div class="col-lg-4 ">
                <div class="card">
                    <div class="card-body">
                    <h6>
                        <p style="font-size: 15px">
                            <b> <?= lang ('Surat Aktif Mahasiswa') ?> </b>
                        </p> 
                        <p>
                                    <?=lang ('Tanggal Pengajuan:')?> 
                                    <?= !empty($last_data_surat_aktif_mahasiswa['Tanggal']) ? show_tanggal($last_data_surat_aktif_mahasiswa['Tanggal']) : '-' ?>
                                    <small>
                            
                                    </small><br />
                                    <?=lang ('Tanggal Penolakan:')?> 
                                    <?= !empty($last_data_surat_aktif_mahasiswa['tanggal_ditolak']) ? show_tanggal($last_data_surat_aktif_mahasiswa['tanggal_ditolak']) : '-' ?>
                                </p>   
                    </h6>

                        <div class="container" style="padding-top:10px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_aktif_mahasiswa(null, 'ditolak')) ?> <?= lang ('Surat') ?></h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=ditolak_dataaktif">
                                        <button class="btn btn-danger">
                                        <?= lang ('Lihat') ?>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card ">
                    <div class="card-body">
                    <h6>
                        <p style="font-size: 15px;">
                            <b> <?= lang ('Surat Keterangan Mata Kuliah') ?> </b>
                        </p> 
                        <p>
                                    <?=lang ('Tanggal Pengajuan:')?> 
                                    <?= !empty($last_data_surat_pengantar_mata_kuliah['Tanggal']) ? show_tanggal($last_data_surat_pengantar_mata_kuliah['Tanggal']) : '-' ?>
                                    <small>
                            
                                    </small><br />
                                    <?=lang ('Tanggal Penolakan:')?> 
                                    <?= !empty($last_data_surat_pengantar_mata_kuliah['tanggal_ditolak']) ? show_tanggal($last_data_surat_pengantar_mata_kuliah['tanggal_ditolak']) : '-' ?>
                        </p>
                    </h6>

                        <div class="container" style="padding-top:10px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_pengantar_mata_kuliah(null, 'ditolak')) ?> <?= lang ('Surat') ?></h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=ditolak_datamatkul">
                                        <button class="btn btn-danger">
                                        <?= lang ('Lihat') ?>
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
                    <h6>
                        <p style="font-size: 15px;">
                            <b> <?= lang ('Surat Keterangan Penelitian') ?> </b>
                        </p>
                        <p>
                                    <?=lang ('Tanggal Pengajuan:')?> 
                                    <?= !empty($last_data_surat_pengantar_ta['Tanggal']) ? show_tanggal($last_data_surat_pengantar_ta['Tanggal']) : '-' ?>
                                    <small>
                            
                                    </small><br />
                                    <?=lang ('Tanggal Penolakan:')?> 
                                    <?= !empty($last_data_surat_pengantar_ta['tanggal_ditolak']) ? show_tanggal($last_data_surat_pengantar_ta['tanggal_ditolak']) : '-' ?>
                        </p>
                    </h6>

                        <div class="container" style="padding-top:10px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_pengantar_ta(null, 'ditolak')) ?> <?= lang ('Surat') ?></h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=ditolak_datapenelitian">
                                        <button class="btn btn-danger">
                                        <?= lang ('Lihat') ?>
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
                    <h6>
                        <p style="font-size: 15px;">
                            <b> <?= lang ('Surat Keterangan Kerja Praktek / Magang') ?> </b>
                        </p>
                        <p>
                                    <?=lang ('Tanggal Pengajuan:')?> 
                                    <?= !empty($last_data_surat_pengantar_kp['Tanggal']) ? show_tanggal($last_data_surat_pengantar_kp['Tanggal']) : '-' ?>
                                    <small>
                            
                                    </small><br />
                                    <?=lang ('Tanggal Penolakan:')?> 
                                    <?= !empty($last_data_surat_pengantar_kp['tanggal_ditolak']) ? show_tanggal($last_data_surat_pengantar_kp['tanggal_ditolak']) : '-' ?>
                        </p>  
                    </h6>

                        <div class="container" style="padding-top:10px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_pengantar_kp(null, 'ditolak')) ?> <?= lang ('Surat') ?></h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=ditolak_datamagang">
                                        <button class="btn btn-danger">
                                        <?= lang ('Lihat') ?>
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
                    <h6>
                        <p style="font-size: 15px;">
                            <b> <?= lang ('Surat Dispensasi') ?> </b>
                        </p>
                        <p>
                                    <?=lang ('Tanggal Pengajuan:')?> 
                                    <?= !empty($last_data_surat_dispensasi['Tanggal']) ? show_tanggal($last_data_surat_dispensasi['Tanggal']) : '-' ?>
                                    <small>
                            
                                    </small><br />
                                    <?=lang ('Tanggal Penolakan:')?> 
                                    <?= !empty($last_data_surat_dispensasi['tanggal_ditolak']) ? show_tanggal($last_data_surat_dispensasi['tanggal_ditolak']) : '-' ?>
                        </p>    
                    </h6>

                        <div class="container" style="padding-top:10px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_dispensasi(null, 'ditolak')) ?> <?= lang ('Surat') ?></h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=ditolak_datadispen">
                                        <button class="btn btn-danger">
                                        <?= lang ('Lihat') ?>
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
                    <h6>
                        <p style="font-size: 15px;">
                            <b> <?= lang ('Surat Rekomendasi Beasiswa') ?> </b>
                        </p>
                        <p>
                                    <?=lang ('Tanggal Pengajuan:')?> 
                                    <?= !empty($last_data_surat_rekomendasi_beasiswa['Tanggal']) ? show_tanggal($last_data_surat_rekomendasi_beasiswa['Tanggal']) : '-' ?>
                                    <small>
                            
                                    </small><br />
                                    <?=lang ('Tanggal Penolakan:')?> 
                                    <?= !empty($last_data_surat_rekomendasi_beasiswa['tanggal_ditolak']) ? show_tanggal($last_data_surat_rekomendasi_beasiswa['tanggal_ditolak']) : '-' ?>
                        </p>
                    </h6>

                        <div class="container" style="padding-top:10px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_rekomendasi_beasiswa(null, 'ditolak')) ?> <?= lang ('Surat') ?></h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=ditolak_databeasiswa">
                                        <button class="btn btn-danger">
                                        <?= lang ('Lihat') ?>
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
                    <h6>
                        <p style="font-size: 15px;">
                            <b> <?= lang ('Surat Berkelakuan Baik') ?> </b>
                        </p>
                        <p>
                                    <?=lang ('Tanggal Pengajuan:')?> 
                                    <?= !empty($last_data_surat_berkelakuan_baik['Tanggal']) ? show_tanggal($last_data_surat_berkelakuan_baik['Tanggal']) : '-' ?>
                                    <small>
                            
                                    </small><br />
                                    <?=lang ('Tanggal Penolakan:')?> 
                                    <?= !empty($last_data_surat_berkelakuan_baik['tanggal_ditolak']) ? show_tanggal($last_data_surat_berkelakuan_baik['tanggal_ditolak']) : '-' ?>
                        </p>
                    </h6>

                        <div class="container" style="padding-top:10px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_berkelakuan_baik(null, 'ditolak')) ?> <?= lang ('Surat') ?></h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=ditolak_databaik">
                                        <button class="btn btn-danger">
                                        <?= lang ('Lihat') ?>
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
                    <h6>
                        <p style="font-size: 15px;">
                            <b> <?= lang ('Surat Tugas Kompetisi') ?> </b>
                        </p>
                        <p>
                                    <?=lang ('Tanggal Pengajuan:')?> 
                                    <?= !empty($last_data_surat_tugas_kompetisi['Tanggal']) ? show_tanggal($last_data_surat_tugas_kompetisi['Tanggal']) : '-' ?>
                                    <small>
                            
                                    </small><br />
                                    <?=lang ('Tanggal Penolakan:')?> 
                                    <?= !empty($last_data_surat_tugas_kompetisi['tanggal_ditolak']) ? show_tanggal($last_data_surat_tugas_kompetisi['tanggal_ditolak']) : '-' ?>
                        </p>
                    </h6>

                        <div class="container" style="padding-top:10px">
                            <div class="row">
                                <div class="col">
                                    <h6><?= count(data_surat_tugas_kompetisi(null, 'ditolak')) ?> <?= lang ('Surat') ?></h6>
                                </div>
                                <div class="col text-right">
                                    <a href="?p=ditolak_datakompetisi">
                                        <button class="btn btn-danger">
                                        <?= lang ('Lihat') ?>
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