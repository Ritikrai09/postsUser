

<?php $__env->startSection('content1'); ?>
    <div class='flex justify-center'> 
      <div class="w-2/6 bg-white p-6 rounded-lg mt-6">
        <form action="<?php echo e(route('login')); ?>" method='post'>
        <?php echo csrf_field(); ?>
            
        <?php if(session('status')): ?>
            <div class='bg-red-400 p-4 text-white mb-3 text-center text-sm'>
                <ul>
                   <li>
                      <?php echo e(session('status')); ?>

                   </li>
                </ul>
             </div>
        <?php endif; ?>
            
            <div class='mb-4'>
                <label for="email" class='sr-only'>Email</label>
                  <input type="text" name='email' id='email' placeholder='your email' 
                   class='bg-gray-100 border-2 w-full p-4 rounded-lg mb-3' value=''>
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
                class='bg-gray-100 border-2 w-full p-4 rounded-lg mb-2' value=''>
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
            <div class='flex items-center'>
                  <input type="checkbox" name='remember' id='remember'  class='mr-2'>
                   <label for="remember">Remember me</label>
                </div>
              </div>
              
              <div class='mb-4'>
                     <button type="submit" class='w-full bg-blue-500 text-white text-center font-medium px-4 py-3 rounded-lg'>Login</button>
                </div> 
        </form>  
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/login.blade.php ENDPATH**/ ?>