; 
<?php $__env->startSection('title'); ?>;
SERVICES PAGE
<?php $__env->startSection('content'); ?>
<h1> Welcome to Services Page</h1>
<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li> <?php echo e($service); ?> </li>
<p> Some text</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('menu.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelp1\resources\views/menu/services.blade.php ENDPATH**/ ?>