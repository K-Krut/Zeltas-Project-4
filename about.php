<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lightslider.css"/>
    <script type="text/javascript" src="assets/js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="assets/js/lightslider.js"></script>
    <script src="assets/js/script.js" type="text/javascript"></script>
</head>
<body>
<header class='nav-scrolled'>
    <nav style="margin: auto; align-content: center">
        <ul class="nav-links">
            <div class="hamburger-menu" style="height: 45px; padding-top: -12.8px; z-index: 999">
                <input id="menu-toggle" type="checkbox"/>
                <label class="menu-btn" for="menu-toggle">
                    <span></span>
                </label>

                <ul class="menu-box">
                    <li><a class="menu-item" href="index.php">Home</a></li>
                    <li><a class="menu-item" href="catalogue.php">Catalogue</a></li>
                    <li><a class="menu-item" href="delivery.php">Delivery</a></li>
                    <li><a class="menu-item" href="contact.php">Contact</a></li>
                    <li><a class="menu-item" href="about.php">About</a></li>
                    <li><a class="menu-item" href="login.php">
                            <?php
                            if ($_COOKIE['user'] == ''):
                                ?>
                                Login
                            <?php else: ?>
                                Log Out
                            <?php endif; ?>
                        </a></li>
                </ul>
            </div>
            <li class="invisible"><a href="catalogue.php" class="icon catalog-icon"></a></li>
        </ul>
        <div class="logo">
            <a href="index.php"><h4 style="margin-top: 2%">želtas</h4></a>
        </div>
        <ul class="nav-links">
            <li class="invisible"><a href="#" class="icon search-icon"></a></li>
            <li><a href="#" class="icon basket-icon"></a></li>
        </ul>
    </nav>
</header>

<div class="body-class">
    <div class="title-in-progress">
        <h1>About Us</h1>
    </div>
</div>
<?php
require "includes/intro-footer.php";
?>
<script>
    const header = document.querySelector('header');
    const sectionIntro = document.querySelector('.body-class');
    const sectionObserved = new IntersectionObserver(
        function (entries, sectionObserved) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    header.classList.add('nav-scrolled');
                } else {
                    header.classList.remove('nav-scrolled')
                }
            })
        }, {
            rootMargin: '-200px 0px 0px 0px'
        }
    );

    sectionObserved.observe(sectionIntro);

</script>
</body>
</html>
