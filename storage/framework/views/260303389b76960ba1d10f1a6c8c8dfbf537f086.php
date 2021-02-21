

<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<p>See below for a summary of valve information.<br>Below the summary is the sizing information.
<br>If you need to change any information, please click here to edit the <a href="<?php echo e(action('Controller@Submit9')); ?>">valve informaiton.</a></p>
<h3><u>Site & Valve Info for Sizing</u></h3>
<p>Valve Size (in): <?php echo e($area2[0]->Valve_1_Size); ?>"</p>
<p>Valve Manufacturer: <?php echo e($area2[0]->Valve_1_Man); ?></p>
<p>Max Differential Presssure: <?php echo e($area2[0]->Valve_1_MDP); ?> psi</p>
<p>Pipeline MAOP: <?php echo e($area2[0]->Valve_1_PLMAOP); ?> psi</p>
<p>Pipeline Design Pressure: <?php echo e($area2[0]->Valve_1_PLDP); ?> psi</p>
<h3><u>Valve Torque Sizing</u></h3>
<p>Valve Torque (no safety factor): <?php echo e($area1['1']); ?> in-lb</p>
<p>Valve Torque (w/ safety factor): <?php echo e($area1['2']); ?> in-lb</p>
<p>Maximum Allowable Stem Torque: <?php echo e($area1['3']); ?> in-lb</p>
<p>Run Torque (no safety factor): <?php echo e($area1['4']); ?> in-lb</p>
<p>Run Torque (w/ safety factor): <?php echo e($area1['5']); ?> in-lb</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Homestead\ENProject\resources\views/valve_size_return.blade.php ENDPATH**/ ?>