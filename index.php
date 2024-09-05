<?php
require_once "controller/controller.php";
session_start();
    $Controller = new controllerTGS();
    $task = isset($_GET['task'])?$_GET['task']:null;
    $name = isset($_POST['name'])?$_POST['name']:null;
	$email = isset($_POST['email'])?$_POST['email']:null;
	$phone = isset($_POST['phone'])?$_POST['phone']:null;
	$password = isset($_POST['password'])?$_POST['password']:null;
	$repassword = isset($_POST['repassword'])?$_POST['repassword']:null;
	$address = isset($_POST['address'])?$_POST['address']:null;
	$level = isset($_POST['level'])?$_POST['level']:null;
	$create = date("Y.m.d");
    $tensp = isset($_POST['tensp'])?$_POST['tensp']:null;
    $loaisp = isset($_POST['loaisp'])?$_POST['loaisp']:null;
    $anh=$_FILES;
    $giamua = isset($_POST['giamua'])?$_POST['giamua']:null;
    $giaban = isset($_POST['giaban'])?$_POST['giaban']:null;
//dang nhap
    if (isset($_POST['login'])) {
		$Controller->dologin();
	}
//dang ky
if(isset($_POST['register'])){
    if(empty($name)||empty($email)||empty($phone)||empty($address)||empty($password)||empty($repassword)){
        $message = "Không được để trống !";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
    elseif($password != $repassword){
        $message = "Mật khẩu không trùng nhau !";
    echo "<script type='text/javascript'>alert('$message');</script>";

    }
    elseif(isset($name)&&isset($email)&&isset($phone)&&isset($password)&&isset($address)&&isset($repassword)){
        $Controller->doregister($name,$email,$phone,$password,$address,$create);
    }
}
//them tk
if(isset($_POST['themtk'])){
    if(empty($name)||empty($email)||empty($phone)||empty($address)||empty($password)||empty($level)){
        $message = "Không được để trống !";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
    elseif(isset($name)&&isset($email)&&isset($phone)&&isset($password)&&isset($address)&&isset($level)){
        $Controller->domoredatatk($name,$email,$phone,$password,$address,$level,$create);
    }
}
//sua tk
if(isset($_POST['suatk'])&&isset($_GET['id'])){
    if(empty($name)||empty($email)||empty($phone)||empty($address)||empty($password)||empty($level)){
        $message = "Không được để trống !";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
    elseif(isset($name)&&isset($email)&&isset($phone)&&isset($password)&&isset($address)&&isset($level)){
        $Controller->editaccount($name,$email,$phone,$password,$address,$level,$create);
    }
}
//xoa tk
if(isset($_GET['id2'])){
    $Controller->deleteaccount();
}
//them san pham
if(isset($_POST['themsp'])){
    if(empty($tensp)||empty($loaisp)||empty($anh)||empty($giamua)||empty($giaban)){
        $message = "Không được để trống !";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
    elseif(isset($tensp)&&isset($loaisp)&&isset($anh)&&isset($giamua)&&isset($giaban)){
        $Controller->domoresp($tensp,$loaisp,$anh,$giamua,$giaban);
    }
}
//sua san pham
if(isset($_POST['suasp'])&&isset($_GET['id_sp'])){
    if(empty($tensp)||empty($loaisp)||empty($anh)||empty($giamua)||empty($giaban)){
        $message = "Không được để trống !";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
    elseif(isset($tensp)&&isset($loaisp)&&isset($anh)&&isset($giamua)&&isset($giaban)){
        $Controller->editsp($tensp,$loaisp,$anh,$giamua,$giaban);
    }
}
//xoa san pham
if(isset($_GET['id_sp2'])){
    $Controller->deletesp();
}
// tim kiem 
if(isset($_GET['tukhoa'])){
    $Controller->search();
}
//them gio hang
if(isset($_POST['themgiohang'])){
    if(isset($_SESSION['level'])&& $_SESSION['level']==1){
        $tensp=$_POST['tensp'];
        $anh=$_POST['anh'];
        $giaban=$_POST['giaban'];
        $soluong=$_POST['soluong'];
        $id_user=$_POST['id_user'];
        $Controller->themgiohang($tensp,$anh,$giaban,$soluong,$id_user);
    }
    else{
             $message = "Bạn cần đăng nhập để mua hàng !";
             echo "<script type='text/javascript'>alert('$message');</script>";
         }
}
//hoi dap
if(isset($_POST['hoidap'])){
    if(isset($_SESSION['level'])&& $_SESSION['level']==1){
    $idtk=$_POST['id_tk'];
    $hoten=$_POST['hoten'];
    $sdt=$_POST['sdt'];
    $email=$_POST['email'];
    $nd=$_POST['nd'];
    $Controller->guihoidap($idtk,$hoten,$sdt,$email,$nd);
    }
    else{
            $message = "Bạn cần đăng nhập để gửi phản hồi  !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
//user sua thong tin
if(isset($_POST['suathongtin'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $Controller->usersuathongtin($name,$email,$phone,$address);
}
switch ($task) {
    case 'logout':
        $Controller->getlogout();
        break;
    case 'pagehome':
        $Controller->getpagehome();
        break; 
    case 'pagelogin':
        $Controller->getpagelogin(); 
        break;
    case'pageadmin':
		$Controller->getpageadmin();
		break;
    case 'pageuser':
        $Controller->getpageuser();
        break;
    case 'pageregister':
        $Controller->getpageregister();
        break;
    case 'chitietsp':
        $Controller->chitietsanpham();
        break;
    case 'gioithieu':
        $Controller->gioithieu();
        break;
    case 'hoidap':
        $Controller->hoidap();
        break;
    case 'lapdohoa':
        $Controller->lapdohoa();
        break;
    case 'lapgaming':
        $Controller->lapgaming();
        break;
    case 'lapvanphong':
        $Controller->lapvanphong();
        break;
    case 'linhkien':
        $Controller->linhkien();
        break;
    case 'themtk':
        $Controller->themtk();
        break;
    case 'suatk':
        $Controller->suatk();
        break;
    case 'xoatk':
        $Controller->xoatk();
        break;
    case 'sanpham':
        $Controller->sanpham();
        break;
    case 'qlsanpham':
        $Controller->qlsanpham();
        break;
    case 'themsp':
        $Controller->themsp();
        break;
    case 'suasp':
        $Controller->suasp();
        break;
    case 'xoasp':
        $Controller->xoasp();
        break;
    case 'timkiem':
        $Controller->search();
        break;
    case 'giohang':
        $Controller->hienthigiohang();
        break;
    case 'xoagiohang':
        $Controller->xoagiohang();
        break;
    case 'thongtintk':
        $Controller->thongtintk();
        break;
    default:
        if(isset($_SESSION['level'])&&$_SESSION['level']==1){
            $Controller->getpageuser();
            break;
        }
        else{
        $Controller->getpagehome();
        break;
        }
}


?>