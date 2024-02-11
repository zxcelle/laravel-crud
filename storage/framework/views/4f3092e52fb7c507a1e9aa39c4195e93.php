<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Flights</h1>
    <div>
        <?php if(session()->has('success')): ?>
        <div>
            <?php echo e(session('success')); ?>

        </div>
            
        <?php endif; ?>
    </div>
    <div>
        <div>
            <a href="<?php echo e(route('flights.create')); ?>">Create a Product</a>
        </div>
        <table border="1" style="border-collapse: collapse">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($flight->id); ?></td>
                    <td><?php echo e($flight->name); ?></td>
                    <td><?php echo e($flight->qty); ?></td>
                    <td><?php echo e($flight->price); ?></td>
                    <td><?php echo e($flight->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('flights.edit',['flight' => $flight])); ?>">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="<?php echo e(route('flights.destroy',['flight' => $flight])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>
</html><?php /**PATH C:\Apache24\htdocs\first_project\my_first_app\resources\views/flights/index.blade.php ENDPATH**/ ?>