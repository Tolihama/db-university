<?php
require_once __DIR__ . './database.php';

$sql = "SELECT * 
        FROM `departments`";
$result = $conn->query($sql);
$departments = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $departments[] = $row;
    }
}

// DB CONNECTION CLOSE
$conn->close();