<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
    <title>Добавление работника</title>
</head>

<body>



<form method="POST" action="add.php">


Имя работника:<br />
<input type="text" name="Name" /><br />
Возраст работника:<br />
<input type="text" name="Age" /><br />
Зароботная плата работника:<br />
<input type="text" name="Salary" /><br />

<input type="submit" name="add" value="Добавить" /><br />


</form>


<?php

include_once("db.php");

if (isset($_POST['Name'])) {$Name = $_POST['Name'];}
if (isset($_POST['Age'])) {$Age = $_POST['Age'];}
if (isset($_POST['Salary'])) {$Salary = $_POST['Salary'];}


	$sql = ("INSERT INTO job(Name, Age, Salary) VALUES ('$Name', '$Age', '$Salary')");
    $result = $conn->query($sql); 





?>



</body>
</html>