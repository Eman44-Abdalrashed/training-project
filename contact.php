<?php
  $_SESSION['title'] = 'Contact Us';
   require_once 'head.php';
   require_once 'header.php';
?>
    <!-- ===================================================================================== -->
    <!-- body of about page -->
    <section>
    <div class="ser_div2">
        <a href="index.php">HOME</a><i class="fa fa-arrow-right"></i> Contact Us
    </div>
      <!-- <div class="head2">
        <a href="index.html">Home</a>
        <i class="fa fa-arrow-right"></i>
        <span>Contact Us</span>
      </div> -->
      <div class="con-head">
          <h1>How may we help you?</h1>
          <p>Our website is available to make sure that all your reservation is Okay.</p>
      </div>
      <div class="contact-page">
            <div class="contact-div1">
                <h3>Send US Message</h3>
                <form action="controller/contact.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for=""><i class="fa fa-user fa-2x"></i></label>
                        <input type="text" name="name" placeholder="Full Name" required>
                    </div>
                    <div>
                        <label for=""><i class="fa fa-envelope fa-2x"></i></label>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div>
                        <label for=""><i class="fa fa-mobile-phone fa-2x bhicon"></i></label>
                        <input type="text" name="phone" placeholder="Phone">
                    </div>
                    <div>
                        <label for=""><i class="fa fa-info fa-2x bhicon"></i></label>
                        <input type="text" name="subject" placeholder="Subject">
                    </div>
                    <div>
                        <label for=""><i class="fa fa-comment fa-2x bhicon"></i></label>
                        <input type="textarea" name="area" placeholder="Message" class="textarea">
                    </div>
                    <div> 
                        <input type="submit" name="sub" value="Submit" class="submit">
                    </div>
                </form>
            </div>
            <div class="contact-div2">   
                <h1>Contact Us</h1>
                <div><img src="images/contact3.jpg" alt="#"></div>
                <div>
                    <div>
                        <div class="flex">
                          <div>
                            <i class="fa fa-map-marker"></i>
                          </div>
                          <div>
                            <a href="#">Al Azhar university
                              Nasr City, Egypt</a>
                          </div>
                        </div>
                        <div class="flex">
                          <div>
                            <i class="fa fa-envelope"></i>
                          </div>
                          <div>
                            <a href="#">Info@azhar.edu.eg</a>
                          </div>
                        </div>
                        <div>
                          <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
      </div>
    </section>
    <?php
     require_once 'footer.php';
    ?>