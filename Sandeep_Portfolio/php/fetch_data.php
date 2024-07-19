<?php
include 'db.php';

$sql = "SELECT * FROM sand_projects";
$result = $conn->query($sql);

$projects = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
}

$conn->close();

echo json_encode($projects);
?>
