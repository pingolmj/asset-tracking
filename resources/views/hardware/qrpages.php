<div align="center">
	<h1>Generate QR</h1>

	<form action="http://127.0.0.1:8000/hardwarepage" method="post">
		<form action="http://localhost/qrr/qrpages.php" method="post">
		<input type="text" name="txtqr" value="ID: {{ $hardware->id }} | Name: {{ $hardware->name }} | Description: {{ $hardware->description }} | Category: {{ $hardware->category }} | Location: {{ $hardware->location }} | Status: {{ $hardware->status }}"/>
		<input type="submit" name="btnsubmit" value="GENERATE"/>
	</form>

	<?php
		
		if(isset($_POST['btnsubmit']))
		{
			$data = trim($_POST['txtqr']);

			echo"<h2>Output</h2>";
			echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=$data' height=250 width=250/>";
		}
	?>
</div>