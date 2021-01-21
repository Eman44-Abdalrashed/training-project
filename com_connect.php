<?php
    session_start();
    require_once 'head.php';
?>
    <div class="com_apply">
        <?php 
            if(!isset($_SESSION['name'])){?>
                 <div class="no_login">
                    <p>Please Login First!</p>
                    <div class="f_login"><a href="login.php">Login</a></div>
                </div>
           <?php }else{?> 
        <div class="login_yes">
            <form action="#">
                <div class="apply_head">
                    <div class="left">Apply Now!</div>
                    <div class="right"><span>x</span></div>
                </div>
                <input type="text" name="name" id="" placeholder="Full Name">
                <input type="email" name="email" id="" placeholder="Email">
                <input type="text" name="course" id="" placeholder="Coursers">
                <label for="">Study Year</label>
                <select name="year" id="">
                    <option value="0">select your study year</option>
                    <option value="prepratory">prepratory</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="final">final</option>
                </select>
                <label for="">Speciality</label>
                <select name="spec" id="">
                    <option value="0">Select Your Speciality</option>
                </select>
                <input type="submit" value="Confirm As Student">
            </form>
        </div>
           <?php } ?>
    </div>
</body>
</html>