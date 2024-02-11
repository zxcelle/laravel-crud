<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update a Product</h1>
    <div>
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
            
        <?php endif; ?>
    </div>
    <form method="post" action="<?php echo e(route('flights.update', ['flight' => $flight])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="<?php echo e($flight->name); ?>"/>
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="<?php echo e($flight->qty); ?>"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="<?php echo e($flight->price); ?>"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="<?php echo e($flight->description); ?>"/>
        </div>
        <div>
            <input type="submit" value="Update"/>
        </div>
    </form>
</body>
</html><?php /**PATH C:\Apache24\htdocs\first_project\my_first_app\resources\views/flights/edit.blade.php ENDPATH**/ ?>