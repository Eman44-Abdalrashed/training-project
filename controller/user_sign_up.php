<?php
require_once '../connect/connect.php';
// require_once '../connect/style.php';
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $pass =$_POST['pass'];
    $rpass =$_POST['rpass'];
    $password =sha1($pass);
    $rpassword =sha1($rpass);
    if(empty($password)||empty($rpassword)){
        echo '<script>alert("Please,complete all fileds")</script>';
        header('refresh:0.5; url=../sign_up.php');
    }else{
        $stm2 = $conn->query("SELECT email FROM users")->fetchAll(PDO::FETCH_COLUMN);
        if($password == $rpassword){
            if(in_array($email,$stm2)){
                echo '<script>alert("sorry,this email is exicts")</script>';
                header('refresh:0.9; url=../sign_up.php');
            }else{
                $stm ="INSERT INTO users (name,email,password,repassword) VALUES ('$name','$email','$password','$rpassword')";
                $conn ->exec($stm);
                echo '<script>alert("Welcome")</script>';
                // header('location:../login.php');
                header('refresh:0.9; url =../login.php');
            }
        }else{
            echo '<script>alert("Please,password and confirm password should be equal")</script>';
            header('refresh:0.9; url =../sign_up.php');
        }
    }
    // echo '<script>alert(" ")</script>';
    // header('refresh:0.9; url=../index.php');
}
?>