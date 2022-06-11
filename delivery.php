<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main_style.css">
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
            <h4 style="margin-top: 2%">želtas</h4>
        </div>
        <ul class="nav-links left-part-links">
            <li><a href="#" class="icon search-icon"></a></li>
            <li><a href="#" class="icon basket-icon"></a></li>
        </ul>
    </nav>
</header>
<div class="body-class">
    <div class="title-in-progress">
        <h1>Delivery</h1>
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

