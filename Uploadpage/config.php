<<<<<<< HEAD
<?php
 session_start();
 $servername = "localhost";
 $username = "bit_academy";
 $password = "bit_academy";
 $dbname = "captain_vr";
 $charset = "utf8mb4";
try {
      $connect = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
      catch (PDOException $error) {
        $message = $error->getMessage();
=======
<?php
 session_start();
 $servername = "localhost";
 $username = "bit_academy";
 $password = "bit_academy";
 $dbname = "captain_vr";
 $charset = "utf8mb4";
try {
      $connect = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
      catch (PDOException $error) {
        $message = $error->getMessage();
>>>>>>> 3b31429a04539209dbaf8af5acb697f8b24b37d7
    }  ?>