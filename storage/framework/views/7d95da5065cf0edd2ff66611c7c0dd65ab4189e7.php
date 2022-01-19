

<?php $__env->startSection('content1'); ?>

<div class='flex w-75 justify-start'> 
    <ul class="inline-flex w-75 h-25 p-3 rounded-lg m-3"> 
      <li class='flex w-75 m-2 p-2 text-gray-500 hover:bg-gray-200 rounded-lg border-2'>
         <a class='nav-link w-100' href="<?php echo e(route('category')); ?>">Categories
            <h2 class="row h2 mt-2 flex text-yellow-400 justify-around">
                 <?php echo e($seller[0]->categories_count); ?><br> 
              <sub class="text-sm mt-3">available</sub>
           </h2>
         </a>
        </li>
        <li class='flex w-75 m-2 p-2 rounded-lg hover:bg-gray-200 border-2'>
           <a class='nav-link w-100' href="<?php echo e(route('productAvailable')); ?>">Products
              <h2 class='row h2 mt-2 flex text-blue-400 justify-around'>
              <?php echo e($seller[0]->products_count); ?>

                 <sub class="text-sm mt-3">available</sub>
              </h2>
           </a>   
        </li>
        <li class='flex w-75 m-2 p-2 rounded-lg hover:bg-gray-200 border-2'>
            <a class='nav-link w-100' href="">Orders
              <h2 class='row h2 mt-2 flex justify-around'>
                  0
                 <sub class="text-sm mt-3">available</sub>
              </h2>
           </a>  
        </li>
      <hr class='bg-grey-500'>
    </ul>
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/ecommerce/selldash.blade.php ENDPATH**/ ?>