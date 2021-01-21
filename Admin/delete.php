<?php
require_once 'connect/connect.php';
$com_delete = (isset($_GET['delete'])? $_GET['delete'] :NULL);
$stmt ="DELETE FROM company WHERE id =$com_delete";
$conn ->exec($stmt);
header('location:show_com.php');