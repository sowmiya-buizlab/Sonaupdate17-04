<?php
$conn = new mysqli("localhost", "root", "", "visa_school");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>