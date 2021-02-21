

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
			<th>Valve Size</th>
			<th>Valve Man.</th>
			<th>Valve Serial #</th>
			<th>Max Pressure Diff.</th>
			<th>View Valve?</th>
			<th>Edit Valve?</th>
			<th>Delete Valve?</th>
			<th>Valve Sizing</th>
			<th>Actuator Data Sheet</th>
		</tr>
	<?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<tr>
    		<td><?php echo e($var->SiteName); ?></td>
    		<td><?php echo e($var->Valve_1_Size); ?>"</td>
    		<td><?php echo e($var->Valve_1_Man); ?></td>
    		<td><?php echo e($var->Valve_1_Serial); ?></td>
    		<td><?php echo e($var->Valve_1_MDP); ?> psig</td>
    		<td><a href="<?php echo e(action('Controller@Submit12', ['ID' => $var->ID])); ?>">View</a></td>
    		<td><a href="<?php echo e(action('Controller@Submit10', ['ID' => $var->ID])); ?>">Edit</a></td>
    		<td><a href="<?php echo e(action('Controller@Submit11', ['ID' => $var->ID])); ?>">Delete</a></td>
    		<td><a href="<?php echo e(action('Controller@Submit13', ['ID' => $var->ID,
    													   'dia' => $var->Valve_1_Size,
    													   'ansi' => '150',
    													   'op_pres' => $var->Valve_1_MDP,
    													   'man' => 'Cameron'])); ?>">Verify Sizing</a></td>
    		<td><a href="<?php echo e(action('Controller@Submit15', ['ID' => $var->ID,
    													   'dia' => $var->Valve_1_Size,
    													   'ansi' => '150',
    													   'op_pres' => $var->Valve_1_MDP,
    													   'man' => 'Cameron'])); ?>">Create Data Sheet</a></td>											   
    	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php echo e($test->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Homestead\ENProject\resources\views/edit_valve.blade.php ENDPATH**/ ?>