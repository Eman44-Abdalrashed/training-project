<?php
    session_start();
    require_once 'connect/connect.php';
    require_once 'head.php';
    if(isset($_SESSION['com'])){
    }else{
        header('location:../sign_in_com.php');
    }
?>
    <div class="left" id="id_left">
        <button>
            <a href="logout.php"><?php echo $_SESSION['name']; ?> <i class="fa fa-sign-out"></i></a>
        </button>
        <div class="line"><hr></div>
        <div class="list">
            <i class=" fa fa-users"></i><a href="">Dashbord</a>
        </div>
        <div class="list"><i class="fa fa-building "></i><a href="profile.php?profile=profile">Profil</a></div>
        <div class="list"><i class="fa fa-user"></i><a href="show_profil.php?profile=students">Student Reservations</a></div>
        <div class="list pro">
            <i class=" fa fa-envelope"></i><a href="show_profil.php?profile=inbox">Inbox</a>
        </div>
        <div class="list image">
            <a href="#"><img src="../Admin/images/footer-logo.png" alt="#"></a>
        </div>
    </div>
    <div class="right">
    </div>
</body>
</html>