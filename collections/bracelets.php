<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main_style.css">
</head>
<body>
<header class='nav-scrolled'>
    <nav style="margin: auto; align-content: center">
        <ul class="nav-links">
            <div class="hamburger-menu" style="height: 45px; padding-top: -12.8px;">
                <input id="menu-toggle" type="checkbox"/>
                <label class="menu-btn" for="menu-toggle">
                    <span></span>
                </label>=
                <ul class="menu-box">
                    <li><a class="menu-item" href="../index.php">Home</a></li>
                    <li><a class="menu-item" href="../catalogue.php">Catalogue</a></li>
                    <li><a class="menu-item" href="../delivery.php">Delivery</a></li>
                    <li><a class="menu-item" href="../contact.php">Contact</a></li>
                    <li><a class="menu-item" href="../about.php">About</a></li>
                    <li><a class="menu-item" href="../login.php">Login</a></li>
                </ul>
            </div>
            <li class="invisible"><a href="../catalogue.php" class="icon catalog-icon"></a></li>
        </ul>
        <div class="logo">
            <a href="../index.php"><h4 style="margin-top: 2%">želtas</h4></a>
        </div>
        <ul class="nav-links">
            <li class="invisible"><a href="#" class="icon search-icon"></a></li>
            <li><a href="#" class="icon basket-icon"></a></li>
        </ul>
    </nav>
</header>

<div class="body-class">
    <div class="title-in-progress">
        <h1>Bracelets</h1>
    </div>
</div>
<footer class="Main-footer">
    <div class="left-col-ft">
        <div class="pages-section">
            <h1 class="footer-logo">želtas</h1>
            <div class="pages">
                <ul class="navigation">
                    <p>Navigation</p>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../about.php">About Us</a></li>
                    <li><a href="../delivery.php">Delivery & Payment</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                </ul>
                <ul class="collections">
                    <p>Collections</p>
                    <li><a href="bracelets.php">Bracelets</a></li>
                    <li><a href="rings.php">Rings</a></li>
                    <li><a href="sculptures.php">Miniature Sculptures</a></li>
                    <li><a href="../all_collections.php">All Collections</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="right-col-ft">
        <div class="social-media-section">
            <h1>+380 00 000 00 00</h1>
            <div class="social-media-buttons">
                <div class="sm-telegram sm-button"></div>
                <div class="sm-instagram sm-button"></div>
                <div class="sm-facebook sm-button"></div>
                <div class="sm-email sm-button"></div>
            </div>
        </div>
    </div>
</footer>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/script.js" type="text/javascript"></script>
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
