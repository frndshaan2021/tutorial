<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "pro");

$conn= mysqli_connect(HOST, USER, PASS, DB) OR DIE("Database tidak bisa kehubung");

$result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id ASC");

$myArray = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }

$fruits = ["apple", "orange", "cherry"];
echo json_encode($myArray);
?>