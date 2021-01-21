<?php
    session_start();
    require_once 'connect/connect.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name      =$_POST['com_name'];
        $com_email =$_POST['com_email'];
        $pass_com  =$_POST['pass_com'];
        $password  =sha1($pass_com);
        $conf_pass =$_POST['conf_pass'];
        $repassword=sha1($conf_pass);
        $phone     =$_POST['phone'];
        $map       =$_POST['map'];
        $link      =$_POST['link'];
        $specialist=$_POST['specialist'];
        $location  =$_POST['location'];
        $facebook  =$_POST['facebook'];
        $twiter    =$_POST['twiter'];
        $instagram =$_POST['instagram'];
        $google    =$_POST['google'];
        $textarea  =$_POST['textarea'];
      
        
        if($password !=$repassword){
            echo 'password and confirm password must be equal';
        }
        $stmt = $conn->query("SELECT email FROM company")->fetchAll(PDO::FETCH_COLUMN);
        if(in_array($com_email,$stmt)){
            echo 'this email is exicts';
            // header('refresh:.9;url=register.php');
            exit();
        }
        $filepath = __DIR__ . "/" ."upload/"; 
        $fileup = $filepath .  $_FILES['importfilesite']['name'];
        $image = "upload/" . $_FILES['importfilesite']['name'];
        $extensions = array("gif","png","jpg","jpeg");
        $uploadExten = pathinfo($_FILES['importfilesite']['name'])['extension'];
        if ( in_array($uploadExten,$extensions) && $_FILES['importfilesite']['size'] < 300000){
            move_uploaded_file($_FILES['importfilesite']['tmp_name'],$fileup);
            $stmt2 ="INSERT INTO company (name,password,repassword,email,facebook,twiter,instgram,google,phone,map,website,com_des,com_image,com_location,com_speciality) VALUES
             ('$name','$password','$repassword','$com_email','$facebook','$twiter','$instagram','$google','$phone','$map','$link','$textarea','$image','$location','$specialist')";
            $conn ->exec($stmt2);
            header('location:sign_in_com.php');
            // header('refresh:.9;url=sign_in_com.php');
        }
        else{
            echo "sorry we need image only";
            // header('refresh:.9;url=register.php');
        }
    }