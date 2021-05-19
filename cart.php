<?php

session_start();
if (!isset($_SESSION['email'])) {
  echo "<script type='text/javascript'>";
  echo "alert('กรุณาเข้าสู่ระบบ');"; 
  echo "window.location = 'login.php'; ";
  echo "</script>";
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: login.php');
}
include("tool.php");

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
    <title>UI Monk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    img {
        width: 100% !important;
        height: 100px !important;
        object-fit: contain
    }

    h3 {
        text-align: center;
        white-space: nowrap
    }

    h6 {
        text-align: center
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
            <div class="row">

<?php

$sql = "SELECT * FROM soda";
$result = mysqli_query($conn, $sql); 
while($row = mysqli_fetch_assoc($result)) {
// echo $row['id'] ." ". $row['iname'] ." ". $row['amount'] ." ". $row['price']."<br>";
?>
<div class="col-md-3 text-center mt-5">
  

</div>






<?php
}

?>
</div>
            </div>
            <div class="col-mt-1">

            </div>
            <div class="col-md-12">
            <h3 class='text-center'> Checkout</h3>
            <div id="displayCheckout">
            <?php 
                if(!empty($_SESSION['cart'])){
                    $outputTable = '';
                    $total = 0;
                    $outputTable .= "<table class='table table-bordered'><thead><tr><td>Name</td><td>Price</td><td>Quantity</td><td>Action</td> </tr></thead>";
                    foreach($_SESSION['cart'] as $key => $value){
                        $outputTable .= "<tr><td>".$value['p_name']."</td><td>".($value['p_price'] * $value['p_quantity']) ."</td><td>".$value['p_quantity']."</td><td><button id=".$value['p_id']." class='btn btn-danger delete'>Delete</button></td></tr>";  
                        $total = $total + ($value['p_price'] * $value['p_quantity']);
                    }
                    $outputTable .= "</table>";
                    $outputTable .= "<div class='text-center'><b>Total: ".$total."</b></div>";
                    echo $outputTable;
                    
                    
                }

?>


            </div> 
            </div>
            
        </div>
        
    

        <?php
    echo "<td><a href='status.php?ID=$row3[0]' onclick=\"return confirm('ยืนยัน !!!')\" class='btn btn-success  btn-xs'>ยืนยันคำสั่งซื้อ</a></td> ";
    echo "</tr>";
?>
       
    </div>


    <script>
    $(document).ready(function() {
         alldeleteBtn = document.querySelectorAll('.delete')
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })

function deleteINsession(){
    removable_id = this.id;
    $.ajax({
                url:'cartedit.php',
                method:'POST',
                dataType:'json',
                data:{ 
                      id_to_remove:removable_id,
                      action:'remove' 
                },
                success:function(data){
                        $('#displayCheckout').html(data);
           alldeleteBtn = document.querySelectorAll('.delete')
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })
                      }
              }).fail( function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    });

}


        $('.add').click(function() { 
            id = $(this).data('id');
            name = $('#iname' + id).val();
            price = $('#price' + id).val();
            quantity = $('#quantity' + id).val();
              $.ajax({
                url:'cartedit.php',
                method:'POST',
                dataType:'json',
                data:{
                      cart_id : id,
                      cart_name : iname,
                      cart_price : price,
                      cart_quantity : amount,
                      action:'add' 
                },
                success:function(data){
                        $('#displayCheckout').html(data);
                        alldeleteBtn = document.querySelectorAll('.delete')
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })
                      }
              }).fail( function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    });
        
        })
    })
    
	
	
    </script>


</body>

</html>

<?php include('footer.php');?>
<?php


mysqli_close($conn);
 
 
?>