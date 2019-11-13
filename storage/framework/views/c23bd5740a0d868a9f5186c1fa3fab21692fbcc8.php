<?php $__env->startSection('content'); ?>

	<div class="container">
		<h3>List of Components</h3>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Image</th>
					<th>Name</th>
					<th>Description</th>
					<th>Category</th>
					<th>Model</th>
					<th>Location</th>
					<th>Status</th>
					<th>Date</th>
				</tr>
			</thead>

			<tbody>
			<?php $__currentLoopData = $hardwares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hardware): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<tr>
					<td><?php echo e($hardware->id); ?></td>
					<td> <img src="<?php echo e(asset('uploads/hardware/' . $hardware->image)); ?>" width="100px;" height="100px;" alt="Image"> </td>
					<td><?php echo e($hardware->name); ?></td>
					<td><?php echo e($hardware->description); ?></td>
					<td><?php echo e($hardware->category); ?></td>
					<td><?php echo e($hardware->model_number); ?></td>
					<td><?php echo e($hardware->location); ?></td>
					<td><?php echo e($hardware->status); ?></td>
					<td><?php echo e($hardware->created_at); ?></td>
				</tr>

					<td>
						<th> <a href="/editimage/<?php echo e($hardware->id); ?>" class="btn btn-success">EDIT</a> </th>

						<th><a href="/deleteimage/<?php echo e($hardware->id); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">DELETE</a></th>
						
						<th> <form action="/qr" method="post">
							<input hidden type="text" name="txtqr" value="<?php echo e($hardware->id); ?>"/>
							<input type="submit" name="btnsubmit" class="btn btn-primary" value="GENERATE"/> <?php echo csrf_field(); ?> </form>

								<?php
									
									if(isset($_POST['btnsubmit']))
									{
										$data = trim($_POST['txtqr']);

										echo"<h2>Output</h2>";
										echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=$data' height=250 width=250/>";
									}
								?></a> 
						</th>


						
					</td>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</tbody>	
		</table>
	</div>
					<div class="row">
						<div class="col-12 d-flex justify-content-center">
						<?php echo $hardwares->appends(\Request::except('page'))->render(); ?>

					</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chis\resources\views/hardware/hardwareform.blade.php ENDPATH**/ ?>