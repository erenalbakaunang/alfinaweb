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
        'Surat Aktif Mahasiswa' => '?p=surat_sam&form',
        'Surat Keterangan untuk Matakuliah' => '?p=surat_spmk&form',
        'Surat Keterangan untuk Penelitian' => '?p=surat_spt&form',
        'Surat Keterangan untuk Kerja Praktek/Magang' => '?p=surat_kp&form',
        'Surat Dispensasi' => '?p=surat_dispensasi&form',
        'Surat Rekomendasi Beasiswa' => '?p=surat_rekomendasi_beasiswa&form',
        'Surat Berkelakuan Baik' => '?p=surat_berkelakuan_baik&form',
        'Surat Tugas Kompetisi' => '?p=surat_tugas_kompetisi&form',
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
?>