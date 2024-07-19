<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $user_id = 1; // Assuming you're saving contact for user with ID 1

    // Prepare and bind
    $stmt = $con->prepare("INSERT INTO contacts (user_id, name, email, message) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: (" . $con->errno . ") " . $con->error);
    }

    $stmt->bind_param("isss", $user_id, $name, $email, $message);

    // Execute the statement
    if ($stmt->execute()) {
        $message = "Thank you for your message!";
    } else {
        $message = "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
    
    // Redirect back to index.php with a query parameter
    header("Location: index.php?message=" . urlencode($message));
    exit();
}
?>
