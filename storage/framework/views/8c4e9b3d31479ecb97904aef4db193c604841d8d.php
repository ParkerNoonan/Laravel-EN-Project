

<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<p>This page will let you view, edit, or delete sites</p>
	<table>
		<tr>
			<th>Site Name</th>
			<th>Project Number</th>
			<th>Issuance</th>
			<th>Submittal Date</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Edit Site?</th>
			<th>Delete Site?</th>
			<th>View Site?</th>
			<th>Design Basis Manual</th>
		</tr>
	<?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<tr>
    		<td><?php echo e($var->SiteName); ?></td>
    		<td><?php echo e($var->ProjectNum); ?></td>
    		<td><?php echo e($var->Issuance); ?></td>
    		<td><?php echo e($var->subDate); ?></td>
    		<td><?php echo e($var->latitude); ?></td>
    		<td><?php echo e($var->longitude); ?></td>
    		<td><a href="<?php echo e(action('Controller@Submit4', ['SiteName' => $var->SiteName, 'ID' => $var->ID])); ?>">Edit</a></td>
    		<td><a href="<?php echo e(action('Controller@Submit6', ['SiteName' => $var->SiteName, 'ID' => $var->ID])); ?>">Delete</a></td>
    		<td><a href="<?php echo e(action('Controller@Submit7', ['SiteName' => $var->SiteName, 'ID' => $var->ID])); ?>">View</a></td>
    		<td><a href="<?php echo e(action('Controller@Submit8', ['SiteName' => $var->SiteName, 'ID' => $var->ID])); ?>">Create Design Basis Manual</a></td>
    	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php echo e($test->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/resources/views/edit_site.blade.php ENDPATH**/ ?>