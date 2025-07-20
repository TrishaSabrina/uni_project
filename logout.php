<?php
session_start();
session_destroy();

echo "<script>alert('You’ve been logged out.'); window.location.href='login.html';</script>";
?>