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
		<h1><center>List of Components</center></h1>
				<table class="table">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Image</th>
				      <th scope="col">Name</th>
				      <th scope="col">Description</th>
				      <th scope="col">Category</th>
				      <th scope="col">Model</th>
				      <th scope="col">Location</th>
				      <th scope="col">Status</th>
				      <th scope="col">Date</th>
				      
				    </tr>
				</thead>
				  <tbody>
				  	@foreach ($hardwares as $hardware)
				    <tr>
				      <th>{{ $hardware->id }}</th>
				      <th> <img src="{{ asset('uploads/hardware/' . $hardware->image) }}" width="100px;" height="100px;" alt="Image"> </th>
				      <th>{{ $hardware->name }}</th>
				      <th>{{ $hardware->description }}</th>
				      <th>{{ $hardware->category }}</th>
				      <th>{{ $hardware->model_number }}</th>
				      <th>{{ $hardware->location }}</th>
				      <th>{{ $hardware->status }}</th>
				      <th>{{ $hardware->created_at }}</th>
				      
				      
				    </tr>
				    <td>
				      <th> <a href="/editimage/{{ $hardware->id }}" class="btn btn-success">EDIT</a> </th>
				      <th> <a href="/deleteimage/{{ $hardware->id }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">DELETE</a> </th>
				      <th> <form action="http://localhost/chis/qrr/qrpages.php" method="post">
		<input type="text" name="txtqr" value="ID: {{ $hardware->id }} | Name: {{ $hardware->name }} | Description: {{ $hardware->description }} | Category: {{ $hardware->category }} | Location: {{ $hardware->location }} | Status: {{ $hardware->status }}"/>
		<input type="submit" name="btnsubmit" class="btn btn-primary" value="GENERATE"/>
	</form>
	

	<?php
		
		if(isset($_POST['btnsubmit']))
		{
			$data = trim($_POST['txtqr']);

			echo"<h2>Output</h2>";
			echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=$data' height=250 width=250/>";
		}
	?></a> </th>
				    </td>
				    @endforeach


		</div>
	</div>
</body>
@endsection