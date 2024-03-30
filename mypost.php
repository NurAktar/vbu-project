<?php
include_once "login_check.php";
if($display){header("Location:signin.php");}
include_once "db_conn.php";
$sql = "SELECT `my_post` FROM `user_reg` WHERE email='$userid'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$my_post = $row['my_post'];
$sql = "SELECT * FROM $my_post ORDER BY id DESC";
$res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mypost.css">
    <title>vbu-sellmybook</title>
</head>
<body>
<nav class="navbar">
    <div class="left_nav">
        <!-- <button><svg style="color: #696969" height="27px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="22px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z" fill="#696969"></path></svg></button> -->
        <a href="index.php"><img class="logo" src="images/navbarlogo.png" alt="not loading"></a>
    </div>
    <div id="profile" class="profile">
        <?php if($display){ echo "<a class='welcome' href='signin.php'>Login</a>"; } else{ echo "<span class='welcome'>".$uname_log."</span>"; } ?>
        <img class="avatar" onclick="menu()" <?php if($display){?> src="images/blank-profile-picture-973460__340.png" <?php } else{ ?> src="images/avatar.jpg" <?php } ?> alt="notloaded"/>
        <ul id="signup_box" class="drop-content">
            <?php
            if($display){
                header("Location:signin.php");
            }
            else{?>
                <li>
                    <a href="createpost.php">Create Post</a>
                </li>
                <li>
                    <a href="message.php">Messages</a>
                </li>
                <li>
                    <a href="aboutus.php">About us</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            <?php }
            ?>
        </ul>
    </div>
</nav>
<div class="body">
    <div class="container">
        <div class="heading">
            <h1>Manage Uploads:</h1>
        </div>
        <!-- fetching cards -->
        <?php
        while ($row = mysqli_fetch_assoc($res)) {?>
            <div class="card">
                <span class="sub"><?php echo $row['subject']; ?></span>
                <img src="<?php echo 'uploads/'.$row['image']; ?>" alt="notloaded">
                <div class="details">
                    <h5><?php echo $row['name']; ?></h5>
                    <p>Writer: <?php echo $row['author']; ?><br>Publishing Date: <?php echo $row['pubdate']; ?><br><?php echo $row['edition']; ?>th Edition.</p>
                    <div class="innerbox">
                        <a href="editpost.php?bookid=<?php echo $row['id']; ?>">Update</a>
                        <a class="del" href="delpost.php?bookid=<?php echo $row['id']; ?>">Delete</a>
                        <!-- <div class="pricebox">
                            <span>Price: ₹<?php echo $row['price']; ?></span>
                        </div> -->
                    </div>
                </div>
            </div>
        <?php
        } ?>
    </div>
</div>
<footer>
    <img src="images/vbu_logo_white.png" alt="notloaded">
    <div>
        <h5>Project by Sk Nur Aktar</h5>
        <h5>Supervised by Dr. Kakali Datta.</h5>
        <p>Old Book selling website for Visva-Bharati University.</p>
    </div>
</footer>
</body>
<script src="script.js"></script>
</html>