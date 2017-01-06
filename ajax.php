<?php
$_POST['id'];
require_once('config/config.php');
require_once("libs/functions.php");
$id=(int)$_POST['id'];
$query = "SELECT * FROM accaunts WHERE id = ".$id;
$row = selectone($query);
echo "<h2> телефон: ".$row['phone']. "</h2>";
echo  "<h3>".$row['address']."</h3>";



?>