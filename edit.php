<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
    <title>Редактирование работника</title>
</head>

<body>


<?php

include_once("db.php");


$Id = $_GET['id'];

$sql = "SELECT * FROM `job` WHERE ID='$Id'";
$result = $conn->query($sql); 

$row = $result->fetch_assoc();

if (isset($_POST['save']))
{
	if (isset($_POST['id'])) {$id = $_POST['id'];}
	if (isset($_POST['Name'])) {$Name = $_POST['Name'];}
	if (isset($_POST['Age'])) {$Age = $_POST['Age'];}
	if (isset($_POST['Salary'])) {$Salary = $_POST['Salary'];}

	$sql = ("UPDATE job SET id='$id', Name='$Name', Age='$Age', Salary='$Salary' WHERE ID='$Id'");
    $result = $conn->query($sql); 

      
}


?>

<form method="POST" action="edit.php?id=<?php echo $Id; ?>">


ID работника:<br />
<input type="text" name="id" value="<?php echo $row['id']; ?>"/><br />
Имя работника:<br />
<input type="text" name="Name" value="<?php echo $row['Name']; ?>"/><br />
Возраст работника:<br />
<input type="text" name="Age" value="<?php echo $row['Age']; ?>"/><br />
Зароботная плата работника:<br />
<input type="text" name="Salary" value="<?php echo $row['Salary']; ?>"/><br />

<input type="submit" name="save" value="Сохранить" /><br />


</form>



</body>
</html>