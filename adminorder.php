<?php
  include('server.php');
  include('admintool.php');
  
  session_start();
 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cawsee Coffee</title> 
</head>
<body>
    <div class="container">
      <br>

      <?php 
      $sql = "SELECT * FROM user1";
      $result = mysqli_query($conn, $sql); 
      while($row = mysqli_fetch_array($result)) {

      ?>
      <h1> Order </h1>
      <div class="card shadow initial-scale=3.0 align-items-letf col-md-6 ">
        <h6><br></h6>
      <h3><?php echo $row['id']." ". $row['fname'] ." ". $row['lname'] ." "."<br>";?></h3>
      <h3> Tel       :<?php echo $row['phone']."<br>";?></h3>
      <h3> Email     :<?php echo $row['email']."<br>";?></h3>
      <h3> Adress    :<?php echo $row['address']."<br>";?></h3>
  
      </div>
  

    <?php
    
   echo "<td><a href='del_dataorder.php?ID=$row[0]' onclick=\"return confirm('ตกลง !!!')\" class='btn btn-success  btn-xs'> ส่งสินค้าแล้ว </a></td> ";
   echo "</tr>";
  
      }

    ?>
    
    </div>  
    <br></br>
</body>
<?php include('footer.php') ;?>
  </html>
