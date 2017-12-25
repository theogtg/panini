<?php $__env->startSection('content'); ?>
	<br><br><br>
	<h1>Sorry!</h1>
	<br><br>
	<p>That code either does not exist or has already been used!</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>