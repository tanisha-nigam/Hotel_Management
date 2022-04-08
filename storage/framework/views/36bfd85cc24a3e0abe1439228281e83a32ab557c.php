<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <style>
   
      body {
          background: url(../mvcp/home/bb.jpg) no-repeat;
     background-size: cover;
     background-position: center;
     background-attachment: fixed;
     font-family: 'Poppins', sans-serif;
     margin:0; padding:0;
     box-sizing: border-box;
     outline: none; border:none;
     text-decoration: none;
      }
     .container{
     border-radius: .5rem;
     overflow: hidden;
     background: var(--transparent-white);
     backdrop-filter: blur(.5rem);
     max-width: 1200px;
     margin:2.5rem auto;
     box-shadow: var(--box-shadow);
     /* margin-bottom: 15rem; */
  
      }
      .heading{
     text-align: center;
     text-transform: uppercase;
     color:var(--black);
     margin-bottom: 2rem;
     font-size: 2rem;
     
  }
   .flex .inputBox{
     flex:1 1 41rem;
  }
  .flex .inputBox span{
     display: block;
     margin-bottom: 0.5rem;
     font-size: 1rem;
     color:var(--black);
     text-transform: uppercase;
     color:var(--black);
     padding-top: 1rem;
  }
  .flex .inputBox input,
  .flex .inputBox textarea,
  .flex .inputBox select{
  width: 50%;
     padding:1.2rem 1.4rem;
     border:transparent;
     border-radius: 0.5rem;
     font-size: 1rem;
     border: rgb(18, 1, 1);
     background: rgba(255,255,255,.3);
  }
  .btn{
     display: inline-block;
     padding:1rem 3rem;
     border:.2rem solid var(--black);
     background: rgba(255,255,255,.3);
     border-color :black;
     border-radius: .5rem;
     font-size: 1rem;
     text-transform: capitalize;
     margin-top: 1rem;
     cursor: pointer;
  }
  .btn:hover{
     background:black;
     color:white;
  }
  
  
  html::-webkit-scrollbar{
     width: 1rem;
  }
  
  html::-webkit-scrollbar-track{
     background: transparent;
  }
  html::-webkit-scrollbar-thumb{
     background:#ef5777;
  }
  
     
  
      </style>

</head>
<body>
   
<div class="container">



<section class="contact">

   <h1 class="heading">view information</h1>

   <form>

      <div class="flex">

         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" value="<?php echo e($post->name); ?>" name="name" required >
         </div>

         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" value="<?php echo e($post->email); ?>" name="email" required>
         </div>

         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="enter your number" value="<?php echo e($post->number); ?>" name="number" required>
         </div>
        

         <div class="inputBox">
            <span>choose travel destination</span>
            <select name="destination" value="<?php echo e($post->destination); ?>">
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
            <select name="hotel" value="<?php echo e($post->hotel); ?>">
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
            <select name="room" value="<?php echo e($post->room); ?>">
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
            <select name="meals" value="<?php echo e($post->meals); ?>">
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
            <textarea name="message" placeholder="enter your message" required cols="30" rows="10"><?php echo e($post->message); ?></textarea>
         </div>
        
      </div>

     

   </form>

</section>



</div>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravelp1\resources\views/single-post.blade.php ENDPATH**/ ?>