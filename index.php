<?php
    session_start();
    define('PARAM', $_GET['p'] ?? '');

    switch(PARAM):
        case 'disetujui':
            $content = 'disetujui.php';
            break;
        default:
            $content = 'dashboard.php';
            break;
    endswitch;

    require('views/theme.php');
?>