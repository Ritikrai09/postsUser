

<?php $__env->startSection('content1'); ?>
    <div class='flex justify-center'> 
        <div class="w-2/6 bg-white p-6 rounded-lg mt-3">
          <form action="<?php echo e(route('posts')); ?>" method='post'>
            <?php echo csrf_field(); ?>
            <?php if(session()->has('fail')): ?>
               <div class='alert alert-danger text-center'>
                   <ul>
                       <li><?php echo e(session()->get('fail')); ?></li>
                   </ul>
               </div>
            <?php endif; ?>
           <div class='mb-4'>
                <label for="name" class='sr-only'>Body</label>
                <textarea name='body' id='body' cols='40' rows='4' class='bg-gray-100 border-2 w-full p-4 rounded-lg mb-2'
                placeholder='write your comment here...'></textarea>
                  <?php $__errorArgs = ['body'];
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
              <button type="submit" class='w-small bg-blue-500 text-white text-center font-medium px-4 py-3 rounded-lg'>Post</button>
          </div>
       </form>

       <?php if($posts->count()): ?>
       
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.post','data' => ['post' => $post]]); ?>
<?php $component->withName('post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php echo e($posts->links()); ?>

          <?php else: ?>
               
        <h4>No posts yet</h4>
      
             <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/post.blade.php ENDPATH**/ ?>