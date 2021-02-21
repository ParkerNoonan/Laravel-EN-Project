

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
	<table>
		<tr>
			<th>Sitename</th>
			<th>Project Number</th>
			<th>Latitude</th>
			<th>Longitude</th>
		</tr>
			<?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($var->SiteName); ?></td>
					<td><?php echo e($var->ProjectNum); ?></td>
					<td><?php echo e($var->latitude); ?></td>
					<td><?php echo e($var->longitude); ?></td>
					<td><a href="<?php echo e(url('/Home?test=one')); ?>">Link</a></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php echo e($test->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Homestead\ENProject\resources\views/contact.blade.php ENDPATH**/ ?>