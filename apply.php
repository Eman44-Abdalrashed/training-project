<?php
session_start();
    require_once 'head.php';
    require_once 'header.php';
    $id_com = (isset($_GET['id'])? $_GET['id'] :NULL);
    $id =(int)$id_com;
    $stmt =$conn->query("SELECT id,name,com_image,type,location,facebook,twiter,google,map,instgram,website,com_des FROM ((company INNER JOIN location ON company.com_location=location.id_location) INNER JOIN speciality ON company.com_speciality=speciality.spec_id) WHERE company.id=$id");
?>
    <div class="ser_div2">
        <a href="index.php">HOME</a><i class="fa fa-arrow-right"></i> companices <i class="fa fa-arrow-right"></i>profile
    </div>
    <div class="apply_divs">
        <div class="apply_div1">
            <?php 
                while($row = $stmt->fetch()){
                    echo '<div><a href="'.$row['facebook'].'"><i class="fa fa-facebook"></i></a></div>
                          <div><a href="'.$row['twiter'].'"><i class="fa fa-twitter"></i></a></div>
                          <div><a href="'.$row['google'].'"><i class="fa fa-google-plus-square"></i></a></div>
                          <div><a href="'.$row['instgram'].'"><i class="fa fa-skype"></i></a></div>';
                }
            ?>
        </div>
        <div class="apply_div2">
                <?php 
                 $stmt2 =$conn->query("SELECT id,name,com_image,type,location,facebook,twiter,google,map,instgram,website,com_des FROM ((company INNER JOIN location ON company.com_location=location.id_location) INNER JOIN speciality ON company.com_speciality=speciality.spec_id) WHERE company.id=$id");
                    while($row = $stmt2->fetch()){
                        echo '<p>'.$row['name'].'</p>
                        <img src="'.$row['com_image'].'" alt="#">
                        <div><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        <a href="#"><button>Rate Company</button></a>';
                    }                
                ?>
        </div>
        <div class="apply_div3">
        <?php
             $stmt3 =$conn->query("SELECT id,name,com_image,type,location,facebook,twiter,google,map,instgram,website,com_des FROM ((company INNER JOIN location ON company.com_location=location.id_location) INNER JOIN speciality ON company.com_speciality=speciality.spec_id) WHERE company.id=$id");
            while($row = $stmt3->fetch()){
                echo ' <div><i class="fa fa-building"></i><span class="span1"> Specialization</span><span> : '.$row['type'].'</span></div>
                        <div><i class="fa fa-map-marker"></i><span class="span1"> Location</span><span> : '.$row['location'].'</span></div>
                        <div><i class="fa fa-laptop"></i><span class="span1"> Website</span><span><a href="'.$row['website'].'">: Visit Our Site Now</a></span></div>
                        <div><i class="fa fa-info-circle"></i><span class="span1">  Info</span><span> <p>: '.$row['com_des'].'</p></span></div>
                        <div><a href="com_connect.php"><button>Apply Now</button></a></div>';
            }
        ?>
        </div>
    </div>
    <div class="apply_map">
            <?php 
                $stmt4 =$conn->query("SELECT id,name,com_image,type,location,facebook,twiter,google,map,instgram,website,com_des FROM ((company INNER JOIN location ON company.com_location=location.id_location) INNER JOIN speciality ON company.com_speciality=speciality.spec_id) WHERE company.id=$id");
                while($row = $stmt4->fetch()){
                    echo '<iframe src="'.$row['map'].'" frameborder="0"></iframe>';
                }
            ?>
    </div>
    <?php require_once 'footer.php'; ?>
</body>
</html>