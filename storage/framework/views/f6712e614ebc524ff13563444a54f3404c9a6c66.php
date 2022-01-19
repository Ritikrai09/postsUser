

<?php $__env->startSection('content1'); ?>
<div class='flex justify-center'> 
     <div class="w-2/6 bg-white p-4 rounded-lg mt-3">
     <div class='py-2'> <h2 class='text-lighter text-2xl text-center'>Seller Registration</h2></div>
        <form action="<?php echo e(route('sellerRegister')); ?>" class='form control' method='post'> 
        <?php echo csrf_field(); ?>
            <?php if(session()->has('success')): ?>
               <div class='alert alert-success'>
                   <ul>
                       <li><?php echo e(session()->get('success')); ?></li>
                   </ul>
               </div>
            <?php endif; ?>
        <div class='flex flex-row'>
            <div class='m-2'>
                <label for="name" class='sr-only'>Company Name</label>
                <input type="text" name='CompanyName' id='CompanyName' placeholder='Company name' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-2' value='<?php echo e(old('CompanyName')); ?>'>

                <?php $__errorArgs = ['CompanyName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class='text-red-500 mt-2 text-sm'>
                <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class='m-2'>  
                <label for="username" class='sr-only'>SellerName</label>
                <input type="text" name='SellerName' id='SellerName' placeholder='Seller name' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-3' value='<?php echo e(old('SellerName')); ?>'>
                <?php $__errorArgs = ['SellerName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class='text-red-500 mt-2 text-sm'>
                    <?php echo e($message); ?>

                     </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
         </div>
         <div class='flex flex-row'>
            <div class='m-2'>
            <label for="email" class='sr-only'>Email</label>
                <input type="text" name='email' id='email' placeholder='your email' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-3' value='<?php echo e(old('email')); ?>'>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class='text-red-500 mt-2 text-sm'>
                <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
     
            <div class='m-2'>
                <label for="password" class='sr-only'>Password</label>
                <input type="password" name='password' id='password' placeholder='your password' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-3' value=''>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class='text-red-500 mt-2 text-sm'>
                <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>  
        <div class='flex flex-row'>  
            <div class='m-2'>
                <label for="passwordconfirm" class='sr-only'>Confirm Password</label>
                <input type="password" name='password_confirmation' id='password_confirmation' placeholder='Repeat password' 
                class='bg-gray-100 border-2 w-full p-4  h-5 rounded-lg mb-3' value=''>
                <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class='text-red-500 mt-2 text-sm'>
                <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

             <div class='m-2'>  
                <label for="contact" class='sr-only'>contact</label>
                <input type="number" name='contact' id='contact' placeholder='contact' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-3' value='<?php echo e(old('contact')); ?>'>
                <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class='text-red-500 mt-2 text-sm'>
                    <?php echo e($message); ?>

                     </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>  
       
        <div class='flex flex-row'>  
           <div class='m-2'>         
              <label for="officeAddress" class='sr-only'>officeAddress</label>
                <textarea type="text" name='officeAddress' id='officeAddress' cols="55" rows="3"
                 placeholder='office Address' class='bg-gray-100 border-2 w-full p-2 rounded-lg' value='<?php echo e(old('officeAddress')); ?>'></textarea>
                 <?php $__errorArgs = ['officeAddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class='text-red-500 mt-2 text-sm'>
                    <?php echo e($message); ?>

                     </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
       </div>    
       <div class='flex'> 
            <div class='m-2'>  
                <label for="city" class='sr-only'>city</label>
                <input type="text" name='city' id='city' placeholder='city' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-3' value='<?php echo e(old('city')); ?>'>
                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class='text-red-500 mt-2 text-sm'>
                    <?php echo e($message); ?>

                     </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
             
            <div class='m-2'>  
                <label for="state" class='sr-only'>state</label>
                <input type="text" name='state' id='state' placeholder='state' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-3' value='<?php echo e(old('state')); ?>'>
                <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class='text-red-500 mt-2 text-sm'>
                    <?php echo e($message); ?>

                     </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>  
                <div class='m-2'>
                     <button type="submit" class='w-full bg-blue-500 text-white text-center font-medium px-4 py-3 rounded-lg'>Register</button>
                </div>
            </div>   
        </form>  
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/ecommerce/sellerRegister.blade.php ENDPATH**/ ?>