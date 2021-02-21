<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/Act_Data_Sheet.css')); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $__env->yieldContent('style'); ?>
</head>
<body>
	<?php echo $__env->yieldContent('header'); ?>
	<div class="divider"></div>
	<?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\Users\dell\Homestead\ENProject\resources\views/layouts/layout2.blade.php ENDPATH**/ ?>