<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="bootstrap/js/jquery-3.5.1.min.js"></script>

<body>
<div class="container">
<a href="index.php">Go to Home</a>
    <br/><br/>
	
<form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
	
<?php
include "koneksi.php"; 
if(isset($_POST['Submit'])){
	$nim = $_POST['nim'];
	$nama= $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	$sql = mysqli_query($conn, "INSERT INTO latihan(nim, nama, alamat) values ('$nim', '$nama', '$alamat')");
	
	header("location:index.php");
	
}

?>

</div>
</body>
</html>