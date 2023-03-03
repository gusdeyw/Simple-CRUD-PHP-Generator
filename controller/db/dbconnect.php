<?php
if (file_exists('dbcon.json')) {
    // Get JSON
    $json = file_get_contents('dbcon.json');
    $json_data = json_decode($json, true);

    $host = $json_data['hostname'];
    $user = $json_data['username'];
    $pass = $json_data['password'];
    $db = $json_data['db'];
    $koneksi = mysqli_connect($host, $user, $pass, $db);
    mysqli_set_charset($koneksi, "utf8");

    if (!$koneksi) {
        die("Connection Failed: " . mysqli_connect_error());
    }
} else {
    $koneksi = 0;
}

?>