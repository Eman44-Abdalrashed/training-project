<?php
session_start();
$_SESSION['title'] = 'INTERSHIP';
  require_once 'head.php';
  require_once 'header.php';
  
?>
<!-- ===================================================================================== -->
    <!--  start of  section one -->
    <section class="sec1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/10.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/6.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/9.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/5.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>
    <!-- end of section one -->
    <!-- ================================================= -->
    <!-- start of section two -->
    <section class="sec2">
        <h1>About Us</h1>
        <p>
            Internship Company is a professional learning experience
            that offers meaningful, 
            practical work related to a student's field of study
            or career interest. An internship gives a student
            the opportunity for career exploration and development,
            and to learn new skills.
        </p>
        <button><a href="#">READ MORE</a></button>
    </section>
    <!-- end of section two -->
    <!-- ========================================= -->
    <!-- start of section three -->
    <section class="sec3">
        <h3>Our Services</h3>
        <div class="body-sec3">
          <div class="first-div-sec3">
            <div class="sec3-flex">
              <div class="sec3-desc">
                <h4><a href="#">Web</a></h4>
                <p>
                  All our yachts are comfortably furnis
                  double beds and equipped 
                  with a satellite TV.
                </p>
              </div>
              <div class="sec3-icon">
                <i class="fa fa-laptop"></i>
              </div>
            </div>
            <div class="sec3-flex">
                <div class="sec3-desc">
                  <h4><a href="#">Android</a></h4>
                  <p>
                    Enjoy your charter even in the
                     very hot weather thanks
                     to our top-notch air conditioning.
                  </p>
                </div>
                <div class="sec3-icon">
                  <i class="fa fa-android"></i>
                </div>
            </div>
          </div>


          <div class="second-div-sec3"><img src="images/12.jpeg" alt=""></div>
         
         
          <div class="third-div-sec3">
            <div class="sec3-flex">
              <div class="sec3-icon">
                <i class="fa fa-globe"></i>
              </div>
              <div class="sec3-desc">
                <h4><a href="#">Network</a></h4>
                <p>
                  All our yachts have spacious, cozy,
                   and stylish bathrooms that 
                  let you relax and have a great time.
                </p>
              </div>
            </div>
            <div class="sec3-flex">
              <div class="sec3-icon">
                <i class="fa fa-car"></i>
              </div>
              <div class="sec3-desc">
                <h4><a href="#">Embeded</a></h4>
                <p>
                  We regularly serve fresh organic dishes
                   & refreshing beverages 
                  for a better culinary experience.
                </p>
              </div>
            </div>
          </div>
        </div>

    </section>
    <!-- end of section three -->
    <!-- ========================================== -->
    <!-- start of section four -->
    <section class="sec4">
      <div>
        <img src="images/travel.png" alt="#">
        <h3>100</h3>
        <h2>WEB</h2>
        <p>Company</p>
      </div>
      <div>
        <img src="images/android.png" alt="#">
        <h3>52</h3>
        <h2>ANDROID</h2>
        <p>Company</p>
      </div>
      <div>
        <img src="images/nano.png" alt="#">
        <h3>20</h3>
        <h2>NETWORKS</h2>
        <p>Company</p>
      </div>
      <div>
        <img src="images/robot.png" alt="#">
        <h3>90</h3>
        <h2>EMBEDED</h2>
        <p>Company</p>
      </div>
    </section>
    <!-- end of section four -->
    <?php
      require_once 'footer.php';
    ?>