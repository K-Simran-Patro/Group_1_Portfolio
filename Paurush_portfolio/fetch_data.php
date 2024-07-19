<?php
include 'connection.php';

// Fetch user data
$sql = "SELECT * FROM users WHERE id = 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
} else {
    echo "No user found.";
}

// Fetch projects data
$sql = "SELECT * FROM projects";
$result = $con->query($sql);

$projects_data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $projects_data[] = $row;
    }
}
?>
