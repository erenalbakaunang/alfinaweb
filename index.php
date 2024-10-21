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
    define('ACTIVE_LANG', $_SESSION['lang'] ?? 'id');

    if(isset($_GET['lang'])) {
        $selectedLang = $_GET['lang'];
        
        $_SESSION['lang'] = $selectedLang;

        $prevUrl = $_SERVER['HTTP_REFERER'] ?? '/';
        header('location:'.$prevUrl);
    }
    // eakdd($_SESSION['lang']);

    $keyword = false;
    $pencarian_result = [];
    $content = 'dashboard.php';
    $loginData = $_SESSION['login'];

    $dataDisetujui = data_disetujui();
    $dataMenunggu = data_menunggu();
    $dataDitolak = data_ditolak();

    $is_view = false;
    if(isset($_GET['form']) && $_GET['form'] == 'view') {
        $is_view = true;
    }

    $status_data = 'menunggu';
    if(PARAM == 'disetujui') {
        $status_data = 'disetujui';
    } elseif (PARAM == 'ditolak') {
        $status_data = 'ditolak';
    } 

    $last_data_surat_aktif_mahasiswa = last_data_surat_aktif_mahasiswa($status_data);
    $last_data_surat_berkelakuan_baik = last_data_surat_berkelakuan_baik($status_data);
    $last_data_surat_dispensasi = last_data_surat_dispensasi($status_data);
    $last_data_surat_pengantar_kp = last_data_surat_pengantar_kp($status_data);
    $last_data_surat_pengantar_mata_kuliah = last_data_surat_pengantar_mata_kuliah($status_data);
    $last_data_surat_pengantar_ta = last_data_surat_pengantar_ta($status_data);
    $last_data_surat_rekomendasi_beasiswa = last_data_surat_rekomendasi_beasiswa($status_data);
    $last_data_surat_tugas_kompetisi = last_data_surat_tugas_kompetisi($status_data);
    
    switch (PARAM):
        case 'logout':
        case 'menunggu_:':
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

        case 'disetujui_dataaktif':
        case 'ditolak_dataaktif':
        case 'menunggu_dataaktif':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_dataaktif') {
                $label_status = 'Ditolak';
            } elseif (PARAM == 'menunggu_dataaktif') {
                $label_status = 'Menunggu';
            }

            $slug = 'surat_sam';
            $column = ['tujuan', lang('Tujuan')];
            $data = data_surat_aktif_mahasiswa(null, $label_status);

            $label = lang('Surat Aktif Mahasiswa');
            $content = 'category_table_page.php';
            break;
            
        case 'disetujui_datamatkul':
        case 'ditolak_datamatkul':
        case 'menunggu_datamatkul':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_datamatkul') {
                $label_status = 'Ditolak';
            } elseif (PARAM == 'menunggu_datamatkul') {
                $label_status = 'Menunggu';
            }

            $slug = 'surat_spmk';
            $column = ['mata_kuliah', 'Mata Kuliah'];
            $data = data_surat_pengantar_mata_kuliah(null, $label_status);

            $label = 'Surat Keterangan Mata Kuliah';
            $content = 'category_table_page.php';
            break;

        case 'disetujui_datapenelitian':
        case 'ditolak_datapenelitian':
        case 'menunggu_datapenelitian':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_datapenelitian') {
                $label_status = 'Ditolak';
            } elseif (PARAM == 'menunggu_datapenelitian') {
                $label_status = 'Menunggu';
            }

            $slug = 'surat_spt';
            $column = ['tipe_penelitian', 'Tipe Penelitian'];
            $data = data_surat_pengantar_ta(null, $label_status);

            $label = 'Surat Keterangan Penelitian';
            $content = 'category_table_page.php';
            break;

        case 'disetujui_datamagang':
        case 'ditolak_datamagang':
        case 'menunggu_datamagang':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_datamagang') {
                $label_status = 'Ditolak';
            } elseif (PARAM == 'menunggu_datamagang') {
                $label_status = 'Menunggu';
            }

            $slug = 'surat_pengantar_kp';
            $column = ['nama_perusahaan', 'Nama Perusahaan'];
            $data = data_surat_pengantar_kp(null, $label_status);

            $label = 'Surat Keterangan Kerja Praktek/Magang';
            $content = 'category_table_page.php';
            break;

        case 'disetujui_datadispen':
        case 'ditolak_datadispen':
        case 'menunggu_datadispen':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_datadispen') {
                $label_status = 'Ditolak';
            } elseif (PARAM == 'menunggu_datadispen') {
                $label_status = 'Menunggu';
            }

            $slug = 'surat_dispensasi';
            $column = ['tujuan', 'Tujuan'];
            $data = data_surat_dispensasi(null, $label_status);

            $label = 'Surat Dispensasi';
            $content = 'category_table_page.php';
            break;

        case 'disetujui_databeasiswa':
        case 'ditolak_databeasiswa':
        case 'menunggu_databeasiswa':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_databeasiswa') {
                $label_status = 'Ditolak';
            } elseif (PARAM == 'menunggu_databeasiswa') {
                $label_status = 'Menunggu';
            }

            $slug = 'surat_rekomendasi_beasiswa';
            $column = ['nama_beasiswa', 'Nama Beasiswa'];
            $data = data_surat_rekomendasi_beasiswa(null, $label_status);

            $label = 'Surat Rekomendasi Beasiswa';
            $content = 'category_table_page.php';
            break;

        case 'disetujui_databaik':
        case 'ditolak_databaik':
        case 'menunggu_databaik':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_databaik') {
                $label_status = 'Ditolak';
            } elseif (PARAM == 'menunggu_databaik') {
                $label_status = 'Menunggu';
            }

            $slug = 'surat_berkelakuan_baik';
            $column = ['tujuan', 'Tujuan'];
            $data = data_surat_berkelakuan_baik(null, $label_status);

            $label = 'Surat Berkelakuan Baik';
            $content = 'category_table_page.php';
            break;

        case 'disetujui_datakompetisi':
        case 'ditolak_datakompetisi':
        case 'menunggu_datakompetisi':
            $label_status = 'Disetujui';
            if(PARAM == 'ditolak_datakompetisi') {
                $label_status = 'Ditolak';
            } elseif (PARAM == 'menunggu_datakompetisi') {
                $label_status = 'Menunggu';
            }

            $slug = 'surat_tugas_kompetisi';
            $column = ['Nama_lomba', 'Nama Lomba'];
            $data = data_surat_tugas_kompetisi(null, $label_status);

            $label = 'Surat Tugas Kompetisi';
            $content = 'category_table_page.php';
            break;

        case 'menunggu':
            $data = data_menunggu();
            $content = 'menunggu.php';
            break;

        case 'ditolak':
            $content = 'ditolak.php';
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
                    'status' => 'Menunggu',
                    'Tanggal' => date('Y-m-d'),
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
                    'Tanggal' => date('Y-m-d'),
                    'status' => 'Menunggu',
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
                    'Tanggal' => date('Y-m-d'),
                    'status' => 'Menunggu',
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
                    'Tanggal' => date('Y-m-d'),
                    'status' => 'Menunggu',
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
                    'Tanggal' => date('Y-m-d'),
                    'status' => 'Menunggu',
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
                    'Tanggal' => date('Y-m-d'),
                    'status' => 'Menunggu',
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
                    'Tanggal' => date('Y-m-d'),
                    'status' => 'Menunggu',
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
                    'Tanggal' => date('Y-m-d'),
                    'status' => 'Menunggu',
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