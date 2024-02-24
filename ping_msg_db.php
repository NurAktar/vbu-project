<?php
function format_time($time){
    $time = strtotime($time);
    return date("d-M-Y, h:i:sa",$time);
}
include_once "db_conn.php";
if( isset($_POST['m_table']) && isset($_POST['lasttime']) && isset($_POST['selling']) ){
    $selling = $_POST['selling'];
    if($selling == "1"){
        $selling = "0";
    }
    else{
        $selling = "1";
    }
    $m_table = $_POST['m_table'];
    $lasttime = $_POST['lasttime'];
    $sql = "UPDATE $m_table SET seen='1' WHERE selling='$selling' ORDER BY id desc";
    mysqli_query($conn,$sql);
    
    $sql = "SELECT time FROM $m_table ORDER BY id desc LIMIT 1";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $db_time = $row['time'];
    $db_time = format_time($db_time);
    if($db_time == $lasttime){
        echo "0";
    }
    else{
        echo "1";
    }

}
?>