<?php
$conn = mysqli_connect("localhost:4306", "root", "", "pglife");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
