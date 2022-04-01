<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Home Page</h1>

    <ul>
        <li><a href="/">Home Page</a></li>
        <li><a href="/chi-siamo">Chi siamo</a></li>
        <li><a href="/contatti">Contatti</a></li>

    </ul>

    <h2>Mi chiamo <?php echo e($nome); ?> <?php echo e($cognome); ?></h2>

    <ul>
        <?php $__currentLoopData = $amici; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($amico); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH /Users/emanuela/Desktop/Boolean/laravel/laravel-1/resources/views/index.blade.php ENDPATH**/ ?>