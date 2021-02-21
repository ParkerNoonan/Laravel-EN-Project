

<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<p>You have successfully submitted a valve to the site.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/resources/views/Valve_submitted.blade.php ENDPATH**/ ?>