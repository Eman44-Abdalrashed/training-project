<?php
     session_start();
     require_once 'head.php';
     require_once 'connect/connect.php';
?>
    <section class="register">
       <form action="edit_sign_in_com.php" method="POST" enctype="multipart/form-data">
        <?php
            $id =(int)$_SESSION['com'];
            $stmt =$conn->query("SELECT id, name,email,facebook,twiter,instgram,google,phone,map,website,com_des,com_image,location,type FROM ((company INNER JOIN location ON company.com_location=location.id_location) INNER JOIN speciality ON company.com_speciality=speciality.spec_id) WHERE company.id=$id"); 
            $row = $stmt->fetch() ;
        ?>
            <div>
                    <h1><span>C</span>reative <span>R</span>egistration <span>F</span>orm</h1>
                </div>
                <div class="reg_body">
                    <div class="reg_div1"><span>Add your Company</span></div>
                    <div class="reg_div2">
                        <div class="all_inputs">
                            <div class="group">
                                <div class="group_top">
                                    <i class="fa fa-user"></i>
                                    <label>Company Name</label>
                                </div>
                                <div class="group_down">
                                    <input type="text" name="com_name" required value="<?php echo $row['name'] ?>">
                                </div>
                            </div>
                            <div class="group">
                                <div class="group_top">
                                    <i class="fa fa-envelope"></i>
                                    <label>Company E-Mail</label>
                                </div>
                                <div class="group_down">
                                    <input type="text" name="com_email" required value="<?php echo $row['email'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="all_inputs">
                            <div class="group">
                            <div class="group_top">
                                    <i class="fa fa-phone"></i>
                                    <label>Phone</label>
                            </div>
                                <div class="group_down">
                                    <input type="text" name="phone" required value="<?php echo $row['phone'] ?>">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="group_top2">
                                <i class="fa fa-tags"></i>
                                <label>Link Website</label>
                            </div>
                            <div class="group_down2">
                                <input type="text" name="link" value="<?php echo $row['website'] ?>">
                            </div>
                        </div>
                        <div class="all_inputs">
                            <div class="group">
                                <div class="group_top3">
                                    <i class="fa fa-building"></i>
                                    <label>Company Specialist</label>
                                </div>
                                <div class="group_down3">
                                    <select name="specialist">
                                        <?php 
                                            $st =$conn->query("SELECT * FROM company WHERE id=$id")->fetch();
                                        ?>
                                        <option value="<?php echo $st['com_speciality'] ?>"><?php echo $row['type'] ?></option>
                                        <?php
                                            $stmt =$conn->query("SELECT * FROM speciality")->fetchAll(PDO::FETCH_KEY_PAIR);
                                            foreach($stmt as $key=>$value){
                                                echo '<option value="'.$key.'">'.$value.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="group">
                                <div class="group_top3">
                                    <i class="fa fa-map-marker"></i>
                                    <label>location</label>
                                </div>
                                <div class="group_down3">
                                    <select name="location">
                                        <?php  $stmt3 =$conn->query("SELECT * FROM company WHERE id=$id")->fetch();
                                            ?>
                                        <option value="<?php echo $stmt3['com_location'] ?>"><?php echo $row['location'] ?></option>
                                        <?php
                                            $stmt2 =$conn->query("SELECT * FROM location")->fetchAll(PDO::FETCH_KEY_PAIR);
                                            foreach($stmt2 as $key=>$value){
                                                echo '<option value="'.$value.'">'.$key.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="four_div">
                            <div >
                                <div>
                                    <i class="fa fa-facebook"></i>
                                    <label>Facbook</label>
                                </div>
                                <div>
                                    <input type="text" name="facebook" value="<?php echo $row['facebook'] ?>">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-twitter"></i>
                                    <label>Twiter</label>
                                </div>
                                <div>
                                    <input type="text" name="twiter" value="<?php echo $row['twiter'] ?>">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-instagram"></i>
                                    <label>Instagram</label>
                                </div>
                                <div>
                                    <input type="text" name="instagram" value="<?php echo $row['instgram'] ?>">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-google"></i>
                                    <label>Google+</label>
                                </div>
                                <div>
                                    <input type="text" name="google" value="<?php echo $row['google'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="textarea">
                            <div>
                                <i class="fa fa-info"></i>
                                <label>Description</label>
                            </div>
                            <div>
                                <textarea name="textarea"  cols="90" rows="3" value="<?php echo $row['com_des']; ?>"><?php echo $row['com_des']; ?></textarea>
                            </div>
                        </div>
                        <div class="footer">
                            <input type="submit" name="submit" value="REGISTER">
                            <span>are you have account? <a href="edit_sign_in_com.php">Sign In</a></span>
                        </div>
                    </div>
                </div>
       </form>
    </section>
</body>
</html>