

<?php $__env->startSection('content1'); ?>

<div class='flex w-6/10 justify-end'> 
    <div class="w-6/10 bg-white p-6 rounded-lg mt-3">
       <h3 class='text-xl bold text-left pb-3'>Order</h3>  
        <div class='flex item-center'>
            <div class="mb-4 flex justify-center">
              <label for="categoryName" class='sr-only'>categoryName</label>
                <input type="text" name='categoryName' id='categoryName' placeholder='Category name' 
                  class='border-2 w-75 p-3 rounded-lg mb-2 <?php $__errorArgs = ['categoryName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? 'border border-danger' : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e(old('categoryName')); ?>'>
                   
          
            </div>
            <div class='control-group mb-4 p-3 w-50'>
               <label for="categorydescription" class='sr-only'>Category description</label>
                   <textarea  name='categorydescription' id='categorydescription' placeholder='Category description' 
                   class='bg-gray-100 border-2 w-75 h-25 p-2 rounded-lg mb-2 <?php $__errorArgs = ['categorydescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? 'border border-danger' : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e(old('categorydescription')); ?>' cols="40" rows="10"></textarea>
                   
      </div>
      <hr class='bg-grey-500'>
    </div>
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/ecommerce/order.blade.php ENDPATH**/ ?>