<?php

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db = "database";

$host = $_GET["host"];
$user = $_GET["user"];
$pass = $_GET["pass"];
// $db = "database";
// $koneksi = mysqli_connect($host, $user, $pass, $db);
$koneksi = mysqli_connect($host, $user, $pass);

mysqli_set_charset($koneksi, "utf8");

if (!$koneksi) {
    $myfile = fopen("controller/db/dbcon.json", "w") or die("Unable to open file!");
    $dbwrite = array(
        "hostname" => "localhost",
        "username" => "root",
        "password" => "",
        "db" => "scpg_database",
    );
    fwrite($myfile, json_encode($dbwrite));
    fclose($myfile);

    $return_var[] = array(
        "status" => "0",
        "message" => "Connection Failed",
    );
    echo json_encode($return_var);
} else {
    $return_var[] = array(
        "status" => "1",
        "message" => "Connection Success",
    );
    echo json_encode($return_var);
}
?>