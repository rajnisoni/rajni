<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host = 'localhost';
$database = 'responsiveform';
$user = 'root';
$password = '';

// Create a connection
$connection = mysqli_connect($host, $user, $password, $database);

// Check if the connection is successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to get today's registration count
$query = "SELECT COUNT(*) as todayRegistrations FROM form WHERE DATE(`start`) = CURDATE()";

// Execute the query
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Fetch the result as an associative array
    $row = mysqli_fetch_assoc($result);
    $todayRegistrations = $row['todayRegistrations'];

    // Output today's registration count in the span element
    echo '<span id="todayRegistrations">' . $todayRegistrations . '</span>';

    // Free the result set
    mysqli_free_result($result);
} else {
    echo 'Error executing the query: ' . mysqli_error($connection);
}

// Close the connection
mysqli_close($connection);
?>
</body>
</html>