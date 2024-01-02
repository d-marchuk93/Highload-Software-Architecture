<?php
$servername = "mysql";  // Replace with your MySQL server address
$username = "user";
$password = "password";
$dbname = "db";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$utmCampaign = $_GET['utm_campaign'];

// Create a new user
$sql = "INSERT INTO user (email, name, created_date, utm_campaign)
VALUES ('example@example.com', 'Example User', NOW(), $utmCampaign)";

$result = $conn->query($sql);

if ($result === TRUE) {
    echo "User created successfully";
} else {
    echo "Error creating user: " . $conn->error;
}

// Close the connection
$conn->close();