<?php
    session_start();
    require_once 'connect/connect.php';
    require_once 'head.php';
?>
    <div class="add_admin">
       <div class="admin_form">
             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                 <div>
                     <h1>Login Admin</h1>
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
                    <input type="submit" name="login" value="Login">
                </div>
            </form>
       </div>
    </div>
    <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $email =$_POST['email'];
                    $pass =$_POST['pass'];
                    $password =sha1($pass);
                    $stm = $conn->query("SELECT * FROM admins WHERE email ='$email' AND password ='$password'");
                    $count =$stm->rowCount();
                    if($count > 0){
                        $name =$stm->fetch();
                        $_SESSION['admin']=$name['name'];
                        header('refresh:.3;url=index.php');
                    }else{
                        echo '<p>email and password is not exitcs</p>';
                    }

                }
            ?>
</body>
</html>