<?php
include_once "login_check.php";
if($display){header("Location:signin.php");}
include_once "db_conn.php";
if(isset($_GET['bookid'])){
    $bookid = $_GET['bookid'];
}
$sql = "SELECT `my_post` FROM `user_reg` WHERE email='$userid'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$my_post = $row['my_post'];
$sql = "SELECT * FROM $my_post WHERE id = '$bookid'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$time = $row['time'];
$sql = "DELETE FROM $my_post WHERE time='$time'";
mysqli_query($conn,$sql);
$sql = "DELETE FROM book_posted WHERE time='$time'";
mysqli_query($conn,$sql);
header("Location:mypost.php")
?>