<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
	<title>TGS | Laptop chính hãng.</title>
    <script src="https://kit.fontawesome.com/4702f02b2a.js" crossorigin="anonymous"></script>
    <link rel="logolap icon" type="image/png" href="img/logolap.png"/>
    <link rel="stylesheet" href="css/mainstyle.css"/>
    <link rel="stylesheet" href="css/chitietsanpham.css"/>
    <link rel="stylesheet" href="css/pagesanpham.css"/>
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

                                
                                  <a href="index.php?task=pagelogin">Đăng nhập</a>";
                                  
                                  <a href="index.php?task=pageregister">Đăng ký</a>";
                                
                                <?php
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
                <li> <?php
                                if(isset( $_SESSION['level'])&&$_SESSION['level']==1){
                                    echo "<a href='index.php?task=pageuser'> Trang chủ</a>";
                                } 
                                else{                            
                               ?>
                                <a href="index.php?task=pagehome">Trang chủ</a>
                               <?php
                                }
                               ?> 
                    
                </li> 
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
            <?php
            foreach($laysp as $values){
                if($_GET['idsp']==$values['id_sp']){  
            ?>
        <div class="container">
            <br>
            <p class="linkk" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;">
                <a href="index.php?task=pagehome">Trang chủ</a> > <?php echo $values['tensp'];?> 
            </p>
        </div>

        <h2 style="margin-left: 2.4em; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?php echo $values['tensp'];?></h2>
        <hr style="margin-left: 3.5em; margin-right: 3.5em;">

        <section class="half_half">
            <article>
                <img src="upload/<?php echo $values['anh'];?>" style="width: 95%; margin-left: 2.5em;">
            </article>
            <article style="text-align: left;">
                <h2 style="color: red; font-size: 28px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?php echo number_format($values['giaban'], 0, ',', '.'). ' VND';?></h2>
                <div class="qua-tang">
                    <ul class="list-unstyled">
                        <ul style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            <li>Balo laptop chính hãng (chi tiết)</li>
                            <li>Vệ sinh máy, tra keo tản nhiệt</li>
                            <li>Cài đặt phần mềm miễn phí</li>
                            <li>Hỗ trợ giao hàng toàn quốc (Hỗ trợ COD)</li>
                            <li>Cân chỉnh màu sắc màn hình miễn phí bằng Spyder 5 Elite</li>
                            <li>Hỗ trợ sao lưu dữ liệu miễn phí, nhanh chóng</li>
                        </ul>
                    </ul>
                </div>
                <ul class="button">
                    <li><a href="#"><button class="button-btn" name="button" type="button">Xem thêm</button></a></li>
                    <li><a href="#"><button class="button-btn" name="button" type="button"><i class="fas fa-cart-plus"></i></button></a></li>
                </ul>
            </article>
        </section>
        <h2 style="margin-left: 2.4em; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Thông số kỹ thuật <a href="#" style="font-size: 18px; text-decoration: none; color: blue">(Nhấn để xem chi tiết)</a></h2>
        <hr style="margin-left: 3.5em; margin-right: 3.5em;">
        <section class="thongso" style="margin-left: 2.4em; margin-right: 2.4em;">
            <article>
                <i class="fas fa-microchip" style="font-size: 60px;"></i>
                <p style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Intel Core i7 1065G7 1.3Ghz, 8Mb Cache, Upto 3.9Ghz</p>
            </article>
            <article>
                <i class="fas fa-memory" style="font-size: 60px;"></i>
                <p style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">16GB LPDDR4X 3733Mhz</p>
            </article>
            <article>
                <i class="fas fa-hdd" style="font-size: 60px;"></i>
                <p style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">512GB SSD m2 NVMe</p>
            </article>
            <article>
                <i class="fas fa-desktop" style="font-size: 60px;"></i>
                <p style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">13.4 inch 1920 x 1200, IPS</p>
            </article>
            <article>
                <i class="fas fa-chart-area" style="font-size: 60px;"></i>
                <p style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Intel UHD Graphics Share</p>
            </article>
            <article>
                <i class="fab fa-usb" style="font-size: 60px;"></i>
                <p style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">2 Thunderbolt™ 3, 1 khe đọc thẻ MicroSD, 1 jack cắm tai nghe/ micro</p>
            </article>
            <article>
                <i class="fas fa-text-width" style="font-size: 60px;"></i>
                <p style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">295.65 x 198.68 x 9.58 - 6.75 mm</p>
            </article>
            <article>
                <i class="fas fa-weight-hanging" style="font-size: 60px;"></i>
                <p style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">1.3 kg</p>
            </article>
            <article>
                <i class="fab fa-windows" style="font-size: 60px;"></i>
                <p style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Windows 10</p>
            </article>
        </section>

        <h2 style="margin-left: 2.4em; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Đánh giá chi tiết</a></h2>
        <hr style="margin-left: 3.5em; margin-right: 3.5em;">
        <section class="half_half" style="margin-left: 2.4em; margin-right: 2.4em;">
            <article>
                <h2 style="text-align:left; color: gray">1. Thiết kế</h2>
                <p style="text-align:left; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px;">
                    Dell XPS 13 7390 có thiết kế mỏng nhẹ và cực kỳ sang trọng, lịch lãm. Phần vỏ được làm hoàn toàn từ kim loại, tạo nên sự chắc chắn nhưng cũng không kém phần tinh tế. Với độ dày chỉ hơn 1 cm và cân nặng vỏn vẹn 1.3kg, chiếc laptop này phù hợp với mọi đối tượng với nhu cầu di chuyển nhiều, nhưng vẫn có đủ sức mạnh để thỏa mãn hầu hết các nhu cầu của người dùng. Một điểm đặc biệt của chiếc Dell XPS 13 7390 2-in-1 này là khả năng thay đổi nhiều chế độ. Người dùng hoàn toàn có thể gấp chiếc laptop này thành một chiếc máy tính bảng, hay dựng nó lên như hình dáng một chiếc lều. Việc chuyển đổi giữa các chế độ là vô cùng mượt mà và không ảnh hưởng nhiều đến phần bản lề ở giữa.
                </p>
            </article>
            <article>
                <img src="img/dell/xps_7390_2in1.jpg" style="width: 90%">
            </article>            
        </section>
        <section class="half_half" style="margin-left: 2.4em; margin-right: 2.4em;">
            <article>
                <img src="img/dell/dellxps132in173902.jpg" style="width: 90%">
            </article>
            <article>
                <h2 style="text-align:left; color: gray">2. Màn hình</h2>
                <p style="text-align:left; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px;">
                    Dell XPS 7390 2-in-1 sở hữu màn hình kích thước 13.4 inch với tỉ lệ mới 16:10, điều này khiến cho phần màn hình của máy cao hơn một chút so với đa phần những chiếc ultrabook khác đang sử dụng tỉ lệ 16:9 truyền thống, bao gồm cả người tiền nhiệm của nó, chiếc Dell XPS 9365 2-in-1. Dell cũng đã áp dụng công nghệ chống chói mới, cho phép màn hình hiển thị cực tốt trong môi trường độ sáng cao hơn độ phản chiếu là rất thấp. Người dùng có thể lựa chọn giữa 2 phiên bản màn hình: FHD (1920 x 1200) và UHD (3840 x 2400), cả 2 phiên bản đều hỗ trợ HDR và có độ sáng lên tới hơn 500 nit. Về độ phủ màu, máy đạt 100% sRGB, 76% AdobeRGB và 81% DCI-P3. Công nghệ Dell Cinema cũng tăng cường khả năng xem video cho máy bằng việc hỗ trợ HDR với Netflix, VUDU, Microsoft Movies & TV app. Dell XPS 7390 2-in1 hoàn toàn lí tưởng cho các công việc liên quan tới hình ảnh và chỉnh sửa video không chuyên.
                </p>
            </article>   
        </section>
        <section class="half_half" style="margin-left: 2.4em; margin-right: 2.4em;">
            <article>
                <h2 style="text-align:left; color: gray">3. Hiệu năng</h2>
                <p style="text-align:left; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px;">
                    Dell đã nâng cấp chiếc XPS 7390 mạnh hơn đáng kể so với người tiền nhiệm của nó là chiếc XPS 9365 với việc trang bị vi xử lý thế hệ mới nhất đến từ Intel. Phiên bản có mặt tại ThinkPro là phiên bản sở hữu vi xử lý mạnh nhất - Intel Core i7 1065G7. Với xung boost ngắn hạn lên tới 3.9 Ghz và xung căn bản 1.3 Ghz, hiệu năng của chiếc Dell 2-in-1 mới chính thức đánh bại thế hệ core U đời trước mà đại diện mạnh nhất là vi xử lý Intel Core i7 - 8565U trong cả hai bài test Geekbench đơn nhân và đa nhân. Bộ xử lý đồ họa tích hợp mới Intel Iris Plus có hiệu năng mạnh hơn thế hệ Intel UHD 620 và chỉ chịu thua kém không nhiều khi so sánh với NVIDIA GeForce MX150. Điều này không khiến chiếc Dell Ultrabook mới trở thành một chiếc laptop gaming, nhưng Iris Plus thực sự đã đem lại một lợi thế không nhỏ cho ứng viên nhà Dell khi so sánh với rất nhiều đối thử cùng phân khúc vẫn đang đồng hành với Intel UHD graphics. 
                </p>
                <p style="text-align:left; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px;">
                    Về mặt tản nhiệt, mặc dù sở hữu thân hình bé nhỏ, chiếc máy vẫn sở hữu hệ thống làm mát với 2 quạt. Đây có thể coi là một trong những nâng cấp đáng giá nhất để đảm bảo hiệu năng ổn định cho máy, nhất là khi so với người tiền nhiệm XPS 9365 - 1 chiếc Ultrabook không hề có quạt tản nhiệt. Điều này, kết hợp với phần vỏ cao cấp, đã khiến cho chiếc máy mát mẻ cả khi chạy những tác vụ nặng, với tiếng ồn của quạt gần như không thể nghe thấy được.
                </p>
            </article>
            <article>
                <img src="img/dell/xps_7390_2in12.jpg" style="width: 90%; padding-top: 5em;">
            </article> 
            <?php
                }
            }
            ?>
        </section>

        <footer>
            <section class="footer">
                <article style="text-align: left;">
                    <h4>Của hàng laptop - Thế giới số</h4>
                    <p style="color: darkgrey;"><i class="fas fa-map-marker-alt" style="color: white; font-size: 20-px;"></i> <strong style="color: white;">Địa chỉ:</strong>  </p>
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
                    <p style="color: darkgrey;"><i class="fas fa-phone" style="color: white; font-size: 20-px;"></i> <strong style="color: white;">Điện thoại:</strong>0332651691</p>
                    <p style="color: darkgrey;"><i class="fas fa-envelope" style="color: white; font-size: 20-px;"></i> <strong style="color: white;">Mail:</strong> thegioiso@gmail.com</p>
                    <p style="color: darkgrey;"><i class="fas fa-clock" style="color: white; font-size: 20-px;"></i> <strong style="color: white;">Giờ mở cửa:</strong> 8:00 đến 22:00 tất cả các ngày trong tuần</p>
                </article>
            </section>
        </footer>
    </body>
</html>