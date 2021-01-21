<?php
  $_SESSION['title'] = 'About Us';
  require_once 'head.php';
  require_once 'header.php';
?>
    <!-- ===================================================================================== -->
    <!-- body of about page -->
    <section>
    <div class="ser_div2">
        <a href="index.php">HOME</a><i class="fa fa-arrow-right"></i> About Us 
    </div>
      <!-- <div class="head2">
        <a href="index.html">Home</a>
        <i class="fa fa-arrow-right"></i>
        <span>About Us</span>
      </div> -->
      <div class="about-page">
        <div class="about-div1">
             <div><h2>Who We Are</h2><span>About Us</span></div>
             <div></div>
             <div>
               <p>
                Internship Company is a professional learning
                 experience that offers meaningful, 
                practical work related to a student's 
                field of study or career interest.
                 An internship gives a student the opportunity 
                 for career exploration and development, 
                and to learn new skills.
               </p>
             </div>
        </div>
        <div class="about-div2">   
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/11.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/4.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php
    require_once 'footer.php';

  ?>