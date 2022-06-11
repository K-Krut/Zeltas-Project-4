<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalogue</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lightslider.css"/>
    <script type="text/javascript" src="assets/js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="assets/js/lightslider.js"></script>
    <script type="text/javascript" src="assets/js/include-main.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>
<body>
<header class='nav-scrolled'>
    <nav style="margin: auto; align-content: center">
        <ul class="nav-links">
            <div class="hamburger-menu" style="height: 45px; padding-top: -12.8px;">
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
                    <li><a class="menu-item" href="login.php">Login</a></li>
                </ul>
            </div>
            <li class="invisible"><a href="catalogue.php" class="icon catalog-icon"></a></li>
        </ul>
        <div class="logo">
            <h4 style="margin-top: 2%">želtas</h4>
        </div>
        <ul class="nav-links">
            <li class="invisible"><a href="#" class="icon search-icon"></a></li>
            <li><a href="#" class="icon basket-icon"></a></li>
        </ul>
    </nav>
</header>
<div class="body-class">
    <section class="Collections-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="item-1 product-box product-bg-fade">
                    <h2 class="product-title">Sculptures</h2>
                    <img class="product-item" src="assets/images/jewelry/mice1.png">
                </div>
                <div class="item-3 product-box product-bg-fade">
                    <h2 class="product-title">Braceletes</h2>
                    <img class="product-item" src="assets/images/jewelry/bracelet_viking.png">
                </div>
                <div class="item-4 product-box product-bg-fade">
                    <h2 class="product-title">Necklaces</h2>
                    <img class="product-item" src="assets/images/jewelry/sign.png">
                </div>
                <div class="item-2 product-box product-bg-fade">
                    <h2 class="product-title">Rings</h2>
                    <img class="product-item" src="assets/images/jewelry/ring_viking.png">
                </div>
            </div>
        </div>
        <div class="all-collection-title">
            <a href="all_collections.php"><h1>ALL COLLECTIONS</h1></a>
        </div>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <style>
            .container-fluid {
                justify-content: center;
                align-items: center;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }

            .p-lg-5 {
                padding: 3rem !important
            }

            .pt-lg-5, .py-lg-5 {
                padding-top: 3rem !important
            }

            .pr-lg-5, .px-lg-5 {
                padding-right: 3rem !important
            }

            .pb-lg-5, .py-lg-5 {
                padding-bottom: 3rem !important
            }

            .pl-lg-5, .px-lg-5 {
                padding-left: 3rem !important
            }


            .row {
                justify-content: center;
                align-items: center;
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin: -15px;
            }



        </style>
    </section>
</div>
<script>
    const header = document.querySelector('header');
    const sectionIntro = document.querySelector('.Collections-slider');
    const sectionOptions = {
        rootMargin: '-200px 0px 0px 0px'
    }
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
            rootMargin: '-500px 0px 0px 0px'
        }
    );

    sectionObserved.observe(sectionIntro);

</script>
<?php
require "includes/footer.php";
?>
</body>
</html>