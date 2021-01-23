<?php
include "koneksi.php"; 

$id = $_GET['id'];
if(isset($_POST['Submit'])){
	$nim = $_POST['nim'];
	$nama= $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	$sql = mysqli_query($conn, "UPDATE latihan SET nim = '$nim', nama = '$nama', alamat = '$alamat' Where id= $id");
	
	header("location:index.php");
	
}

?>