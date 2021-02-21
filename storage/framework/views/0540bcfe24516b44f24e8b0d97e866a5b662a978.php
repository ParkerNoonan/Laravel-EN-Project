

<?php $__env->startSection('content'); ?>
<div class="header1">	
	<h1 class="header_tab_large"><i>The Lazy Engineer!</i></h1>
	<p class="header_tabs">About</p>
	<p class="header_tabs">Contact</p>
	<p class="header_tabs">Log In</p>
</div>
<div class="header2">
	<p>Link 1</p>
	<p>Link 2</p>
	<p>Link 3</p>
</div>
<div class="divider"></div>
<div class="content1">
	<form action="/contact" method="GET">
		<label>Project Site</label><br>
		<input type="text" name="site_name" value=""><br>
		<label>Communication Work Order Number</label><br>
		<input type="text" name="comm_wk_num" value=""><br>
		<label>Construction Work Order Number</label><br>
		<input type="text" name="const_wk_num" value=""><br><br>
		<input type="submit" value="Submit">
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Welcome1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/sites/resources/views/about.blade.php ENDPATH**/ ?>