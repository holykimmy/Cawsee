<?php
  session_start();
  include('server.php');
  include('admintool.php');
  echo '<div class="container">';
  $query = "SELECT * FROM beverage ORDER BY id ASC" ;
  $result = mysqli_query($conn, $query); 
  echo '<div class="col col-mb">';

  echo '<h2 class="display-5 fw-normal "><br>Beverage</h2>';

  echo "<td><a href='addbev.php?ID=$row[0]' onclick=\"return confirm('ต้องการเพิ่มรายการสินค้า!!!')\" class='btn btn-success  btn-xs'>เพิ่มสินค้า</a></td> ";
    echo "</tr>";

  echo ' <table class="table table-hover">';
      echo "
        <tr>
        <td>No.</td>
        <td>รายการ</td>
        <td>จำนวนที่เหลือ</td>
        <td>ราคา</td>
        <td></td>                 
      </tr>";

      //console.log($resul)
      
    while($row = mysqli_fetch_array($result)) {
      
      //console.log($row)
    echo "<tr>";
      echo "<td>" .$row["id"] .  "</td> ";
      echo "<td>" .$row["iname"] .  "</td> ";
      echo "<td>" .$row["amount"].  "</td> ";
      echo "<td>" .$row["price"] .  "</td> ";

      echo "<td><a href='del_databev.php?ID=$row[0]' onclick=\"return confirm('คุณแน่ใจแล้วหรอที่จะลบ !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";
    }
  echo "</table>";

  $query1 = "SELECT * FROM cake ORDER BY id ASC" ;
  $result1 = mysqli_query($conn, $query1); 
  echo '<div class="container">';
  
  echo '<h2 class="display-5 fw-normal ">Bakery</h2>';

  echo "<td><a href='addber.php?ID=$row[0]' onclick=\"return confirm('ต้องการเพิ่มรายการสินค้า!!!')\" class='btn btn-success  btn-xs'>เพิ่มสินค้า</a></td> ";
    echo "</tr>";

  echo ' <table class="table table-hover">';
      echo "
        <tr>
        <td>No.</td>
        <td>รายการ</td>
        <td>จำนวนที่เหลือ</td>
        <td>ราคา</td>
        <td></td>                 
      </tr>";
    while($row1 = mysqli_fetch_array($result1)) {
    echo "<tr>";
      echo "<td>" .$row1["id"] .  "</td> ";
      echo "<td>" .$row1["iname"] .  "</td> ";
      echo "<td>" .$row1["amount"] .  "</td> ";
      echo "<td>" .$row1["price"] .  "</td> ";

      echo "<td><a href='del_datacake.php?ID=$row1[0]' onclick=\"return confirm('คุณแน่ใจแล้วหรอที่จะลบ !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";
    }
  echo "</table>";

  $query2 = "SELECT * FROM tea ORDER BY id ASC" ;
  $result2 = mysqli_query($conn, $query2); 
  echo '<div class="container">';
  
  echo '<h2 class="display-5 fw-normal ">Milk Tea</h2>';

  echo "<td><a href='addtea.php?ID=$row[0]' onclick=\"return confirm('ต้องการเพิ่มรายการสินค้า!!!')\" class='btn btn-success  btn-xs'>เพิ่มสินค้า</a></td> ";
    echo "</tr>";

  echo ' <table class="table table-hover">';
      echo "
        <tr>
        <td>No.</td>
        <td>รายการ</td>
        <td>จำนวนที่เหลือ</td>
        <td>ราคา</td>
        <td></td>                 
      </tr>";
    while($row2 = mysqli_fetch_array($result2)) {
      echo $row2["name"];
    echo "<tr>";
      echo "<td>" .$row2["id"] .  "</td> ";
      echo "<td>" .$row2["iname"] .  "</td> ";
      echo "<td>" .$row2["amount"] .  "</td> ";
      echo "<td>" .$row2["price"] .  "</td> ";
      

      echo "<td><a href='del_datatea.php?ID=$row2[0]' onclick=\"return confirm('คุณแน่ใจแล้วหรอที่จะลบ !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";
    }
  echo "</table>";

   
  $query3 = "SELECT * FROM soda ORDER BY id ASC" ;
  $result3 = mysqli_query($conn, $query3); 
  echo '<div class="container">';
  
  echo '<h2 class="display-5 fw-normal ">Soda</h2>';

  echo "<td><a href='addsoda.php?ID=$row[0]' onclick=\"return confirm('ต้องการเพิ่มรายการสินค้า!!!')\" class='btn btn-success  btn-xs'>เพิ่มสินค้า</a></td> ";
    echo "</tr>";

  echo ' <table class="table table-hover">';
      echo "
        <tr>
        <td>No.</td>
        <td>รายการ</td>
        <td>จำนวนที่เหลือ</td>
        <td>ราคา</td>
        <td></td>                 
      </tr>";
    while($row3 = mysqli_fetch_array($result3)) {
    echo "<tr>";
      echo "<td>" .$row3["id"] .  "</td> ";
      echo "<td>" .$row3["iname"] .  "</td> ";
      echo "<td>" .$row3["amount"] .  "</td> ";
      echo "<td>" .$row3["price"] .  "</td> ";

      echo "<td><a href='del_datasoda.php?ID=$row3[0]' onclick=\"return confirm('คุณแน่ใจแล้วหรอที่จะลบ !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";
    }
  echo "</table>";
   
  mysqli_close($conn);
?>
