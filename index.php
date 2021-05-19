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
<body>
  <div class="container">
      <div class="row align-items-start">         
          <div class="col-8"><img src="cawsee.png" width="700"; height="250"; ></div>
          <div class="col"><img src="logo.png" width="300"; height="250"; ></div>
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
    
  <div>
        <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class=""></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class=""></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
            
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="600" xmlns="http://www.w3.org/2000/svg" role="img"  aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#FFAe92"></rect></svg>
              <div class="carousel-caption d-none d-md-block">
              <div class="col-md-4 p-lg mx-auto" >
                <h2 class="display-3 fw-normal ">คาปูชิโน่</h2>
                <img src="คาปูชิโน่.png" width="200"height="350">
              </div>           
                <h5>เมนูแนะนำกาแฟวันนี้</h5>
                <a class="btn btn-outline-light" href="coffee.php">สั่งซื้อ</a>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#F7B2A9"></rect></svg>
              <div class="carousel-caption d-none d-md-block">
              <div class="col-md-4 p-lg mx-auto">
                <h2 class="display-4 fw-normal ">ชานมไต้หวัน</h2>
                <img src="ชานมไต้หวัน.png" width="200"height="350">
              </div>
                <h5>เมนูแนะนำชานมวันนี้</h5>
                <a class="btn btn-outline-light" href="milktea.php">สั่งซื้อ</a>
              </div>
            </div>
            
            <div class="carousel-item ">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#F8D7c1"></rect></svg>
              <div class="carousel-caption d-none d-md-block">
              <div class="col-md-4 p-lg mx-auto">
                  <h2 class="display-4 fw-normal ">โซดาแดงมะนาว</h2>
                  <img src="แดงโซดามะนาว.PNG" width="200"height="350"> 
                </div>
                <h5>เมนูแนะนำโซดาวันนี้</h5>
                <a class="btn btn-outline-light" href="soda.php">สั่งซื้อ</a>
              </div>
            </div>

            <div class="carousel-item ">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#fcc1b1"></rect></svg>

              <div class="carousel-caption d-none d-md-block">
                <div class="col-md-4 p-lg mx-auto">
                  <h2 class="display-4 fw-normal ">เค้กช็อกโกแลต</h2>
                  <img src="choc.jpG" width="250"height="350"> 
                </div>
                <h5>เมนูแนะนำเค้กวันนี้</h5>
                <a class="btn btn-outline-light" href="bakery.php">สั่งซื้อ</a>
              </div>
            </div>
          </div>
          
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
        </div>
      </div>


  <div class="col-md-9 p-lg-10 mx-auto my-5">
  <div class="row mb-2">

    <div class="col-md-6">
      <div style="background-color:F6D4D9;" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2" style="color:#8B0009;" >Beverage</strong>
          <h3 class="mb-0 fw-bold">เครื่องดื่ม</h3>
          <div class="mb-1 text-muted"><br></div>
          <p style="color:#8B0009;" class="card-text mb-auto">เครื่องดื่ม เริ่มต้น 30 บาทเท่านั้น กาแฟ โกโก้ หอมกรุ่นคัดสรรวัตถุดิบอย่างดี ทำสดใหม่ทุกแก้ว ใส่ใจทุกกรรมวิธี</p>
          <a href="coffee.php" style="color:#8B0009;" class="stretched-link"><br>คลิกเพื่อเลือกซื้อ</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <div class="col"><img src="scoffee.jpg" width="250"; height="250"; ></div>         
        </div>
      </div>
    </div>
  

    <div class="col-md-6">
      <div style="background-color:EBC4D4;" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 " style="color:#8B0009;">Bakery</strong>
          <h3 class="mb-0 fw-bold">ขนมเค้ก</h3>
          <div class="mb-1 text-muted"><br></div>
          <p style="color:#8B0009;" class="mb-auto">เค้กของร้านเรา ปรุงอย่างพิถีพิถัน ตั้งใจอบทุกชิ้น คัดสรรชั้นเลิศ มาปรุงเป็นของหวาน สำหรับทานกับคู่เครื่องดื่มสุดพิเศษ เข้ากั๋น เข้ากัน</p>
          <a href="bakery.php" style="color:#8B0009;" class="stretched-link">คลิกเพื่อเลือกซื้อ</a>
        </div>

        <div class="col-auto d-none d-lg-block">
          <div class="col"><img src="scake.jpg" width="250"; height="250"; ></div> 
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div style="background-color:EDB3B6;" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 " style="color:#8B0009;">Soda</strong>
          <h3 class="mb-0 fw-bold">โซดา</h3>
          <div class="mb-1 text-muted"><br></div>
          <p style="color:#8B0009;"class="card-text mb-auto">เครื่องดื่มผสมโซดา ซ่าส์ สดชื่น ถึงใจ ดื่มคลายร้อนจากอากาศประเทศไทยที่ร้อนได้ทั้งปี </p>
          <a href="soda.php" style="color:#8B0009;" class="stretched-link"><br>คลิกเพื่อเลือกซื้อ</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <div class="col"><img src="soda.jpg" width="250"; height="250"; ></div> 
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div style="background-color:E7A19E;" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 " style="color:#8B0009;">Tea</strong>
          <h3 class="mb-0 fw-bold">ชานม</h3>
          <div class="mb-1 text-muted"><br></div>
          <p style="color:#8B0009;" class="mb-auto">เครื่องดื่มที่มีส่วนผสมของชานม หวาน หอม มัน อร่อย ใช้วัถุดิบเกรดพรีเมี่ยม รับประกันความอร่อย</p>
          <a href="milktea.php#" style="color:#8B0009;" class="stretched-link">คลิกเพื่อเลือกซื้อ</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <div class="col"><img src="milktea.jpg" width="250"; height="250"; ></div> 
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted fw-bold">Copyright © 2021 - <a href="index.php" style="color: black;">Cawsee</a> by Yelley <br>Phone : 099-989-0909<br> Location : 91/9 บ้าน E404 วงศ์สว่างซอย 7 ถนนวงศ์สว่าง แขวงบางซื่อ เขตบางซื่อ กรุงเทพมหานคร 10800 </span>
    </div>
  </footer>

</html>
