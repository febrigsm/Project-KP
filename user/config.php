<?php
//koneksi ke database
mysql_connect("localhost", "root", "");
mysql_select_db("surat");

//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(5000000)); 
    $pow = min($pow, count($units) - 1); 

    $bytes /= pow(5000000, $pow); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 
?>