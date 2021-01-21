<?php
    session_start();
    require_once 'connect/connect.php';
    require_once 'head.php';
    if(isset($_SESSION['admin'])){
    }else{
        header('location:login.php');
    }
?>
    <div class="left">
        <button>
            <a href="logout.php"><?php echo $_SESSION['admin']; ?> <i class="fa fa-sign-out"></i></a>
        </button>
        <div class="line"><hr></div>
        <div class="list">
            <i class=" fa fa-users"></i><a href="#">Dashbord</a>
        </div>
        <?php
            $stmt =$conn->query("SELECT * FROM speciality");
            while($row = $stmt->fetch()){
               echo '<div class="list"><i class=" fa fa-building"></i><a href="?action='. $row['spec_id'].'">'. $row['type'].' Companies</a></div>';
            }
        ?>
        <div class="list">
            <i class=" fa fa-envelope"></i><a href="#">Inbox</a>
        </div>
        <div class="list image">
            <a href="#"><img src="../Admin/images/footer-logo.png" alt="#"></a>
        </div>
    </div>
    <div class="right">
            <div class="right_head">
                <button><a href="add_location.php">Add Location</a></button>
                <button><a href="add_speciality.php">Add speciality</a></button>
                <button><a href="add_admin.php">Add Admin</a></button>
            </div>
    </div>
    <?php
        require_once 'connect/connect.php';
            $action = (isset($_GET['action'])? $_GET['action'] :NULL);
            $stm2 = $conn->query("SELECT spec_id FROM speciality")->fetchAll(PDO::FETCH_COLUMN);
            if(in_array($action,$stm2)){
                $_SESSION['action']=$action;
                header('location:show_com.php');
            }
    ?>
</body>
</html>
