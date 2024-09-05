<?php
class modelTGS{
    public function __construct(){
		$db = mysqli_connect("localhost","root","","thegioiso");
		mysqli_set_charset($db,"utf8");
		$this->db = $db;
		}
		// dang nhap
		public function dologin(){
			$query = "SELECT * FROM user WHERE email ='".$_POST['email']."' AND password = '".$_POST['password']."'";
			$result = mysqli_query($this->db,$query);
			$r=$result->num_rows;
			if ($r > 0) {
				$num = mysqli_fetch_assoc($result);
				return $num;
			}
			return false;
		}
		// lay tat ca du lieu trong user voi id =1
		public function getdatauser(){
			$query = "SELECT * FROM user WHERE level ='1'";
			$listuser = mysqli_query($this->db,$query);
			return $listuser;
		}
		// dang ky
		public function doregister($name,$email,$phone,$password,$address,$create){
			$query = "INSERT INTO `user` (name,email, phone,password,address,level,`create`)
                  		VALUES 	('".$name."','".$email."', '".$phone."','".$password."','".$address."','1','".$create."')";
        $result = mysqli_query($this->db, $query);
        return $result;
		}
		// lay tat ca du lieu trong user
		public function getdatatk(){
			$query = "SELECT * from user";
			$getdatatk = mysqli_query($this->db,$query);
			$rows = array();
			while($row = $getdatatk->fetch_assoc()){
				$rows[]=$row;
			}
			return $rows;
	}
		// them tk
		public function domoredatatk($name,$email,$phone,$password,$address,$level,$create){
			$query ="INSERT INTO `user` (name,email, phone,password,address,level,`create`)
					VALUES 	('".$name."','".$email."', '".$phone."','".$password."','".$address."','".$level."','".$create."')";
			$result = mysqli_query($this->db, $query);
			return $result;		
}		
		// sua tk
		public function editaccount($name,$email,$phone,$password,$address,$level,$create){
			$query="UPDATE user set name = '".$name."' , email ='".$email."', phone ='".$phone."' , password ='".$password."'
			, address ='".$address."' , level ='".$level."' , `create` ='".$create."' WHERE id = '".$_GET['id']."'
			" ;
			$result = mysqli_query($this->db,$query);
			return $result;
		}	
		// xoa tk
		public function deleteaccount(){
			$query="DELETE  from user where id = '".$_GET["id2"]."'";
			$result = mysqli_query($this->db,$query);
			return $result;
		}
		// them sp
		public function domoresp($tensp,$loaisp,$anh,$giamua,$giaban){
			$query="INSERT INTO sanpham (tensp,loaisp,anh,giamua,giaban)
			VALUES ('".$tensp."','".$loaisp."','".$anh."','".$giamua."','".$giaban."')";
			$result=mysqli_query($this->db,$query);
			return $result;
		}
		// lay tat ca du lieu sp
		public function laysp(){
			$query = "SELECT * from sanpham";
			$laysanpham = mysqli_query($this->db,$query);
			$rows = array();
			while($row = $laysanpham->fetch_assoc()){
				$rows[]=$row;
			}
			return $rows;
		}
		// sua sp
		public function editsp($tensp,$loaisp,$anh,$giamua,$giaban){
			$query="UPDATE sanpham set tensp = '".$tensp."' , loaisp ='".$loaisp."', anh ='".$anh."' , giamua ='".$giamua."'
			, giaban ='".$giaban."' WHERE id_sp = '".$_GET['id_sp']."'
			" ;
			$result = mysqli_query($this->db,$query);
			return $result;
		}
		//xoa sp
		public function deletesp(){
			$query="DELETE  from sanpham where id_sp = '".$_GET["id_sp2"]."'";
			$result = mysqli_query($this->db,$query);
			return $result;
		}
		// lay sp lap van phong
		public function layspvanphong(){
			$query = "SELECT * from sanpham where loaisp ='văn phòng'";
			$laysanpham = mysqli_query($this->db,$query);
			$rows = array();
			while($row = $laysanpham->fetch_assoc()){
				$rows[]=$row;
			}
			return $rows;
		}
		// lay sp lap do hoa
		public function layspdohoa(){
			$query = "SELECT * from sanpham where loaisp ='đồ họa'";
			$laysanpham = mysqli_query($this->db,$query);
			$rows = array();
			while($row = $laysanpham->fetch_assoc()){
				$rows[]=$row;
			}
			return $rows;
		}
		// lay sp lap gaming
		public function layspgaming(){
			$query = "SELECT * from sanpham where loaisp ='gaming'";
			$laysanpham = mysqli_query($this->db,$query);
			$rows = array();
			while($row = $laysanpham->fetch_assoc()){
				$rows[]=$row;
			}
			return $rows;
		}
		// lay sp linh kien
		public function laysplinhkien(){
			$query = "SELECT * from sanpham where loaisp ='linh kiện'";
			$laysanpham = mysqli_query($this->db,$query);
			$rows = array();
			while($row = $laysanpham->fetch_assoc()){
				$rows[]=$row;
			}
			return $rows;
		}
		//tim kiem
		public function search(){
			$query ="SELECT * from sanpham where tensp like '%".$_GET['tukhoa']."%'";
			$timkiem = mysqli_query($this->db,$query);
			$rows = array();
			while($row = $timkiem->fetch_assoc()){
				$rows[]=$row;
			}
			return $rows;
		}
		//lay id user
		public function layiduser(){
			$query = "SELECT id from user ";
			$laysanpham = mysqli_query($this->db,$query);
			$rows = array();
			while($row = $laysanpham->fetch_assoc()){
				$rows[]=$row;
			}
			return $rows;
		}
		//them gio hang
		public function themgiohang($tensp,$anh,$giaban,$soluong,$id_user){
			$query ="INSERT INTO giohang (tensp,anh,giaban,soluong,id_user)
			VALUES ('".$tensp."','".$anh."','".$giaban."','".$soluong."','".$id_user."')";
			$result = mysqli_query($this->db,$query);
			return $result;
		}
		//update so luong gio hang
		public function update($soluongnew){
			$query = "UPDATE giohang set soluong='".$soluongnew."' where id_user='".$_SESSION['id']."' and tensp='".$_POST['tensp']."'";
			$result = mysqli_query($this->db,$query);
			return $result;
		}
		// hien thi gio hang
		public function hienthigiohang(){
			$query = "SELECT * from giohang";
			$laysanpham = mysqli_query($this->db,$query);
			$rows = array();
			while($row = $laysanpham->fetch_assoc()){
				$rows[]=$row;
			}
			return $rows;
		}
		// xoa gio hang
		public function xoagiohang(){
			$query = "DELETE from giohang where id_gh='".$_GET['id_gh']."'";
			$result = mysqli_query($this->db,$query);
			return $result;
		}
		//hoi dap
		public function guihoidap($idtk,$hoten,$sdt,$email,$nd){
			$query ="INSERT INTO hoidap (id_tk,hoten,sdt,email,noidung)
			VALUES ('".$idtk."','".$hoten."','".$sdt."','".$email."','".$nd."')";
			$result = mysqli_query($this->db,$query);
			return $result;
		}
		// user sua thong tin
		public function usersuathongtin($name,$email,$phone,$address){
			$query = "UPDATE user set name='".$name."', email='".$email."' ,phone='".$phone."'  ,address ='".$address."' where id='".$_SESSION['id']."' ";
			$result = mysqli_query($this->db,$query);
			return $result;
		}
	}	 
?>