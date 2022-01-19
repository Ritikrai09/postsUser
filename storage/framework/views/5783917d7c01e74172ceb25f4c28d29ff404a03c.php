

<?php $__env->startSection('content1'); ?>

<div class='w-75 justify-end'>  
  <form action="<?php echo e(route('category')); ?>" class='w-100 bg-white p-6 rounded-lg mt-1' method='post' enctype='multipart/form-data'>
     <?php echo csrf_field(); ?>     
     <?php if(session()->has('success')): ?>
         <div class='alert alert-success'>
            <ul>
               <li><?php echo e(session()->get('success')); ?></li>
             </ul>
           </div>
       <?php endif; ?>
       <?php if(session()->has('failed')): ?>
         <div class='alert alert-danger'>
            <ul>
               <li><?php echo e(session()->get('failed')); ?></li>
             </ul>
           </div>
       <?php endif; ?>

    <fieldset class='w-100 inline-flex bg-grey scheduler-border'>
       <legend class='text-secondary font-bold border-bottom w-50 text-left ml-4 px-10 py-1 <?php $__errorArgs = ['categoryName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border-3 border-danger bg-red-100  : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>'>Add Category </legend>   

           <div class='control-group inline-flex ml-3 mb-4 w-75 p-3'>
           <label class='sr-only' for="categoryName">category Name</label>
           <input type="text" name='categoryName'
           id='categoryName' class='bg-gray-100 border-2 w-50 p-2 h-10 rounded-lg m-2 <?php $__errorArgs = ['categoryName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border-3 border-danger bg-red-100  : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' placeholder='Category Name'>
        
           <label class='sr-only' for="Descritption">Description</label>
           <input type="text" name='Description'
           id='Description' class='bg-gray-100 border-2 w-75 p-2 h-10 rounded-lg m-2' placeholder='Description'>
           <button type="submit" class='w-50 h-10 bg-blue-500 text-white text-center font-medium py-1 m-2 rounded-lg <?php $__errorArgs = ['Descritpion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border-3 border-danger bg-red-100  : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>'><b>+</b>Add Category</button>
      </div>
    </fieldset> 
   </form>   
 
   <div class='container px-5'>
    <table class='table'>
       <thead>
            <tr>
              <th scope='col'>Id</th>
              <th scope='col'>Category Name</th>
              <th scope='col'>Description</th>
           </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr>
                 <th scope='row'><?php echo e($categories->id); ?></th>
                 <td><?php echo e($categories->categoryName); ?></td>
                 <td><?php echo e($categories->description); ?></td>
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
        </tbody>
     </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/ecommerce/category.blade.php ENDPATH**/ ?>