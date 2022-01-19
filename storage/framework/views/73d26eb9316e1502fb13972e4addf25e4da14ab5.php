

<?php $__env->startSection('content1'); ?>
 
 <div class='flex w-6/10 justify-end'> 
    <div class="w-6/10 bg-white p-6 rounded-lg mt-3">
       <h3 class='text-xl bold text-left pb-3'>Seller's Name</h3>  
        <div class='flex item-center'>
            <?php $__currentLoopData = $seller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sellers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
              <?php echo e($sellers->SellerName); ?><br> 
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
       </div>
     </div>

    <div class="w-6/10 bg-white p-6 rounded-lg mt-3">
       <h3 class='text-xl bold text-left pb-3'>No. of Customers</h3>  
         <div class='flex item-center'>
             <?php $__currentLoopData = $seller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sellers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                 <?php echo e($sellers->customers->count()); ?><br> 
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
         </div>      
     </div>
     
     <div class="w-6/10 bg-white p-6 rounded-lg mt-3">
       <h3 class='text-xl bold text-left pb-3'>Customers </h3>  
         <div class='flex item-center wrap'>
            <?php $__currentLoopData = $seller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sellers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
             <?php $__currentLoopData = $sellers->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                 <?php echo e($customers->name); ?>,
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <br>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
         </div>      
     </div>

     <div class="w-6/10 bg-white p-6 rounded-lg mt-3">
       <h3 class='text-xl bold text-left pb-3'>City </h3>  
         <div class='flex item-center'>
            <?php $__currentLoopData = $seller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sellers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
             <?php $__currentLoopData = $sellers->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                 <?php echo e($customers->city); ?><br> 
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
         </div>      
     </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/seller.blade.php ENDPATH**/ ?>