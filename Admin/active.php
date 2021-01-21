<?php
require_once 'connect/connect.php';
$com_active = (isset($_GET['active'])? $_GET['active'] :NULL);
$stmt1 =$conn->query("SELECT states FROM company WHERE id =$com_active");
$st= $stmt1->fetch();
if($st['states']=='0'){
    $stmt2 ="UPDATE  company set states=1 WHERE id =$com_active";
    $conn ->exec($stmt2);
    echo '1';
}else{
    $stmt2 ="UPDATE  company set states=0 WHERE id =$com_active";
    $conn ->exec($stmt2);
    echo '0';
}
header('location:show_com.php');