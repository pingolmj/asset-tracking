<?php $__env->startSection('content'); ?>
	<div class="container">
		<h2><?php echo e($components->name); ?></h2>
		<p>
			<strong>Description:</strong> <?php echo e($components->description); ?>

		</p>
		<p>
			<strong>Category:</strong> <?php echo e($components->category); ?>

		</p>
		<p>
			<strong>Model Number:</strong> <?php echo e($components->model_number); ?>

		</p>
		<p>
			<strong>Quantity:</strong> <?php echo e($components->quantity1); ?>

		</p>
		<p>
			<strong>Location:</strong> <?php echo e($components->location); ?>

		</p>
		
		<p>
			
			<a href="<?php echo e(route('comp.index')); ?>"><button class="btn btn-primary">Return</button></a>
		</p>
	</div> 
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chis\resources\views/component/show.blade.php ENDPATH**/ ?>