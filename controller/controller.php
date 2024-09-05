<?php
require_once "models/model.php";
require_once "views/view.php";
class controllerTGS{
    var $model,$view;
    public function __construct(){
        $this->model = new modelTGS();
        $this->view = new viewTGS();
    }
    public function getpagehome(){
        $laysp = $this->model->laysp();
        $this->view->getpagehome($laysp);
    }
    public function getpagelogin(){
        $this->view->getpagelogin();
    }
    public function getpageregister(){
        $this->view->getpageregister();
    }
    public function themtk(){
        $this->view->themtk();
    }
    public function suatk(){
        $this->view->suatk();
    }
    public function xoatk(){
        $this->view->xoatk();
    }
    public function sanpham(){
        $laysp = $this->model->laysp();
        $this->view->sanpham($laysp);
    }
    public function qlsanpham(){
        $laysp = $this->model->laysp();
        $this->view->qlsanpham($laysp);
    }
    public function themsp(){
        $this->view->themsp();
    }
    public function suasp(){
        $this->view->suasp();
    }
    public function xoasp(){
        $this->view->xoasp();
    }
    public function chitietsanpham(){
        $laysp=$this->model->laysp();
        $this->view->chitietsanpham($laysp);
    }
    public function gioithieu(){
        $this->view->gioithieu();
    }
    public function hoidap(){
        $this->view->hoidap();
    }
    public function lapdohoa(){
        $layspdohoa=$this->model->layspdohoa();
        $this->view->lapdohoa($layspdohoa);
    }
    public function lapgaming(){
        $layspgaming=$this->model->layspgaming();
        $this->view->lapgaming($layspgaming);
    }
    public function lapvanphong(){
       $layspvanphong=$this->model->layspvanphong();
        $this->view->lapvanphong($layspvanphong);
    }
    public function linhkien(){
        $laysplinhkien=$this->model->laysplinhkien();
        $this->view->linhkien($laysplinhkien);
    }
    public function hienthigiohang(){
        $hienthigiohang=$this->model->hienthigiohang();
        $this->view->hienthigiohang($hienthigiohang);
     
    }
    public function thongtintk(){
        $laytt=$this->model->getdatatk();
        $this->view->thongtintk($laytt);
    }
    // dang nhap
    public function dologin(){
        if($this->model->dologin()){
        $result = $this->model->dologin();
        $_SESSION['id'] = $result['id'];
        $_SESSION['name'] = $result['name'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['phone'] = $result['phone'];
        $_SESSION['address'] = $result['address'];
        $_SESSION['level'] = $result['level'];
        if ($result['level'] == 2) {
            header("location:index.php?task=pageadmin");
        }
        elseif ($result['level']==1) {
            header("location:index.php?task=pageuser");
        }
    }
    else{
        $message = "Tài Khoản Mật Khẩu Không Đúng !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
    // trang user
    public function getpageuser(){
        $layid=$this->model->layiduser();
        $laysp = $this->model->laysp();
        $listuser = $this->model->getdatauser();
        $this->view->getpageuser($listuser,$laysp,$layid);
    }
    // trang admin
    public function getpageadmin(){
        $laytk = $this->model->getdatatk();
        $listuser = $this->model->getdatauser();
        $this->view->getpageadmin($listuser,$laytk);

    }
    // dang ky
    public function doregister($name,$email,$phone,$password,$address,$create){
        $result =  $this->model->doregister($name,$email,$phone,$password,$address,$create);
        $message = "Đăng ký thành công !";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $this->view->getpageregister();
    }
    // dang xuat
    public function getlogout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['phone']);
        unset($_SESSION['address']);
        unset($_SESSION['level']);
       header("location:index.php?task=pagehome");
    }
    // them tk
    public function domoredatatk($name,$email,$phone,$password,$address,$level,$create){
            $result = $this->model->domoredatatk($name,$email,$phone,$password,$address,$level,$create);
            $message = "Thêm Tài Khoản Thành Công !";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location:index.php?task=pageadmin");
    }
    //sua tk
    public function editaccount($name,$email,$phone,$password,$address,$level,$create){
        if(isset($_GET['id'])){
        if($this->model->editaccount($name,$email,$phone,$password,$address,$level,$create)){
            echo "<script type='text/javascript'>alert('Sửa Thành Công');</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Sửa Không Thành Công');</script>";
        }
        }
        header("location:index.php?task=pageadmin");
    }
    // xoa tk
    public function deleteaccount(){
        if(isset($_GET['id2'])){
        if($this->model->deleteaccount()){
            echo "<script type='text/javascript'>alert('Xóa Thành Công');</script>";
}
        else{
            echo "<script type='text/javascript'>alert('Xóa Không Thành Công');</script>";
        }
    }
        header("location:index.php?task=pageadmin");
}
    // them sp
    public function domoresp($tensp,$loaisp,$anh,$giamua,$giaban){
        $target_dir = "upload/";
        $target_file = $target_dir . basename($anh['anh']['name']);
        $anh=$_FILES['anh']['name'];
       if( move_uploaded_file($_FILES['anh']['tmp_name'],$target_file)){
        $result = $this->model->domoresp($tensp,$loaisp,$anh,$giamua,$giaban);
        $message = "Thêm Sản Phẩm Thành Công !";
        echo "<script type='text/javascript'>alert('$message');</script>";
       }
       header("location:index.php?task=qlsanpham");
    }
    //sua sp
    public function editsp($tensp,$loaisp,$anh,$giamua,$giaban){
        $target_dir = "upload/";
        $target_file = $target_dir . basename($anh['anh']['name']);
        $anh=$_FILES['anh']['name'];
        if(isset($_GET['id_sp'])){
            if( move_uploaded_file($_FILES['anh']['tmp_name'],$target_file)){
                $result = $this->model->editsp($tensp,$loaisp,$anh,$giamua,$giaban);
                echo "<script type='text/javascript'>alert('Sửa Thành Công');</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('Sửa Không Thành Công');</script>";
            }
            }
            header("location:index.php?task=qlsanpham");
    }
    //xoa sp
    public function deletesp(){
        if(isset($_GET['id_sp2'])){
        if($this->model->deletesp()){
        echo "<script type='text/javascript'>alert('Xóa Thành Công');</script>";
            }
        else{
        echo "<script type='text/javascript'>alert('Xóa Không Thành Công');</script>";
            }
    }
   $this->view->xoasp();
}
    //tim kiem
    public function search(){
        if(isset($_GET['tukhoa'])){
           $timkiem=$this->model->search();
           $this->view->search($timkiem);
        }
    }
    // them gio hang
    public function themgiohang($tensp,$anh,$giaban,$soluong,$id_user){
        $kt=$this->model->hienthigiohang();
        $check=0;
        foreach($kt as $values){
            if($tensp==$values['tensp']&& $id_user==$values['id_user']){
                $check=1;
                $soluongnew=$soluong+$values['soluong'];
                $this->model->update($soluongnew);               
            } 
    }
    if($check==0){
        $this->model->themgiohang($tensp,$anh,$giaban,$soluong,$id_user);
        } 
}
    // xoa gio hang
    public function xoagiohang(){
        if(isset($_GET['id_gh'])){
            if($this->model->xoagiohang()){
            echo "<script type='text/javascript'>alert('Xóa Thành Công');</script>";
                }
            else{
            echo "<script type='text/javascript'>alert('Xóa Không Thành Công');</script>";
                }
        }
        $this->view->xoagiohang();
    } 
    //hoi dap
    public function guihoidap($idtk,$hoten,$sdt,$email,$nd){
       if( $this->model->guihoidap($idtk,$hoten,$sdt,$email,$nd)){
        $message = "Gửi Phản Hồi Thành Công Xin vui Lòng Đợi Ít Phút Dể Chúng Tôi Trả Lời !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
    public function usersuathongtin($name,$email,$phone,$address){
        if( $this->model->usersuathongtin($name,$email,$phone,$address)){
            $message = "Sửa Thông Tin Thành Công !";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}
?>