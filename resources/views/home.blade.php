<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
   

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">




<section class="header">
    <a href="home.php" class="logo"> CRIO HOTEL BOOKING</a>
<nav class="navbar">
    <a href="home"> HOME </a>
    <a href="about"> ABOUT </a>
    <a href="pricing"> PRICE AND PLANS </a>
    <a href="add-post"> CONTACT </a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>




</section>

</head>
<body>
<div class="container">



<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(mvcp/home/h1.jpg) no-repeat">
            <div class="content">
               <h3>plan your travelwith us!</h3>
               <p>Travelis not about spending the least or the most amount of money; it's about spending good money on the elemnts that are most important to the couple. Make your day memorable with us.</p>
               <a href="about" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(mvcp/home/h3.jpg) no-repeat">
            <div class="content">
            <h3>Willing your holidays to be memorable ?</h3>
               <p>If you are going to plan your trip, then a certain amount of suffering is not a choice, make your travel plannings stress free by contacting us </p>
               
               <a href="about" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(mvcp/home/h4.jpg) no-repeat">
            <div class="content">
            <h3>Confused with the travel,stay,meal,destiantion? </h3>
               <p>Needd help? Contact us ! Make your holidays unforgettable by availaing for our rooms and hotels</p>
               <a href="about" class="btn">discover more</a>
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
            <img src="mvcp/dn/rj/r1.jpg" alt="">
            <div class="content">
               <h3>Travel Destination</h3>
               <p>We decided to take your travel to the next level.<br> Find that endless ocean, the place that is truly beautiful. </p>
               <a href="destination" class="btn">DESTINATIONS</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="pics/venue/orbella/ov5.jpeg" alt="">
            <div class="content">
               <h3>Hotel</h3>
               <p>Everything has a place, and everything in its place!<br>Design is coming to grips with one's real lifestyle, one's real place in the world. Be faithful to your own taste and contact our hotels.</p>
               <a href="hottel" class="btn">HOTELS</a>
            </div>
         </div>


         <div class="swiper-slide slide">
            <img src="mvcp/rooms/ro1.jpg" alt="">
            <div class="content">
               <h3>Rooms</h3>
               <p>Everything has a place, and everything in its place!<br>Design is coming to grips with one's real lifestyle, one's real place in the world. Be faithful to your own taste and contact our hotels.</p>
               <a href="room" class="btn">ROOMS</a>
            </div>
         </div>

         

         <div class="swiper-slide slide">
            <img src="mvcp/meals/northi/i1.jpg" alt="">
            <div class="content">
               <h3>Meals</h3>
               <p>Unable to decide what to eat or worried about the hygene , contact us for the best meals
</p>
               <a href="meals" class="btn">MEALS</a>
            </div>
         </div>

         

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<section class="footer">

    <div class="box-container">
 
       <div class="box">
          <h3>quick links</h3>
          <a href="home"> <i class="fas fa-angle-right"></i> home</a>
          <a href="about"> <i class="fas fa-angle-right"></i> about</a>
          <a href="pricing"> <i class="fas fa-angle-right"></i> pricing</a>
          <a href="add-post"> <i class="fas fa-angle-right"></i> contact</a>
       </div>
 
       <div class="box">
          <h3>extra links</h3>
          <a href="add-post"> <i class="fas fa-angle-right"></i> plan travel</a>
          <a href="add-post"> <i class="fas fa-angle-right"></i> our services</a>
          <a href="add-post"> <i class="fas fa-angle-right"></i> ask questions</a>
          <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
          <a href="https://en.wikipedia.org/wiki/Privacy_policy#:~:text=A%20privacy%20policy%20is%20a,a%20customer%20or%20client's%20data."> <i class="fas fa-angle-right"></i> privacy policy</a>
       </div>
 
       <div class="box">
          <h3>contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
          <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
          <a href="#"> <i class="fas fa-envelope"></i> tanishanigam3@gmail.com </a>
          <a href="#"> <i class="fas fa-envelope"></i> tanishanig3@gmail.com </a>
          <a href="#"> <i class="fas fa-map"></i> Kanpur,Uttar Pradesh india - 108027 </a>
       </div>
 
       <div class="box">
          <h3>follow us</h3>
          <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="https://twitter.com/"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=en_IN&gl=US"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="https://en.wikipedia.org/wiki/LinkedIn"> <i class="fab fa-linkedin"></i> linkedin </a>
          <a href="https://github.com/signup"> <i class="fab fa-github"></i> github </a>
       </div>
 
    </div>
 
    <p class="credit"> created by | <span>CRIO HOTEL BOOKING</span> | all rights reserved! </p>
 
 </section>
    
</body>
</html>