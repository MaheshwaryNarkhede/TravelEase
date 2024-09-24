<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!--swipper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
<!-- header section -->
<section class="header">
    <a href="home.php" class="logo">TravelEase.</a>
    <nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="pacakges.php">pacakges</a>
    <a href="book.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section ends -->
<!-- home section starts -->
<section class="home">
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images.jpg/s-1.avif" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block content">
                     <span>explore, discover, travel</span>
                    <h3>travel around the world</h3> 
                    <a href="packages.php" class="btn btn-primary">discover more</a>
                </div>
            </div>
            <!-- Add more slides as needed -->
             <div class="carousel-item">
                <img src="images.jpg/home-slide-2.jpeg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block content">
                    <!-- <span>explore, discover, travel</span>
                    <h3>Another destination</h3> -->
                    <a href="packages.php" class="btn btn-primary">discover more</a>
                </div>
            </div> 
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- Radio buttons for manual control -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <!-- Add more li elements for additional slides -->
           <li data-target="#carouselExample" data-slide-to="1"></li>
        </ol>
    </div>
</section>
<!-- home section ends -->
<!-- service section starts -->
<section class="services">
    <h1 class="heading-tittle">our services</h1>
    <div class="box-container">
        <div class="box">
               <h3 >adventure</h3> 
               <img src="images.jpg/ic-1.png" alt="">
        </div>
        <div class="box">
               <h3 >tour guide</h3> 
               <img src="images.jpg/ic-1.png" alt="">
        </div>
        <div class="box">
               <h3 >treking</h3> 
               <img src="images.jpg/ic-3.png" alt="">
        </div>
        <div class="box">
               <h3 >camp fire</h3> 
               <img src="images.jpg/ic-5.png" alt="">
        </div>
        <div class="box">
               <h3 >off road</h3> 
               <img src="images.jpg/ic-4.png" alt="">
        </div>
        <div class="box">
               <h3 >camping</h3> 
               <img src="images.jpg/ic-6.png" alt="">
        </div>
    </div>
</section>


<!-- service section ends -->
<!-- home about section starts -->
<section class="home-about">
    <div class="image">
        <img src="images.jpg/background.webp" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem eaque reiciendis rerum natus fuga, magnam a, perspiciatis dolore, assumenda tempore facilis minus modi minima? Impedit id cupiditate ullam ducimus aliquam?</p>
        <a href="about.php"class="btn">read more</a>    
    </div>
</section>
<!-- home about section ends  -->
<!-- home packages section -->
<section class="home-packages">
    <h1 class="heading-title"> our packages </h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images.jpg/icon-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, mollitia?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images.jpg/icon-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, mollitia?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images.jpg/icon-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, mollitia?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="load-more"><a href="packages.php" class="btn">load more</a></div>
    </div>
    <div class="load-more"><a href="packages.php" class="btn">load more</a></div>
</section>
<!-- home packages ends -->
<!-- home offer starts here -->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, fugiat. Facilis vero, incidunt soluta saepe harum possimus id ipsa aut.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!-- home offer ends here -->










<!-- footer sections starts -->
<section class="footer">
    <div class="box-container">
       <div class="box">
        <h3>quick links</h3>
       <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
       <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
       <a href="pacakges.php"><i class="fas fa-angle-right"></i>pacakges</a>
       <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
       </div>
       <div class="box">
        <h3>extra links</h3>
       <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
       <a href="#"><i class="fas fa-angle-right"></i>about us</a>
       <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
       <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
       </div>
       <div class="box">
        <h3>contact info</h3>
       <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
       <a href="#"><i class="fas fa-phone"></i>+134-467-7870</a>
       <a href="#"><i class="fas fa-envelope"></i>travelease@gmail.com</a>
       <a href="#"><i class="fas fa-map"></i>mumbai,india -400104</a>
       </div>
       <div class="box">
        <h3>follow us</h3>
       <a href="#"><i class="fab fa-facebook"></i>facebook</a>
       <a href="#"><i class="fab fa-twitter"></i>twitter</a>
       <a href="#"><i class="fab fa-instagram"></i>instagram</a>
       <a href="#"><i class="fab fa-linkden"></i>linkden</a>
       </div>
    </div>
    <div class="credit">created by<span> Maheshwary Narkhede</span>|all rights reserved  </div>
</section>
<!-- footer section ends -->




<!--swipper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>