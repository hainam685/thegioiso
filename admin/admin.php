<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Bin-It">
    <meta property="og:url" />
    <meta property="og:type" content="#" />
    <meta property="og:title" content="#" />
    <meta property="og:description" content="Wellcome to my Website" />

    <title>Quản Lý Tài Khoản</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="./admin/css/style.css">
    <!-- Latest compiled and minified CSS -->
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <!--===============================================================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!--===============================================================================================-->
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <script type="text/javascript">
        //Phân Trang Cho Table
        function Pager(tableName, itemsPerPage) {
            this.tableName = tableName;
            this.itemsPerPage = itemsPerPage;
            this.currentPage = 1;
            this.pages = 0;
            this.inited = false;

            this.showRecords = function (from, to) {
                var rows = document.getElementById(tableName).rows;
                for (var i = 1; i < rows.length; i++) {
                    if (i < from || i > to)
                        rows[i].style.display = 'none';
                    else
                        rows[i].style.display = '';
                }
            }

            this.showPage = function (pageNumber) {
                if (!this.inited) {
                    alert("not inited");
                    return;
                }
                var oldPageAnchor = document.getElementById('pg' + this.currentPage);
                oldPageAnchor.className = 'pg-normal';

                this.currentPage = pageNumber;
                var newPageAnchor = document.getElementById('pg' + this.currentPage);
                newPageAnchor.className = 'pg-selected';

                var from = (pageNumber - 1) * itemsPerPage + 1;
                var to = from + itemsPerPage - 1;
                this.showRecords(from, to);
            }

            this.prev = function () {
                if (this.currentPage > 1)
                    this.showPage(this.currentPage - 1);
            }

            this.next = function () {
                if (this.currentPage < this.pages) {
                    this.showPage(this.currentPage + 1);
                }
            }

            this.init = function () {
                var rows = document.getElementById(tableName).rows;
                var records = (rows.length - 1);
                this.pages = Math.ceil(records / itemsPerPage);
                this.inited = true;
            }
            this.showPageNav = function (pagerName, positionId) {
                if (!this.inited) {
                    alert("not inited");
                    return;
                }
                var element = document.getElementById(positionId);

                var pagerHtml = '<span onclick="' + pagerName +
                    '.prev();" class="pg-normal">&#171</span> | ';
                for (var page = 1; page <= this.pages; page++)
                    pagerHtml += '<span id="pg' + page + '" class="pg-normal" onclick="' + pagerName +
                        '.showPage(' + page + ');">' + page + '</span> | ';
                pagerHtml += '<span onclick="' + pagerName + '.next();" class="pg-normal">&#187;</span>';

                element.innerHTML = pagerHtml;
            }
        }
    </script>
</head>

<body onload="time()">
    <script>
        swal("Xin Chào Admin", "Chúc Bạn 1 Ngày Tốt Lành Nhé", "");
    </script>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php?task=pageadmin"><i class="fa fa-user-circle" aria-hidden="true"></i> Quản Lý Tài Khoản</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php?task=pageadmin" data-toggle="tooltip" data-placement="bottom"
                            title="TÀI kHOẢN">TÀI KHOẢN</a></li>
                    <li><a href="index.php?task=qlsanpham" data-toggle="tooltip" data-placement="bottom" title="SẢN PHẨM">SẢN PHẨM</a></li>
                    <li><a href="" data-toggle="tooltip" data-placement="bottom" title="DOANH SỐ">DOANH SỐ</a>
                    </li>
                    <li><a href="#tour" data-toggle="tooltip" data-placement="bottom" title="SỰ KIỆN">SỰ KIỆN</a></li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="TÀI KHOẢN"><b>Tài Khoản</b>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown">
                            
                            <li>
                            <?php
                                if(isset( $_SESSION['level'])&&$_SESSION['level']==2){
                                    echo "<a href='index.php?task=logout'> Đăng xuất</a>";
                                }
                                else{
                               ?>

                                <?php
                                echo "<script> window.location.href = 'index.php?task=pagehome'</script> ";                    
                                       }
                                ?>
                                
                               
                                </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid al">
    <div id="clock"></div>
        <i class="fa fa-search" aria-hidden="true"></i>
        <form method ="POST" action="">
        </form >
        <table class="table table-bordered" id="myTable">
            <thead>
            <div id="clock"></div>
                <tr class="ex">
                    <th>Id</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th>Mật Khẩu</th>
                    <th>Địa Chỉ</th>
                    <th>Loại Tài Khoản(admin=2,user=1)</th>
                    <th>Sửa,Xóa</th>
                    <th><a href="index.php?task=themtk" style="color:black;">Thêm tài khoản</a></th>
                </tr>
            </thead>
            <tbody>
                <br>
                <?php
                foreach($laytk as $values){             
                ?>
                <tr>
                    <td>
                        <?php
                        echo $values['id'];

                        ?>
                    </td>
                    <td>
                        <?php
                        echo $values['name'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $values['email'];

                        ?>               
                    </td>      
                    <td>
                        <?php
                        echo $values['phone'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $values['password'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $values['address'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $values['level'];
                        ?>
                    </td>
                    <td>
                        <a href="index.php?task=suatk&id=<?php echo $values['id'];?>">SỬA</a>
                        <a href="index.php?task=xoatk&id2=<?php echo $values['id'];?>">XÓA</a>
                </td>
                </tr>
                <?php
                        
                         }
                    
                ?>
                
            </tbody>
        </table>
        <div id="pageNavPosition" class="text-right"></div>
        <script type="text/javascript">
            var pager = new Pager('myTable', 5);
            pager.init();
            pager.showPageNav('pager', 'pageNavPosition');
            pager.showPage(1);
        </script>
    </div>
    <hr class="hr1">
    <div class="container-fluid end">
        <div class="row text-center">
            <div class="col-lg-12 link">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-google"></i>
            </div>
        </div>
    </div>
    <script src="jquery.min.js"></script>
    <script type="text/javascript">
    //Thời Gian
    function time() {
            var today = new Date();
            var weekday = new Array(7);
            weekday[0] = "Chủ Nhật";
            weekday[1] = "Thứ Hai";
            weekday[2] = "Thứ Ba";
            weekday[3] = "Thứ Tư";
            weekday[4] = "Thứ Năm";
            weekday[5] = "Thứ Sáu";
            weekday[6] = "Thứ Bảy";
            var day = weekday[today.getDay()];
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            nowTime = h + ":" + m + ":" + s;
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = day + ', ' + dd + '/' + mm + '/' + yyyy;
            tmp = '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="date">' + today + ' | ' + nowTime +
                '</span>';
            document.getElementById("clock").innerHTML = tmp;
            clocktime = setTimeout("time()", "1000", "Javascript");

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
        }
        </script>
   
</body>

</html>
