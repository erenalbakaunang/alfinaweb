<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-lg-12" style="padding-top:20px; padding-left:25px">
        <h4><?= lang('Pencarian Surat')?></h4>
    </div>

    <div class="col-lg-12" style="padding-top:10px; padding-left:25px; padding-right:25px">
        <form action="?p=pencarian" method="POST" class="form form-group">
            <div class="input-group mb-3">
                <input type="text" name="keyword" class="form-control" placeholder=<?= lang('"pencarian..."')?> aria-label="pencarian"
                    aria-describedby="basic-addon1" />
                <span class="input-group-text" id="basic-addon1">
                    <i class="fa fa-search"></i>
                </span>

            </div>
        </form>
    </div>

    <?php if (!empty($pencarian_result)) { ?>
        <div class="col-lg-12">
            <div class="col-lg-12 table table-bordered">
                <div class="col-lg-12 border-bottom">
                    <h4>
                    <?= lang('Hasil Pencarian')?>
                    </h4>
                </div>
                <div class="col-lg-12 list-unstyled">
                    <?php foreach ($pencarian_result as $name => $url) { ?>
                        <li>
                            <a href="<?= $url ?>">
                                <h6><?= $name ?></h6>
                            </a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
    
    <div class="col-lg-12">
        <div class="row mt-3">
            <div class="col-lg-12">
                <h4><?=lang('Status Surat')?></h4>
            </div>

            <div class="col-lg-4" style="padding-top:10px">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-contain">
                            <div class="row">
                                <div class="col-8 align-self-center">
                                    <h5 class="">
                                        <?= count($dataDisetujui) ?>
                                    </h5>
                                    <p class="text-muted mb-0"><?= lang('Disetujui')?></p>
                                </div>
                                <!--end col-->
                                <div class="col-4">
                                    <i class="fa fa-user-check" style="font-size:3em;color:green"></i>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 text-center">
                                    <a href="?p=disetujui">
                                        <button class="btn btn-danger">&ensp;<?= lang('Lihat')?>&ensp;</button>
                                    </a>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end icon-contain-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-lg-4" style="padding-top:10px">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-contain">
                            <div class="row">
                                <div class="col-8 align-self-center">
                                    <h5 class="">
                                        <?= count($dataMenunggu) ?>
                                    </h5>
                                    <p class="text-muted mb-0"><?= lang('Menunggu')?></p>
                                </div>
                                <!--end col-->
                                <div class="col-4">
                                    <i class="fa fa-user-clock" style="font-size:3em;color:orange"></i>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 text-center">
                                    <a href="?p=menunggu">
                                        <button class="btn btn-danger">&ensp;<?= lang('Lihat')?>&ensp;</button>
                                    </a>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end icon-contain-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->


            <div class="col-lg-4" style="padding-top:10px">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-contain">
                            <div class="row">
                                <div class="col-8 align-self-center">
                                    <h5 class="">
                                        <?= count(value: $dataDitolak) ?>
                                    </h5>
                                    <p class="text-muted mb-0"><?= lang('Ditolak')?></p>
                                </div>
                                <!--end col-->
                                <div class="col-4">
                                    <i class="fa fa-user-times" style="font-size:3em;color:red"></i>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 text-center">
                                    <a href="?p=ditolak">
                                        <button class="btn btn-danger">&ensp;<?= lang('Lihat')?>&ensp;</button>
                                    </a>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end icon-contain-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->

            <div class="col-lg-12" style="padding-top:10px">
                <h4><?= lang('Panduan Pengguna')?></h4>
            </div>

            <div class="col-lg-4" style="padding-top:10px">
                <div class="card">
                    <div class="card-body">
                        <div class="icon-contain">
                            <div class="row">
                                <div class="col-8 align-self-center">
                                    <h5 class=""><?= lang('Panduan<br>TOSS')?></h5>
                                </div>
                                <!--end col-->
                                <div class="col-4">
                                    <i class="fa fa-file-pdf" style="font-size:3em;color:black"></i>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 text-center">
                                    <a href="">
                                        <button class="btn btn-danger" onclick="return alert('File berhasil diunduh')">&ensp;<?= lang('Unduh')?>&ensp;</button>
                                    </a>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end icon-contain-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
    </div>
</div>