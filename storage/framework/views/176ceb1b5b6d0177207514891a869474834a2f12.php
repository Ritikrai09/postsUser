

<?php $__env->startSection('content1'); ?>

<div class='w-75 justify-end'>  
  <form action="<?php echo e(route('products')); ?>" class='w-100 bg-white p-6 rounded-lg mt-1' method='post' enctype='multipart/form-data'>
     <?php echo csrf_field(); ?>     
     <?php if(session()->has('success')): ?>
         <div class='alert alert-success'>
         <button type='button' class='text-white close' data-dismiss='alert'>❌</button>
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
      <legend class='text-secondary font-bold border-bottom w-50 text-left ml-4 px-10 py-1'>Add Product </legend>   
        <div class='flex w-100'>    
          <div class='control-group flex flex-col ml-3 mb-4 w-25 p-3'>
              <label for="image" class='sr-only'>image</label>
              <input type="file" name='image' id='image'
              class='form-control bg-gray-100 border-2 w-75 h-25 p-2 rounded-lg mb-4  <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border-3 border-danger bg-red-100 : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>'>  

              <label for="productName" class='sr-only'>Product Name</label>
              <input type="text" name='productName' id='productName' placeholder= 'product Name' 
              class='bg-gray-100 border-2 w-75 p-2 h-10 rounded-lg mt-3 <?php $__errorArgs = ['productName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border-3 border-danger bg-red-100 : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e(old('productName')); ?>'>    
    

              <label for="category" class='sr-only'>Category</label> 
                 <select type="dropdown" name='category' id='category'
                  class='bg-gray-100 text-secondary border-2 w-75 h-10 rounded-lg mt-5 <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border-3 border-danger bg-red-100 : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>'>
                  <option selected disabled>select category</option>
                     <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->categoryName); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
              
                 <div class='form-check w-100 ml-0 mt-4 m-2 p-2'> 
                   <i>Status:</i> 
                    <input class='form-check-input mt-2 ml-3' type="checkbox" name='flexCheckChecked'
                     id='flexCheckChecked' class='bg-gray-100 border-2 w-25 p-2 rounded-lg mb-4' checked>
                    <label class='form-check-label ml-8' for="flexCheckChecked">active</label>
                </div>
          </div>
             
            <div class='control-group mb-4 p-3 w-50'>
               <label for="productDescription" class='sr-only'>productDescription</label>
                   <textarea name='productDescription' id='productDescription' placeholder='Add product description' 
                   class='bg-gray-100 border-2 w-75 h-25 p-2 rounded-lg mb-2 <?php $__errorArgs = ['productDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border-3 border-danger bg-red-100  : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' cols="40" rows="10"><?php echo e(old('productDescription')); ?></textarea>
                   
               <div class='flex mt-4'>
                  <label for="costprice" class='sr-only'>costprice</label>
                  <input type="number" name='costprice' min=1 id='costprice' placeholder='cost price' 
                   class='bg-gray-100 border-2 text-sm w-25 p-2 rounded-lg mb-4 <?php $__errorArgs = ['costprice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ?border-3 border-danger bg-red-100  : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e(old('costprice')); ?>'>
                   <small class='text-secondary p-2 font-italic'>(Rs.)</small>
                 

                   <label for="weight" class='sr-only'>weight</label>
                  <input type="number" name='weight' min=1 id='weight' placeholder= 'Weight' 
                   class='bg-gray-100 border-2 w-25 text-sm p-2 rounded-lg mb-4 ml-4 <?php $__errorArgs = ['weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border border-danger bg-red-100 : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e(old('weight')); ?>'>
                   <small class='text-secondary p-2 font-italic'>(g)</small>
                 
                </div>

                <div class='flex mt-4'>
                  <label for="quantity" class='sr-only'>Quantity</label>
                  <input type="number" name='quantity' min=1 id='quantity' placeholder= 'Quantity' 
                   class='bg-gray-100 border-2  text-sm w-25 p-2 rounded-lg mb-4 <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border-3 border-danger bg-red-100  : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e(old('quantity')); ?>'>
                   <small class='text-secondary p-2 font-italic'>(per box)</small>

                   <label for="boxes" class='sr-only'>Boxes</label>
                  <input type="number" name='boxes' min=1 id='boxes' placeholder= 'Boxes' 
                   class='bg-gray-100 border-2 w-25 p-2 rounded-lg mb-4 <?php $__errorArgs = ['boxes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border-3 border-danger bg-red-100  : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e(old('boxes')); ?>'>
                   <small class='text-secondary p-2 text-sm font-italic'>(cartoon)</small>
            
               </div>

                <div class='mb-4 flex justify-start'>
                   <input type="number" name='MRP' min=1 id='MRP' placeholder= 'MRP' 
                   class='bg-gray-100 border-2 w-25 text-sm p-2 rounded-lg mt-3 <?php $__errorArgs = ['MRP'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ? border-3 border-danger bg-red-100  : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e(old('MRP')); ?>'>
                   <small class='text-secondary p-2 font-italic mr-4'>(Rs.)</small>
         
                   <button type="submit" class='w-25 h-10 bg-blue-500 text-white text-center font-medium py-1 mt-3 rounded-lg'><b>+</b> Add Product</button>
                </div> 
              </div>
            </div> 
          </fieldset>
        </form>  
      <hr class='bg-grey-500'>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/ecommerce/product.blade.php ENDPATH**/ ?>