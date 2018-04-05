<?php

    // apache_setenv('no-gzip', 1);
    // ini_set('zlib.output_compression', 0);
    $code = $_REQUEST['astrid'];
    switch ($code) {
        case '270000':
            $file = "../datamodel/models/1/mdel/TengenToppaGurrenLagann.zip";
            break;
        
        default:
            $file = "";
            break;
    }

    if(!file_exists($file)) die("I'm sorry, the file doesn't seem to exist.");

    $type = filetype($file);
    // Get a date and timestamp
    $today = date("F j, Y, g:i a");
    $time = time();
    // Send file headers

    
    set_time_limit(0);
    header('Connection: Keep-Alive');
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    //flush();
    readfile($file);
?>