@extend('layout')

<?php $__env->startSection('header'); ?>
<div class="header1">
	<h1 class="header_tab_large"><i>The Bored Engineer</i></h1>
	<p class="header_tabs"><a href="/">Home</a></p>
	<p class="header_tabs"><a href="/about">About</a></p>
	<p class="header_tabs"><a href="<?php echo e(action('Controller@Contact')); ?>">Contact</a></p>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
	<p>About page</p>
</div>
<?php $__env->stopSection(); ?><?php /**PATH C:\Users\dell\Homestead\ENProject\resources\views//about.blade.php ENDPATH**/ ?>