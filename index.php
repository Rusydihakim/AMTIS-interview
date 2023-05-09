<!DOCTYPE html>
<html>
<head>
	<title>Electricity Bill Calculator</title>
	<!-- Include your preferred CSS framework here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Electricity Bill Calculator</h1>
		<form method="post">
			<div class="form-group">
				<label for="voltage">Voltage (V)</label>
				<input type="number" class="form-control" id="voltage" name="voltage" step="0.01" required>
			</div>
			<div class="form-group">
				<label for="current">Current (A)</label>
				<input type="number" class="form-control" id="current" name="current" step="0.01" required>
			</div>
			<div class="form-group">
				<label for="rate">Current Rate (sen/kWh)</label>
				<input type="number" class="form-control" id="rate" name="rate" step="0.01" required>
			</div>
			<button type="submit" class="btn btn-primary">Calculate</button>
		</form>
		<?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$voltage = $_POST["voltage"];
			$current = $_POST["current"];
			$rate = $_POST["rate"];

			$power = $voltage * $current;
			$energy = $power * 1 * 1000; // assuming 1 hour
			$total = $energy / 1000 * $rate; // convert to kWh

			echo "<h2>Results</h2>";
			echo "<p>Power: " . $power . " W</p>";
			echo "<p>Energy: " . $energy / 1000 . " kWh</p>";
			echo "<p>Total Charge: $" . number_format($total, 2) . "</p>";
		}
		?>
	</div>
	<!-- Include your preferred JS framework here -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-KB6nhp3MIX3oIz+ZsXO/bW1s3qTZJ+ccTidr2F+67W8OJ/zmAHf6ViJX+QD0J8KvZGOGVOd1en0y+dxKjP8vA==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-rcbQ2TXZ8zHuWl+TrIwduJ"></script>
