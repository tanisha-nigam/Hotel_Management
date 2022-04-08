
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

<section>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
    <h1 class="heading">ALL BOOKINGS</h1>
</div>
<div class="card-body">


<table class="table">
<thead>
<tr>
<th><h1>NAME</h1></th>
<th><h1>EMAIL</h1></th>
<th><h1>NUMBER</h1></th>
<th><h1>DESTINATION</h1></th>
<th><h1>HOTEL</h1></th>
<th><h1>ROOM</h1></th>
<th><h1>MEALS</h1></th>
<th><h1>ACTIONS</h1></th>
</tr>
</thead>

<tbody>
   <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <tr>
       <td><?php echo e($post->name); ?></td>
       <td><?php echo e($post->email); ?></td> 
       <td><?php echo e($post->number); ?></td> 
       <td><?php echo e($post->destination); ?></td> 
       <td><?php echo e($post->hotel); ?></td> 
       <td><?php echo e($post->room); ?></td> 
       <td><?php echo e($post->meals); ?></td> 
       <td><?php echo e($post->message); ?></td>
       <td>
           <a href="/posts/<?php echo e($post->id); ?>" class="btn btn-success"> VIEW </a> 
           <a href="/edit-post/<?php echo e($post->id); ?>" class="btn btn-info"> EDIT </a> 
           <a href="/delete-post/<?php echo e($post->id); ?>" class="btn btn-danger"> DELETE </a> 
       </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>

</div>

</div>

</div>

</div>
</div>

</section>


</body>
</html><?php /**PATH C:\xampp\htdocs\laravelp1\resources\views/posts.blade.php ENDPATH**/ ?>