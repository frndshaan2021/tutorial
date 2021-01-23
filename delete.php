<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM latihan where id = $id");

header("location:index.php");

?>