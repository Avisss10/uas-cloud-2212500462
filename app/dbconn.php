<?php
$servername = "db";
$username = "root";
$password = "root";
$dbname = "2212500462";

$maxRetries = 10;
$retry = 0;

do {
    $conn = @new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
        echo "⏳ Retry $retry: waiting for MySQL...<br>";
        $retry++;
        sleep(2);
    } else {
        break;
    }
} while ($retry < $maxRetries);

if ($conn->connect_errno) {
    die("❌ Connection failed: " . $conn->connect_error);
}
?>
