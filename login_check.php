<?php
session_start();
if(isset($_SESSION['userid'])){
    $display = false;
}
else{
    $display = true;
}
?>