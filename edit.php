<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="bootstrap/js/jquery-3.5.1.min.js"></script>

<body>
<div class="container">
<a href="index.php">Go to Home</a>
    <br/><br/>

<?php
include_once("koneksi.php");

// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM latihan WHERE id=$id");

while($data = mysqli_fetch_array($result))
{
?>
	<form action="update.php?id=<?php echo $id; ?>" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim" value="<?php echo $data['nim']; ?>"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Update"></td>
            </tr>
        </table>
    </form>
<?Php } ?>




</div>
</body>
</html>