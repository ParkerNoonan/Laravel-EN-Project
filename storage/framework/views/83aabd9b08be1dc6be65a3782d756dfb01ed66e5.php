<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php echo $__env->yieldContent('header'); ?>
	<div class="divider"></div>
	<?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH /home/vagrant/sites/resources/views/layouts/layout.blade.php ENDPATH**/ ?>