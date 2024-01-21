<?php
$npage = null;
include_once "login_check.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="aboutus.css">
</head>
<body>
    <nav class="navbar">
        <div class="left_nav">
            <!-- <button><svg style="color: #696969" height="27px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="22px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z" fill="#696969"></path></svg></button> -->
            <a href="index.php"><img class="logo" src="navbarlogo.png" alt="not loading"></a>
        </div>
        <div id="profile" class="profile">
            <img  class="avatar" onclick="menu()" src="images/blank-profile-picture-973460__340.png" alt="notloaded"/>
            <ul id="signup_box" class="drop-content">
            <?php
            if($display){?>
                <li>
                    <a href="signin.php">Login</a>
                </li>
                <li>
                    <a href="signup.php">SignUp</a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li><?php
            }
            else{?>
                <li>
                    <a href="createpost.php">Create Post</a>
                </li>
                <li>
                    <a href="#">Messages</a>
                </li>
                <li>
                    <a href="#">My Posts</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            <?php }
            ?>
        </ul>
        </div>
    </nav>
    <div class="container">
        <img src="images/vbu_logo.png" alt="vbulogo">
        <div>
            <h1>Visva Bharati Project.</h1><br>
            <h3>By Nur Aktar M.Sc. Sem - III</h3>
            <h3>Supervised by Kakali Datta.(KD Ma'am)</h3>
            <br>
            <p>A old book selling platform! where any student can simply register with email
                <br> and find a buyer around the University. Or grab a book from the homepage.</p>
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
<script>
    let url = window.location.href.split('?wronginput=')[1];
    if(url == 'true'){
        alert("incorrect input!");
    }
</script>
</html>