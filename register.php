<?php
     session_start();
     require_once 'head.php';
     require_once 'connect/connect.php';
?>
    <section class="register">
       <form action="con_register.php" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="com_name" required>
                                </div>
                            </div>
                            <div class="group">
                                <div class="group_top">
                                    <i class="fa fa-envelope"></i>
                                    <label>Company E-Mail</label>
                                </div>
                                <div class="group_down">
                                    <input type="text" name="com_email" required>
                                </div>
                            </div>
                        </div>
                        <div class="all_inputs">
                            <div class="group">
                                <div class="group_top">
                                    <i class="fa fa-key"></i>
                                    <label>Password</label>
                                </div>
                                <div class="group_down">
                                    <input type="password" name="pass_com" required>
                                </div>
                            </div>
                            <div class="group">
                                <div class="group_top">
                                    <i class="fa fa-key"></i>
                                    <label>Confirm Password</label>
                                </div>
                                <div class="group_down">
                                    <input type="password" name="conf_pass" required>
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
                                    <input type="text" name="phone" required>
                                </div>
                            </div>
                            <div class="group">
                                <div class="group_top">
                                    <i class="fa fa-map-marker"></i>
                                    <label>Map</label>
                                </div>
                                <div class="group_down">
                                    <input type="text" name="map">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="group_top2">
                                <i class="fa fa-tags"></i>
                                <label>Link Website</label>
                            </div>
                            <div class="group_down2">
                                <input type="text" name="link">
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
                                        <option value="--select--">select speciality</option>
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
                                        <option value="--select--">select location</option>
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
                                    <input type="text" name="facebook">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-twitter"></i>
                                    <label>Twiter</label>
                                </div>
                                <div>
                                    <input type="text" name="twiter">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-instagram"></i>
                                    <label>Instagram</label>
                                </div>
                                <div>
                                    <input type="text" name="instagram">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-google"></i>
                                    <label>Google+</label>
                                </div>
                                <div>
                                    <input type="text" name="google">
                                </div>
                            </div>
                        </div>
                        <div class="file">
                                <label for="importfile-site" class="custom-file-upload"><i class="fa fa-image"></i> Upload Your Company image <span>Browse</span></label>
                                <input id="importfile-site" name='importfilesite' type="file" style="display:none;" multiple required>
                        </div>
                        <div class="textarea">
                            <div>
                                <i class="fa fa-info"></i>
                                <label>Description</label>
                            </div>
                            <div>
                                <textarea name="textarea"  cols="90" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="footer">
                            <input type="submit" name="submit" value="REGISTER">
                            <span>are you have account? <a href="sign_in_com.php">Sign In</a></span>
                        </div>
                    </div>
                </div>
       </form>
    </section>
</body>
</html>