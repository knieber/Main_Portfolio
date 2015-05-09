<!DOCTYPE Html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kyle Nieber - Developer, Photographer, Videographer</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/development-css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

    <body>
      <header class="main-header development-header">
        <div class="headbg-overlay">

<!-- Full Nav -->
          <div id="fullNav" class="nav">
            <nav>
              <div>
              <p><a href="index.php">{axiom}</a>
              </p>
              </div>
              <div class="mainnav-right">
                <ul>
                  <a class="selected" href="development.php"><li>WEB DEVELOPMENT</li></a>
                  <a href="photography.php"><li>PHOTOGRAPHY</li></a>
                  <a href="videos.php"><li>VIDEOS</li></a>
                </ul>
                <div class="farnav-right">
                  <ul>
                    <a href="#" class="contact"><li>CONTACT</li></a>
                  </ul>
                </div>
              </div>
            </nav>
          </div>


<!-- Media Query Mobile Nav -->
          <div id="mobileNav" class="nav">
            <nav>
              <div class="topNavButton">
              <p>{axiom}
                <img class ="menuLines" src="img/MenuLines.svg">
              </p>
              </div>
              <div class="mainnav-right mobileListMenu">
                <ul>
                  <a href="index.php"><li>HOME</li></a>
                  <a class="selected" href="development.php"><li>WEB DEVELOPMENT</li></a>
                  <a href="photography.php"><li>PHOTOGRAPHY</li></a>
                  <a href="videos.php"><li>VIDEOS</li></a>
                  <a href="#" class="contact"><li>CONTACT</li></a>
                </ul>
                <div class="farnav-right">
                  <ul>
                    <a href="#" class="contact"><li>CONTACT</li></a>
                  </ul>
                </div>
              </div>
            </nav>
          </div>




  <!-- Developer Title -->

          <div class="header-wrapper">

            <div class="title">
                <h1>web development</h1>
                <h2>for work &middot; for fun &middot; for needs</h2>
            </div>

          </div>
  <!-- End Home Title -->
        </div>
      </header>

      <!-- Push Div to keep footer below content -->
      <div class="push"></div>

      <?php include('inc/footer.php'); ?>

      <!-- Contact Form -->
      <?php include('inc/contactForm.php') ?>

      <!-- JavaScript Call -->
          <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
          <script src="js/form.js"></script>
          <script src="js/mobileNav.js"></script>

        </body>

    </html>
