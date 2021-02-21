

<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<form method="GET">
	<table>
		<tr>
			<th>Site Name</th>
			<th>Project Number</th>
			<th>Test 1</th>
			<th>Test 1</th>
			<th>Location</th>
		</tr>
	<?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<tr>
    		<td><input type="text" name="sitename" value="<?php echo e($var->SiteName); ?>"></td>
    		<td><input type="text" name="proj_num" value="<?php echo e($var->ProjectNum); ?>"></td>
    		<td><input type="text" name="comm_num" value="<?php echo e($var->CommNum); ?>"></td>
    		<td><input type="text" name="const_num" value="<?php echo e($var->ConstNum); ?>"></td>
    		<td><input type="text" name="location" value="<?php echo e($var->location); ?>"></td>
    	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
		<br>
		<button type="submit" value="Submit">Submit</button>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Homestead\ENProject\resources\views/about.blade.php ENDPATH**/ ?>