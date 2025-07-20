<?php
$conn = new mysqli("localhost", "root", "", "login_data");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['usrname'];
$email = $_POST['email'];
$password = $_POST['pass'];
$confirmPassword = $_POST['confirm_password'];

if ($password !== $confirmPassword) {
    echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
    exit;
}

// Store user in database
$sql = "INSERT INTO register (usrname, email, pass, confirm_password) VALUES ('$username', '$email', '$password', '$confirmPassword')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Account created successfully!'); window.location.href='login.html';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>