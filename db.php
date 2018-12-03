<?php

 $hostname = 'localhost';
   $username = 'root';
   $pass = '';
   $basename = 'my_bd';
   $conn = new mysqli($hostname, $username, $pass, $basename) or die       ('Невозможно открыть базу');

  
?>