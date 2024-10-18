<?php
$pdo = new PDO("mysql:host=localhost;dbname=alfina", 'root', '');
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

function data_pengguna($username, $password) {
    global $pdo;
    $sql = $pdo->prepare("SELECT * FROM pengguna WHERE username=? AND password=?");
    $sql->execute([
        $username, $password
    ]);
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_aktif_mahasiswa($id=null, $status=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_aktif_mahasiswa";
    
    if($id || $status) {
        $query_string .= " WHERE ";
    }

    if($id) {
        $query_string .= " id = ".$id;
    }

    if($status) {
        $query_string .= " LOWER(status) = '".strtolower($status)."'";
    }
    
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_berkelakuan_baik($id=null, $status=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_berkelakuan_baik";
    
    if($id || $status) {
        $query_string .= " WHERE ";
    }

    if($id) {
        $query_string .= " id = ".$id;
    }

    if($status) {
        $query_string .= " LOWER(status) = '".strtolower($status)."'";
    }
    
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_dispensasi($id=null, $status=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_dispensasi";
    
    if($id || $status) {
        $query_string .= " WHERE ";
    }

    if($id) {
        $query_string .= " id = ".$id;
    }

    if($status) {
        $query_string .= " LOWER(status) = '".strtolower($status)."'";
    }
    
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_pengantar_kp($id=null, $status=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_pengantar_kp";
    
    if($id || $status) {
        $query_string .= " WHERE ";
    }

    if($id) {
        $query_string .= " id = ".$id;
    }

    if($status) {
        $query_string .= " LOWER(status) = '".strtolower($status)."'";
    }
    
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_pengantar_mata_kuliah($id=null, $status=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_pengantar_mata_kuliah";
    
    if($id || $status) {
        $query_string .= " WHERE ";
    }

    if($id) {
        $query_string .= " id = ".$id;
    }

    if($status) {
        $query_string .= " LOWER(status) = '".strtolower($status)."'";
    }
    
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_pengantar_ta($id=null, $status=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_pengantar_ta";
    
    if($id || $status) {
        $query_string .= " WHERE ";
    }

    if($id) {
        $query_string .= " id = ".$id;
    }

    if($status) {
        $query_string .= " LOWER(status) = '".strtolower($status)."'";
    }
    
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_rekomendasi_beasiswa($id=null, $status=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_rekomendasi_beasiswa";
    
    if($id || $status) {
        $query_string .= " WHERE ";
    }

    if($id) {
        $query_string .= " id = ".$id;
    }

    if($status) {
        $query_string .= " LOWER(status) = '".strtolower($status)."'";
    }
    
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_tugas_kompetisi($id=null, $status=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_tugas_kompetisi";
    
    if($id || $status) {
        $query_string .= " WHERE ";
    }

    if($id) {
        $query_string .= " id = ".$id;
    }

    if($status) {
        $query_string .= " LOWER(status) = '".strtolower($status)."'";
    }
    
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_disetujui() {
    global $pdo;

    $query_string = "
        SELECT id, Tanggal, 'surat_aktif_mahasiswa' as jenis FROM surat_aktif_mahasiswa WHERE status = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_berkelakuan_baik' as jenis FROM surat_berkelakuan_baik WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_dispensasi' as jenis FROM surat_dispensasi WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_pengantar_kp' as jenis FROM surat_pengantar_kp WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_pengantar_mata_kuliah' as jenis FROM surat_pengantar_mata_kuliah WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_pengantar_ta' as jenis FROM surat_pengantar_ta WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_rekomendasi_beasiswa' as jenis FROM surat_rekomendasi_beasiswa WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_tugas_kompetisi' as jenis FROM surat_tugas_kompetisi WHERE LOWER(status) = :status

        ORDER BY Tanggal DESC;
    ";

    $sql = $pdo->prepare($query_string);
    $sql->execute([
        ':status' => 'disetujui'
    ]);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_menunggu() {
    global $pdo;

    $query_string = "
        SELECT id, Tanggal, 'surat_aktif_mahasiswa' as jenis FROM surat_aktif_mahasiswa WHERE status = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_berkelakuan_baik' as jenis FROM surat_berkelakuan_baik WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_dispensasi' as jenis FROM surat_dispensasi WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_pengantar_kp' as jenis FROM surat_pengantar_kp WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_pengantar_mata_kuliah' as jenis FROM surat_pengantar_mata_kuliah WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_pengantar_ta' as jenis FROM surat_pengantar_ta WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_rekomendasi_beasiswa' as jenis FROM surat_rekomendasi_beasiswa WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_tugas_kompetisi' as jenis FROM surat_tugas_kompetisi WHERE LOWER(status) = :status

        ORDER BY Tanggal DESC;
    ";

    $sql = $pdo->prepare($query_string);
    $sql->execute([
        ':status' => 'menunggu'
    ]);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_ditolak() {
    global $pdo;

    $query_string = "
        SELECT id, Tanggal, 'surat_aktif_mahasiswa' as jenis FROM surat_aktif_mahasiswa WHERE status = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_berkelakuan_baik' as jenis FROM surat_berkelakuan_baik WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_dispensasi' as jenis FROM surat_dispensasi WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_pengantar_kp' as jenis FROM surat_pengantar_kp WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_pengantar_mata_kuliah' as jenis FROM surat_pengantar_mata_kuliah WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_pengantar_ta' as jenis FROM surat_pengantar_ta WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_rekomendasi_beasiswa' as jenis FROM surat_rekomendasi_beasiswa WHERE LOWER(status) = :status
        UNION ALL
        SELECT id, Tanggal, 'surat_tugas_kompetisi' as jenis FROM surat_tugas_kompetisi WHERE LOWER(status) = :status

        ORDER BY Tanggal DESC;
    ";

    $sql = $pdo->prepare($query_string);
    $sql->execute([
        ':status' => 'ditolak'
    ]);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}
function last_data_surat_aktif_mahasiswa($status_data=false) {
    global $pdo;
    $sql_string = "SELECT * FROM surat_aktif_mahasiswa";
    
    if(!empty($status_data)) {
        $sql_string .= " WHERE LOWER(status) = '".strtolower($status_data)."'";
    }

    $sql_string .= " ORDER BY Tanggal DESC LIMIT 0,1";

    $sql = $pdo->query($sql_string);
    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
}
function last_data_surat_berkelakuan_baik($status_data=false) {
    global $pdo;
    $sql_string = "SELECT * FROM surat_berkelakuan_baik";
    
    if(!empty($status_data)) {
        $sql_string .= " WHERE LOWER(status) = '".strtolower($status_data)."'";
    }

    $sql_string .= " ORDER BY Tanggal DESC LIMIT 0,1";

    $sql = $pdo->query($sql_string);
    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
}
function last_data_surat_dispensasi($status_data=false) {
    global $pdo;
    $sql_string = "SELECT * FROM surat_dispensasi";
    
    if(!empty($status_data)) {
        $sql_string .= " WHERE LOWER(status) = '".strtolower($status_data)."'";
    }

    $sql_string .= " ORDER BY Tanggal DESC LIMIT 0,1";

    $sql = $pdo->query($sql_string);
    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
}
function last_data_surat_pengantar_kp($status_data=false) {
    global $pdo;
    $sql_string = "SELECT * FROM surat_pengantar_kp";
    
    if(!empty($status_data)) {
        $sql_string .= " WHERE LOWER(status) = '".strtolower($status_data)."'";
    }

    $sql_string .= " ORDER BY Tanggal DESC LIMIT 0,1";

    $sql = $pdo->query($sql_string);
    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
}
function last_data_surat_pengantar_mata_kuliah($status_data=false) {
    global $pdo;
    $sql_string = "SELECT * FROM surat_pengantar_mata_kuliah";
    
    if(!empty($status_data)) {
        $sql_string .= " WHERE LOWER(status) = '".strtolower($status_data)."'";
    }

    $sql_string .= " ORDER BY Tanggal DESC LIMIT 0,1";

    $sql = $pdo->query($sql_string);
    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
}
function last_data_surat_pengantar_ta($status_data=false) {
    global $pdo;
    $sql_string = "SELECT * FROM surat_pengantar_ta";
    
    if(!empty($status_data)) {
        $sql_string .= " WHERE LOWER(status) = '".strtolower($status_data)."'";
    }

    $sql_string .= " ORDER BY Tanggal DESC LIMIT 0,1";

    $sql = $pdo->query($sql_string);
    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
}
function last_data_surat_rekomendasi_beasiswa($status_data=false) {
    global $pdo;
    $sql_string = "SELECT * FROM surat_rekomendasi_beasiswa";
    
    if(!empty($status_data)) {
        $sql_string .= " WHERE LOWER(status) = '".strtolower($status_data)."'";
    }

    $sql_string .= " ORDER BY Tanggal DESC LIMIT 0,1";

    $sql = $pdo->query($sql_string);
    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
}
function last_data_surat_tugas_kompetisi($status_data=false) {
    global $pdo;
    $sql_string = "SELECT * FROM surat_tugas_kompetisi";
    
    if(!empty($status_data)) {
        $sql_string .= " WHERE LOWER(status) = '".strtolower($status_data)."'";
    }

    $sql_string .= " ORDER BY Tanggal DESC LIMIT 0,1";

    $sql = $pdo->query($sql_string);
    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
}
?>