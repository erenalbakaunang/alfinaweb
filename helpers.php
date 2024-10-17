<?php
function show_tanggal($date = '') {
    $result = '';

    if(!empty($date)) {
        $dc = date_create($date);
        $result = date_format($dc, 'd F Y');
    }

    return $result;
}
?>