<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login_data");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Basic validation
$sql = "SELECT * FROM register WHERE usrname='$username' AND pass='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login success
    echo "<script>alert('Login successful!'); window.location.href='buy.html';</script>";
} else {
    // Login fail
    echo "<script>alert('Username or password incorrect. Please try again.'); window.history.back();</script>";
}

$conn->close();
?>