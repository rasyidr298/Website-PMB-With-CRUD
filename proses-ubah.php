<?php
include("koneksi.php");
$sql = "UPDATE member SET nama_member='".$_POST['txtNama']."',

daerah='".$_POST['txtDaerah']."'
WHERE No_Pendaftaran_0285=".$_POST['txtNo_Pendaftaran_0285'];
mysql_query($sql) or exit("Error query : ".$sql);
echo "Berhasil mengubah data.";
?>