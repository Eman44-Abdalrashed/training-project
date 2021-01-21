<?php
    session_start();
    require_once 'head.php';
    require_once 'connect/connect.php';
?>
    <section class="register register2">
        <div>
            <h1><span>C</span>reative <span>L</span>ogin <span>F</span>orm</h1>
        </div>
        <div class="reg_body">
            <div class="com_div1"><span>Login To your Company</span></div>
            <div class="reg_div2">
                <div>
                   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                       <div class="group2">
                            <div class="group_top">
                                <i class="fa fa-envelope"></i>
                                <label>Company E-Mail</label>
                            </div>
                            <div class="group_down">
                                <input type="text" name="com_email">
                            </div>
                        </div>
                        <div class="group2">
                            <div class="group_top">
                                <i class="fa fa-key"></i>
                                <label>Password</label>
                            </div>
                            <div class="group_down">
                                <input type="password" name="pass_com">
                            </div>
                        </div>
                        <div class="footer2">
                            <input type="submit" name="submit" value="LOGIN">
                            <span>Don't have an account? <a href="register.php">Sign up</a></span>
                        </div>
                   </form>
                </div>
            </div>
        </div>
        <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $email =$_POST['com_email'];
                    $pass =$_POST['pass_com'];
                    $password =sha1($pass);
                    $stm = $conn->query("SELECT * FROM company WHERE email ='$email' AND password ='$password'");
                    $count =$stm->rowCount();
                    if($count > 0){
                        $name =$stm->fetch();
                        $_SESSION['name']=$name['name'];
                        $_SESSION['com']=$name['id'];
                        header('refresh:.3;url=Admin/com_profil.php?id='.$name['id'].'');
                    }else{
                        $_SESSION['error']='email or password is not exitcs <br>  we transfer you to login page after 5s';
                                $_SESSION['url']='../sign_in_com.php';
                                header('location:error.php');
                    }

                }
            ?>
    </section>
</body>
</html>