<?php
echo  '<script>  setTimeout(function() {
                    swal({
                        title: "คุณต้องการที่จะซื้อ",
                        text: "$name ราคา $price",
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
                                //window.location = "check.php"; 
                            });
                        },1000);
                    });
                }, 1000);
                </script>';