

<?php $__env->startSection('content1'); ?>
<div class='w-75 px-5'> 
   
   <?php if($product->count()): ?>
   
    <table class='table border-2 mt-4'>
       <thead class='bg-gray-100'>
            <tr class='w-100'>
              <th class='w-50' scope='col'>Id</th>
              <th class='w-50' scope='col'>Product Name</th>
              <th class='w-50' scope='col'>Description</th>
              <th class='w-50' scope='col'>Unit price (RS.)</th>
              <th class='w-50' scope='col'>Unit weight (g) </th>
              <th class='w-50' scope='col'>MRP (RS.)</th>
              <th class='w-50' scope='col'>Active</th>
              <th class='w-50' scope='col'>Image</th>
           </tr>
        </thead>
        <tbody>
         <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <?php $__currentLoopData = $productive->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr>
                 <th scope='row'><?php echo e($products->id); ?></th>
                 <td><?php echo e($products->productName); ?></td>
                 <td><?php echo e($products->productDescription); ?></td>
                 <th scope='row'><?php echo e($products->costprice); ?></th>
                 <td><?php echo e($products->weight); ?></td>
                 <td><?php echo e($products->MRP); ?></td>
                 <td><?php echo e($products->active); ?></td>
                 <td><?php echo e($products->image); ?></td>
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
        </tbody>
     </table>
     
     <?php else: ?>

     <div class='alert alert-warning'>
         <ul>
            <li>No Products available</li>
         </ul>
      </div>
      
       <?php endif; ?>
    
 </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\MultipleAuth\resources\views/layouts/ecommerce/productAvailable.blade.php ENDPATH**/ ?>