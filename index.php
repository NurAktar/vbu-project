<?php
include_once "login_check.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>vbu-sellmybook</title>
    <style rel="prefetch" as="style">
        .splash{
        font-family:ubuntu;z-index:11;display:flex;flex-direction:column;color:#000;font-weight:600;font-size:1.7rem;justify-content: center;align-items:center;position:fixed;width:100vw;height:100vh;background:#fff;transition: 0.7s;
        }
        .splash img{
        height:120px;
        }
    </style>
    <script rel="prefetch" type="text/javascript">
        function loaded(){
        document.body.style="overflow-y:scroll;";
        document.querySelector(".splash").style.opacity=0;
        setTimeout(function () {
            document.querySelector(".splash").style="display:none;"
        }, 700);
        }
        window.onload=loaded;
    </script>
</head>
<body>
<div class="splash">
<!-- <img src="images/load.gif"> -->
<video muted loop id="myVideo" autoplay style="height:200px">
    <source src="loading-motion-3585810-3162487.mp4" type="video/mp4">
</video>
<p>LOADING...</p>
</div>

    <nav class="navbar">
        <div class="left_nav">
            <!-- <button><svg style="color: #696969" height="27px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="22px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z" fill="#696969"></path></svg></button> -->
            <img class="logo" src="navbarlogo.png" alt="not loading">
        </div>
        <div id="profile" class="profile">
            <img class="avatar" onclick="menu()" <?php if($display){?> src="images/blank-profile-picture-973460__340.png" <?php } else{ ?> src="images/avatar.jpg" <?php } ?> alt="notloaded"/>
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
                        <a href="signup.php">About us</a>
                    </li><?php
                }
                else{?>
                    <li>
                        <a href="createpost.php">Create Post</a>
                    </li>
                    <li>
                        <a href="">Messages</a>
                    </li>
                    <li>
                        <a href="">My Posts</a>
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
        <div class="searchbar_body">
            <input placeholder="search book name..." class="searchbar" type="text">
            <input class="searchbar_btn" value="SEARCH" type="button"></input>
            <!-- <button><img src="search.svg" alt="search"></button> -->
        </div>
        
        <div class="container">
            <div class="heading">
                <h1>Recent post:</h1>
            </div>
            <div class="card">
                <span class="sub">Sub_ Math</span>
                <img src="https://source.unsplash.com/random/150x200/?books" alt="">
                <div class="details">
                    <h5>Let us C.</h5>
                    <p>Writer: Yashavant Kanetkar.<br>Publishing Date:2022<br>17th Eddition.</p>
                    <div class="innerbox">
                        <button><a href="details.php">Details</a></button>
                        <div class="pricebox">
                            <span>Price:</span><span>299</span>
                        </div>
                    </div>
                    
                </div>
                <!-- inner box item / img/ details -->
            </div>
            <div class="card">
                <span class="sub">Sub_ Math</span>
                <img src="https://source.unsplash.com/random/150x200/?books=4" alt="">
                <div class="details">
                    <h5>Let us C.</h5>
                    <p>Writer: Yashavant Kanetkar.<br>Publishing Date:2022<br>17th Eddition.</p>
                    <div class="innerbox">
                        <button><a href="details.html">Details</a></button>
                        <div class="pricebox">
                            <span>Price:</span><span>299</span>
                        </div>
                    </div>
                    
                </div>
                <!-- inner box item / img/ details -->
            </div>
            <div class="card">
                <span class="sub">Sub_ Math</span>
                <img src="https://source.unsplash.com/random/150x200/?books=3" alt="">
                <div class="details">
                    <h5>Let us C.</h5>
                    <p>Writer: Yashavant Kanetkar.<br>Publishing Date:2022<br>17th Eddition.</p>
                    <div class="innerbox">
                        <button><a href="details.html">Details</a></button>
                        <div class="pricebox">
                            <span>Price:</span><span>299</span>
                        </div>
                    </div>
                    
                </div>
                <!-- inner box item / img/ details -->
            </div>
            <div class="card">
                <span class="sub">Sub_ Math</span>
                <img src="https://source.unsplash.com/random/150x200/?books=2" alt="">
                <div class="details">
                    <h5>Let us C.</h5>
                    <p>Writer: Yashavant Kanetkar.<br>Publishing Date:2022<br>17th Eddition.</p>
                    <div class="innerbox">
                        <button><a href="details.html">Details</a></button>
                        <div class="pricebox">
                            <span>Price:</span><span>299</span>
                        </div>
                    </div>
                    
                </div>
                <!-- inner box item / img/ details -->
            </div>
            <div class="card">
                <span class="sub">Sub_ Math</span>
                <img src="https://source.unsplash.com/random/150x200/?books=5" alt="">
                <div class="details">
                    <h5>Let us C.</h5>
                    <p>Writer: Yashavant Kanetkar.<br>Publishing Date:2022<br>17th Eddition.</p>
                    <div class="innerbox">
                        <button><a href="details.html">Details</a></button>
                        <div class="pricebox">
                            <span>Price:</span><span>299</span>
                        </div>
                    </div>
                    
                </div>
                <!-- inner box item / img/ details -->
            </div>
            <div class="card">
                <span class="sub">Sub_ Math</span>
                <img src="https://source.unsplash.com/random/150x200/?books=6" alt="">
                <div class="details">
                    <h5>Let us C.</h5>
                    <p>Writer: Yashavant Kanetkar.<br>Publishing Date:2022<br>17th Eddition.</p>
                    <div class="innerbox">
                        <button><a href="details.html">Details</a></button>
                        <div class="pricebox">
                            <span>Price:</span><span>299</span>
                        </div>
                    </div>
                    
                </div>
                <!-- inner box item / img/ details -->
            </div>
            <div class="card">
                <span class="sub">Sub_ Math</span>
                <img src="https://source.unsplash.com/random/150x200/?books=7" alt="">
                <div class="details">
                    <h5>Let us C.</h5>
                    <p>Writer: Yashavant Kanetkar.<br>Publishing Date:2022<br>17th Eddition.</p>
                    <div class="innerbox">
                        <button><a href="details.html">Details</a></button>
                        <div class="pricebox">
                            <span>Price:</span><span>299</span>
                        </div>
                    </div>
                    
                </div>
                <!-- inner box item / img/ details -->
            </div>
            <div class="card">
                <span class="sub">Sub_ Math</span>
                <img src="high-angle-books-stack-assortment.jpg" alt="">
                <div class="details">
                    <h5>Let us C.</h5>
                    <p>Writer: Yashavant Kanetkar.<br>Publishing Date:2022<br>17th Eddition.</p>
                    <div class="innerbox">
                        <button><a href="details.html">Details</a></button>
                        <div class="pricebox">
                            <span>Price:</span><span>299</span>
                        </div>
                    </div>
                    
                </div>
                <!-- inner box item / img/ details -->
            </div>
        </div>
    </div>
    <section style="height: 600px;"></section>
    <footer>
        <img src="images/vbu_logo_white.png" alt="notloaded">
        <div>
            <h5>Project by Sk Nur Aktar</h5>
            <p>Old Book selling website for VBU.</p>
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html>