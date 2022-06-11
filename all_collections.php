<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collections</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lightslider.css"/>
   <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
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
    <section class="Product-Gallery">
        <div class="product-gallery-box">
            <div id="main-navigation" class="navigation-collections">
                <div class="text-section">
                    <div class="text-block">
                        <a href="catalogue.php"><h1>Catalogue</h1></a>
                        <a href="collections/rings.php"><p>Rings</p></a>
                        <a href="collections/necklaces.php"><p>Necklaces</p></a>
                        <a href="collections/bracelets.php"><p>Bracelets</p></a>
                        <a href="collections/sculptures.php"><p>Sculptures</p></a>
                    </div>
                    <div class="text-block">
                        <a href="all_collections.php"><h1>Collections</h1></a>
                        <a href="collections/vikings.php"><p>Vikings</p></a>
                        <a href="#"><p>Asgard</p></a>
                        <a href="#"><p>Animals</p></a>
                        <a href="#"><p>Maori</p></a>
                        <a href="#"><p>Other</p></a>
                    </div>
                    <div class="text-block">
                        <a href="#"><h1>Metal</h1></a>
                        <a href="#"><p>Bronze</p></a>
                        <a href="#"><p>Silver</p></a>
                        <a href="#"><p>Pewter</p></a>
                        <a href="#"><p>Golden silver</p></a>
                        <a href="#"><p>Silver plated Bronze</p></a>
                    </div>
                </div>
            </div>
            <div id="mobile-navigation" class="navigation-collections">
                <div class="text-section">
                    <div class="text-block">
                        <a href="catalogue.php"><h1>Catalogue</h1></a>
                        <div class="text-block-rows">
                            <div class="text-block-row row-1">
                                <a href="collections/rings.php"><p>Rings</p></a>
                                <a href="collections/necklaces.php"><p>Necklaces</p></a>
                            </div>
                            <div class="text-block-row row-2">
                                <a href="collections/bracelets.php"><p>Bracelets</p></a>
                                <a href="collections/sculptures.php"><p>Sculptures</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <a href="all_collections.php"><h1>Collections</h1></a>
                        <div class="text-block-rows">
                            <div class="text-block-row row-1">
                                <a href="collections/vikings.php"><p>Vikings</p></a>
                                <a href="#"><p>Asgard</p></a>
                                <a href="#"><p>Animals</p></a>
                            </div>
                            <div class="text-block-row row-2">
                                <a href="#"><p>Maori</p></a>
                                <a href="#"><p>Other</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <a href="#"><h1>Metal</h1></a>
                        <div class="text-block-rows">
                            <div class="text-block-row row-1">
                                <a href="#"><p>Bronze</p></a>
                                <a href="#"><p>Silver</p></a>
                                <a href="#"><p>Pewter</p></a>
                            </div>
                            <div class="text-block-row row-2">
                                <a href="#"><p>Golden silver</p></a>
                                <a href="#"><p>Silver plated Bronze</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="px-lg-5">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                            <div class="item-fade-bg">
                                <h2 class="product-title">Viking bracelet</h2>
                                <img src="assets/images/collections/vikings/1.png" alt="" class="img-fluid card-img-top">
                                    <h2 class="price">$36</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                            <div class="item-fade-bg">
                                <h2 class="product-title">Viking bracelet</h2>
                                <img src="assets/images/collections/vikings/2.png" alt="" class="img-fluid card-img-top">
                                    <h2 class="price">$36</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                            <div class="item-fade-bg">
                                <h2 class="product-title">Viking bracelet</h2>
                                <img src="assets/images/collections/vikings/3.png" alt="" class="img-fluid card-img-top">
                                    <h2 class="price">$36</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                            <div class="item-fade-bg">
                                <h2 class="product-title">Viking bracelet</h2>
                                <img src="assets/images/collections/vikings/4.png" alt="" class="img-fluid card-img-top">
                                    <h2 class="price">$36</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                            <div class="item-fade-bg">
                                <h2 class="product-title">Viking bracelet</h2>
                                <img src="assets/images/collections/vikings/5.png" alt="" class="img-fluid card-img-top">
                                    <h2 class="price">$36</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                            <div class="item-fade-bg">
                                <h2 class="product-title">Viking bracelet</h2>
                                <img src="assets/images/collections/vikings/6.png" alt="" class="img-fluid card-img-top">
                                <h2 class="price">$36</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                            <div class="item-fade-bg">
                                <h2 class="product-title">Viking bracelet</h2>
                                <img src="assets/images/collections/vikings/7.png" alt="" class="img-fluid card-img-top">
                                    <h2 class="price">$36</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                            <div class="item-fade-bg">
                                <h2 class="product-title">Viking bracelet</h2>
                                <img src="assets/images/collections/vikings/8.png" alt="" class="img-fluid card-img-top">
                                    <h2 class="price">$36</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                            <div class="item-fade-bg">
                                <h2 class="product-title">Viking bracelet</h2>
                                <img src="assets/images/collections/vikings/9.png" alt="" class="img-fluid card-img-top">
                                    <h2 class="price">$36</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="includeFooter"></div>
<script>
    $(document).ready(function () {
        $(".item-gallery").hover(
            function () {
                $(this).find('.item-fade-bg').addClass('item-appear-bg');
                $(this).find('.item-fade-bg').removeClass('item-fade-bg');
            },
            function () {
                $(this).find('.item-appear-bg').addClass('item-fade-bg');
                $(this).find('.item-appear-bg').removeClass('item-appear-bg');
            }
        );
    });
</script>
<script>
    const header = document.querySelector('header');
    const sectionIntro = document.querySelector('.product-gallery-box');

    const sectionObserved = new IntersectionObserver(
        function (entries, sectionObserved) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    header.classList.add('nav-scrolled');
                } else {
                    header.classList.remove('nav-scrolled')
                }
            })
        }, {rootMargin: '-200px 0px 0px 0px'}
    );

    sectionObserved.observe(sectionIntro);

</script>
</body>
</html>