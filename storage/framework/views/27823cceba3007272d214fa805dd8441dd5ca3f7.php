

<?php $__env->startSection('content1'); ?>
<div class='flex justify-center'> 
        <div class="w-2/6 bg-white p-6 rounded-lg mt-3">
        <form action="<?php echo e(route('register')); ?>" method='post'>
            <?php echo csrf_field(); ?>
            <div class='mb-4'>
                <label for="name" class='sr-only'>Name</label>
                <input type="text" name='name' id='name' placeholder='your name' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-2' value='<?php echo e(old('name')); ?>'>

                <?php $__errorArgs = ['name'];
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
            <div class='mb-4'>  
                <label for="username" class='sr-only'>Username</label>
                <input type="text" name='username' id='username' placeholder='username' 
                class='bg-gray-100 border-2 w-full p-4 h-5 rounded-lg mb-3' value='<?php echo e(old('username')); ?>'>
                <?php $__errorArgs = ['username'];
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
            <div class='mb-4'>
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
            <div class='mb-4'>
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
           
            <div class='mb-4'>
                <label for="name" class='sr-only'>Confirm Password</label>
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
                <div class='mb-4'>
                     <button type="submit" class='w-full bg-blue-500 text-white text-center font-medium px-4 py-3 rounded-lg'>Register</button>
                </div>
            </div>   
        </form>  
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/register.blade.php ENDPATH**/ ?>