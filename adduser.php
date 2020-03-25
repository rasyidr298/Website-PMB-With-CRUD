<html>
<head>
	<title>Formulir Pendaftaran Mahasiswa Baru  </title>
</head>
<center>FORMULIR PENDAFTARAN MAHASISWA BARU</center><br>
<center>UNIVERSITAS AMIKOM YOGYAKARTA</center><br>
<center>Tahun Akademik 2020/2021</center><br><br>
<head>
	<title>Add Users</title>
</head>

<body>
	<br/><br/>
	<form action="adduser.php" method="post" name="form1">
		<table width="452" border="0" align="center" cellpadding="2" cellspacing="5" bgcolor="003300">
			<tr>
				<td height="40" align="center" bgcolor="5EAE9E"><strong><font color="F9FDFF">FORMULIR PENDFTARAN MAHASISWA BARU</font></strong></td>
			</tr>
			<tr>
				<td bgcolor="#FFFFFF"><table width="400" border="0" align="center" cellpadding="3" cellspacing="5">


					<a href="index.php">Go to Home</a>
					<br/><br/>
					<tr>
						<td width="113">Nama0285</td>
						<td width="11">:</td>
						<td width="237"><input name="Nama0285" type="text"  size="30" maxlength="30"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input name="Email" type="text"  size="30" maxlength="30"></td>
					</tr>
					<tr>
						<td>NO Telepon</td>
						<td>:</td>
						<td><input name="No_Telepon" type="text" ></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><input name="Jenis_Kelamin" type="text"   size="12" maxlength="30"></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td><input name="Tempat_Lahir" type="text"   size="12" maxlength="30"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td><input name="Tanggal_Lahir" type="date"  size="12" maxlength="30"></td>
					</tr>
					<tr>
						<td align="top">Alamat Lengkap</td>
						<td>:</td>
						<td><textarea align=top name="Alamat_Lengkap" cols="30" rows="2"></textarea></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td><input name="Agama" type="text"  size="30" /></td>
					</tr>
					<tr>
						<td>Program Studi</td>
						<td>:</td>
						<td><input name="Program_Studi" type="text" size="30" /></td>
					</tr>

					<tr>
						<td><input type="submit" name="Submit" value="Add"></td>
					</tr>
				</table></td>
			</tr>
		</table>
	</form>
	<?php
// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$Nama0285 = $_POST['Nama0285'];
		$Email = $_POST['Email'];
		$Program_Studi = $_POST['Program_Studi'];
		$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
		$Tempat_Lahir = $_POST['Tempat_Lahir'];
		$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
		$Agama = $_POST['Agama'];
		$Alamat_Lengkap = $_POST['Alamat_Lengkap'];
		$No_Telepon = $_POST['No_Telepon'];


// include database connection file
		include_once("config.php");
// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO mahasiswa(Nama0285,Email,Program_Studi,Jenis_Kelamin,Tempat_Lahir,Tanggal_Lahir,Agama,Alamat_Lengkap,No_Telepon)
			VALUES('$Nama0285','$Email','$Program_Studi','$Jenis_Kelamin','$Tempat_Lahir','$Tanggal_Lahir','$Agama','$Alamat_Lengkap','$No_Telepon')");
// Show message when user added
		echo "User added successfully. <a href='daftar-mhs.php'>View Users</a>";
	}
	?>
</body>

</html>