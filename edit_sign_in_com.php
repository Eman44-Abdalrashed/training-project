<?php
    session_start();
    require_once 'connect/connect.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name      =$_POST['com_name'];
        $com_email =$_POST['com_email'];
        $phone     =$_POST['phone'];
        $link      =$_POST['link'];
        $specialist=$_POST['specialist'];
        $location  =$_POST['location'];
        $facebook  =$_POST['facebook'];
        $twiter    =$_POST['twiter'];
        $instagram =$_POST['instagram'];
        $google    =$_POST['google'];
        $textarea  =$_POST['textarea'];
    
        $id=(int)$_SESSION['com'];
        $stmt2 ="UPDATE company SET name='$name',email='$com_email',phone='$phone',website='$link',com_speciality=$specialist,com_location=$location
        ,facebook='$facebook',twiter='$twiter',instgram='$instagram',google='$google',com_des='$textarea' WHERE id =$id";
        $conn->exec($stmt2);
        header('location:Admin/profile.php');
    }    