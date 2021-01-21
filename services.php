<?php
    $_SESSION['services']='services';
    $_SESSION['title'] ='services';
    require_once 'head.php';
    require_once 'header.php';
?>
     <div class="ser_div2">
        <a href="index.php">HOME</a><i class="fa fa-arrow-right"></i><?php echo 'ALL COMPANIES'; ?>
    </div>
    <div class="ser_div3">
        <p>Find The Best Internship For You!</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <select name="location" id="location" onchange="change_loc()">
                <option value="All Location">All Location</option>
                <?php 
                     $stmt =$conn->query("SELECT location,states FROM (company INNER JOIN location ON company.com_location=location.id_location) WHERE company.states='1'");
                    while($row = $stmt->fetch()){
                    echo '<option value="'.$row['location'].'">'.$row['location'].'</option>';
                    }
                ?>
            </select>
            <input type="submit" name="loca">
        </form>
    </div>
    <section>
        <div class="body_div3">
            <?php
                 $stmt2 =$conn->query("SELECT id,name,com_image,type,location,states FROM ((company INNER JOIN location ON company.com_location=location.id_location) INNER JOIN speciality ON company.com_speciality=speciality.spec_id) WHERE company.states='1'"); 
                 while($row = $stmt2->fetch()){
                         echo '<a href="apply.php?id='.$row['id'].'"><div class="image" id="'.$row['location'].'">
                            <div><img src ="'.$row['com_image'].'"></div>
                            <div class ="over">
                            <div class="com_name">'.$row['name'].'</div>
                            <div class="com_spec">'.$row['type'].'</div>
                            <div class="com_loc">'.$row['location'].'</div><div class="com_stars">';
                            for($i=0;$i<4;$i++){
                                echo '<i class="fa fa-star"></i>';
                            }
                            echo '</div><div class="com_show"><a href="#"><button>SEE PROFILE</button></a></div></div></div></a>';
                 }
            ?>         
        </div>
    </section>
    <script src="js/style.js"></script>
    <?php require_once 'footer.php';?>
</body>
</html>