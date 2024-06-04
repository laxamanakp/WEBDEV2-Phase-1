<?php

include 'config.php';


if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!--HTML-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico.png">
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
    <!-- Addtocart -->
    <link rel="stylesheet" href="assets/css/addtocart.css">
</head>

<body class="body-fixed">
    <!-- start of header  -->
<?php include 'narbar.php'; ?>
    <!-- end of header  -->

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="assets/images/berry.png" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="assets/images/leaf.png" alt="">
                    </div>
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        Welcome to our
                                        <span>EA Food Corner</span>
                                
                                    </h1>
                                    <p>Satisfy your cravings with our delectable dishes delivered right to 
                                        your doorstep. Explore a world of flavors and convenience with our easy online ordering. 
                                        Let's make every meal a delightful experience together!</p>
                                    <div class="banner-btn mt-4">
                                        <a href="#menu" class="sec-btn">Check our Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img" style="background-image: url(assets/images/Main-b.png);">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    <h5 class="h5-title">EA Food Corner</h5>
                                    <p>Your Culinary Adventure Awaits</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- start of brands -->
            <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-title mb-5">
                                <h5 class="h5-title">Trusted by 70+ companies</h5>
                            </div>
                            <div class="brands-row">
                                <div class="brands-box">
                                    <img src="assets/images/brands/b1.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b2.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b3.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b4.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- end of brands -->


            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">About Us</p>
            
                                <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                </div>
                                <p>At EA Food Corner, we're passionate about bringing the finest flavors and most delicious 
                                    dishes straight to your doorstep. Our online ordering website is designed to make your 
                                    dining experience seamless, convenient, and, most importantly, mouthwateringly satisfying.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img" style="background-image: url(assets/images/about.png);">
                                </div>
                                <div class="play-btn-wp">
                                    <a href="assets/images/video.mp4" data-fancybox="video" class="play-btn">
                                        <i class="uil uil-play"></i>
                                    </a>
                                    <span>Watch our Video</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-image: url(assets/images/menu-bg.png);"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">our menu</p>
                                    
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-tab-wp">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"></div>
                                            <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">
                                                <img src="assets/images/menu-1.png" alt="">
                                                All
                                            </li>
                                            <li class="filter" data-filter=".breakfast">
                                                <img src="assets/images/menu-2.png" alt="">
                                                Breakfast
                                            </li>
                                            <li class="filter" data-filter=".lunch">
                                                <img src="assets/images/menu-3.png" alt="">
                                                Lunch
                                            </li>
                                            <li class="filter" data-filter=".dinner">
                                                <img src="assets/images/menu-4.png" alt="">
                                                Dinner
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-list-row">
                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center" id="product-1">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/1.jpeg" class="cart-item" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Hungarian Sausage Silog</h3>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <b>Good for Persons</b>
                                                </li>
                                                <li>
                                                    <b>1</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>PHP. 75</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn" onclick="addToCart('Hungarian Sausage Silog', 75, 'assets/images/dish/1.jpeg')">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>

                                <!-- 2 -->
                             
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center" id="product-2">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/2.jpeg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.3
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Chicken Teriyaki</h3>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <b>Good for Persons</b>
                                                </li>
                                                <li>
                                                    <b>1</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>PHP. 85</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn" onclick="addToCart('Chicken Teriyaki', 85, 'assets/images/dish/2.jpeg')">
                                                        <i class="uil uil-plus"></i> 
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
              
                                <!-- 3 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center" id="product-3">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/3.jpg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Beef Salpicado</h3>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <b>Good for Persons</b>
                                                </li>
                                                <li>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>PHP. 85</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn" onclick="addToCart('Beef Salpicado', 85, 'assets/images/dish/3.jpg')">
                                                        <i class="uil uil-plus"></i> 
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center" id="product-4" >
                                        <div class="dist-img">
                                            <img src="assets/images/dish/4.jpeg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Pan Grilled Pork Liempo</h3>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <b>Good for Persons</b>
                                                </li>
                                                <li>
                                                    <b>1</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>PHP. 95</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn" onclick="addToCart('Pan Grilled Pork Liempo', 95, 'assets/images/dish/4.jpeg')">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                    <div class="dish-box text-center" id="product-5">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/5.jpeg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Buffalo Wings</h3>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <b>Good for Persons</b>
                                                </li>
                                                <li>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>PHP. 99</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn" onclick="addToCart('Buffalo Wings', 99, 'assets/images/dish/5.jpeg')">
                                                        <i class="uil uil-plus"></i> 
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- 6 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                    <div class="dish-box text-center" id="product-6">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/6.jpeg" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Sizzling Pork Sisig with Egg</h3>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <b>Good for Persons</b>
                                                </li>
                                                <li>
                                                    <b>1</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>PHP. 75</b>
                                                </li>
                                                <li>
                                                <button class="dish-add-btn" onclick="addToCart('Sizzling Pork Sisig with Egg', 75, 'assets/images/dish/6.jpeg')">
                                                    <i class="uil uil-plus"></i> 
                                                </button>                                                    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sec-img mt-5">
                                <img src="assets/images/received_995505134542061.webp" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sec-text">
                                <h2 class="xxl-title">Special TAPANG KABAYO!</h2>
                                <p>Indulge in culinary delight with our irresistible special, crafted to tantalize your taste buds and leave you craving for more. For just P130, immerse yourself in a symphony of flavors that promise to elevate your dining experience to new heights. Savor every bite of this delectable masterpiece, meticulously prepared to perfection, as it takes you on a gastronomic journey like no other. Don't miss out on the opportunity to treat yourself to something extraordinary so come and experience culinary excellence with us today! </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section pt-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="sec-text">
                                <h2 class="xxl-title">Menu</h2>
                                <p>                                    
                                    **SPECIALTIES:**  <br>
                                    - SIZZLING T-BONE STEAK - P110  <br>
                                    - GRILLED TUNA BELLY - P95  <br>
                                    - BEEF SALPICADO - P85  <br>
                                    - E.A. SIZZLING PORK SISIG - P80 (W/EGG) - P92  <br>
                                    - TOFU SISIG - P70  <br>
                                    - BARBECUED RIBS - P95  <br>
                                    - FISH FILLET W/ TARTAR SAUCE - P75  <br>
                                    - HONGKONG STYLE FRIED CHICKEN - P90  <br>
                                    - ORIENTAL SWEET & SOUR FISH - P80  <br>
                                    - PAN GRILLED PORK LIEMPO - P95  <br>
                                    - BUFFALO WINGS - P75  <br>
                                    - CHICKEN TERIYAKI - P85  <br>
                                    - BEEF PARES W/RICE - P45  <br>
                                    - BEEF MAMI - P35  <br>
                                    - SPECIAL LOMING BATANGAS - P85  <br><br>
                                    
                                    **CLASSIC SILOG CORNER:**  <br>
                                    - SUPREME TAPA - P80  <br>
                                    - HUNGARIAN SAUSAGE - P80  <br>
                                    - SALISBURY STEAK - P80  <br>
                                    - TOCINO - P85  <br>
                                    - SKINLESS LONGGANISA - P60  <br>
                                    - BONELESS DAING NA BANGUS - P80  <br>
                                    - LUMPIANG SHANGHAI - P55  <br>
                                    - SIOMAI - P50  <br>
                                    <br>
                                    **APPETIZERS & SHORT ORDERS:**  <br>
                                    - E.A. PORK SISIG - P125  <br>
                                    - TOFU SISIG - P90  <br>
                                    - GRILLED TUNA BELLY - P160  <br>
                                    - DIABLO WINGS (8 PIECES) - P135 / (12 PIECES) - P185  <br>
                                    - LUMPIANG SHANGHAI (14 PCS) - P150  <br>
                                    - BUTTERED CHICKEN - P150  <br>
                                    - EXTRA RICE - P12  <br>
                                </p>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-2 order-1">
                            <div class="sec-img">
                                <img src="assets/images/jpg_20221129_133025_0000.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="book-table section bg-light">
                <div class="book-table-shape">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Book Table</p>
                                    <h2 class="h2-title">Opening Table</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Monday to Thursday</h3>
                                        <p>9:00 am - 11:00 pm</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <i class="uil uil-phone"></i>
                                        <a href="tel:+91-8866998866">+63 9454189326</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Friday to Sunday</h3>
                                        <p>11:00 am to 10:00 pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gallery">
                            <div class="col-lg-10 m-auto">
                                <div class="book-table-img-slider" id="icon">
                                    <div class="swiper-wrapper">
                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt1.jpg)"></a>
                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt2.jpg)"></a>
                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt3.jpg)"></a>
                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt4.jpg)"></a>
                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt1.jpg)"></a>
                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt2.jpg)"></a>
                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt3.jpg)"></a>
                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt4.jpg)"></a>
                                    </div>

                                    <div class="swiper-button-wp">
                                        <div class="swiper-button-prev swiper-button">
                                            <i class="uil uil-angle-left"></i>
                                        </div>
                                        <div class="swiper-button-next swiper-button">
                                            <i class="uil uil-angle-right"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="our-team section">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Our Team</p>
                                    <h2 class="h2-title">Meet our Chefs</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row team-slider">
                            <div class="swiper-wrapper">
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/c1.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Jayson Baldovino</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/jysn.bldvn"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/jysnnnn_/?fbclid=IwAR1L0rc2GR1x4Ixe0l55iuPJBN61Uuf9cso0aB-DnKZUiD8Q0OTRq4lOwUQ">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/c2.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Ethan Andrei Rivera</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/ethanandrei.rivera"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/c3.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">King Phillip Laxamana</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/ZPALaxamana"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/c4.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Ivan Codilan</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/navish.19/"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/c5.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">John Angelo Lacerna</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/john.montejo.946"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                
                            <div class="swiper-button-wp">
                                <div class="swiper-button-prev swiper-button">
                                    <i class="uil uil-angle-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-button">
                                    <i class="uil uil-angle-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="testimonials section bg-light">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">What they say</p>
                                    <h2 class="h2-title">What our customers <span>say about us</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="testimonials-img">
                                    <img src="assets/images/testimonial-img.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t1.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:85%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Levi Ackerman
                                                </h3>
                                                <p>"A culinary masterpiece that tantalizes the taste buds with every bite. Each dish is a symphony of flavors that leaves you craving for more. SASAGEYO!"</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t2.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:80%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Richard Gutierrez
                                                </h3>
                                                <p>"From the first bite to the last, the food here transports you to a realm of gastronomic delight. Exquisite flavors and impeccable presentation make every meal an unforgettable experience."</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t3.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:89%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Liza Soberano
                                                </h3>
                                                <p>"An explosion of flavors that dances on the palate. Every dish tells a story of passion, creativity, and culinary expertise. A must-try for any food enthusiast."</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t4.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:100%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Alden Richards
                                                </h3>
                                                <p>"Exceptional food paired with impeccable service. Each dish is crafted with precision and care, resulting in a dining experience that surpasses all expectations. Truly a culinary gem. Aldub it!"</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="faq-sec section-repeat-img" style="background-image: url(assets/images/faq-bg.png);">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">faqs</p>
                                    <h2 class="h2-title">Frequently <span>asked questions</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <div class="faq-box">
                                <h4 class="h4-title">What are the login hours?</h4>
                                <p> Mon-Thurs : 9am - 11pm<br>
                                    Fri-Sun : 11am - 10pm</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">How long it will take food to arrive?</h4>
                                <p>It usually takes 10-15 mins. for food to arrive because we want you to have a properly prepared meal.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Does your restaurant has both veg and non veg?</h4>
                                <p>Yes, we have both Vegan and Non-Vegan options in our menu and you can replace it if you like something specific in your food.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">What is cost of food delivery?</h4>
                                <p>We believe in the customer having as good as an experience as they can, so we only charge the minimum amount for delivery and the food cost.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

<?php include 'footer.php'; ?>

</body>
</html>