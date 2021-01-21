<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/css/font-awesome.min.css">
    <script src="layout/js/fontawesome.min.js"></script>
    <link rel="stylesheet" href="css/all.css">
    <title>sign up</title>
</head>
<body id="login-page">
       <div id="con-login">
           <div id="second-div">
                <div id="head-login">
                    <h1>Registration</h1>
                    <hr>
                </div>
                <div id="form-login">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                        <div class="input1">
                            <label for=""><i class="fa fa-user"></i></label>
                            <input type="text" name="name" placeholder="User Name" autocomplete="off" required>
                        </div>
                        <div class="input1">
                            <label for=""><i class="fa fa-envelope"></i></label>
                            <input type="email" name="email" placeholder="Email" autocomplete="off" required>
                        </div>
                        <div class="input2">
                            <label for=""><i class="fa fa-key"></i></label>
                            <input type="password" name="pass" placeholder="Password">
                        </div>
                        <div class="input2">
                            <label for=""><i class="fa fa-key"></i></label>
                            <input type="password" name="rpass" placeholder="Confirm Password">
                        </div>
                        
                       <div class="sub sign_up">
                        <input type="submit" name="Register" value="Register">
                       </div>
                    </form>

                </div>
           </div>
       </div>
        <!-- ======================================== -->
            <!-- user_sign_up.php -->
            <?php
                    require_once 'connect/connect.php';
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $name =$_POST['name'];
                        $email =$_POST['email'];
                        $pass =$_POST['pass'];
                        $rpass =$_POST['rpass'];
                        $password =sha1($pass);
                        $rpassword =sha1($rpass);
                        if(empty($_POST['pass'])||empty($_POST['rpass'])){
                                $_SESSION['error']='Please,complete all fildes <br>  we transfer you to sing up page after 5s';
                                $_SESSION['url']='sign_up.php';
                                header('location:error.php');
                        }else{
                            $stm2 = $conn->query("SELECT email FROM users")->fetchAll(PDO::FETCH_COLUMN);
                            if($password == $rpassword){
                                if(in_array($email,$stm2)){
                                    $_SESSION['error']='sorry,this email is exicts <br>so we transfer you to sing up page after 5s';
                                    $_SESSION['url']='sign_up.php';
                                    header('location:error.php');
                                }else{
                                    $stm ="INSERT INTO users (name,email,password,repassword) VALUES ('$name','$email','$password','$rpassword')";
                                    $conn ->exec($stm);
                                    header('refresh:0.9; url =login.php');
                                }
                            }else{
                                $_SESSION['error']='Please,password and confirm password should be equal <br>  we transfer you to sing up page after 5s';
                                $_SESSION['url']='sign_up.php';
                                header('location:error.php');
                            }
                        }
                    }
                    ?>
    </body>
</html>