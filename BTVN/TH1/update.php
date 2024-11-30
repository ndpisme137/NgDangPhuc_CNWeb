<?php
//nhan du lieu tu form
$ten_sp = $_POST['tensp'];
$gia_thanh = $_POST['gia'];
$sid = $_POST['sid'];
//ket noi csdl
require_once 'connect_DB.php';

//lenh query
$updatesql = "UPDATE sanpham SET TenSP='$ten_sp',Gia='$gia_thanh' WHERE id='$sid'";
//echo $updatesql;exit;
//thuc thi cau lenh
IF (mysqli_query($conn,$updatesql)){
    //tro ve trang chu
    header("location: list_sp.php");   
}
