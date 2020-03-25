<?php
include("config.php");
$sql = "INSERT INTO member (nama_member,daerah) VALUES ";
$sql.= "('".$_POST['txtNama']."','".$_POST['txtDaerah']."')";
mysql_query($sql) or exit("Error query : ".$sql);
echo "Berhasil menambahkan data.";
?>