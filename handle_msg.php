<?php
include_once "login_check.php";
include "db_conn.php";

if(isset($_POST['m_table']) && isset($_POST['selling'])){
    $m_table = $_POST['m_table'];
    $selling = $_POST['selling'];
    $sql = "SELECT * FROM $m_table";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)){
            if($row['selling'] == $selling){ ?>
                <div class="m_right">
                    <div><?php echo $row['message']; ?></div>
                    <p><?php echo $row['time']; ?></p>
                </div> 
            <?php }
            else{ ?>
                <div class="m_left">
                    <div><?php echo $row['message']; ?></div>
                    <p><?php echo $row['time']; ?></p>
                </div>
                <?php }
        }
    }
}
?>