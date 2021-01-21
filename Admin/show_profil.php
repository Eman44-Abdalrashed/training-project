<?php
    session_start();
    require_once 'connect/connect.php';
    require_once 'head.php';
    if(isset($_SESSION['admin'])){
    }else{
        header('location:login.php');
    }
    $action = (isset($_GET['action'])? $_GET['action'] :NULL);
    $stm2 = $conn->query("SELECT spec_id FROM speciality")->fetchAll(PDO::FETCH_COLUMN);
    if(in_array($action,$stm2)){
        $_SESSION['action']=$action;
    }
?>
    <div class="left">
        <button>
            <a href="logout.php"><?php echo $_SESSION['admin']; ?> <i class="fa fa-sign-out"></i></a>
        </button>
        <div class="line"><hr></div>
        <div class="list">
            <i class=" fa fa-users"></i><a href="index.php">Dashbord</a>
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
    <div class="com_right">
        <table>
            <tr class="first_tr">
                <th>Company Name</th>
                <th>Company Image</th>
                <th>Company Speciality</th>
                <th>Company Location</th>
                <th>Delete Company</th>
                <th>Company Status</th>
            </tr>
            <tr>
                <?php 
                $num =(int)$_SESSION['action'];
                    $stmt =$conn->query("SELECT id,name,com_image,type,location,states FROM ((company INNER JOIN location ON company.com_location=location.id_location) INNER JOIN speciality ON company.com_speciality=speciality.spec_id) WHERE speciality.spec_id=$num");
                    while($row = $stmt->fetch()){
                        $_SESSION['delete']=$row['id'];
                    echo '<tr>';
                    echo '<td>'.$row['name'] .'</td>'
                            .'<td><img src="../'.$row['com_image'].'"></td>'
                            .'<td>'.$row['type'] .'</td>'
                            .'<td>'.$row['location'] .'</td>'
                            .'<td><a href="delete.php?delete='.$row['id'].'"><i class="fa fa-trash"></i></a></td>';
                            if($row['states']==0){
                               echo '<td><a href="active.php?active='.$row['id'].'"><button>ACTIVE</button></a></td>';
                            }else{
                               echo '<td><a href="active.php?active='.$row['id'].'"><button id="no">NO_ACTIVE</button></a></td>';
                            }
                    echo '</tr>';
                    }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>