@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>{{$components->name}}</h2>
		<p>
			<strong>Description:</strong> {{$components->description}}
		</p>
		<p>
			<strong>Category:</strong> {{$components->category}}
		</p>
		<p>
			<strong>Model Number:</strong> {{$components->model_number}}
		</p>
		<p>
			<strong>Quantity:</strong> {{$components->quantity1}}
		</p>
		<p>
			<strong>Location:</strong> {{$components->location}}
		</p>
		
		<p>
			
			<a href="{{route('comp.index')}}"><button class="btn btn-primary">Return</button></a>
		</p>
	</div> 
	
@endsection