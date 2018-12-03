<?php

include_once("db.php");

$Id = $_GET['id'];

$sql = ("DELETE FROM job WHERE ID='$Id'");
$result = $conn->query($sql); 

echo 'Работник удален!';

?>