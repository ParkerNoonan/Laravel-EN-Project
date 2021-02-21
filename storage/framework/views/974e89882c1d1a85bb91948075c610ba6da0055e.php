

<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div>
		<p>You can reach me through this blog!</p>
		<p>Did you think I'd put my real contact info on here?</p>
		<p>Sorry to disappoint! I'm still working at a job I frequently post about.</p>
		<p>But if you ask, I'll answer. Duh! That's why I starting writing this blog.</p>
		<p>So just post and add #Bored_Eng. THAT'S ME!</p>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/resources/views/Contact.blade.php ENDPATH**/ ?>