<?php
require_once '../connect/connect.php';
require_once '../connect/style.php';
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $subject =$_POST['subject'];
    $message =$_POST['area'];
    if(empty($phone)||empty($subject)||empty($message)){
        echo '<script>alert("Please,complete all fileds")</script>';
        // echo '<div class="div_php"><span>Please,complete all fileds</span></div>';
        header('refresh:0.9; url=../contact.php');
    }else{
        $stm ="INSERT INTO contacts (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message') ";
        $conn ->exec($stm);
        echo '<script>alert("thanks, we call you nearly ")</script>';
        header('refresh:0.9; url=../index.php');
    }
}