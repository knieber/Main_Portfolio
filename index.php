<?php
$pageTitle = "Kyle Nieber - Developer, Photographer, Videographer";
$pageCSS = "css/index-page.css";
$pageHeader = "home-header";
$section = "home";
include('inc/header.php') ?>




    <!-- Home Title -->

          <div class="header-wrapper">

            <div class="title">
                <h1>{axiom}</h1>
                <h2>developer &middot; photographer &middot; videographer</h2>
            </div>

          </div>
     <!-- End Home Title -->

    <!-- Contact ME button -->
          <div class="contact-button">
              <button name="contact-button">CONTACT ME</button>
            </div>
        </div>
      </header>




    <!-- Home Page -->

    <!-- First Section - PORTFOLIO -->
      <div id="portfolio">
        <h3>What I Do</h3>

        <div class="icon-block">
          <a href="development.php"><img class ="icon" src="img/Developer Icon.svg"></a>
          <p>Web Development
          </p>
        </div>

        <div class="icon-block">
            <a href="photography.php"><img class ="icon" src="img/Photo Icon2.svg"></a>
          <p>Photography
          </p>
        </div>

        <div class="icon-block">
          <a href="videos.php"><img class ="icon video" src="img/video2.svg"></a>
          <p>Videography
          </p>
        </div>
      </div>
    <!-- End First Section -->

    <!-- Second Section - ABOUT ME -->
      <div id="about-me">
        <div class="about-me-overlay">
          <h3>Who I Am</h3>
          <div class="about-block">
            <img class="profile-icon" src="img/Kyle.jpg">
            <div class="social-media">
              <a href="http://www.facebook.com/kyle.nieber"><img src="img/facebookIcon.svg"></a>
              <a href="http://www.twitter.com/KyleNieber"><img src="img/twitterIcon.svg"></a>
              <a href="http://www.vimeo.com/kylenieber"><img src="img/vimeoIcon.svg"></a>
              <a href="http://github.com/knieber"><img src="img/githubIcon.svg"></a>
            </div>
            <p>My name is Kyle Nieber. I live in Louisville, KY and graduated from Murray State
              University with a degree in Graphic Communications. I love to take photos, read books, hang out
              with my wonderful wife, run, eat at Louisville restaurants, learn new things,
              listen to NPR, and serve my church. However, if you really want to get to know me,
              hit me up on facebook or twitter.</p>
          </div>
        </div>
      </div>
    <!-- End Second Section -->

    <!-- End Home Page -->

    <!-- Push Div to keep footer below content -->
    <div class="push"></div>



   <!-- Footer Include -->
   <?php include('inc/footer.php'); ?>

    <!-- Contact Form -->
    <?php include('inc/contactForm.php') ?>

    <!-- JavaScript Call -->
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/form.js"></script>
    <script src="js/mobileNav.js"></script>

    </body>

</html>
