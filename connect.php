<?php
// Establish a database connection
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check if the connection was successful
if (!$conn) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Perform the query using the $conn variable
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Process the results
    while ($row = mysqli_fetch_assoc($result)) {
        // ...
    }
} else {
    // Handle the query error
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

$host = "localhost";  // Replace with your MySQL host
$username = "root";  // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$database = "student";  // Replace with your MySQL database name

$conn = mysqli_connect($host, $username, $password, $database);


		// Check connection
if ($conn === false) {
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
}
?>