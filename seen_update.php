<?php
if(isset($_POST['selling']) && isset($_POST['m_table'])){
    include_once "db_conn.php";
    $selling = $_POST['selling'];
    $m_table = $_POST['m_table'];
    
    $sql = "SELECT seen FROM $m_table WHERE selling='$selling' ORDER BY id desc LIMIT 1";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $seen = $row['seen'];
    if($seen == "1"){
        echo "1";
    }
    else{
        echo "0";
    }
}
?>