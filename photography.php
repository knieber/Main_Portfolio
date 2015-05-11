<?php
$pageTitle = "Photography";
$pageCSS = "css/photography.css";
$pageHeader = "photography-header";
$section = "photography";
include('inc/header.php') ?>




  <!-- Photography Title -->

          <div class="header-wrapper">

            <div class="title">
                <h1>photography</h1>
                <h2>city &middot; nature &middot; everyday life</h2>
            </div>

          </div>
  <!-- End Home Title -->
        </div>
      </header>

<!-- Section 1 - Introduction Begin -->
      <div class="photoIntroduction">
        <h3>My Photos</h3>
        <p>Below are a few of my favorite photos I've taken so far.
          Photography is definitely more of a hobby than a career, however
          I'm always up for discussing photo shoots of events, couples, and
          everyday life.</p>
        <div class="arrowDown">
          <p>Check It Out Below</p>
          <img src="img/arrowDown.svg">
        </div>
      </div>

<!-- Section 1 - Introduction End -->


<!-- Section 2 - Photo Gallery Begin -->

      <div class="photoWrapper">

        <!-- Gallery Photo's should have max height of 1000px and max width of 700px and put into photoGallery/JPEG -->
        <!-- All Photo's need to be wrapped with an "a" element with an href to the original for full res lightbox. Put originals in photoGallery/JPEG/Originals-->

<!--        <a href="photoGallery/JPEG/Originals/image1.jpg"><img src="photoGallery/JPEG/image1.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image2.jpg"><img src="photoGallery/JPEG/image2.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image3.jpg"><img src="photoGallery/JPEG/image3.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image4.jpg"><img src="photoGallery/JPEG/image4.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image5.jpg"><img src="photoGallery/JPEG/image5.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image6.jpg"><img src="photoGallery/JPEG/image6.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image7.jpg"><img src="photoGallery/JPEG/image7.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image8.jpg"><img src="photoGallery/JPEG/image8.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image9.jpg"><img src="photoGallery/JPEG/image9.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image10.jpg"><img src="photoGallery/JPEG/image10.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image11.jpg"><img src="photoGallery/JPEG/image11.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image12.jpg"><img src="photoGallery/JPEG/image12.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image13.jpg"><img src="photoGallery/JPEG/image13.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image14.jpg"><img src="photoGallery/JPEG/image14.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image15.jpg"><img src="photoGallery/JPEG/image15.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image16.jpg"><img src="photoGallery/JPEG/image16.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image17.jpg"><img src="photoGallery/JPEG/image17.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image18.jpg"><img src="photoGallery/JPEG/image18.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image19.jpg"><img src="photoGallery/JPEG/image19.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image20.jpg"><img src="photoGallery/JPEG/image20.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image21.jpg"><img src="photoGallery/JPEG/image21.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image22.jpg"><img src="photoGallery/JPEG/image22.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image23.jpg"><img src="photoGallery/JPEG/image23.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image24.jpg"><img src="photoGallery/JPEG/image24.jpg"></a>-->
<!--        <a href="photoGallery/JPEG/Originals/image25.jpg"><img src="photoGallery/JPEG/image25.jpg"></a>-->

          <?php

          $galleryImages = glob("photoGallery/JPEG/*.jpg");
          foreach($galleryImages as $galleryImage) {
              echo '<a href="' . $galleryImage . '">' . '<img src="' . $galleryImage . '">';
          }

          ?>

      </div>



      <!-- Push Div to keep footer below content -->
      <div class="push"></div>

<!-- Section 2 - Photos End -->

      <!-- Footer Include -->

      <?php include('inc/footer.php'); ?>

      <!-- Contact Form -->
      <?php include('inc/contactForm.php') ?>

      <!-- JavaScript Call -->
          <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
          <script src="js/form.js"></script>
          <script src="js/shuffle.js"></script>
          <script src="js/mobileNav.js"></script>
        <script src="js/lightbox.js"></script>

        </body>

    </html>
