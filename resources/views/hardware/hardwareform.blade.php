@extends('layouts.app')

@section('content')

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
			@foreach($hardwares as $hardware)

				<tr>
					<td>{{$hardware->id}}</td>
					<td> <img src="{{ asset('uploads/hardware/' . $hardware->image) }}" width="100px;" height="100px;" alt="Image"> </td>
					<td>{{$hardware->name}}</td>
					<td>{{$hardware->description}}</td>
					<td>{{$hardware->category}}</td>
					<td>{{$hardware->model_number}}</td>
					<td>{{$hardware->location}}</td>
					<td>{{$hardware->status}}</td>
					<td>{{$hardware->created_at}}</td>
				</tr>

					<td>
						<th> <a href="/editimage/{{ $hardware->id }}" class="btn btn-success">EDIT</a> </th>

						<th><a href="/deleteimage/{{ $hardware->id }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">DELETE</a></th>
						
						<th> <form action="/qr" method="post">
							<input hidden type="text" name="txtqr" value="{{ $hardware->id }}"/>
							<input type="submit" name="btnsubmit" class="btn btn-primary" value="GENERATE"/> @csrf </form>

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
					@endforeach

			</tbody>	
		</table>
	</div>
					<div class="row">
						<div class="col-12 d-flex justify-content-center">
						{!! $hardwares->appends(\Request::except('page'))->render() !!}
					</div>

@endsection