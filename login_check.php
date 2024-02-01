<?php
session_start();
if(isset($_SESSION['userid'])){
    $display = false;
    $uname_log = $_SESSION['uname_log'];
}
else{
    $display = true;
    $uname_log = "";
}
?>