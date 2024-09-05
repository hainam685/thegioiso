<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
	<title>Thế giới số | Laptop chính hãng.</title>
    <script src="https://kit.fontawesome.com/4702f02b2a.js" crossorigin="anonymous"></script>
    <link rel="logolap icon" type="image/png" href="img/logolap.png"/>
    <link rel="stylesheet" href="css/mainstyle.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>

    <body style="background-color: #F1F1F1;">
        
        <header>
            <nav class="header">
                <ul>
                    <li>
                        &ensp;&ensp;&ensp;&ensp;
                        <a href="index.php?task=pageuser">
                            <img src="img/logolap.png" alt="logo" width="40%" align="middle">
                        </a>
                    </li>
                    <li>
                        <p>
                            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        </p>
                    </li>
                    <li>
                    <form action="" method="GET">
                            <input type="hidden" name="task" value ="timkiem">
                            <input type="timkiem" name="tukhoa" placeholder="Search..." align="middle">
                            <input type="submit" name="timkiem" value ="Tìm Kiếm">
                        </form>
                    </li>
                    <li>
                        <p>
                            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;                        
                        </p>
                    </li>
                    <li>
                        <div class="dropacc">
                            <button class="dropaccbtn"><i class="fas fa-user-circle" style="color:white; font-size: 25px;" align="middle"></i></button>
                            <div align="left" class="dropacc-content">
                                <?php
                                if(isset( $_SESSION['level'])){
                                    echo "<a href='index.php?task=logout'> Đăng xuất</a>";
                                
                                ?>
                                <a href='index.php?task=thongtintk'>Thông Tin Tài Khoản</a>
                                <?php 
                                }
                                else{
                                ?>
                                <?php
                                header("location:index.php?task=pagelogin");
                                }
                                ?>
                            </div>
                        </div>
                    </li>
                    <li><p>&ensp;</p></li>
                    <li>
                        <button id="cart">
                        <a href="index.php?task=giohang"> <i class="fas fa-shopping-cart" style="color:white; font-size: 25px;" align="middle"></i></a>
                        </button>                        
                    </li>
                </ul>
            </nav>
        </header>
        <nav class="menu">
            <ul>
                <li><a href='index.php?task=pageuser'> Trang chủ</a></li>
                <li><a href="index.php?task=gioithieu">Giới thiệu</a></li>
                <div class="dropdown">
                    <a href="index.php?task=sanpham"><button class="dropbtn">Sản phẩm</button></a>
                      <div align="left" class="dropdown-content">
                            <a href="index.php?task=lapvanphong">Laptop Văn Phòng</a>
                            <a href="index.php?task=lapdohoa">Laptop Đồ Hoạ - Kỹ Thuật</a>
                            <a href="index.php?task=lapgaming">Laptop Gaming</a>
                            <a href="index.php?task=linhkien">Linh kiện</a>
                      </div>
                </div>
                
                <li><a href="index.php?task=hoidap">Hỏi đáp</a></li>
            </ul>
        </nav>
        <a id="scrollUp" href="#top" style="position: fixed; z-home: 1001; display: inline-block;">
            <i class="fa fa-angle-up">
            </i>
        </a>
        <section>
        <?php
        foreach($laysp as $values){ 
            
            ?>      
            <article>
                
                <img src="upload/<?php echo $values['anh']?>">
                <h3 style="font-family: 'Open Sans', sans-serif;"><?php echo $values['tensp'];?></h3>
                <h4 style="font-family: 'Open Sans', sans-serif;"><?php echo number_format($values['giaban'], 0, ',', '.'). ' VND';?></h4>
                <br>
                <form action="" method="POST">
                <input type="hidden" name ="tensp" value ="<?php echo $values['tensp'];?>">
                <input type="hidden" name="anh" value ="<?php echo $values['anh']?>"> 
                <input type="hidden" name ="giaban" value ="<?php echo $values['giaban'];?>">
                <input type="hidden" name="id_user" value ="<?php echo $_SESSION['id'];?>">
                <label for="soluong">Số Lượng</label><input type="number" name="soluong" value="1" min="1"> 
                <br>
                <br>
                <button class="button-btn" name="themgiohang" type="submit">Thêm Vào Giỏ Hàng</button></a>
                </form>
                <br>
                <br>
                <a href="index.php?task=chitietsp&idsp=<?php echo $values['id_sp']?>"><button class="button-btn" name="button" type="button">Xem Ngay</button></a>
                
            </article>
        
        <?php
        }
    
            ?>
        </section>
        <footer>
            <section class="footer">
                <article style="text-align: left;">
                    <h4>Cửa hàng laptop - Thế giới số</h4>
                    <p style="color: darkgrey;"><i class="fas fa-map-marker-alt" style="color: white; font-size: 20-px;"></i> <strong style="color: white;">Địa chỉ:</strong></p>
                </article>
                <article style="text-align: center;">
                    <h4>MẠNG XÃ HỘI</h4>
                    <nav class="scocialmedia">
                        <ul>
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-facebook-square" style="color: white; font-size: 35px; width: 3%;"></i>
                                </a>
                                &ensp;
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-instagram" style="color: white; font-size: 35px; width: 3%;"></i>
                                </a>
                                &ensp;
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-youtube" style="color: white; font-size: 35px; width: 3%;"></i>
                                </a>
                                &ensp;
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <i class="fab fa-twitter" style="color: white; font-size: 35px; width: 3%;"></i>
                                </a>
                               
                            </li>
                        </ul>
                    </nav>
                </article>
                <article style="text-align: left;">
                    <p style="color: darkgrey;"><i class="fas fa-phone" style="color: white; font-size: 20-px;"></i> <strong style="color: white;">Điện thoại:</strong> 0332651691</p>
                    <p style="color: darkgrey;"><i class="fas fa-envelope" style="color: white; font-size: 20-px;"></i> <strong style="color: white;">Mail:</strong> thegioiso@gmail.com</p>
                    <p style="color: darkgrey;"><i class="fas fa-clock" style="color: white; font-size: 20-px;"></i> <strong style="color: white;">Giờ mở cửa:</strong> 8:00 đến 22:00 tất cả các ngày trong tuần</p>
                </article>
            </section>
        </footer>
    </body>
</html>
