<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Fuel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            padding: 20px;
            text-align: center;
        }
        .order-info {
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .order-info h2 {
            margin-top: 0;
        }
        .order-info p {
            margin: 10px 0;
        }
        .nearby-stations {
            text-align: left;
            margin-top: 20px;
        }
        .nearby-stations h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<?php
// Sample data for nearby fuel stations
$nearbyStations = [
    ['name' => 'Station 1', 'distance' => '2 km', 'availability' => 'Available'],
    ['name' => 'Station 2', 'distance' => '5 km', 'availability' => 'Limited'],
    ['name' => 'Station 3', 'distance' => '8 km', 'availability' => 'Out of Stock'],
];

// Get the fuel type from the query parameter
$fuelType = isset($_GET['fuel']) ? $_GET['fuel'] : 'Unknown';
?>

<div class="container">
    <div class="order-info">
        <h2>Order Fuel: <?= htmlspecialchars($fuelType) ?></h2>
        <p>Find nearby fuel stations and order your fuel.</p>

        <div class="nearby-stations">
            <h3>Nearby Fuel Stations:</h3>
            <ul>
                <?php foreach ($nearbyStations as $station): ?>
                    <li>
                        <strong><?= htmlspecialchars($station['name']) ?></strong> - <?= htmlspecialchars($station['distance']) ?> - <?= htmlspecialchars($station['availability']) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

</body>
</html>