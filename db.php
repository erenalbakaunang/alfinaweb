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

function data_surat_aktif_mahasiswa($id=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_aktif_mahasiswa";
    if($id) $query_string .= " WHERE id=".$id;
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_berkelakuan_baik($id=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_berkelakuan_baik";
    if($id) $query_string .= " WHERE id=".$id;
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_dispensasi($id=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_dispensasi";
    if($id) $query_string .= " WHERE id=".$id;
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_pengantar_kp($id=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_pengantar_kp";
    if($id) $query_string .= " WHERE id=".$id;
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_pengantar_mata_kuliah($id=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_pengantar_mata_kuliah";
    if($id) $query_string .= " WHERE id=".$id;
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_pengantar_ta($id=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_pengantar_ta";
    if($id) $query_string .= " WHERE id=".$id;
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_rekomendasi_beasiswa($id=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_rekomendasi_beasiswa";
    if($id) $query_string .= " WHERE id=".$id;
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

function data_surat_tugas_kompetisi($id=null) {
    global $pdo;
    $query_string = "SELECT * FROM surat_tugas_kompetisi";
    if($id) $query_string .= " WHERE id=".$id;
    $sql = $pdo->query($query_string);
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $data;
}

?>