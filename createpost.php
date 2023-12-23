<?php
include_once "login_check.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="postpage.css">
    <title>vbu-sellmybook</title>
</head>
<body>
    <nav class="navbar">
        <div class="left_nav">
            <a href="index.php"><img class="logo" src="navbarlogo.png" alt="not loading"></a>
        </div>
        <div id="profile" class="profile">
            <img class="avatar" onclick="menu()" <?php if($display){?> src="images/blank-profile-picture-973460__340.png" <?php } else{ ?> src="images/avatar.jpg" <?php } ?> alt="notloaded"/>
            <ul id="signup_box" class="drop-content">
                <li>
                    <a href="index.php">Home page</a>
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
            </ul>
        </div>
    </nav>
    <div class="header">
        <h1>Create Post</h1>
    </div>
    <div class="display_outer">
        <div class="display_inner">
            <div id="backdiv" class="p_container">
                <div class="drag-drop">
                    <div id="selectedheader">
                        <h2>Selected image:</h2>
                        <div id="selected"></div>
                    </div>
                    <h2 id="dragheader">Drag and Drop image here</h2>
                    <span>OR</span>
                    <button onclick="file_browse()">Add Files</button>
                    <input id="i_image" type="file" accept=".jpg,.png,images/*" hidden>
                    <p>Supported Files</p>
                    <p>jpg, png</p>
                    <br>
                    <span>
                        remove.bg before upload <a target="_blank" href="https://www.remove.bg">here</a>
                    </span>
                </div>
                <div class="bookdetails">
                    <h1>Fill in the details</h1>
                    <label for="">Name of the book</label>
                    <input id="i_name" placeholder="Enter name of book" type="text">
                    <label for="">Author Name</label>
                    <input id="i_author" placeholder="Enter Author name" type="text">
                    <label for="">Subject</label>
                    <input id="i_subject" placeholder="Enter Subject" type="text">
                    <label for="">Purchase date</label>
                    <input id="i_date" placeholder="Approx date" type="date">
                    <label for="">MRP label</label>
                    <input id="i_mrp" placeholder="e.g. 559" type="number">
                    <label for="">Set price</label>
                    <input id="i_price" placeholder="Enter selling price" type="number">
                    <button onclick="nextdiv()">Proceed</button>
                </div>
            </div>
            <div id="nextdiv" class="p_container">
                <div class="bookdetails">
                    <h1>More details</h1>
                    <label for="">Publisher</label>
                    <input id="i_publisher" placeholder="Publisher name" type="text">
                    <label for="">Publishing Date</label>
                    <input id="i_pubdate" placeholder="select date" type="date">
                    <label for="">Edition</label>
                    <input id="i_edition" placeholder="e.g. 19th" type="number">
                    <label for="">Number of Pages</label>
                    <input id="i_pagenumber" placeholder="e.g. 492" type="number">
                    <label for="">Language</label>
                    <input id="i_lang" placeholder="e.g. English" type="text">
                    <br>
                    <h1>Book Condition</h1>
                    <label for="">How long you used it</label>
                    <input id="i_used" placeholder="e.g. 5months" type="text">
                    <label for="">Rate Book Condition</label>
                    <input id="i_rate" placeholder="e.g. 8/10" type="number">
                </div>
                <div class="bookdetails">
                    <h1>Your details</h1>
                    <label for="">Email id</label>
                    <input id="i_email" placeholder="Enter Email Id" type="email">
                    <label for="">Whatsapp</label>
                    <input id="i_whatsapp" placeholder="Enter Whatsapp no." type="number">
                    <label for="">Contact Number</label>
                    <input id="i_contact" placeholder="Enter contact number" type="number">
                    <label for="">Location</label>
                    <textarea id="i_address" cols="30" rows="10" placeholder="e.g. Take the book at near depertment of dcss."></textarea>
                    <button onclick="submit()">Submit</button>
                    <a onclick="backdiv()">Go previous page?</a>
                </div>
            </div>
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
const elem = document.querySelector(".display_inner");
let file;
const dragArea = document.querySelector('.drag-drop');
var btn = dragArea.querySelector("button");
var input = dragArea.querySelector("input");


function form_fill_check1(){
    var check = 1;
    if(document.getElementById('i_image').value == ''){
        dragArea.style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_name').value == ''){
        document.getElementById('i_name').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_author').value == ''){
        document.getElementById('i_author').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_subject').value == ''){
        document.getElementById('i_subject').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_date').value == ''){
        document.getElementById('i_date').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_mrp').value == ''){
        document.getElementById('i_mrp').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_price').value == ''){
        document.getElementById('i_price').style.outlineColor = 'red';
        check = check-1;
    }
    if(check == 1){
        return true;
    }
    else{
        return false;
    }
}

function form_fill_check2(){
    var check = 1;
    if(document.getElementById('i_publisher').value == ''){
        document.getElementById('i_publisher').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_pubdate').value == ''){
        document.getElementById('i_pubdate').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_edition').value == ''){
        document.getElementById('i_edition').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_pagenumber').value == ''){
        document.getElementById('i_pagenumber').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_lang').value == ''){
        document.getElementById('i_lang').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_used').value == ''){
        document.getElementById('i_used').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_rate').value == ''){
        document.getElementById('i_rate').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_email').value == ''){
        document.getElementById('i_email').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_whatsapp').value == ''){
        document.getElementById('i_whatsapp').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_contact').value == ''){
        document.getElementById('i_contact').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_address').value == ''){
        document.getElementById('i_address').style.borderColor = 'red';
        check = check-1;
    }
    if(check == 1){
        return true;
    }
    else{
        return false;
    }
}


function nextdiv() {
    if(form_fill_check1()){
        elem.style.transform="translateX(-100vw)";
        window.scrollTo(top);
    }
}
function backdiv(){
    elem.style.transform="translateX(0vw)";
  window.scrollTo(top);
}



function file_browse(){
    input.click();
}

input.addEventListener("change", function(){
    file = this.files[0];
    show_file();
});

function show_file(){
    // let fileType = file.type;
    let fileReader = new FileReader();
    fileReader.onload = ()=>{
        let fileUrl = fileReader.result;
        // dragArea.style.background = `url("${fileUrl}")`;
        select = document.getElementById("selected");
        let imgtag = `<img src="${fileUrl}" alt="notloaded">`;
        select.innerHTML = imgtag;
        // dragArea.style.background="cover";
    }
    fileReader.readAsDataURL(file);
    document.querySelector("#dragheader").style.display = "none";
    document.querySelector("#selectedheader").style.display = "flex";
    btn.innerText = "Change Image";
}

//submit func

function submit(){
if(form_fill_check2()){
    if(file != undefined){
        var form_data = new FormData();
        //appending all inputs here
        form_data.append('file',file);
        form_data.append('name',document.getElementById('i_name').value);
        form_data.append('author',document.getElementById('i_author').value);
        form_data.append('subject',document.getElementById('i_subject').value);
        form_data.append('date',document.getElementById('i_date').value);
        form_data.append('mrp',document.getElementById('i_mrp').value);
        form_data.append('price',document.getElementById('i_price').value);
        form_data.append('publisher',document.getElementById('i_publisher').value);
        form_data.append('pubdate',document.getElementById('i_pubdate').value);
        form_data.append('edition',document.getElementById('i_edition').value);
        form_data.append('pagenumber',document.getElementById('i_pagenumber').value);
        form_data.append('lang',document.getElementById('i_lang').value);
        form_data.append('used',document.getElementById('i_used').value);
        form_data.append('rate',document.getElementById('i_rate').value);
        form_data.append('email',document.getElementById('i_email').value);
        form_data.append('whatsapp',document.getElementById('i_whatsapp').value);
        form_data.append('contact',document.getElementById('i_contact').value);
        form_data.append('address',document.getElementById('i_address').value);
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "postupload.php", true);
        xhttp.onload = function(event){
            if(xhttp.status == 200){
                alert(xhttp.responseText);
            }
            else{
                alert(xhttp.status);
            }
        }
        xhttp.send(form_data);
    }
}
}
</script>
</html>