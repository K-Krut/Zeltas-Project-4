<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lightslider.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
    <script type="text/javascript"
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="assets/js/lightslider.js"></script>
    <script type="text/javascript" src="assets/js/include-main.js"></script>

</head>
<body>
<header class='nav-scrolled'>
    <nav style="margin: auto; align-content: center">
        <ul class="nav-links right-part-links">
            <div class="hamburger-menu">
                <input id="menu-toggle" type="checkbox" style="z-index: 999"/>
                <label class="menu-btn" for="menu-toggle" style="z-index: 999">
                    <span style="z-index: 999"></span>
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
            <li><a href="catalogue.php" class="icon catalog-icon"></a></li>
        </ul>
        <div class="logo">
            <h4 style="margin-top: 2%; font-size: 50px;">želtas</h4>
        </div>
        <ul class="nav-links left-part-links">
            <li><a href="#" class="icon search-icon"></a></li>
            <li><a href="#" class="icon basket-icon"></a></li>
        </ul>
    </nav>
</header>
<div class="body-class">
    <div class="login-wrap">
        <div class="login-html">
            <?php
            if ($_COOKIE['user'] == ''):
                ?>
                <label class="tab">Sign In</label>
                <a href="register.php"><label class="tab">Register</label></a>
                <form class="login-form" action="views/loginization.php" method="post">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label class="label">Email Address</label>
                            <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .4; z-index: 100;"
                                   type="email" name="email" id="email">
                        </div>
                        <div class="group">
                            <label class="label">Password</label>
                            <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .4; z-index: 100;"
                                   type="password" name="password_1" id="password_1">
                        </div>
                        <div class="group" style="margin-top: 30px">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                    </div>
                </form>
            <?php else: ?>
                <label class="tab" style="text-align: center">Hi <?= $_COOKIE['user'] ?></label>
                <form class="login-form" action="views/loginization.php" method="post">
                    <div class="sign-in-htm">
                        <div class="group" style="margin-top: 30px">
                            <input type="submit" class="button" formaction="views/logout.php" value="Log out">
                        </div>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
require "includes/footer.php";
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