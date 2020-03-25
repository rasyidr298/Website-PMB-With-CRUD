<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$No_Pendaftaran_0285 = $_GET['No_Pendaftaran_0285'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE No_Pendaftaran_0285=$No_Pendaftaran_0285");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:daftar-mhs.php");
?>