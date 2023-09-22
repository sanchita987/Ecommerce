<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
 
   <style>
   .btn
   {
      background-color:darkmagenta;
   }
   </style>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<div class = "home-bg">
<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/12.jpg"  >
         </div>
      </div>
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/12.jpg"  >
         </div>
      </div>
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/12.jpg"  >
         </div>
      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>
</div>





<section class="home-products">

   <h1 class="heading">Latest packages</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>Rs.</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section><h1 class="heading">Our Best Selling Trips</h1>
<section class="about">

   <div class="row">

      

      <div class="content">
         <h3>Nepal Family Tour</h3>
         <p>Family tour in Nepal is a special package,full of enjoyed by yourself and kids. These trip is provided enough time to enjoy without keeping your kids tired. These trip cover the most of the Beautiful cities and breathtaking view of Mountain with Stunning sunset and Sunrise view. These family holiday provides the knowledge of nepal culture, Economy, Social, nature, adventure, hiking and many unknown facts about Nepal.We visit the heriatge site of kathmandu with historical and cultural of kathmandu.</p>
         <p>To know more</p>
         <a href="contact.php" class="btn">contact us</a>
         
      </div>
      <div class="image">
         <img src="images/7.gif" alt="">
      </div>

   </div>

</section>
<section class="about">

   <div class="row">

      

      <div class="content">
         <h3>Everest Trekking Region</h3>
         <p>Everest Trekking Region is home of the World's Highest Mountain Mount Everest and other peak like Nuptse, Cho Oyu, Lhotse, Gosainthan, Amadablam and many more. Everest Trekking region has been one of great attraction for the people who love mountain, adventure, unique sherpa culture, colorful prayers flags and stunning monasteries. Trekking in Everest region is possible throughout the year. However, Beginning of March to Mid- May and Beginning of September to Mid- November is taken as best month.</p>
         <p>To know more</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
      <div class="image">
         <img src="images/8.jpg" alt="">
      </div>

   </div>

</section>
<section class="about">

   <div class="row">

      

      <div class="content">
         <h3>Jungle Safari</h3>
         <p>Nepal is rich in wildlife, National Park, Vegetation and Jungle Safari. Nepal offers the amazing view of rarest and most endangered animal. Jungle Safari in Nepal is gateway to national park of Nepal and combine adventures in your Tour and Trekking. Jungle safari in chitwan National Park includes elephant ride safari, canoe rides, nature walks, birds watching, Jeep safari excursions and quick cultural tour around the village and many other activities as per need. Wildlife jungle safari package t</p>
         <p>To know more</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
      <div class="image">
         <img src="images/9.jpg" alt="">
      </div>

   </div>

</section>











<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>