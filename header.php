<?php
    require_once 'connect/connect.php';
?>
</head>
<body>
    <!-- start of header -->
    <header>
        <!-- left side of header -->
        <div id="header-left">
            <a href="index.php"><img src="images/internshiplogo.png" alt="#"></a>
        </div>
        <!-- mid of header -->
        <div id="header-mid">
            <ul id="list">
                <li><a href="index.php" id="act">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li id="services"><a href="services.php">Services</a>
                    <ul id="nav">
                        <?php
                           $stmt =$conn->query("SELECT type FROM (company INNER JOIN speciality ON company.com_speciality=speciality.spec_id)");       
                            while($row = $stmt->fetch()){
                                $_SESSION['spec']=$row['type'];
                            echo '<li><a href="show_speciality_com.php?spec='.$row['type'].'">'. $row['type'].'</a></li>';
                            }
                        ?>
                    </ul>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        <div id="header-right">
            <div class="login">
                <button><?php
                    if(isset($_SESSION['name'])){
                        echo '<a href="logout.php">' .$_SESSION['name'] . '  <i class=" fa fa-sign-out"></i></a>';
                    }else{
                        ?>
                        <a href="login.php"><i class='fa fa-user'></i> Login</a>
                   <?php }
                ?></a></button>
            </div>
            <div>
               <?php
                    if(isset($_SESSION['services'])){?>
                        <div class="search1"><button><a href="#"><i class="fa fa-search"></i></a></button></div>
                  <?php }else{?>
                       <div class="header_register"><button><a href="register.php"><i class="fa fa-key"> Register Company</i></a></button></div>
                   <?php }
               ?>
            </div>
        </div>
    </header>
    <!-- end of header -->
