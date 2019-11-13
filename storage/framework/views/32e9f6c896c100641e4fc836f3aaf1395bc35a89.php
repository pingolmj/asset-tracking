<?php $__env->startSection('content'); ?>
	<div class="container">
		<h1>Update Report</h1>

		<?php echo Form::model($components, ['route' => ['comp.update', $components->id]]); ?>

			<?php echo e(method_field('PUT')); ?>

			<div class="form-group">
				<?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Hardware Name']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Issue Description']); ?>

			</div>

			<div class="form-group">
					<label>Category</label>
					<select name="category">
					    <option value="Processing Devices">Processing Device</option>
					    <option value="Memory Devices">Memory Devices</option>
					    <option value="I/O Devices">I/O Devices</option>
					    <option value="Storage Devices">Storage Devices</option>
  					</select>
					
				</div>

			<div class="form-group">
				<?php echo Form::text('model_number', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Model Number']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::number('quantity1', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Quantity']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Location']); ?>

			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Update">
				<a href="comp.index"><button class="btn btn-primary">Cancel</button></a>
			</div>

		<?php echo e(Form::close()); ?>


	</div> 
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chis\resources\views/component/edit.blade.php ENDPATH**/ ?>