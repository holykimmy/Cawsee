<?php
  include('server.php');
  include('admintool.php');

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
          <div class="row-3">         
              <p class="display-3 fw-bold">Accounting</p>
              <div class="col">
              
          <div class="card shadow align-items-start">       
          </div>
  
          <table class="table table-hover">
        
          <tr>
          <th>No.</th>
          <th>รายการ</th>
          <th>จำนวน</th>
          <th>ราคา</th>
          <th></th>                 
        </tr>
        
  <?php
  
  
  $sql = "SELECT * FROM beverage";
  $result = mysqli_query($conn, $sql);
  echo "Coffee"."<br>";  
  $_SESSION['bevp'] = 0 ;
  $_SESSION['beva'] = 0 ;
  while($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>".$row['id'] ."</td><td>". $row['iname'] ."</td><td>". $row['amount'] ."</td><td>". $row['price']."<br>";
  $_SESSION['bevp'] = $_SESSION['bevp'] + $row['price'];
  $_SESSION['beva'] = $_SESSION['beva'] + $row['amount'];
}
  echo "</table>";
  echo "จำนวนสินค้าทั้งหมด  :".$_SESSION['bevp'];
  echo "<br>" ;
  echo "ยอดรวมเงินทั้งหมด  :".$_SESSION['beva'];
  echo "<br><br>" ;
  ?>
   <table class="table table-hover">
        
          <tr>
          <th>No.</th>
          <th>รายการ</th>
          <th>จำนวน</th>
          <th>ราคา</th>
          <th></th>                 
        </tr>
        
  <?php
  
  
  $sql = "SELECT * FROM tea";
  $result = mysqli_query($conn, $sql);
  echo "Milk tea"."<br>";  
  $_SESSION['teap'] = 0 ;
  $_SESSION['teaa'] = 0 ;
  while($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>".$row['id'] ."</td><td>". $row['iname'] ."</td><td>". $row['amount'] ."</td><td>". $row['price']."<br>";
  $_SESSION['teap'] = $_SESSION['teap'] + $row['price'];
  $_SESSION['teaa'] = $_SESSION['teaa'] + $row['amount'];
}
  echo "</table>";
  
  echo "จำนวนสินค้าทั้งหมด  :".$_SESSION['teap'];
  echo "<br>" ;
  echo "ยอดรวมเงินทั้งหมด  :".$_SESSION['teaa'];
  echo "<br><br>" ;
  
  ?>
   <table class="table table-hover">
        
          <tr>
          <th>No.</th>
          <th>รายการ</th>
          <th>จำนวน</th>
          <th>ราคา</th>
          <th></th>                 
        </tr>
        
  <?php
  
  
  $sql = "SELECT * FROM soda";
  $result = mysqli_query($conn, $sql);
  echo "Soda"."<br>";  
  $_SESSION['sop'] = 0 ;
  $_SESSION['soa'] = 0 ;
  while($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>".$row['id'] ."</td><td>". $row['iname'] ."</td><td>". $row['amount'] ."</td><td>". $row['price']."<br>";
  $_SESSION['sop'] = $_SESSION['sop'] + $row['price'];
  $_SESSION['soa'] = $_SESSION['soa'] + $row['amount'];
  }
  echo "</table>";

  echo "จำนวนสินค้าทั้งหมด  :".$_SESSION['sop'];
  echo "<br>" ;
  echo "ยอดรวมเงินทั้งหมด  :".$_SESSION['soa'];
  echo "<br><br>" ;
  
  ?>
   <table class="table table-hover">
        
          <tr>
          <th>No.</th>
          <th>รายการ</th>
          <th>จำนวน</th>
          <th>ราคา</th>
          <th></th>                 
          </tr>
        
  <?php
  
  
  $sql = "SELECT * FROM cake";
  $result = mysqli_query($conn, $sql);
  echo "Bekery"."<br>";  
  $_SESSION['cakep'] = 0 ;
  $_SESSION['cakea'] = 0 ;
  while($row = mysqli_fetch_array($result)) {
  echo "<tr><td>".$row['id'] ."</td><td>". $row['iname'] ."</td><td>". $row['amount'] ."</td><td>". $row['price']."<br>";
  $_SESSION['cakep'] = $_SESSION['cakep'] + $row['price'];
  $_SESSION['cakea'] = $_SESSION['cakea'] + $row['amount'];


  }

  echo "</table>";
  echo "จำนวนสินค้าทั้งหมด  :".$_SESSION['cakep'];
  echo "<br>" ;
  echo "ยอดรวมเงินทั้งหมด  :".$_SESSION['cakea'];
  echo "<br><br>" ;
  
  
  

// if(!empty($_SESSION['bekery'])){
//   $outputTable = '';
//   $total = 0;
//   //$outputTable .= "<table class='table table-bordered'><thead><tr><td>Name</td><td>Price</td><td>Quantity</td><td>Action</td> </tr></thead>";
//   foreach($_SESSION['bekery'] as $key => $value){
      
//       $total = $total + ($value['price'] * $value['amount']);
//   }
//   $outputTable .= "</table>";
//   $outputTable .= "<div class='text-center'><b>Total: ".$total."</b></div>";

  
//   ?>
  
                 
             
        </tr>
         <tr>
          <td></td>
          <td></td>
           <td></td>
               
        </tr>
  
  </table>
          
      </div>  
  </body>
  
  <?php
  
  
  mysqli_close($conn);
   
   
  ?>