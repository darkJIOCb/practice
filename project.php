<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Практика</title>
 </head>

<body>



<table border="0">
   <caption>Таблица работников</caption>

<?php



   include_once("db.php");
   
   $sql = "SELECT * FROM `job`";
   $result = $conn->query($sql); 
  
  
  ?>
   
   <tr>
    <td><?php echo 'id '?></td>
    <td><?php echo 'Name ' ?></td>
    <td><?php echo 'Age ' ?></td>
    <td><?php echo 'Salary '?></td>
    <td><?php echo 'Edit ' ?></td>
    <td><?php echo 'Delete ' ?></td>
  </tr>
   

  <?php
    
    while ($row = $result->fetch_assoc())
   
   {?>

   	
   	<tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['Name'] ?></td>
      <td><?php echo $row['Age'] ?></td>
      <td><?php echo $row['Salary']?></td>
      <td><a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
    </tr>
      
    <?php  
   }
  

?>
</table>

<a href="add.php">Добавить работника</a>

</body>
</html>
