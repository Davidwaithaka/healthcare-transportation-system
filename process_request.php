<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $location = htmlspecialchars($_POST['location']);
    $condition = htmlspecialchars($_POST['condition']);

    $stmt = $conn->prepare("INSERT INTO requests (name, phone, location, condition) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $phone, $location, $condition);

    if ($stmt->execute()) {
        echo "<h1>Request Received</h1>";
        echo "<p>Thank you, $name. Your request has been submitted.</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Location: $location</p>";
        echo "<p>Condition: $condition</p>";
        echo "<p>We will dispatch the nearest vehicle to your location shortly.</p>";
    } else {
        echo "<h1>Error</h1>";
        echo "<p>There was an error processing your request. Please try again.</p>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<h1>Error</h1>";
    echo "<p>Invalid request method.</p>";
}
?>
