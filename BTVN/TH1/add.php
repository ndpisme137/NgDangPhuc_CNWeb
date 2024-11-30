<?php
//nhan du lieu tu form
$ten_sp = $_POST['tensp'];
$gia_thanh = $_POST['gia'];
//ket noi csdl
require_once 'connect_DB.php';

//lenh query
$themsql = "INSERT INTO sanpham (TenSP,Gia) VALUE ('$ten_sp','$gia_thanh')";

//thuc thi cau lenh
IF (mysqli_query($conn,$themsql)){
    //in ra thon bao
    header("location: list_sp.php");   
}
