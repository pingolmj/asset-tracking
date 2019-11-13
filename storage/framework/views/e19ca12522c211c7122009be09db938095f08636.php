<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Update Details</h1>

			<form action="/updateimage/<?php echo e($hardwares->id); ?>" method="POST" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<?php echo e(method_field('PUT')); ?>

				
				<input type="hidden" name="id" id="id" value="<?php echo e($hardwares->id); ?>">

				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="<?php echo e($hardwares->name); ?>" placeholder="Enter Name">
				</div>
	
				<div class="form-group">

					<label>Description</label>
					<input type="text" name="description" class="form-control" value="<?php echo e($hardwares->description); ?>" placeholder="Enter Description">
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

				<div class="input-group">
					<div class="custom-file">
					<input type="file" name="image" class="custom-file-input" value="<?php echo e($hardwares->image); ?>">
					<label class="custom-file-label">Choose file</label>
					</div>
				</div>

				<div class="form-group">
					<label>Model Number</label>
					<input type="text" name="model_number" class="form-control" value="<?php echo e($hardwares->model_number); ?>" placeholder="Enter Model Number">
				</div>

				<div class="form-group">
					<label>Location</label>
					<input type="text" name="location" class="form-control" value="<?php echo e($hardwares->location); ?>" placeholder="Enter Location">
				</div>

				<div class="form-group">
					<label>Status</label>
					<select name="status">
					    <option value="ACTIVE">ACTIVE</option>
					    <option value="INACTIVE">INACTIVE</option>
  					</select>
					
				</div>
				

				<button type="submit" name="submit" onclick="return confirm('Are you sure?')" class="btn bth-primary">Update</button>
				<a href="/hardwarepage"><button class="btn btn-primary">Cancel</button></a>
				
			</form>
		</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chis\resources\views/hardware/hardwareupdateform.blade.php ENDPATH**/ ?>