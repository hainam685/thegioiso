<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
	<title>Laptop Đồ Hoạ - Kỹ Thuật</title>
	<script src="https://kit.fontawesome.com/4702f02b2a.js" crossorigin="anonymous"></script>
	<link rel="logolap icon" type="image/png" href="img/logolap.png"/>
    <link rel="stylesheet" href="css/mainstyle.css"/>
    <link rel="stylesheet" href="css/pagesanpham.css">
    </head>

    <body style="background-color: #F1F1F1;">
        <header>
            <nav class="header">
                <ul>
                    <li>
                    <?php
                                if(isset( $_SESSION['level'])){

                        ?>
                        &ensp;&ensp;&ensp;&ensp;
                        <a href="index.php?task=pageuser">
                            <img src="img/logolap.png" alt="logo" width="40%" align="middle">
                        </a>
                        <?php
                                }
                            else{
                        
                        ?>
                         &ensp;&ensp;&ensp;&ensp;
                        <a href="index.php?task=pagehome">
                            <img src="img/logolap.png" alt="logo" width="40%" align="middle">
                        </a>
                        <?php
                            }
                        ?>
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
                                }
                                else{
                               ?> 
                                <a href="index.php?task=pagelogin">Đăng nhập</a>
                                <a href="index.php?task=pageregister">Đăng ký</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </li>
                    <li><p>&ensp;</p></li>
                    <li>
                        <button class="dropaccbtn">
                        <a href="index.php?task=giohang"> <i class="fas fa-shopping-cart" style="color:white; font-size: 25px;" align="middle"></i></a>
                        </button>                        
                    </li>
                </ul>
            </nav>
        </header>

        <nav class="menu">
            <ul>
                <li><?php
                                if(isset( $_SESSION['level'])){
                                    echo "<a href='index.php?task=pageuser'> Trang chủ</a>";
                                } 
                                else{                            
                               ?>
                                <a href="index.php?task=pagehome">Trang chủ</a>
                               <?php
                                }
                    ?></li>
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

        <section class="brand">
            <article><a href="#link" target="_blank"><img src="img/brand/apple.png" style="width:20%"></a></article>
            <article><a href="#link" target="_blank"><img src="img/brand/microsoft.png" style="width:24%"></a></article>
            <article><a href="#link" target="_blank"><img src="img/brand/asus.png" style="width:85%"></a></article>
            <article><a href="#link" target="_blank"><img src="img/brand/acer.png" style="width:75%"></a></article>
            <article><a href="#link" target="_blank"><img src="img/brand/dell.png" style="width:24%"></a></article>
            <article><a href="#link" target="_blank"><img src="img/brand/lenovo.png" style="width: 90%"></a></article>
            <article><a href="#link" target="_blank"><img src="img/brand/hp.png" style="width:25%"></a></article>
            <article><a href="#link" target="_blank"><img src="img/brand/msi.png" style="width:70%"></a></article>
        </section>

        <section class="cost">
            <article><a href="#">Dưới 5 triệu</a></article>
            <article><a href="#">5 triệu đến 10 triệu</a></a></article>
            <article><a href="#">10 triệu đến 15 triệu</a></a></article>
            <article><a href="#">15 triệu đến 25 triệu</a></a></article>
            <article><a href="#">Trên 25 triệu</a></a></article>
        </section>

        <div class="container">
            <br>
            <p class="linkk" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;">
                <a href="index.php?task=pagehome">Trang chủ</a> > 
                <a href="index.php?task=sanpham"> Sản phẩm</a> > Laptop đồ hoạ - kỹ thuật
            </p>
        </div>

        <a id="scrollUp" href="#top" style="position: fixed; z-home: 1001; display: inline-block;">
            <i class="fa fa-angle-up">
            </i>
        </a>

        <hr style="margin-left: 3.5em; margin-right: 3.5em;">
            
        <!--
        <nav class="woocommerce-breadcrumb">
            <a href="https://laptoptcc.com">Trang chủ</a>
            <span class="delimiter"><i class="fa fa-angle-right"></i></span>
            <a href="https://laptoptcc.com/danh-muc/brand/">Hãng</a>
            <span class="delimiter"><i class="fa fa-angle-right"></i></span>Laptop Dell</nav>    
        -->
        
        <section class="product">
        <?php
        foreach($layspdohoa as $values){ 
            ?>      
            <article>
                <img src="upload/<?php echo $values['anh']?>">
                <h3 style="font-family: 'Open Sans', sans-serif;"><?php echo $values['tensp'];?></h3>
                <h4 style="font-family: 'Open Sans', sans-serif;"><?php echo number_format($values['giaban'], 0, ',', '.'). ' VND';?></h4>
                <form action="" method="POST">
                <input type="hidden" name ="tensp" value ="<?php echo $values['tensp'];?>">
                <input type="hidden" name="anh" value ="<?php echo $values['anh']?>"> 
                <input type="hidden" name ="giaban" value ="<?php echo $values['giaban'];?>">
                <?php
                if(isset($_SESSION['level'])&&$_SESSION['level']==1){
                ?>
                <input type="hidden" name="id_user" value ="<?php echo $_SESSION['id'];?>">
                <?php
                }
                ?>
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
        
        <center>
            <div class="button_num">
                <ul>
                    <li>
                        <a href="#"><button class="button-num" name="button" type="button">1</button></a>
                    </li>
                    <li>
                        <a href="#"><button class="button-num" name="button" type="button">2</button></a>
                    </li>
                </ul>
            </div>
        </center>

        <footer>
            <section class="footer">
                <article style="text-align: left;">
                    <h4>Cửa hàng laptop - Thế giới số</h4>
                    <p style="color: darkgrey;"><i class="fas fa-map-marker-alt" style="color: white; font-size: 20-px;"></i> <strong style="color: white;">Địa chỉ:</strong></p>                </article>
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