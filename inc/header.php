
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle ?></title>
    <link rel="icon" type="image/png" href="img/tabLogo.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="<?php echo $pageCSS ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<header class="main-header <?php echo $pageHeader ?>">
    <div class="headbg-overlay">

        <!-- Full Nav -->
        <div id="fullNav" class="nav">
            <nav>
                <div>
                    <p><a href="home">{axiom}</a>
                    </p>
                </div>
                <div class="mainnav-right">
                    <ul>
                        <a class="<?php if( $section == "development") { echo "selected"; } ?>" href="development"><li>WEB DEVELOPMENT</li></a>
                        <a class="<?php if( $section == "photography") { echo "selected"; } ?>" href="photography"><li>PHOTOGRAPHY</li></a>
                        <a class="<?php if( $section == "videos") { echo "selected"; } ?>" href="videography"><li>VIDEOS</li></a>
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
                        <a class="<?php if( $section == "home") { echo "selected"; } ?>" href="index.php"><li>HOME</li></a>
                        <a class="<?php if( $section == "development") { echo "selected"; } ?>" href="development.php"><li>WEB DEVELOPMENT</li></a>
                        <a class="<?php if( $section == "photography") { echo "selected"; } ?>" href="photography.php"><li>PHOTOGRAPHY</li></a>
                        <a class="<?php if( $section == "videos") { echo "selected"; } ?>" href="videos.php"><li>VIDEOS</li></a>
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