<?php
    session_start();
    require_once 'head.php';
    require_once 'connect/connect.php';
?>
    <div class="left" id="id_left">
        <button>
            <a href="logout.php"><?php echo $_SESSION['name']; ?><i class="fa fa-sign-out"></i></a>
        </button>
        <div class="line"><hr></div>
        <div class="list">
            <i class=" fa fa-users"></i><a href="com_profil.php">Dashbord</a>
        </div>
        <div class="list"><i class="fa fa-building "></i><a href="profile.php?profile=">Profil Company</a></div>
        <div class="list"><i class="fa fa-user"></i><a href="profile.php?profile=students">Student Reservations</a></div>
        <div class="list no">
            <i class=" fa fa-envelope"></i><a href="show_profil.php?profile=inbox">Inbox</a>
        </div>
        <div class="list image">
            <a href="#"><img src="../Admin/images/footer-logo.png" alt="#"></a>
        </div>
    </div>
    <div class="pro_right">
        <div class="pr_header"><header>your Company Profile</header></div>
        <div class="page_profil">
            <div class="pro_div1">
                <?php 
                    $id =(int)$_SESSION['com'];
                     $stmt =$conn->query("SELECT id, name,email,facebook,twiter,instgram,google,phone,map,website,com_des,com_image,location,type FROM ((company INNER JOIN location ON company.com_location=location.id_location) INNER JOIN speciality ON company.com_speciality=speciality.spec_id) WHERE company.id=$id"); 
                     while($row = $stmt->fetch()){
                         echo '
                        <p><i class="fa fa-envelope"></i><span>Email:<span class="span"> '.$row['email'].'</span></span></p>
                        <p><i class="fa fa-phone"></i><span>Phone: <span class="span"> '.$row['phone'].'</span></span></p>
                        <p><i class="fa fa-tree"></i><span>Specialist: <span class="span"> '.$row['type'].'</span></span></p>
                        <p><i class="fa fa-map-marker"></i><span>Location: <span class="span"> '.$row['location'].'</span></span></p>
                        <p><i class="fa fa-tags"></i><span>Link Website: <span class="span"> '.$row['website'].'</span></span></p>
                        <p><i class="fa fa-facebook"></i><span>Facebook: <span class="span"> '.$row['facebook'].'</span></span></p>
                        <p><i class="fa fa-twitter"></i><span>Twitter: <span class="span"> '.$row['twiter'].'</span></span></p>
                        <p><i class="fa fa-instagram"></i><span>Google: <span class="span"> '.$row['google'].'</span></span></p>
                        <p><i class="fa fa-google"></i><span>Instagram: <span class="span"> '.$row['instgram'].'</span></span></p>
                        <p><i class="fa fa-info"></i><span>Description: <span class="span"> '.$row['com_des'].'</span></span></p>
                        <a href="../edit.php"><button><i class="fa fa-edit"></i>EDIT PROFILE</button></a>
            </div>
            <div class="pro_div2">
                <p>'.$row['name'].'</p>
                <img src="../'.$row['com_image'].'" alt="#">
                <p><a href="#"><i class="fa fa-edit"></i></a></p>
            </div>
            <div class="pro_div3">
                <iframe src="'.$row['map'].'" frameborder="0"></iframe>
            </div>';
        } ?>
        </div>
    </div>
</body>
</html>