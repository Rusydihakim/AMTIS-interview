<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Electricity Bill Calculator</h1>
        <form method="post">
            <div class="form-group">
                <label for="voltage">Voltage (V)</label>
                <input type="number" class="form-control" id="voltage" name="voltage" required>
            </div>
            <div class="form-group">
                <label for="current">Current (A)</label>
                <input type="number" step="0.01" class="form-control" id="current" name="current" required>
            </div>
            <div class="form-group">
                <label for="hour">Hours Used</label>
                <input type="number" class="form-control" id="hour" name="hour" required>
            </div>
            <div class="form-group">
                <label for="rate">Current Rate (sen/kWh)</label>
                <input type="number" step="0.01" class="form-control" id="rate" name="rate" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
        <?php
            // Check if the form is submitted
            if(isset($_POST['voltage']) && isset($_POST['current']) && isset($_POST['hour']) && isset($_POST['rate'])){
                // Get the values from the form
                $voltage = $_POST['voltage'];
                $current = $_POST['current'];
                $hour = $_POST['hour'];
                $rate = $_POST['rate'];

                // Calculate the power, energy, and total charge
                $power = $voltage * $current;
                $energy = $power * $hour / 1000;
                $total = $energy * $rate * 100;

                // Display the result
                echo '<div class="alert alert-success mt-3">';
                echo '<p>Power: ' . $power . ' W</p>';
                echo '<p>Energy: ' . $energy . ' kWh</p>';
                echo '<p>Total Charge: ' . number_format($total, 2) . ' sen</p>';
                echo '</div>';
            }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
