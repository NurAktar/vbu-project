<?php
session_start();
$userid = "";
$uname_log = "";
$display = "";
if(isset($_SESSION['userid'])){
    $display = false;
    $uname_log = $_SESSION['uname_log'];
    $userid = $_SESSION['userid'];
}
else{
    $display = true;
    $uname_log = "";
}
?>