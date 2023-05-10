<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
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

<section class="pricing">
    <h1 class="heading">our pricing</h1>
    <div class="box-container">
        <div class="box">
            <h3>standard plan</h3>
            <div class="price">$249/-</div>
            <div class="list">
                <p><i class="fas fa-check"></i>photography</p>
                <p><i class="fas fa-check"></i>bribe makeup</p>
                <p><i class="fas fa-check"></i>wedding ceremony</p>
                <p><i class="fas fa-check"></i>meals & drinks</p>
                <p><i class="fas fa-check"></i>guest invitations</p>
            </div>
            <a href="contact.php" class="btn">choose plan</a>
        </div>
        <div class="box">
            <h3>premium plan</h3>
            <div class="price">$649/-</div>
            <div class="list">
                <p><i class="fas fa-check"></i>photography</p>
                <p><i class="fas fa-check"></i>bribe makeup</p>
                <p><i class="fas fa-check"></i>wedding ceremony</p>
                <p><i class="fas fa-check"></i>meals & drinks</p>
                <p><i class="fas fa-check"></i>guest invitations</p>
            </div>
            <a href="contact.php" class="btn">choose plan</a>
        </div>
        <div class="box">
            <h3>ultimate plan</h3>
            <div class="price">$1249/-</div>
            <div class="list">
                <p><i class="fas fa-check"></i>photography</p>
                <p><i class="fas fa-check"></i>bribe makeup</p>
                <p><i class="fas fa-check"></i>wedding ceremony</p>
                <p><i class="fas fa-check"></i>meals & drinks</p>
                <p><i class="fas fa-check"></i>guest invitations</p>
            </div>
            <a href="contact.php" class="btn">choose plan</a>
        </div>
    </div>
</section>

<section class="reviews">
    <h1 class="heading">happy clients</h1>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="images/pic-1.png" alt="picture">
                <h3>Dmitry Kirillov</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur nam rerum ad, minus incidunt cumque!</p>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>    
            </div>
            <div class="swiper-slide slide">
                <img src="images/pic-2.png" alt="picture">
                <h3>Alena Kovaleva</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur nam rerum ad, minus incidunt cumque!</p>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>    
            </div>
            <div class="swiper-slide slide">
                <img src="images/pic-3.png" alt="picture">
                <h3>Sergey Polyanski</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur nam rerum ad, minus incidunt cumque!</p>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>    
            </div>
            <div class="swiper-slide slide">
                <img src="images/pic-4.png" alt="picture">
                <h3>Maria Koulova</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur nam rerum ad, minus incidunt cumque!</p>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>    
            </div>
            <div class="swiper-slide slide">
                <img src="images/pic-5.png" alt="picture">
                <h3>Arsen Kerimov</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur nam rerum ad, minus incidunt cumque!</p>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>    
            </div>
            <div class="swiper-slide slide">
                <img src="images/pic-6.png" alt="picture">
                <h3>Chaiana Li</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur nam rerum ad, minus incidunt cumque!</p>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
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