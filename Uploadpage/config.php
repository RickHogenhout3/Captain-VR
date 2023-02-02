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
    }  ?>
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
    }
?>
>>>>>>> 6c336d213541abdd2d845fec8020da9cc54eff1c
