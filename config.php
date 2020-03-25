<?php
/**
* using mysqli_connect */
$databaseHost = 'localhost';
$databaseName = 'id12021006_pmb_0285';
$databaseUsername = 'id12021006_pmb_0285';
$databasePassword = '12345';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword,
$databaseName)or die('koneksi gagal');
?>