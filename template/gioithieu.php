<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
	<title>Giới thiệu</title>
	<script src="https://kit.fontawesome.com/4702f02b2a.js" crossorigin="anonymous"></script>
	<link rel="logolap icon" type="image/png" href="img/logolap.png"/>
    <link rel="stylesheet" href="css/mainstyle.css"/>
    <link rel="stylesheet" href="css/pagegioithieu.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
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
                    ?> </li>
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

        <div class="container">
            <br>
            <p class="linkk" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;">
                <a href="index.php?task=pagehome">Trang chủ</a> > Giới thiệu
            </p>
        </div>
        
        <hr style="margin-left: 3.5em; margin-right: 3.5em;">

        <a id="scrollUp" href="#top" style="position: fixed; z-home: 1001; display: inline-block;">
            <i class="fa fa-angle-up">
            </i>
        </a>

        <section class="gioithieu">
            <article>
                <h1 style="font-family: 'Open Sans', sans-serif; text-align: left; color: lightseagreen; padding-left: 2em; font-size: 24px;">Thế giới số</h1>
                <p style="text-align: left; font-size: 20px; font-family: 'Open Sans', sans-serif; padding-left: 2em;">Chuyên phân phối các loại laptop, phụ kiện chính hãng. 
                    Chúng tôi cam kết mang đến cho khách hàng những sản phẩm chất lượng với giá thành hợp lý</p> 
            </article>
            <article>
                <img src="img/laptop.png" style="width: 70%;">
            </article>
        </section>
        <section class="gioithieu">
            <article>
                <img src="img/cho-thue-laptop-10-1024x576.jpg" style="width: 70%;">
            </article>
            <article>
                <h1 style="font-family: 'Open Sans', sans-serif; text-align: left; color: lightseagreen; padding-right: 2em; font-size: 24px;">LĨNH VỰC KINH DOANH</h1>
                <p style="text-align: left; font-size: 20px; font-family: 'Open Sans', sans-serif; padding-right: 2em;">Thế giới số luôn cam kết đem lại những sản phẩm công nghệ tiên tiến, chất lượng cao của các hãng sản xuất hàng đầu thế giới. Sản phẩm của chúng tôi cung cấp bao gồm các thiết bị máy tính, các linh phụ kiện,… Thế giới số luôn nỗ lực cung cấp cho khách hàng trải nghiệm mua sắm hoàn hảo nhất.</p> 
            </article>
        </section>
        <section class="gioithieu">
            <article>
                <h1 style="font-family: 'Open Sans', sans-serif; text-align: left; color: lightseagreen; padding-left: 2em; font-size: 24px;">ĐỘI NGŨ NHÂN VIÊN</h1>
                <p style="text-align: left; font-size: 20px; font-family: 'Open Sans', sans-serif; padding-left: 2em;">Đội ngũ nhân lực của Thế giới số luôn được chọn lọc kỹ càng trước khi trải qua các quá trình đào tạo. Chúng tôi cập nhật thường xuyên những kiến thức sản phẩm mới nhất, không ngừng nâng cao trình độ chuyên môn kỹ thuật và tác phong giao tiếp với khách hàng luôn được chú trọng. 
                    Chúng tôi xem khả năng làm hài lòng khách hàng là thước đo thành công của chính mình.</p> 
            </article>
        </section>
        <section class="gioithieu">
            <article>
            </article>
            <article>
                <h1 style="font-family: 'Open Sans', sans-serif; text-align: left; color: lightseagreen; padding-right: 2em; font-size: 24px;">THÔNG TIN LIÊN LẠC</h1>
                <p style="color: black; text-align: left; padding-right: 2em; font-size: 20px; font-family: 'Open Sans', sans-serif;"><i class="fas fa-map-marker-alt" style="color: black; font-size: 20-px;"></i> <strong style="color: black;">Địa chỉ:</strong> </p>
                <p style="color: black; text-align: left; padding-right: 2em; font-size: 20px; font-family: 'Open Sans', sans-serif;"><i class="fas fa-phone" style="color: black; font-size: 20-px;"></i> <strong style="color: black;">Điện thoại:</strong> 0332651691</p>
                <p style="color: black; text-align: left; padding-right: 2em; font-size: 20px; font-family: 'Open Sans', sans-serif;"><i class="fas fa-envelope" style="color: black; font-size: 20-px;"></i> <strong style="color: black;">Mail:</strong> thegioiso@gmail.com</p>
            </article>
        </section>

        
        
        <footer>
            <section class="footer">
                <article style="text-align: left;">
                    <h4>Cửa hàng laptop - Thế giới số</h4>
                    <p style="color: darkgrey;"><i class="fas fa-map-marker-alt" style="color: white; font-size: 20-px;"></i> <strong style="color: white;">Địa chỉ:</strong> </p>
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