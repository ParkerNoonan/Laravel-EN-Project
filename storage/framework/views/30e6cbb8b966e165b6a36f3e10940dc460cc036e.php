

<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div>
		<p>About page</p>
		<p>This is the create page</p>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Homestead\ENProject\resources\views/Create.blade.php ENDPATH**/ ?>