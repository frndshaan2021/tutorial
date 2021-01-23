<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="bootstrap/js/jquery-3.5.1.min.js"></script>

<script>

$(document).ready(function(){
	$("#hide").click(function(){
		$("p").hide();
	});
	$("#show").click(function(){
		$("p").show();
	});
});
</script>
<script>


$(document).ready(function(){
	$("#novak").click(function(){
		$.post("demo_test.php",
		{
			name: "Novak",
			city: "Yolanda"
		},
		function(data, status){
			document.getElementById("demo").innerHTML += data + "<br>";
		}
		);
	});
});
</script>

</head>
<body>
<?php 

require_once('koneksi.php'); 
$sql = mysqli_query($conn, "SELECT * FROM latihan");

?>

<div class="container">
  <a href="add.php">Add New</button></a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php while($data = mysqli_fetch_array($sql)) { ?>
    <tr>
      <td><?php echo $data['nim']; ?></td>
      <th><?php echo $data['nama']; ?></th>
      <td><?php echo $data['alamat']; ?></td>
	  <td><a href='edit.php?id=<?php echo $data['id']; ?>'>Edit</a> | <a href='delete.php?id=<?php echo $data['id']; ?>'>Delete</a></td>
    </tr>
  <?php  } ?>
  </tbody>
</table>

<button id="hide">Hide</button>
<button id="show">Show</button>


<button id="novak">Send an HTTP POST request to a page and get the result back</button>

<p  id="demo"></p>

</div>


</body>
</html>