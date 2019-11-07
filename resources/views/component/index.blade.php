@extends('layouts.app')

@section('content')

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
			@foreach($components as $component)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$component->name}}</td>
					<td>{{$component->description}}</td>
					<td>{{$component->category}}</td>
					<td>{{$component->model_number}}</td>
					<td>{{$component->quantity1}}</td>
					<td>{{$component->location}}</td>
					<td>{{$component->created_at}}</td>
					<td>
						<th><a href="{{route('comp.edit', $component->id)}}"><button class="btn btn-success">Edit</button></a></th>

						<th><form method="post" action="{{route('comp.destroy', $component->id)}}" class="inline-form">
							{{method_field('delete')}}
							{{csrf_field()}}
							<input class="btn btn-danger" onclick="return confirm('Are you sure?')"  type="submit" value="Delete">
						</form></th>
						
						<th><a href="{{route('comp.show', $component->id)}}"><button class="btn btn-primary">View</button></a></th>
						
					</td>
				</tr>
			@endforeach
			</tbody>	
		</table>
	</div>

@endsection