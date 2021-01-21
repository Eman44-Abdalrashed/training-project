<?php
    session_start();
    require_once 'connect/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/css/font-awesome.min.css">
    <script src="layout/js/fontawesome.min.js"></script>
   <link rel="stylesheet" href="css/all.css">
    <title>Login</title>
</head>
<body id="login-page">
       <div id="con-login">
           <div id="second-div">
                <div id="head-login">
                    <h1>Sign In</h1>
                    <hr>
                </div>
                <div id="form-login">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                        <div class="input1">
                            <label for=""><i class="fa fa-envelope"></i></label>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="input2">
                            <label for=""><i class="fa fa-key"></i></label>
                            <input type="password" name="pass" placeholder="Password" required>
                        </div>
                        <div class="check">
                            <input type="checkbox" name="check">
                            <span>Remember Me</span>
                        </div>
                       <div class="sub">
                        <input type="submit" name="login" value="Login">
                       </div>
                    </form>
                    <hr>
                </div>
            <!-- ============================================================ -->
            <!-- login.php -->
            <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $email =$_POST['email'];
                    $pass =$_POST['pass'];
                    $password =sha1($pass);
                    $stm = $conn->query("SELECT * FROM users WHERE email ='$email' AND password ='$password'");
                    $count =$stm->rowCount();
                    if($count > 0){
                        $name =$stm->fetch();
                        $_SESSION['name']=$name['name'];
                        header('refresh:.3;url=index.php');
                    }else{
                        $_SESSION['error']='email or password is not exitcs <br>  we transfer you to login page after 5s';
                                $_SESSION['url']='login.php';
                                header('location:error.php');
                    }

                }
            ?>
                <div id="foot-login">
                    <p>
                        Don't have an account?
                        <a href="sign_up.php">Sign Up</a><br>
                        <a href="#">Forgot your password?</a>
                    </p>
                </div>
           </div>
       </div>
</body>
</html>