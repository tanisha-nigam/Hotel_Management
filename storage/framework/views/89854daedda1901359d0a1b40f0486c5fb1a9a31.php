<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">



<section class="contact">

   <h1 class="heading">contact us</h1>

   <form  method="POST" action="<?php echo e(route('post.addsubmit')); ?>">
<?php echo csrf_field(); ?>
      <div class="flex">

         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>

         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>

         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="enter your number" name="number" required>
         </div>
        

         <div class="inputBox">
            <span>choose travel destination</span>
            <select name="destination">
            <option value="kanpur">Rajasthan</option>
            <option value="Bangalore">Delhi</option>
               <option value="mumbai">Goa</option>
               <option value="chennai">Jammu and Kashmir</option>
               <option value="hyderabad">Kerala</option>
               <option value="hyderabad">Mumbai</option>
               <option value="none">none</option>
            </select>
         </div>
         <div class="inputBox">
            <span>choose staying Hotel</span>
            <select name="hotel">
            <option value="Le Meriate Garden">Le Meriate Garden</option>
            <option value="Orbella Hotel">Orbella Hotel</option>
               <option value="Pacific Hotel">Pacific Hotel</option>
               <option value="Roseate Hotel">Roseate Hotel</option>
               <option value="Yadu Garden">Yadu Garden</option>
               <option value="none">none</option>
            </select>
         </div>
         
         

         
         <div class="inputBox">
            <span>choose room type</span>
            <select name="room">
            <option value="Single-bed Room(AC)">Single-bed Room(AC)</option>
            <option value="Single-bed Room(Non-AC)">Single-bed Room(Non-AC)</option>
               <option value="Double-bed Room(AC)">Double-bed Room(AC)</option>
               <option value="Double-bed Room(Non-AC)">Double-bed Room(Non-AC)</option>
               <option value="Suite(AC)">Suite(AC)</option>
               <option value="Suite(Non-AC)">Suite(Non-AC)</option>
               <option value="none">none</option>
            </select>
         </div>
         <div class="inputBox">
            <span>choose Meals</span>
            <select name="meals">
            <option value="Chinese">Chinese</option>
            <option value="Italian">Italian</option>
               <option value="North-Indian ">North-Indian</option>
               <option value="South-Indian"> South-Indian</option>
               <option value="Beverages">Beverages"</option>
               <option value="Desserts">Desserts</option>
               <option value="none">none</option>
            </select>
         </div>



         <div class="inputBox">
            <span>your message</span>            
            <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
         </div>
        
      </div>

      <input type="submit" value="send message" name="send" class="btn">

   </form>

</section>



</div>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravelp1\resources\views/add-post.blade.php ENDPATH**/ ?>