<?php
    session_start();
    require_once 'head.php';
    if(isset($_SESSION['admin'])){
    }else{
        header('location:login.php');
    }
?>
    <div class="add_admin">
       <div class="admin_form">
             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                 <div>
                     <h1>Add Speciality</h1>
                 </div>
                <div>
                    <div><label for="">Speciality Name</label></div>
                    <div><input type="text" name="type" required></div>
                </div>
                <div class="spec">
                    <input type="submit" name="add_admin" value="Add Speciality">
                </div>
            </form>
       </div>
    </div>
    <!-- ==================================== -->
    <!-- insert in database -->
    <?php
                    require_once 'connect/connect.php';
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $type =$_POST['type'];
                        $stm2 = $conn->query("SELECT type FROM speciality")->fetchAll(PDO::FETCH_COLUMN);
                        if(in_array($type,$stm2)){
                            echo '<script>alert("this")</script>';
                        }else{
                            $stm ="INSERT INTO speciality (type) VALUES ('$type')";
                            $conn ->exec($stm);
                            echo '<script>alert("success adding")</script>';
                            header('refresh:0.9; url =index.php');
                        }
                    }
                    ?>
</body>
</html>