

<?php $__env->startSection('content1'); ?>
<div class='flex flex-col justify-center'> 
     <?php if(session()->has('success')): ?>
               <div class='text-center p-1 alert alert-success'>
               <button type='button' class='text-white close' data-dismiss='alert'>❌</button>
                   <ul>
                       <li><?php echo e(session()->get('success')); ?></li>
                   </ul>
               </div>
            <?php endif; ?>
        <div class="w-100 text-center bg-white p-6 rounded-lg mt-3">
        Dashboard
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>