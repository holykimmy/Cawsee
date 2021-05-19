<?php 
    session_start();
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header('location: login.php');
    }
    include("tool.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cawsee Coffee</title> 
    
</head>
<body style="background-color: F19A8E ;">
  <div class="container">
      <div class="row align-items-start">         
          <div class="col-8"><img src="cawsee.png" width="700"; height="250"; ></div>
          <div class="col"><img src="logo.png" width="300"; height="250"; ></div>
      </div>
  </div>  
  <div class="container"style="background-color: F19A8E ;">
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
    
  <div><br>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3  row-cols-md-4 g-4"style="background-color: F19A8E ;">

        <div style="background-color: F19A8E ;" class="col"><br>
          <div class="card shadow align-items-center">
          <img src="รับออเดอร์.PNG" width="250"height="250">
            <div class="card-body">
              <p class="card-text fw-bold">รับออเดอร์..</p>
              <div class="d-flex justify-content-between col align-items-center">
            
              </div>
            </div>
          </div><br>
        </div>

        <div class="col"><br>
          <div class="card shadow align-items-center">
            <img src="กำลังจัดเตรียม.PNG" width="250"height="250">
            <div class="card-body">
              <p class="card-text fw-bold">กำลังจัดเตรียมอาการของท่าน...</p>
              <div class="d-flex justify-content-between col align-items-center">
              </div>
            </div>
          </div><br>
        </div>

        <div  class="col"><br>
          <div class="card shadow align-items-center">
            <img src="ส่ง.PNG" width="250"height="250">
            <div class="card-body">
              <p class="card-text fw-bold">กำลังส่งอาหารของท่าน...</p>
              <div class="d-flex justify-content-between col align-items-center">
              </div>
            </div>
          </div><br>
        </div>

        <div class="col"><br>
          <div class="card shadow align-items-center">
            <img src="ส่งเสร็จ.PNG" width="250"height="250">
            <div class="card-body">
              <p class="card-text fw-bold">จัดส่งเสร็จเรียบร้อยแล้ว</p>
              <div class="d-flex justify-content-between col align-items-center">
              </div>
            </div>
          </div><br>
        </div>



      </div>
      <br><br>
  </div>


  <br><br><br><br>
  
</body>
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted fw-bold">Copyright © 2021 - <a href="index.php" style="color: black;">Cawsee</a> by Yelley <br>Phone : 099-989-0909<br> Location : 91/9 บ้าน E404 วงศ์สว่างซอย 7 ถนนวงศ์สว่าง แขวงบางซื่อ เขตบางซื่อ กรุงเทพมหานคร 10800 </span>
    </div>
  </footer>

</html>
