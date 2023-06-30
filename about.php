<?php

include 'dbconn.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Trading Books, we believe that reading goes beyond textbooks and academic materials. We understand the importance of leisure reading and the joy it brings to avid readers. That's why we go beyond the realm of study books and offer a wide selection of titles across various genres to cater to your literary interests. Whether you're a fan of thrilling novels, thought-provoking non-fiction, captivating memoirs, or engaging poetry, we have something for every reader. Expand your horizons, indulge in captivating narratives, and enrich your leisure time with our diverse collection of ebooks.</p>
       <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"Finally, an ebookstore that understands the needs of college students! User-friendly interface, competitive prices, and a great selection of both study books and leisure reads. I'm hooked!".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Maputla</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.jpeg" alt="">
         <p>"The customer support team at this ebookstore is outstanding. They are responsive, helpful, and genuinely care about resolving any issues or concerns. It's refreshing to know that I have their support whenever I need it. I couldn't be happier with the service!".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Beyonce Mbatha</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"Switching to this ebookstore has not only saved me money but also helped me reduce my environmental footprint. I no longer need to buy and dispose of countless textbooks every semester.</p>
          <p>Going digital was the best decision I made, and this ebookstore made the transition seamless!".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Masi Sithole</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I love how this ebookstore caters to both my academic needs and my love for reading. Not only do they have a wide range of textbooks, but their collection of leisure reading titles is impressive. It's a one-stop shop for all my reading cravings".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Forver Yena</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"This ebookstore has been a game-changer for me! I can easily access all my required textbooks with just a few clicks, saving me time and money. The user-friendly interface and extensive selection of ebooks make studying a breeze. Highly recommended!".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mr Cool</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"I couldn't be happier with my experience at this college ebookstore! The selection is vast, the prices are affordable, and the instant access to ebooks is a game-changer. Highly recommended!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Obakeng Rapudi</h3>
      </div>

   </div>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>