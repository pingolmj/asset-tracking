@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Update Report</h1>

		{!! Form::model($components, ['route' => ['comp.update', $components->id]]) !!}
			{{method_field('PUT')}}
			<div class="form-group">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Hardware Name'])!!}
			</div>
			<div class="form-group">
				{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Issue Description'])!!}
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
				<input type="submit" class="btn btn-primary" value="Update">
				<a href="comp.index"><button class="btn btn-primary">Cancel</button></a>
			</div>

		{{Form::close()}}

	</div> 
	
@endsection