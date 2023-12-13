<?php
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['submit'])){
    $username = $_POST['username'];
    $emai = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword){
        include "db_conn.php";
        echo "may be email already exist!";
        $sql = "INSERT INTO user_reg(username, email, password) VALUES('$username', '$emai', '$cpassword')";
        mysqli_query($conn,$sql);
        header("Location: signin.php");
    }
    else{
        header("Location: signup.php?wrongpass=true");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg_img">
        <nav class="navbar">
            <div class="left_nav">
                <!-- <button><svg style="color: #696969" height="27px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="22px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z" fill="#696969"></path></svg></button> -->
                <img src="logo.png" alt="not loading">
            </div>
            <div id="profile" class="profile">
                <img onclick="menu()" src="images/blank-profile-picture-973460__340.png" alt="notloaded"/>
                <ul id="signup_box" class="drop-content">
                    <li>
                        <a href="signin.php">Login</a>
                    </li>
                    <li>
                        <a class="dropselected">Signup</a>
                    </li>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="signup_body">
            <div style="align-items: flex-end;" class="signup_box">
                <h2>SignUp</h2>
                <form id="signup_form" action="" method="post">
                    <label>username</label>
                    <input name="username" required placeholder="Enter Name" type="text">
                    <label>Email Id</label>
                    <input name="email" required placeholder="Enter email" type="email">
                    <label>Create password</label>
                    <input name="password" required placeholder="Enter Password" type="password">
                    <label>Confirm password</label>
                    <input name="cpassword" id="cpwd" onkeyup="chkpwd()" required placeholder="Confirm Password" type="password">
                    <input name="submit" type="submit" value="Create">
                </form>
            </div>
            <img src="images/bg2.jpg" alt="not loaded"/>
        </div>
    </div>
    <footer>
        <img src="images/vbu_logo_white.png" alt="notloaded">
        <div>
            <h5>Project by Sk Nur Aktar</h5>
            <p>Old Book selling website for VBU.</p>
        </div>
    </footer>
</body>
<script src="script.js"></script>
<script>
let url = window.location.href.split('?wrongpass=')[1];
if(url == 'true'){
    alert("incorrect password!");
}
// else{
//     window.history.pushState('Signup', 'Signup', '/signup.php');
// }
let password = document.querySelectorAll("input[type=password]");
let cinput = document.getElementById("cpwd");
function chkpwd(){
    if(password[0].value != password[1].value){
        cinput.style.color = "red";
    }
    else{
        cinput.style.color = "green";
    }
}
</script>
</html>