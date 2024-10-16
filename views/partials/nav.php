<div class="main-menu-inner">
    <div class="title-box text-center">
        <a class="pp nav-link waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <i class="fa fa-user-circle fa-4x"></i>
        </a>

        <h6>
            <?= $loginData['nim'] ?><br>
            <?= $loginData['nama'] ?><br>
            <?= $loginData['role'] ?>
        </h6>
    </div>

    <!--end logo-->
    <div class="menu-body slimscroll">
        <div id="services" class="main-icon-menu-pane">
            <ul class="nav metismenu">
                <li class="nav-item">
                    <a class="nav-link " href="/">
                        <i class="fa fa-desktop"></i>
                        Beranda
                    </a>
                </li>

                <li class="nav-item theParent">
                    <a class="nav-link" href="javascript: void(0);">
                        <i class="fa fa-user-graduate"></i>
                        <span class="w-100">
                            Layanan
                        </span>
                        <span class="menu-arrow">
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    </a>

                    <ul class="nav-second-level pl-1" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link " href="?p=surat_sam">
                                Surat Aktif Mahasiswa
                            </a>
                        </li>
                        <li class="nav-item mt-0 theParent">
                            <a class="nav-link" href="javascript: void(0);">
                                <span class="w-100">
                                    Surat Keterangan
                                </span>
                                <span class="menu-arrow">
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>

                            <ul class="nav-second-level" aria-expanded="false">
                                <li class=""><a href="?p=surat_spmk">Untuk Matakuliah</a></li>
                                <li class=""><a href="?p=surat_spt">Untuk Penelitian</a></li>
                                <li class=""><a href="?p=surat_kp">Untuk Kerja Praktek/Magang</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item my-4 ">
                            <a class="nav-link" href="?p=surat_dispensasi">
                                Surat Dispensasi
                            </a>
                        </li>
                        <li class="nav-item my-4 ">
                            <a class="nav-link" href="?p=surat_rekomendasi_beasiswa">
                                Surat Rekomendasi Beasiswa
                            </a>
                        </li>
                        <li class="nav-item my-4 ">
                            <a class="nav-link" href="?p=surat_berkelakuan_baik">
                                Surat Berkelakuan Baik
                            </a>
                        </li>
                        <li class="nav-item my-4 ">
                            <a class="nav-link" href="?p=surat_tugas_kompetisi">
                                Surat Tugas Kompetisi
                            </a>
                        </li>
                    </ul>
                </li>
                <!--end nav-item-->
            </ul>
        </div>
    </div>
</div><!-- end main-menu-inner-->