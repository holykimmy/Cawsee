<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php  
    session_start();
        include('server.php');
       if(isset($_POST['p_id'])){          
            $p_id = $_POST['p_id'];            
            $sql="SELECT * FROM cake ORDER BY p_id ASC" ;
            $result = mysqli_query($conn,$sql);             
             while($row = mysqli_fetch_array($result))
             {
                if($id==$row["p_id"]){          
                echo  '<script>  setTimeout(function() {
                            swal({
                                title: "คุณต้องการที่จะซื้อ",
                                text: "'; echo $row["p_name"]; echo ' ราคา ';echo $row["p_price"]; echo ' บาท",
                                type: "warning",
                                showCancelButton: true,
                            }, function() {
                                setTimeout(function() {
                                    swal({
                                        title: "ทำรายการสำเร็จ",
                                        text: "กำลังจัดส่ง...",
                                        type: "success",
                                        showCancelButton: false,
                                    }, function() {                   
                                        window.location = "bakery.php"; 
                                    });
                                },1000);
                            });
                        }, 1000);
                        </script>'; 
                }
            }
        }
           
?>
