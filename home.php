<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovely Wedding</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/faviconRings.png" type="image/x-icon">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font import -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

</head>
<body>
<div class="container">
<?php @include 'header.php';?>

<section class="home">
<div class="swiper home-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background:url(images/home-slide-3.3.jpg)    no-repeat">
            <div class="content">
            <h3>plan your wedding</h3>
            <p>Between venue tours and cake tastings, it's easy to forget about the little details when wedding planning (like lighting and signage). Don't stress though. Get inspired by our tips and tricks for some of the most looked-over wedding planning details</p>
            <a href="about.php" class="btn">discover more</a>
            </div>
        </div>
        <div class="swiper-slide slide" style="background:url(images/home-slide-1.1.jpg) no-repeat">
            <div class="content">
                <h3>plan your wedding</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam odit velit amet temporibus dolorum corporis, et, quibusdam ab nam incidunt reiciendis neque harum ipsa. Blanditiis.</p>
                <a href="about.php" class="btn">discover more</a>
            </div>
        </div>
        <div class="swiper-slide slide" style="background:url(images/home-slide-2.2.jpg) no-repeat">
            <div class="content">
                <h3>plan your wedding</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam odit velit amet temporibus dolorum corporis, et, quibusdam ab nam incidunt reiciendis neque harum ipsa. Blanditiis.</p>
                <a href="about.php" class="btn">discover more</a>
            </div>
        </div>

    </div>
    
    <div class="swiper-pagination"></div>
    
</div>
</section>

<section class="services">
<h1 class="heading">our services</h1>            
<div class="swiper service-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide">
            <img src="images/service-1.jpg" alt="img">
                <div class="content">
                    <h3>photography</h3>                
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, eaque!</p>
                    <a href="about.php" class="btn">about us</a>
                </div>
        </div>

        <div class="swiper-slide slide">
            <img src="images/service-2.jpg" alt="img">
                <div class="content">
                    <h3>weddding registory</h3>                
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, eaque!</p>
                    <a href="about.php" class="btn">about us</a>
                </div>
        </div>

        <div class="swiper-slide slide">
            <img src="images/service-3.jpg" alt="img">
                <div class="content">
                    <h3>guest list</h3>                
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, eaque!</p>
                    <a href="about.php" class="btn">about us</a>
                </div>
        </div>

        <div class="swiper-slide slide">
            <img src="images/service-4.jpg" alt="img">
                <div class="content">
                    <h3>wedding cake</h3>                
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, eaque!</p>
                    <a href="about.php" class="btn">about us</a>
                </div>
        </div>

        <div class="swiper-slide slide">
            <img src="images/service-5.jpg" alt="img">
                <div class="content">
                    <h3>wedding ceremony</h3>                
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, eaque!</p>
                    <a href="about.php" class="btn">about us</a>
                </div>
        </div>

        <div class="swiper-slide slide">
            <img src="images/service-6.jpg" alt="img">
                <div class="content">
                    <h3>fine dining</h3>                
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, eaque!</p>
                    <a href="about.php" class="btn">about us</a>
                </div>
        </div>

    </div>

    <div class="swiper-pagination"></div>
    
</div>

</section>

<?php @include 'footer.php';?>
</div>




<!-- ul>li>.customClass -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/index.js"></script>
</body>
</html>