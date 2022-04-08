<?php

$conn =mysqli_connect('localhost','root','','hotelmanage');
if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $plan = $_POST['plan'];
    $message = $_POST['message'];
    $destination = $_POST['destination'];
    $hotel = $_POST['hotel'];
    $decorators = $_POST['decorators'];
    $makeup = $_POST['makeup'];
    $photographers = $_POST['photographers'];
    $designers = $_POST['designers'];
    $events = $_POST['events'];
 
$insert ="INSERT INTO `hotelmanage`(`name`, `email`, `number`, `plan`, `message`, `destination`, `hotel`, `decorators`, `makeup`, `photographers`, `designers`, `event`) VALUES (' $name','$email','$number','$plan','$message','$destination','$hotel','$decorators','$makeup','$photographers','$designers','$events')";

mysqli_query($conn, $insert);
header('location:contact.php');

}


?>

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

   <form action="" method="post">

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
            <span>choose wedding destination</span>
            <select name="destination">
            <option value="kanpur">kanpur</option>
            <option value="Bangalore">bangalore</option>
               <option value="mumbai">mumbai</option>
               <option value="chennai">chennai</option>
               <option value="hyderabad">hyderabad</option>
               <option value="none">none</option>
            </select>
         </div>
         <div class="inputBox">
            <span>choose wedding Hotel</span>
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
            <span>choose wedding decoration</span>
            <select name="decorators">
            <option value="AJS Florals">AJS Florals</option>
            <option value="Broomenia">Broomenia</option>
               <option value="The Eventsia">The Eventsia</option>
               <option value="Fusion Decorators">Fusion Decorators</option>
               <option value="Mosaic Pro">Mosaic Pro</option>
               <option value="none">none</option>
            </select>
         </div>
         <div class="inputBox">
            <span>choose wedding designers</span>
            <select name="designers">
            <option value="Isha Gupta Tayal">Isha Gupta Tayal</option>
            <option value="Lionise Maria">Lionise Maria</option>
               <option value="Mridashi">Mridashi</option>
               <option value="Payal Keyal">Payal Keyal</option>
               <option value="Roop">Roop</option>
               <option value="none">none</option>
            </select>
         </div>

         <div class="inputBox">
            <span>choose wedding photographers</span>
            <select name="photographers">
            <option value="Riyansh Shah">Riyansh Shah</option>
            <option value="Amrita Ghosh">Amrita Ghosh</option>
               <option value="John Wills">John Wills</option>
               <option value="none">none</option>
            </select>
         </div>
         <div class="inputBox">
            <span>choose Make-up Artist</span>
            <select name="makeup">
            <option value="Tanishka Rai">Tanishka Rai</option>
            <option value="Savitha">Savitha</option>
               <option value="The Runway Ready">The Runway Ready</option>
               <option value="Pooja">Pooja</option>
               <option value="Farush Sheikh">Farush Sheikh</option>
               <option value="none">none</option>
            </select>
         </div>
         <div class="inputBox">
            <span>choose Events</span>
            <select name="Events">
            <option value="Haldi Function">Haldi Function</option>
            <option value="Mehendi Function">Mehendi Function</option>
               <option value="Bacheloreate Party">Bacheloreate Party</option>
               <option value="Sangeet Function">Sangeet Function</option>
               <option value="Ring Ceremony">Ring Ceremony</option>
               <option value="Wedding Ceremony">Wedding Ceremony</option>
               <option value="none">none</option>
            </select>
         </div>



         <div class="inputBox">
            <span>your message</span>            
            <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
         </div>


         <div class="inputBox">
            <span>choose plan</span>
            <select name="plan">
            <option value="ultimate">gold plan</option>
            <option value="ultimate">silver plan</option>
               <option value="basic">premium plan</option>
               <option value="premium">basicplan</option>
               <option value="ultimate">none</option>
            </select>
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
</html><?php /**PATH C:\xampp\htdocs\laravelp1\resources\views/contact.blade.php ENDPATH**/ ?>