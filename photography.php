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


          <!-- This php will replace the above HTML once I figure out how to include originals -->
          <?php

          $galleryImages = glob("photoGallery/JPEG/*.jpg");
          foreach($galleryImages as $galleryImage) {
                $parts = explode("/", $galleryImage);
                $file = explode(".", $parts[2]);
                $imagePath = $file[0].".".$file[1];
            echo '<a href="photoGallery/JPEG/Originals/'.$imagePath.'"><img src="photoGallery/JPEG/'.$imagePath.'"></a>';
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
