<?php
require_once __DIR__ . './departments_query.php';

// CONST PARAMS
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "university");

// DB CONNECTION
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// CHECK CONNECTION
if ($conn && $conn->connect_error) {
    die("DB connection error: $conn->connect_error");
}