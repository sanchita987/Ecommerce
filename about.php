<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
   .btn
   {
      background-color: darkmagenta;
   }
   .option-btn
   {
      background-color: green;
   }
   </style>
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/4.jpg" alt="">
      </div>

      <div class="content">
         <h3>What is TripFinder?</h3>
         <p>TripFinder is a tourism based website that can be your guide to an unforgettable adventure in Nepal.We provide comprehensive and reliable information on Nepal's diverse travel destinations, cultural heritage, and unique experiences.We give tips for planning your trip, booking accommodations, compare travel packages and exploring Nepal.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>
<section class="about">

   <div class="row">

      

      <div class="content">
         <h3>Objectives</h3>
         <p>1.To encourage visitors to explore the destination through information on things to do, places to stay, transportation, reviews, and attractions<br>2.To promoe local businesses and travel agencies with online booking options, special offers, and packages.<br>3.To showcase Nepal's diverse travel destinations through blogs on natural wonders, trekking routes, historical landmarks, and cultural experiences.<br>4.To provide the facility to join the community of travelers and help find travel partners which solve the solo trip restriction problem of Nepal.</p>
         
      </div>
      <div class="image">
         <img src="images/5.jpg" alt="">
      </div>

   </div>

</section>


<









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>