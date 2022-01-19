<?php $attributes = $attributes->exceptProps(['post' => $post]); ?>
<?php foreach (array_filter((['post' => $post]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class='mb-4'>

      <a href="<?php echo e(route('users.posts', $post->user)); ?>" class='font-bold'><?php echo e($post->user->name); ?></a> 
              
                <span class='text-gray-500 text-sm'>
                      Date <?php echo e($post->created_at->diffForHumans()); ?>

                 </span>
             
                 <p class='font-grey-300 mb-2'><?php echo e($post->body); ?></a> 
               
             <div class='flex items-center'>
 
             <?php if(auth()->guard()->check()): ?> 
            
             <?php if($post->ownedBy(auth()->user())): ?>
              <div> 
                 <form action="<?php echo e(route('posts.destroy', $post)); ?>" method='post'>
                   <?php echo csrf_field(); ?>
                    <div class='mr-2'> 
                    <?php echo method_field('DELETE'); ?>   
                    <button type='submit' class='text-blue-400'>Delete</button>
                   </div>
               </form>
             </div>
             <?php endif; ?>
             <?php if(!$post->likedBy(auth()->user())): ?>
               <form action="<?php echo e(route('posts.likes', $post)); ?>" method='post'>
                  <?php echo csrf_field(); ?>
                    <div class='mr-1'> 
                      <button type='submit' class='text-blue-400'>like</button>
                   </div>
               </form>
                <?php else: ?>
                <form action="<?php echo e(route('posts.likes', $post)); ?>" method='post'>
                   <?php echo csrf_field(); ?>
                    <div class='mr-2'> 
                    <?php echo method_field('DELETE'); ?>   
                    <button type='submit' class='text-blue-400'>unlike</button>
                   </div>
               </form>
              <?php endif; ?>
           <?php endif; ?>
                 <span><?php echo e($post->likes->count()); ?>  <?php echo e(Str::plural('like', $post->likes->count() )); ?></span>
               </div>
             </div> <?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/components/post.blade.php ENDPATH**/ ?>