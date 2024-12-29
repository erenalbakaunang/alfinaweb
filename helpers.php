<?php
function show_tanggal($date = '') {
    $result = '';

    if(!empty($date)) {
        $dc = date_create($date);
        $result = date_format($dc, 'd F Y');
    }

    return $result;
}

function data_pencarian($keyword) {
    $results = [];

    $listData = [
        lang('Surat Aktif Mahasiswa') => '?p=surat_sam&form',
        lang('Surat Keterangan untuk Matakuliah') => '?p=surat_spmk&form',
        lang('Surat Keterangan untuk Penelitian') => '?p=surat_spt&form',
        lang('Surat Keterangan untuk Kerja Praktek/Magang') => '?p=surat_kp&form',
        lang('Surat Dispensasi') => '?p=surat_dispensasi&form',
        lang('Surat Rekomendasi Beasiswa') => '?p=surat_rekomendasi_beasiswa&form',
        lang('Surat Berkelakuan Baik') => '?p=surat_berkelakuan_baik&form',
        lang('Surat Tugas Kompetisi') => '?p=surat_tugas_kompetisi&form',
    ];

    foreach($listData as $name => $url){
        $match = preg_match('/'.$keyword.'/i', $name);

        if($match) {
            $results[$name] = $url;
        }
    }
    
    if(empty($keyword)) {
        return null;
    } else {
        return $results;
    }
}

// Translate to English only, coz we've coded in Bahasa
function lang($text) {
    $active_lang = ACTIVE_LANG;

    if($active_lang == 'en') {
        $translationList = array(
            'Keluar' => 'Logout',
            'Tanggal Pengajuan' => 'Submission Date',
            'Aksi' => 'Action',
            'Tujuan' => 'Purpose',
            'Surat Aktif Mahasiswa' => 'Active Letters',
            'Surat Disetujui' => 'Approved',
            'Surat Menunggu' => 'Waiting',
            'Pencarian Surat' => 'Letter Search',
            'Hasil Pencarian' => 'Result',
            'Status Surat' => 'Letter Status',
            'Panduan Pengguna' => 'User Guide',
            'Panduan<br>TOSS' => 'TOSS Guide',
            'Disetujui' => 'Approved',
            'Menunggu' => 'Waiting',
            'Ditolak' => 'Rejected',
            '"pencarian..."' => 'Search here',
            'Lihat' => 'View',
            'Unduh' => 'Download',
            'Mata Kuliah' => ' Course',
            'Surat Keterangan Mata Kuliah' => 'Course Cover Letters',
            'Surat Keterangan untuk Matakuliah' => 'Course Cover Letters',
            'Tipe Penelitian' => 'Research Type',
            'Surat Keterangan Penelitian' => 'Research Cover Letters',
            'Surat Keterangan untuk Penelitian' => 'Research Cover Letters',
            'Nama Perusahaan' => 'Company Name',
            'Surat Keterangan Kerja Praktek/Magang' => 'Internship Cover Letters',
            'Surat Keterangan untuk Kerja Praktek/Magang' => 'Internship Cover Letters',
            'Surat Dispensasi' => 'Dispensation Letters',
            'Nama Beasiswa' => 'Scholarship Name',
            'Surat Rekomendasi Beasiswa' => 'Scholarship Recommendation Letters',
            'Surat Berkelakuan Baik' => 'Statement of Good Conduct Letters',
            'Surat Tugas Kompetisi' => 'Competition Assignment Letters',
            'Nama Lomba' => 'Competition Name',
            'Surat' => 'Letters',
            'Surat Keterangan Kerja Praktek / Magang' => 'Internship Cover Letters',
            'Surat Ditolak' => 'Rejected',
            'Beranda' => 'Dashboard',
            'Layanan' => 'Services',
            'Surat Keterangan' => 'Cover Letters',
            'Untuk Matakuliah' => 'For Course',
            'Untuk Penelitian' => 'For Research',
            'Untuk Kerja Praktek/Magang' => 'For Internship',
            'Bahasa Dokumen' => 'Document Language',
            'Untuk Asuransi Kesehatan' => 'For Health Insurance',
            'Untuk Visa' => 'For Visa',
            'Untuk Kehilangan KTM' => 'For Lost Student Card',
            'Untuk Kebutuhan Orang Tua' => 'For Parental Allowance',
            'Untuk Lomba Internasional' => 'For International Competition',
            'Untuk Lomba Nasional' => 'For National Competition',
            'Untuk Beasiswa' => 'For Scholarship',
            'Lainnya' => 'Others',
            'Kosongkan jika pilihan lainnya tidak dipilih' => 'Leave blank if "other" in purpose is not selected',
            'Nama' => 'Name',
            'NIM' => 'NIM',
            'Program Studi' => 'Major',
            'Alamat' => 'Address',
            'Nama Orang Tua' => 'Parents Name',
            'Pekerjaan Orang Tua' => 'Parents Occupation',
            'Nomor Induk Pegawai Orang Tua' => 'Parents Employee Identification Number',
            'Kosongkan jika tidak ada nik orang tua' => 'Leave blank if there is no parent id number. example: 22030001',
            'Simpan' => 'Submit',
            'Batalkan' => 'Cancel',
            'Ajukan Surat' => 'Apply Letter',
            'Status' => 'Status',
            'Beasiswa' => 'Scholarship',
            'Pendaftaran Ormawa' => 'Student Organization Registration',
            'Pendaftaran Mahasiswa Berprestasi' => 'Outstanding Student Registration',
            'Pendaftaran Lomba' => 'Competition Registration',
            'Ekstensi ke Program Sarjana' => 'Bachelors Degree Extension',
            'Pendaftaran Studi Magister' => 'Masters Degree Enrollment',
            'Magang' => 'Internship',
            'Pendaftaran Ketua Ormawa' => 'Head of Student Oraganization Registration',
            'Deskripsi Tujuan' => 'Purpose Description',
            'Bukti' => 'Evidence',
            'Silahkan unggah dengan format .jpg/.jpeg/.pdf.' => 'Please upload in .jpg/.jpeg/.pdf format.',
            'Ukuran maksimal file 5120 KB.' => 'Max file size 5120 kB.',
            'Tanggal Mulai' => 'Start Date',
            'Link Eksternal' => 'External URL',
            'Tanggal Selesai' => 'End Date',
            'Topik' => 'Topic',
            'Anggota' => 'Members',
            'Anggota 1' => 'Member 1',
            'Anggota 2' => 'Member 2',
            'Anggota 3' => 'Members 3',
            'Nama Divisi' => 'Division Name',
            'Nama Jabatan' => 'Position Name',
            'Contoh: Divisi SDM' => 'Example: Human Resource Division',
            'Alamat Perusahaan' => 'Company Address',
            'Contoh: Manager' => 'Example: Supervisor',
            'Mata Kuliah 1' => 'Course 1',
            'Mata Kuliah 2' => 'Course 2',
            'Mata Kuliah 3' => 'Course 3',
            'Pilih Opsi' => 'Select an option',
            'Matakuliah' => 'Course',
            'Disertasi' => 'Diserrtation',
            'Tesis' => 'Master Thesis',
            'Tugas Akhir' => 'Final Project',
            'Skripsi' => 'Essay',
            'Surat Pengantar TA' => 'Research Cover Letters',
            'Silahkan unggah dengan format .jpg/.jpeg/.pdf (Max. 5MB)' => 'Please upload in .jpg/.jpeg/.pdf format (max. 5MB)',
            'Format Surat' => 'Letter Format', 
            'Please upload in .doc/.docx/.pdf format. Leave blank if no letter format (max. 5MB)' => 'Please upload in .doc/.docx/.pdf format. Leave blank if no letter format (max. 5MB)',
            'Silahkan sertakan link eksternal jika tersedia' => 'Please provide the external link if available',
            'Tanggal Kompetisi' => 'Competition Date',
            'Jenis Kompetisi' => 'Competition Type',
            'Kompetisi Nasional' => 'International Competition',
            'Kompetisi Internasional' => 'National Competition',
            'URL Kompetisi' => 'Competition URL',
            'File berhasil diunduh' => 'File successfully downloaded',
            'Apakah Anda yakin ingin membatalkan surat?' => 'Are you sure you want to cancel the letter?',
            'Alasan surat Anda ditolak dilihat disini'  => 'The reason your letter was rejected can be seen here' ,
            'Kosongkan jika Tidak Ada Nomor Induk Pegawai Orang Tua' => 'Leave blank if there is no Parent Employee Identification Number' ,
            'Informasi Surat Ditolak' => 'Rejected Letter Information',
            'Lihat Pdf' => 'View Pdf' ,
            'Info' => 'Information',
            'Lihat Data' => 'View Data',
            'Unduh' => 'Download',
            'Batalkan' => 'Cancel',
            'Tanggal Pengajuan:'  => 'Submission date:',
            'Tanggal Penerbitan:' => 'Approval date:',
            'Tanggal Penolakan:' => 'Rejection date:',
        );

        return $translationList[$text] ?? $text;
    } else {
        return $text;
    }
}
?>