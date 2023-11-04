<?php


$con = mysqli_connect('localhost', 'root', '','wad');


$txtPekerja = $_POST['txtPekerja'];
$txtStatus = $_POST['txtStatus'];
$txtGender = $_POST['txtGender'];
$txtKet = $_POST['txtKet'];


$sql = "INSERT INTO `table_wad` (`id`, `pekerja`, `status`, `gender`, `ket`) VALUES ('0', '$txtPekerja', '$txtStatus', '$txtGender', '$txtKet')";


$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Data Pekerja telah diinput! ";
}

?>