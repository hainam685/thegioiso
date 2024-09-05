<?php
class viewTGS{
    public function getpagehome($laysp){
        include_once "template/home.php";
    }
    public function getpagelogin(){
        include_once "template/formlogin.php";
    }
    public function getpageuser($listuser,$laysp,$layid){
        include_once "template/user.php";
    }
    public function getpageadmin($listuser,$laytk){
        include_once "admin/admin.php";
    }
    public function getpageregister(){
        include_once "template/formregister.php";
    }
    public function themtk(){
        include_once "admin/themtk.php";
    }
    public function suatk(){
        include_once "admin/suatk.php";
    }
    public function xoatk(){
        include_once "admin/delete.php";
    }
    public function sanpham($laysp){
        include_once "template/sanpham.php";
    }
    public function qlsanpham($laysp){
        include_once "admin/qlsanpham.php";
        
    }
    public function themsp(){
        include_once "admin/themsp.php";
    }
    public function suasp(){
        include_once "admin/suasp.php";
    }
    public function xoasp(){
        include_once "admin/deletesp.php";
    }
    public function chitietsanpham($laysp){
        include_once "template/chitietsanpham.php";
    }
    public function gioithieu(){
        include_once "template/gioithieu.php";
    }
    public function hoidap(){
        include_once "template/hoidap.php";
    }
    public function lapdohoa($layspdohoa){
        include_once "template/laptopdohoakythuat.php";
    }
    public function lapgaming($layspgaming){
        include_once "template/laptopgaming.php";
    }
    public function lapvanphong($layspvanphong){
        include_once "template/laptopvanphong.php";
    }
    public function linhkien($laysplinhkien){
        include_once "template/linhkien.php";
    }
    public function search($timkiem){
        include_once "template/timkiem.php";
    }
    public function hienthigiohang($hienthigiohang){
        include_once "template/giohang.php";
    }
    public function xoagiohang(){
        include_once "template/deletecart.php";
    }
    public function thongtintk($laytt){
        include_once "template/chitiettk.php";
    }
}

?>