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
    <form class="editform" action="update.php" method="post">
        <div>
            <h1>Fill in the details</h1>
            <label>Name of the book</label>
            <input name="name" placeholder="Enter name of book" type="text" value="<?php echo $row['name']; ?>">
            <label>Author Name</label>
            <input name="author" placeholder="Enter Author name" type="text" value="<?php echo $row['author']; ?>">
            <label>Subject</label>
            <input name="subject" placeholder="Enter Subject" type="text" value="<?php echo $row['subject']; ?>">
            <label>Purchase date</label>
            <input name="date" placeholder="Approx date" type="date" value="<?php echo $row['date']; ?>">
            <label>MRP label</label>
            <input name="mrp" placeholder="e.g. 559" type="number" value="<?php echo $row['mrp']; ?>">
            <label>Set price</label>
            <input name="price" placeholder="Enter selling price" type="number" value="<?php echo $row['price']; ?>">
        </div>
        <div>
            <h1>More details</h1>
            <label>Publisher</label>
            <input name="publisher" placeholder="Publisher name" type="text" value="<?php echo $row['publisher']; ?>">
            <label>Publishing Date</label>
            <input name="pubdate" placeholder="select date" type="date" value="<?php echo $row['pubdate']; ?>">
            <label>Edition</label>
            <input name="edition" placeholder="e.g. 19th" type="number" value="<?php echo $row['edition']; ?>">
            <label>Number of Pages</label>
            <input name="pagenumber" placeholder="e.g. 492" type="number" value="<?php echo $row['pagenumber']; ?>">
            <label>Language</label>
            <input name="lang" placeholder="e.g. English" type="text" value="<?php echo $row['lang']; ?>">
        </div>
        <div>
            <h1>Book Condition</h1>
            <label>How long you used it</label>
            <input name="used" placeholder="e.g. 5months" type="text" value="<?php echo $row['used']; ?>">
            <label>Rate Book Condition</label>
            <input name="rate" placeholder="e.g. 8/10" type="number" value="<?php echo $row['rate']; ?>">
            <h1>Your details</h1>
            <label>Email id</label>
            <input name="email" placeholder="Enter Email Id" type="email" value="<?php echo $row['email']; ?>">
            <label>Whatsapp</label>
            <input name="whatsapp" placeholder="Enter Whatsapp no." type="number" value="<?php echo $row['whatsapp']; ?>">
            <label>Contact Number</label>
            <input name="contact" placeholder="Enter contact number" type="number" value="<?php echo $row['contact']; ?>">
            <label>Location</label>
            <textarea name="address" cols="30" rows="10" placeholder="e.g. Take the book at near depertment of dcss."><?php echo $row['address']; ?></textarea>
        </div>
        <input type="text" hidden name="bookid" value="<?php echo $bookid ?>">
        <input type="text" hidden name="my_post" value="<?php echo $my_post ?>">
        <input type="text" hidden name="time" value="<?php echo $row['time']; ?>">
        <!-- <button onclick="submit()">Submit</button> -->
        <input class="btn-grad" type="submit" name="submit" value="Update">
    </form>
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