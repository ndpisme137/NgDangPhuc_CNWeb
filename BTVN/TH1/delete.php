<?php
//gan gia tri id cho bien
$sid = $_GET['sid'];

//ket noi toi csdl
require_once 'connect_DB.php';

//viet cau lenh sql
$xoasql = "DELETE FROM sanpham WHERE id='$sid'";

IF (mysqli_query($conn,$xoasql)){
    //in ra thon bao    
    header("location: list_sp.php");
}
