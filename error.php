<?php
require_once 'head.php';
session_start();
echo '<div class="error">'.$_SESSION['error'].'</div>';
header('refresh:7;url='.$_SESSION['url'].'');