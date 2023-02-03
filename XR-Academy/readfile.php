<?php
include("config.php");
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $fetchVideos = $conn->query("SELECT * FROM videos ORDER BY id DESC");
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<!doctype html>
<html>
  <head>
    <title>Upload and Store video to MySQL Database with PHP</title>
  </head>
  <body>
    <div>
 
     <?php
     while($row = $fetchVideos->fetch(PDO::FETCH_ASSOC)){
       $location = explode('bit-academy', $row['location'])[1];
       $name = $row['name'];
       echo "<div style='float: left; margin-right: 5px;'>
          <video src='".$location."' controls width='320px' height='320px' ></video>
          <br>
          <span>".$name."</span>
       </div>";
     }
     ?>
 
    </div>

  </body>
</html>
