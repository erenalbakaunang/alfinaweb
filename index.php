<?php
session_start();
require_once('db.php');
require_once('helpers.php');

if (!isset($_SESSION['login'])) {
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $check = data_pengguna($_POST['username'], $_POST['password']);

        if($check) {
            $_SESSION['login'] = $check;
            header('location:/');
            exit;
        }
    }

    require('views/login.php');

} else {
    define('PARAM', $_GET['p'] ?? '');
    define('DATA_ID', $_GET['id'] ?? '');

    $keyword = false;
    $pencarian_result = [];
    $content = 'dashboard.php';
    $loginData = $_SESSION['login'];

    $dataDisetujui = data_disetujui();
    $dataMenunggu = data_menunggu();
    $dataDitolak = data_ditolak();

    switch (PARAM):
        case 'logout':
            unset($_SESSION['login']);
            header('location:/');
            exit;
            break;

        case 'pencarian':
            $keyword = $_POST['keyword'] ?? '';
            $pencarian_result = data_pencarian($keyword);
            break;

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

        case 'disetujui_dataaktif':
        case 'ditolak_dataaktif':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_dataaktif') {
                $label_status = 'Ditolak';
            }

            $slug = 'surat_sam';
            $column = ['tujuan', 'Tujuan'];
            $data = data_surat_aktif_mahasiswa(null, $label_status);

            $label = 'Surat Aktif Mahasiswa';
            $content = 'disetujui_ditolak_table.php';
            break;
            
        case 'disetujui_datamatkul':
        case 'ditolak_datamatkul':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_datamatkul') {
                $label_status = 'Ditolak';
            }

            $slug = 'surat_spmk';
            $column = ['mata_kuliah', 'Mata Kuliah'];
            $data = data_surat_pengantar_mata_kuliah(null, $label_status);

            $label = 'Surat Keterangan Mata Kuliah';
            $content = 'disetujui_ditolak_table.php';
            break;

        case 'disetujui_datapenelitian':
        case 'ditolak_datapenelitian':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_datapenelitian') {
                $label_status = 'Ditolak';
            }

            $slug = 'surat_spt';
            $column = ['tipe_penelitian', 'Tipe Penelitian'];
            $data = data_surat_pengantar_ta(null, $label_status);

            $label = 'Surat Keterangan Penelitian';
            $content = 'disetujui_ditolak_table.php';
            break;

        case 'disetujui_datamagang':
        case 'ditolak_datamagang':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_datamagang') {
                $label_status = 'Ditolak';
            }

            $slug = 'surat_pengantar_kp';
            $column = ['nama_perusahaan', 'Nama Perusahaan'];
            $data = data_surat_pengantar_kp(null, $label_status);

            $label = 'Surat Keterangan Kerja Praktek/Magang';
            $content = 'disetujui_ditolak_table.php';
            break;

        case 'disetujui_datadispen':
        case 'ditolak_datadispen':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_datadispen') {
                $label_status = 'Ditolak';
            }

            $slug = 'surat_dispensasi';
            $column = ['tujuan', 'Tujuan'];
            $data = data_surat_dispensasi(null, $label_status);

            $label = 'Surat Dispensasi';
            $content = 'disetujui_ditolak_table.php';
            break;

        case 'disetujui_databeasiswa':
        case 'ditolak_databeasiswa':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_databeasiswa') {
                $label_status = 'Ditolak';
            }

            $slug = 'surat_rekomendasi_beasiswa';
            $column = ['nama_beasiswa', 'Nama Beasiswa'];
            $data = data_surat_rekomendasi_beasiswa(null, $label_status);

            $label = 'Surat Rekomendasi Beasiswa';
            $content = 'disetujui_ditolak_table.php';
            break;

        case 'disetujui_databaik':
        case 'ditolak_databaik':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_databaik') {
                $label_status = 'Ditolak';
            }

            $slug = 'surat_berkelakuan_baik';
            $column = ['tujuan', 'Tujuan'];
            $data = data_surat_berkelakuan_baik(null, $label_status);

            $label = 'Surat Berkelakuan Baik';
            $content = 'disetujui_ditolak_table.php';
            break;

        case 'disetujui_datakompetisi':
        case 'ditolak_datakompetisi':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_datakompetisi') {
                $label_status = 'Ditolak';
            }

            $slug = 'surat_tugas_kompetisi';
            $column = ['Nama_lomba', 'Nama Lomba'];
            $data = data_surat_tugas_kompetisi(null, $label_status);

            $label = 'Surat Tugas Kompetisi';
            $content = 'disetujui_ditolak_table.php';
            break;

        case 'menunggu':
            $data = data_menunggu();
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

        // case 'ditolak_dataktif':
        //     $content = 'ditolak_dataktif.php';
        //     break;
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
            $data = data_surat_aktif_mahasiswa(DATA_ID);
            if (isset($_GET['form'])) {
                if(DATA_ID) {
                    $data = $data[0];
                }
                $content = 'surat_aktif_mahasiswa.php';
            } else {
                $content = 'index_surat_aktif_mahasiswa.php';
            }

            // start saving data
            if(!empty($_POST)) {
                $formData = $_POST;
                $formData['status'] = '';
                $formData['Tanggal'] = date('Y-m-d');

                $sql = 'INSERT INTO surat_aktif_mahasiswa(
                        bahasa, tujuan, nama, nim, program_studi, alamat, status, Tanggal, Lainnya, Nama_Ortu, Pekerjaan_Ortu, Nip_Ortu
                    ) VALUES (
                        :bahasa, :tujuan, :nama, :nim, :program_studi, :alamat, :status, :Tanggal, :Lainnya, :Nama_Ortu, :Pekerjaan_Ortu, :Nip_Ortu
                    )';
        
                $statement = $pdo->prepare($sql);
                $result = $statement->execute([
                    'bahasa' => $formData['bahasa'],
                    'tujuan' => $formData['tujuan'],
                    'nama' => $formData['nama'],
                    'nim' => $formData['nim'],
                    'program_studi' => $formData['program_studi'],
                    'alamat' => $formData['alamat'],
                    'status' => $formData['status'],
                    'Tanggal' => $formData['Tanggal'],
                    'Lainnya' => $formData['Lainnya'],
                    'Nama_Ortu' => $formData['Nama_Ortu'],
                    'Pekerjaan_Ortu' => $formData['Pekerjaan_Ortu'],
                    'Nip_Ortu' => $formData['Nip_Ortu'],
                ]);

                if($result) {
                    header('location: ?p=surat_sam');
                }
                // end saving data
            }
            break;

        case 'surat_spmk':
            $data = data_surat_pengantar_mata_kuliah(DATA_ID);
            if (isset($_GET['form'])) {
                if(DATA_ID) {
                    $data = $data[0];
                }
                $content = 'surat_pengantar_mata_kuliah.php';
            } else {
                $content = 'index_surat_pengantar_mata_kuliah.php';
            }

            // start saving data
            if(!empty($_POST)) {
                $formData = $_POST;
                $formData['status'] = '';
                $formData['Tanggal'] = date('Y-m-d');

                $sql = 'INSERT INTO surat_pengantar_mata_kuliah(
                        nama, nim, program_studi, bahasa, mata_kuliah, anggota, nama_perusahaan, nama_divisi, nama_jabatan, alamat_perusahaan, Tanggal, status
                    ) VALUES (
                        :nama, :nim, :program_studi, :bahasa, :mata_kuliah, :anggota, :nama_perusahaan, :nama_divisi, :nama_jabatan, :alamat_perusahaan, :Tanggal, :status
                    )';
        
                $statement = $pdo->prepare($sql);
                $result = $statement->execute([
                    'nama' => $formData['nama'],
                    'nim' => $formData['nim'],
                    'program_studi' => $formData['program_studi'],
                    'bahasa' => $formData['bahasa'],
                    'mata_kuliah' => $formData['mata_kuliah'],
                    'anggota' => $formData['anggota'],
                    'nama_perusahaan' => $formData['nama_perusahaan'],
                    'nama_divisi' => $formData['nama_divisi'],
                    'nama_jabatan' => $formData['nama_jabatan'],
                    'alamat_perusahaan' => $formData['alamat_perusahaan'],
                    'Tanggal' => $formData['Tanggal'],
                    'Status' => $formData['Status'],
                ]);

                if($result) {
                    header('location: ?p=surat_spmk');
                }
                // end saving data
            }
            break;

        case 'surat_spt':
            $data = data_surat_pengantar_ta(DATA_ID);
            if (isset($_GET['form'])) {
                if(DATA_ID) {
                    $data = $data[0];
                }
                $content = 'surat_pengantar_ta.php';
            } else {
                $content = 'index_surat_pengantar_ta.php';
            }

            // start saving data
            if(!empty($_POST)) {
                $formData = $_POST;
                $formData['status'] = '';
                $formData['Tanggal'] = date('Y-m-d');

                $sql = 'INSERT INTO surat_pengantar_ta(
                        nama, nim, program_studi, bahasa, tipe_penelitian, topik, anggota, nama_perusahaan, nama_divisi, nama_jabatan, alamat_perusahaan, Tanggal, status
                    ) VALUES (
                        :nama, :nim, :program_studi, :bahasa, :tipe_penelitian, :topik, :anggota, :nama_perusahaan, :nama_divisi, :nama_jabatan, :alamat_perusahaan, :Tanggal, :status
                    )';
        
                $statement = $pdo->prepare($sql);
                $result = $statement->execute([
                    'nama' => $formData['nama'],
                    'nim' => $formData['nim'],
                    'program_studi' => $formData['program_studi'],
                    'bahasa' => $formData['bahasa'],
                    'tipe_penelitian' => $formData['tipe_penelitian'],
                    'topik' => $formData['topik'],
                    'anggota' => $formData['anggota'],
                    'nama_perusahaan' => $formData['nama_perusahaan'],
                    'nama_divisi' => $formData['nama_divisi'],
                    'nama_jabatan' => $formData['nama_jabatan'],
                    'alamat_perusahaan' => $formData['alamat_perusahaan'],
                    'Tanggal' => $formData['Tanggal'],
                    'Status' => $formData['Status'],
                ]);

                if($result) {
                    header('location: ?p=surat_spt');
                }
                // end saving data
            }
            break;

        case 'surat_kp':
            $data = data_surat_pengantar_kp(DATA_ID);
            if (isset($_GET['form'])) {
                if(DATA_ID) {
                    $data = $data[0];
                }
                $content = 'surat_pengantar_kp.php';
            } else {
                $content = 'index_surat_pengantar_kp.php';
            }

            // start saving data
            if(!empty($_POST)) {
                $formData = $_POST;
                $formData['status'] = '';
                $formData['Tanggal'] = date('Y-m-d');

                $sql = 'INSERT INTO surat_pengantar_kp(
                        nama, nim, program_studi, bahasa, topik, anggota, tanggal_mulai, tanggal_selesai, nama_perusahaan, nama_divisi, nama_jabatan, alamat_perusahaan, Tanggal, status
                    ) VALUES (
                        :nama, :nim, :program_studi, :bahasa, :topik, :anggota, :tanggal_mulai, :tanggal_selesai, :nama_perusahaan, :nama_divisi, :nama_jabatan, :alamat_perusahaan, :Tanggal, :status
                    )';
        
                $statement = $pdo->prepare($sql);
                $result = $statement->execute([
                    'nama' => $formData['nama'],
                    'nim' => $formData['nim'],
                    'program_studi' => $formData['program_studi'],
                    'bahasa' => $formData['bahasa'],
                    'topik' => $formData['topik'],
                    'anggota' => $formData['anggota'],
                    'tanggal_mulai' => $formData['tanggal_mulai'],
                    'tanggal_selesai' => $formData['tanggal_selesai'],
                    'nama_perusahaan' => $formData['nama_perusahaan'],
                    'nama_divisi' => $formData['nama_divisi'],
                    'nama_jabatan' => $formData['nama_jabatan'],
                    'alamat_perusahaan' => $formData['alamat_perusahaan'],
                    'Tanggal' => $formData['Tanggal'],
                    'Status' => $formData['Status'],
                ]);

                if($result) {
                    header('location: ?p=surat_kp');
                }
                // end saving data
            }
            break;

        case 'surat_dispensasi':
            $data = data_surat_dispensasi(DATA_ID);
            if (isset($_GET['form'])) {
                if(DATA_ID) {
                    $data = $data[0];
                }
                $content = 'surat_dispensasi.php';
            } else {
                $content = 'index_surat_dispensasi.php';
            }

            // start saving data
            if(!empty($_POST)) {
                $formData = $_POST;
                $formData['status'] = '';
                $formData['Tanggal'] = date('Y-m-d');

                $sql = 'INSERT INTO surat_dispensasi(
                        nama, nim, program_studi, bahasa, tujuan, bukti, tanggal_mulai, tanggal_selesai, link_eksternal, Tanggal, status
                    ) VALUES (
                        :nama, :nim, :program_studi, :bahasa, :tujuan, :bukti, :tanggal_mulai, :tanggal_selesai, :link_eksternal, :Tanggal, :status
                    )';
        
                $statement = $pdo->prepare($sql);
                $result = $statement->execute([
                    'nama' => $formData['nama'],
                    'nim' => $formData['nim'],
                    'program_studi' => $formData['program_studi'],
                    'bahasa' => $formData['bahasa'],
                    'tujuan' => $formData['tujuan'],
                    'bukti' => $formData['bukti'],
                    'tanggal_mulai' => $formData['tanggal_mulai'],
                    'tanggal_selesai' => $formData['tanggal_selesai'],
                    'link_eksternal' => $formData['link_eksternal'],
                    'Tanggal' => $formData['Tanggal'],
                    'Status' => $formData['Status'],
                ]);

                if($result) {
                    header('location: ?p=surat_dispensasi');
                }
                // end saving data
            }
            break;

        case 'surat_rekomendasi_beasiswa':
            $data = data_surat_rekomendasi_beasiswa(DATA_ID);
            if (isset($_GET['form'])) {
                if(DATA_ID) {
                    $data = $data[0];
                }
                $content = 'surat_rekomendasi_beasiswa.php';
            } else {
                $content = 'index_surat_rekomendasi_beasiswa.php';
            }

            // start saving data
            if(!empty($_POST)) {
                $formData = $_POST;
                $formData['status'] = '';
                $formData['Tanggal'] = date('Y-m-d');

                $sql = 'INSERT INTO surat_rekomendasi_beasiswa(
                        nama, nim, program_studi, bahasa, nama_beasiswa, link_eksternal, bukti, format_surat, Tanggal, status
                    ) VALUES (
                        :nama, :nim, :program_studi, :bahasa, :nama_beasiswa, :link_eksternal, :bukti, :format_surat, :Tanggal, :status
                    )';
        
                $statement = $pdo->prepare($sql);
                $result = $statement->execute([
                    'nama' => $formData['nama'],
                    'nim' => $formData['nim'],
                    'program_studi' => $formData['program_studi'],
                    'bahasa' => $formData['bahasa'],
                    'nama_beasiswa' => $formData['nama_beasiswa'],
                    'link_eksternal' => $formData['link_eksternal'],
                    'bukti' => $formData['bukti'],
                    'format_surat' => $formData['format_surat'],
                    'Tanggal' => $formData['Tanggal'],
                    'Status' => $formData['Status'],
                ]);

                if($result) {
                    header('location: ?p=surat_rekomendasi_beasiswa');
                }
                // end saving data
            }
            break;

        case 'surat_berkelakuan_baik':
            $data = data_surat_berkelakuan_baik(DATA_ID);
            if (isset($_GET['form'])) {
                if(DATA_ID) {
                    $data = $data[0];
                }
                $content = 'surat_berkelakuan_baik.php';
            } else {
                $content = 'index_surat_berkelakuan_baik.php';
            }

            // start saving data
            if(!empty($_POST)) {
                $formData = $_POST;
                $formData['status'] = '';
                $formData['Tanggal'] = date('Y-m-d');

                $sql = 'INSERT INTO surat_berkelakuan_baik(
                        nama, nim, program_studi, bahasa, tujuan, deskripsi_tujuan, Tanggal, status
                    ) VALUES (
                        :nama, :nim, :program_studi, :bahasa, :tujuan, :deskripsi_tujuan, :Tanggal, :status
                    )';
        
                $statement = $pdo->prepare($sql);
                $result = $statement->execute([
                    'nama' => $formData['nama'],
                    'nim' => $formData['nim'],
                    'program_studi' => $formData['program_studi'],
                    'bahasa' => $formData['bahasa'],
                    'tujuan' => $formData['tujuan'],
                    'deskripsi_tujuan' => $formData['deskripsi_tujuan'],
                    'Tanggal' => $formData['Tanggal'],
                    'Status' => $formData['Status'],
                ]);

                if($result) {
                    header('location: ?p=surat_berkelakuan_baik');
                }
                // end saving data
            }
            break;

        case 'surat_tugas_kompetisi':
            $data = data_surat_tugas_kompetisi(DATA_ID);
            if (isset($_GET['form'])) {
                if(DATA_ID) {
                    $data = $data[0];
                }
                $content = 'surat_tugas_kompetisi.php';
            } else {
                $content = 'index_surat_tugas_kompetisi.php';
            }

            // start saving data
            if(!empty($_POST)) {
                $formData = $_POST;
                $formData['status'] = '';
                $formData['Tanggal'] = date('Y-m-d');

                $sql = 'INSERT INTO surat_tugas_kompetisi(
                        nama, nim, program_studi, bahasa, Nama_lomba, tanggal_kompetisi, jenis_kompetisi, url, Tanggal, status
                    ) VALUES (
                        :nama, :nim, :program_studi, :bahasa, :Nama_lomba, :tanggal_kompetisi, :jenis_kompetisi, :url, :Tanggal, :status
                    )';
        
                $statement = $pdo->prepare($sql);
                $result = $statement->execute([
                    'nama' => $formData['nama'],
                    'nim' => $formData['nim'],
                    'program_studi' => $formData['program_studi'],
                    'bahasa' => $formData['bahasa'],
                    'Nama_lomba' => $formData['Nama_lomba'],
                    'tanggal_kompetisi' => $formData['tanggal_kompetisi'],
                    'jenis_kompetisi' => $formData['jenis_kompetisi'],
                    'url' => $formData['url'],
                    'Tanggal' => $formData['Tanggal'],
                    'Status' => $formData['Status'],
                ]);

                if($result) {
                    header('location: ?p=surat_tugas_kompetisi');
                }
                // end saving data
            }
            break;

        // Showing dashboard page
        default: break;

    endswitch;

    require('views/theme.php');
}
?>