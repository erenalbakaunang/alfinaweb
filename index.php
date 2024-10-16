<?php
    session_start();
    define('PARAM', $_GET['p'] ?? '');

    switch(PARAM):
        case 'disetujui':
            $content = 'disetujui.php';
            break;
        case 'disetujui_detailaktif':
            $content = 'disetujui_detailaktif.php';
            break;
        case 'disetujui_detailmatkul':
            $content = 'disetujui_detailmatkul.php';
            break;
        case 'disetujui_detailpenelitian':
            $content = 'disetujui_detailpenelitian.php';
            break;
        case 'disetujui_detailmagang':
            $content = 'disetujui_detailmagang.php';
            break;
        case 'disetujui_detaildispen':
            $content = 'disetujui_detaildispen.php';
            break;
        case 'disetujui_detailbeasiswa':
            $content = 'disetujui_detailbeasiswa.php';
            break;
        case 'disetujui_detailbaik':
            $content = 'disetujui_detailbaik.php';
            break;
        case 'disetujui_detailkompetisi':
            $content = 'disetujui_detailkompetisi.php';
            break;
        case 'disetujui_dataktif':
            $content = 'disetujui_dataktif.php';
            break;
        case 'disetujui_datamatkul':
            $content = 'disetujui_datamatkul.php';
            break;
        case 'disetujui_datapenelitian':
            $content = 'disetujui_datapenelitian.php';
            break;
        case 'disetujui_datamagang':
            $content = 'disetujui_datamagang.php';
            break;
        case 'disetujui_datadispen':
            $content = 'disetujui_datadispen.php';
            break;
        case 'disetujui_databeasiswa':
            $content = 'disetujui_databeasiswa.php';
            break;
        case 'disetujui_databaik':
            $content = 'disetujui_databaik.php';
            break;
        case 'disetujui_datakompetisi':
            $content = 'disetujui_datakompetisi.php';
            break;
        case 'menunggu':
            $content = 'menunggu.php';
            break;
        case 'ditolak':
            $content = 'ditolak.php';
            break;
        case 'ditolak_detailaktif':
            $content = 'ditolak_detailaktif.php';
            break;
        case 'ditolak_detailmatkul':
            $content = 'ditolak_detailmatkul.php';
            break;
        case 'ditolak_detailpenelitian':
            $content = 'ditolak_detailpenelitian.php';
            break;
        case 'ditolak_detailmagang':
            $content = 'ditolak_detailmagang.php';
            break;
        case 'ditolak_detaildispen':
            $content = 'ditolak_detaildispen.php';
            break;
        case 'ditolak_detailbeasiswa':
            $content = 'ditolak_detailbeasiswa.php';
            break;
        case 'ditolak_detailbaik':
            $content = 'ditolak_detailbaik.php';
            break;
        case 'ditolak_detailkompetisi':
            $content = 'ditolak_detailkompetisi.php';
            break;
        case 'ditolak_dataktif':
            $content = 'ditolak_dataktif.php';
            break;
        case 'ditolak_datamatkul':
            $content = 'ditolak_datamatkul.php';
            break;
        case 'ditolak_datapenelitian':
            $content = 'ditolak_datapenelitian.php';
            break;
        case 'ditolak_datamagang':
            $content = 'ditolak_datamagang.php';
            break;
        case 'ditolak_datadispen':
            $content = 'ditolak_datadispen.php';
            break;
        case 'ditolak_databeasiswa':
            $content = 'ditolak_databeasiswa.php';
            break;
        case 'ditolak_databaik':
            $content = 'ditolak_databaik.php';
            break;
        case 'ditolak_datakompetisi':
            $content = 'ditolak_datakompetisi.php';
            break;

        // LAYANAN
        case 'surat_sam':
            if(isset($_GET['form'])) {
                $content = 'surat_aktif_mahasiswa.php';
            } else {
                $content = 'index_surat_aktif_mahasiswa.php';
            }
            break;

        case 'surat_spmk':
            if(isset($_GET['form'])) {
                $content = 'surat_pengantar_mata_kuliah.php';
            } else {
                $content = 'index_surat_pengantar_mata_kuliah.php';
            }
            break;

        case 'surat_spt':
            if(isset($_GET['form'])) {
                $content = 'surat_pengantar_ta.php';
            } else {
                $content = 'index_surat_pengantar_ta.php';
            }
            break;

        case 'surat_kp':
            if(isset($_GET['form'])) {
                $content = 'surat_pengantar_kp.php';
            } else {
                $content = 'index_surat_pengantar_kp.php';
            }
            break;

        case 'surat_dispensasi':
            if(isset($_GET['form'])) {
                $content = 'surat_dispensasi.php';
            } else {
                $content = 'index_surat_dispensasi.php';
            }
            break;

        case 'surat_rekomendasi_beasiswa':
            if(isset($_GET['form'])) {
                $content = 'surat_rekomendasi_beasiswa.php';
            } else {
                $content = 'index_surat_rekomendasi_beasiswa.php';
            }
            break;

        case 'surat_berkelakuan_baik':
            if(isset($_GET['form'])) {
                $content = 'surat_berkelakuan_baik.php';
            } else {
                $content = 'index_surat_berkelakuan_baik.php';
            }
            break;
            
        case 'surat_tugas_kompetisi':
            if(isset($_GET['form'])) {
                $content = 'surat_tugas_kompetisi.php';
            } else {
                $content = 'index_surat_tugas_kompetisi.php';
            }
            break;


        default:
            $content = 'dashboard.php';
            break;
    endswitch;

    require('views/theme.php');
?>