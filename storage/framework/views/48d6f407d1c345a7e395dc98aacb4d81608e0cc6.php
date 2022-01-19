

  <?php $__env->startSection('content1'); ?>

  <div class='flex justify-center'>       
      <div class="w-8/12">
        <div class='p-6 mt-2'>
            <h1 class='text-2xl font-medium mb-1'> <?php echo e($user->name); ?> </h1>
            <p>Posted <?php echo e($posts->count()); ?> <?php echo e(Str::plural('post', $posts->count())); ?> and recieved
            <?php echo e($user->recievedLikes->count()); ?> likes  </p>
         </div>
         <div class="w-8/12 bg-white p-6 rounded-lg mt-6">
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
            <h4> <?php echo e($user->name); ?>  does not have posts yet</h4>
          <?php endif; ?>  
     </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/index.blade.php ENDPATH**/ ?>