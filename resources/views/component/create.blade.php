@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Submit Report</h1>

		
		@if(count($errors->all()))
			@foreach($errors->all() as $error)
				<div class="alert alert-danger">
					<strong>Error</strong> {{$error}}
				</div>
			@endforeach
		@endif


		{!! Form::open(['method' => 'POST', 'route' => 'comp.store']) !!}

			<div class="form-group" >
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Hardware Issue'])!!}
			</div>
			
			<div class="form-group">
				{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Describe the issue'])!!}
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
				{!! Form::text('model_number', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Model Number'])!!}
			</div>

			<div class="form-group">
				{!! Form::number('quantity1', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Quantity'])!!}
			</div>

			<div class="form-group">
				{!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Location'])!!}
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Add">
			</div>

		{{Form::close()}}

		

	</div> 
	
@endsection