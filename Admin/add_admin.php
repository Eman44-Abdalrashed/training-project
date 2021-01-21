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
                     <h1>Add Admin</h1>
                 </div>
                <div>
                    <div><label for="">User Name</label></div>
                    <div><input type="text" name="name" required></div>
                </div>
                <div>
                    <div><label for="">Email</label></div>
                    <div><input type="email" name="email" required></div>
                </div>
                <div>
                    <div><label for="">Password</label></div>
                    <div><input type="password" name="pass"></div>
                </div>
                <div>
                    <div><label for="">Confirm Password</label></div>
                    <div><input type="password" name="repass"></div>
                </div>
                <div>
                    <input type="submit" name="add_admin" value="Add Admin">
                </div>
            </form>
       </div>
    </div>
    <!-- ==================================== -->
    <!-- insert in database -->
    <?php
                    require_once 'connect/connect.php';
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $name =$_POST['name'];
                        $email =$_POST['email'];
                        $pass =$_POST['pass'];
                        $rpass =$_POST['repass'];
                        $password =sha1($pass);
                        $rpassword =sha1($rpass);
                        if(empty($_POST['pass'])||empty($_POST['repass'])){
                            echo '<script>alert("Please,complete all fileds")</script>';
                        }else{
                            $stm2 = $conn->query("SELECT email FROM admins")->fetchAll(PDO::FETCH_COLUMN);
                            if($password == $rpassword){
                                if(in_array($email,$stm2)){
                                    echo '<script>alert("sorry,this email is exicts")</script>';
                                    header('refresh:0.9; url=add_admin.php');
                                }else{
                                    $stm ="INSERT INTO admins (name,email,password,repassword) VALUES ('$name','$email','$password','$rpassword')";
                                    $conn ->exec($stm);
                                    echo '<script>alert("Welcome admin")</script>';
                                    header('refresh:0.9; url =login.php');
                                }
                            }else{
                                echo '<script>alert("Please,password and confirm password should be equal")</script>';
                                header('refresh:0.9; url =add_admin.php');
                            }
                        }
                    }
                    ?>
</body>
</html>