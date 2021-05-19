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

<div class="container">
        <div class="row align-items-start">         
            <div class="col-6"><img src="cawsee.png" id="img1" ; ></div>
            <div class="col-6"><img src="logo.png" id="img1" ; ></div>
        </div>
    </div>  
    <div class="container">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>   
    </div>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cawsee Coffee</title> 
</head>

    
    <div class="album py-5 " style="background-color: F19A8E ;">
    <div class="container">
      <div style="background-color: white ;" > 
      <h1 align ="center" class="display-1" style="color: brown;"> Coffee </h1>
      </div>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    img {
        display: flex ;
        justify-content: space-between;
        width: 100% !important; 
        height: 300px !important; 
        object-fit: contain
    }
    
    h3 {
        text-align: center;
        white-space: nowrap
    }

    h6 {
        text-align: center
    }
    #img1{
        width: 100% ;
        height: 100% ;
    } 

    </style>

    
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-6"> -->
            <!-- <div class="row"> -->

<?php

$sql = "SELECT * FROM cake";
$result = mysqli_query($conn, $sql); 
while($row = mysqli_fetch_assoc($result)) {
//echo $row['id'] ." ". $row['name'] ." ". $row['amount'] ." ". $row['price']."<br>";
?>
<div class="col-md-4 text-center mt-5">
<div class="card shadow align-items-center ">
    <img src="img/<?php echo $row['img']?>" alt="">
    <h3><?php echo $row['iname']?></h3>
    <h6>Price: <?php echo $row['price']?></h6>
    <div class="form-group">
        
    <input class="cart-quantity-input text-center " type="number" min="0" value="1" id="quantity<?php echo $row['id']?>">                  </input>
        <input type="hidden" id="name<?php echo $row['id']?>" value='<?php echo $row['iname']?>'>
        <input type="hidden" id="price<?php echo $row['id']?>" value='<?php echo $row['price']?>'>

        <button class='btn btn-danger add' data-id="<?php echo $row['id']?>">Add to Cart</button>
    </div>    

    </div>

</div>






<?php
}

?>

</div>
      


       
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
                url:'cart.php',
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
            name = $('#name' + id).val();
            price = $('#price' + id).val();
            quantity = $('#quantity' + id).val();
            console.log(id);
              $.ajax({
                url:'cartedit.php',
                method:'POST',
                dataType:'json',
                data:{
                      cart_id : id,
                      cart_name : name,
                      cart_price : price,
                      cart_quantity : quantity,
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