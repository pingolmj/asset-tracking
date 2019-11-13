@extends('layouts.app')
@section('content')
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

			<form action="/updateimage/{{ $hardwares->id }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PUT')}}
				
				<input type="hidden" name="id" id="id" value="{{ $hardwares->id }}">

				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" required class="form-control" value="{{ $hardwares->name }}" placeholder="Enter Name">
				</div>
	
				<div class="form-group">

					<label>Description</label>
					<input type="text" name="description" required class="form-control" value="{{ $hardwares->description }}" placeholder="Enter Description">
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
					<input type="file" name="image" class="custom-file-input" value="{{ $hardwares->image }}">
					<label class="custom-file-label">Choose file</label>
					</div>
				</div>

				<div class="form-group">
					<label>Model Number</label>
					<input type="text" name="model_number" required class="form-control" value="{{ $hardwares->model_number }}" placeholder="Enter Model Number">
				</div>

				<div class="form-group">
					<label>Location</label>
					<input type="text" name="location" required class="form-control" value="{{ $hardwares->location }}" placeholder="Enter Location">
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
@endsection
