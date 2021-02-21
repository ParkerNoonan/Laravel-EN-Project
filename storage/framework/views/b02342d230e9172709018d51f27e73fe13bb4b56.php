

<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
	<p>Add in the valves for your site.</p>
	<form action="<?php echo e(action('Controller@Submit9')); ?>">
		Project Site: <br>
		<input type="text" name="proj_site" value="<?php echo e($test[0]->SiteName); ?>" readonly>
		<br><br>
		Valve 1 Size: <br>
		<input type="text" value="<?php echo e($test[0]->Valve_1_Size); ?>" readonly>
		<br><br>
		Valve 1 Manufacturer: <br>
		<input type="text" name="Valve_1_Man" value="<?php echo e($test[0]->Valve_1_Man); ?>" readonly>
		<br><br>
		Valve 1 Model: <br>
		<input type="text" name="Valve_1_Model" readonly>
		<br><br>
		Valve 1 Serial #: <br>
		<input type="text" name="Valve_1_Serial" value="<?php echo e($test[0]->Valve_1_Serial); ?>" readonly>
		<br><br>
		Valve 1 Max Diff Pressure: <br>
		<input type="text" name="Valve_1_MDP" value="<?php echo e($test[0]->Valve_1_MDP); ?>" readonly>
		<br><br>
		Valve 1 Temperature Rating: <br>
		<input type="text" name="Valve_1_TR" value="<?php echo e($test[0]->Valve_1_TR); ?>" readonly>
		<br><br>
		Valve 1 Max Wind Speed: <br>
		<input type="text" name="Valve_1_MWS" value="<?php echo e($test[0]->Valve_1_MWS); ?>" readonly>
		<br><br>
		Valve 1 Bettis Actuator Model: <br>
		<input type="text" name="Valve_1_BAM" value="<?php echo e($test[0]->Valve_1_BAM); ?>" readonly>
		<br><br>
		Valve 1 Pipeline MAOP: <br>
		<input type="text" name="Valve_1_PLMAOP" value="<?php echo e($test[0]->Valve_1_PLMAOP); ?>" readonly>
		<br><br>
		Valve 1 Pipeline Design Pressure: <br>
		<input type="text" name="Valve_1_PLDP" value="<?php echo e($test[0]->Valve_1_PLDP); ?>" readonly>
		<br><br>
		Valve 1 Pipe Grade: <br>
			<select name="Valve_1_Pipe_Grade">
				<option value="Gr B">Gr B</option>
				<option value="X52">X52</option>
				<option value="X60">X60</option>
			</select>
			<br><br>
		Valve 1 Tubing Size: <br>
		<input type="text" name="Valve_1_TS" value='<?php echo e($test[0]->Valve_1_TS); ?>' readonly>
		<br><br>
		<button type="submit" value="Submit">Back to Valve List</button>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Homestead\ENProject\resources\views/view_valve.blade.php ENDPATH**/ ?>