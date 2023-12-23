<?php
session_start();
if(isset($_SESSION['userid'])){
    include_once "db_conn.php";
    $userid = $_SESSION['userid'];
    $sql = "SELECT my_post FROM user_reg WHERE email='$userid'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $my_post = $row['my_post'];
}
if(isset($_FILES['file'])){
    $name = $_POST['name'];
    $author = $_POST['author'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $mrp = $_POST['mrp'];
    $price = $_POST['price'];
    $publisher = $_POST['publisher'];
    $pubdate = $_POST['pubdate'];
    $edition = $_POST['edition'];
    $pagenumber = $_POST['pagenumber'];
    $lang = $_POST['lang'];
    $used = $_POST['used'];
    $rate = $_POST['rate'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    if(!file_exists('uploads')){
        mkdir("uploads");
    }
    $filename = time().'_'.$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$filename);

    $sql = "INSERT INTO book_posted(image, name, author, subject, date, mrp, price, publisher, pubdate, edition, pagenumber, lang, used, rate, email, whatsapp, contact, address, posted_by) VALUES('$filename', '$name', '$author', '$subject', '$date', '$mrp', '$price', '$publisher', '$pubdate', '$edition', '$pagenumber', '$lang', '$used', '$rate', '$email', '$whatsapp', '$contact', '$address', '$userid')";
    $res = mysqli_query($conn, $sql);
    $sql = "INSERT INTO `$my_post`(image, name, author, subject, date, mrp, price, publisher, pubdate, edition, pagenumber, lang, used, rate, email, whatsapp, contact, address) VALUES('$filename', '$name', '$author', '$subject', '$date', '$mrp', '$price', '$publisher', '$pubdate', '$edition', '$pagenumber', '$lang', '$used', '$rate', '$email', '$whatsapp', '$contact', '$address')";
    $res = mysqli_query($conn, $sql);
    echo $res;
}
die;
?>