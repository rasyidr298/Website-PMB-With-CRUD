<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $No_Pendaftaran_0285 = $_POST['No_Pendaftaran_0285'];

    $Nama0285=$_POST['Nama0285'];
    $Email=$_POST['Email'];
    $Program_Studi = $_POST['Program_Studi'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $Tempat_Lahir = $_POST['Tempat_Lahir'];
    $Tanggal_Lahir = $_POST['Tanggal_Lahir'];
    $Agama = $_POST['Agama'];
    $Alamat_Lengkap = $_POST['Alamat_Lengkap'];
    $No_Telepon = $_POST['No_Telepon'];
        // update user data
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET Nama0285='$Nama0285',Email='$Email',Program_Studi='$Program_Studi' ,Jenis_Kelamin='$Jenis_Kelamin',Tempat_Lahir='$Tempat_Lahir',Tanggal_Lahir='$Tanggal_Lahir',Agama='$Agama',Alamat_Lengkap='$Alamat_Lengkap' WHERE No_Pendaftaran_0285=$No_Pendaftaran_0285");

    // Redirect to homepage to display updated user in list
    header("Location: daftar-mhs.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$No_Pendaftaran_0285 = $_GET['No_Pendaftaran_0285'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE No_Pendaftaran_0285=$No_Pendaftaran_0285");

while($user_data = mysqli_fetch_array($result))
{
    $Nama0285 = $user_data['Nama0285'];
    $Email = $user_data['Email'];
    $Program_Studi = $user_data['Program_Studi'];
    $Jenis_Kelamin = $user_data['Jenis_Kelamin'];
    $Tempat_Lahir = $user_data['Tempat_Lahir'];
    $Tanggal_Lahir = $user_data['Tanggal_Lahir'];
    $Agama = $user_data['Agama'];
    $Alamat_Lengkap = $user_data['Alamat_Lengkap'];
    $No_Telepon = $user_data['No_Telepon'];
    
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table width="452" border="0" align="center" cellpadding="2" cellspacing="5" bgcolor="003300">
            <tr>
                <td height="40" align="center" bgcolor="5EAE9E"><strong><font color="F9FDFF">EDIT FORMULIR PENDFTARAN</font></strong></td>
            </tr>

            <tr>
                <td bgcolor="#FFFFFF"><table width="400" border="0" align="center" cellpadding="3" cellspacing="5">
                    <tr> 
                        <td>Nama0285</td>
                        <td><input type="text" name="Nama0285" value=<?php echo $Nama0285;?>></td>
                    </tr>
                    <tr> 
                        <td>Email</td>
                        <td><input type="text" name="Email" value=<?php echo $Email;?>></td>
                    </tr>
                    <tr> 
                        <td>Program Studi</td>
                        <td><input type="text" name="Program_Studi" value=<?php echo $Program_Studi;?>></td>
                    </tr>
                    <tr> 
                        <td>Jenis Kelamin</td>
                        <td><input type="text" name="Jenis_Kelamin" value=<?php echo $Jenis_Kelamin;?>></td>
                    </tr>
                    <tr> 
                        <td>Tempat Lahir</td>
                        <td><input type="text" name="Tempat_Lahir" value=<?php echo $Tempat_Lahir;?>></td>
                    </tr>
                    <tr> 
                        <td>Tanggal Lahir</td>
                        <td><input type="text" name="Tanggal_Lahir" value=<?php echo $Tanggal_Lahir;?>></td>
                    </tr>
                    <tr> 
                        <td>Agama</td>
                        <td><input type="text" name="Agama" value=<?php echo $Agama;?>></td>
                    </tr>
                    <tr> 
                        <td>Alamat Lengkap</td>
                        <td><input type="text" name="Alamat_Lengkap" value=<?php echo $Alamat_Lengkap;?>></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="No_Pendaftaran_0285" value=<?php echo $_GET['No_Pendaftaran_0285'];?>></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </form>
</body>
</html>