<?php $__env->startSection('content'); ?>

	<div class="container">
		<h3>List of Reports</h3>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Hardware Issue</th>
					<th>Description</th>
					<th>Category</th>
					<th>Model Number</th>
					<th>Quantity</th>
					<th>Location</th>
					<th>Submitted At</th>
					<th></th>
					<th></th>
					<th>Modify</th>
				</tr>
			</thead>

			<tbody>
			<?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($component->id); ?></td>
					<td><?php echo e($component->name); ?></td>
					<td><?php echo e($component->description); ?></td>
					<td><?php echo e($component->category); ?></td>
					<td><?php echo e($component->model_number); ?></td>
					<td><?php echo e($component->quantity1); ?></td>
					<td><?php echo e($component->location); ?></td>
					<td><?php echo e($component->created_at); ?></td>
					<td>
						<th><a href="<?php echo e(route('comp.edit', $component->id)); ?>"><button class="btn btn-success">Edit</button></a></th>

						<th><form method="post" action="<?php echo e(route('comp.destroy', $component->id)); ?>" class="inline-form">
							<?php echo e(method_field('delete')); ?>

							<?php echo e(csrf_field()); ?>

							<input class="btn btn-danger" onclick="return confirm('Are you sure?')"  type="submit" value="Delete">
						</form></th>
						
						<th><a href="<?php echo e(route('comp.show', $component->id)); ?>"><button class="btn btn-primary">View</button></a></th>
						
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</tbody>	
		</table>
	</div>
	<div class="row">
		<div class="col-12 d-flex justify-content-center">
		<?php echo $components->appends(\Request::except('page'))->render(); ?>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chis\resources\views/component/index.blade.php ENDPATH**/ ?>