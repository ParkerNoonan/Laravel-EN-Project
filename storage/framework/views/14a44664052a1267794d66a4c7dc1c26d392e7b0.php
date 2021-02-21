

<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
	<p>Add in the valves for your site.</p>
	<form action="<?php echo e(action('Controller@Submit2')); ?>"  method="POST">
		<?php echo csrf_field(); ?>
		Project Site: <br>
		<select name="proj_site">
			<?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col_num => $col_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<option value="<?php echo e($col_val); ?>"><?php echo e($col_val); ?></option>
        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
		<br><br>
		Valve 1 Size: <br>
		<input type="text" name="Valve_1_Size">
		<br><br>
		Valve 1 Manufacturer: <br>
		<input type="text" name="Valve_1_Man">
		<br><br>
		Valve 1 Model: <br>
		<input type="text" name="Valve_1_Model">
		<br><br>
		Valve 1 Serial #: <br>
		<input type="text" name="Valve_1_Serial">
		<br><br>
		Valve 1 Max Diff Pressure: <br>
		<input type="text" name="Valve_1_MDP">
		<br><br>
		Valve 1 Temperature Rating: <br>
		<input type="text" name="Valve_1_TR">
		<br><br>
		Valve 1 Max Wind Speed: <br>
		<input type="text" name="Valve_1_MWS">
		<br><br>
		Valve 1 Bettis Actuator Model: <br>
		<input type="text" name="Valve_1_BAM">
		<br><br>
		Valve 1 Pipeline MAOP: <br>
		<input type="text" name="Valve_1_PLMAOP">
		<br><br>
		Valve 1 Pipeline Design Pressure: <br>
		<input type="text" name="Valve_1_PLDP">
		<br><br>
		Valve 1 Pipe Grade: <br>
			<select name="Valve_1_Pipe_Grade">
				<option value="Gr B">Gr B</option>
				<option value="X52">X52</option>
				<option value="X60">X60</option>
			</select>
			<br><br>
		Valve 1 Tubing Size: <br>
		<input type="text" name="Valve_1_TS" value='3/8"'>
		<br><br>
		<button type="submit" value="Submit">Submit</button>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Homestead\ENProject\resources\views/add_valve.blade.php ENDPATH**/ ?>