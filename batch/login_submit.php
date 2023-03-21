<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "batch_8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Get data from form
$email = $_POST['email'];
$password = $_POST['password'];

// Select data from users table where email and password match
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("Location: index1.php");
    exit;
} else {
    // Login failed
    echo "Invalid login credentials.";
}

$conn->close();
?>
