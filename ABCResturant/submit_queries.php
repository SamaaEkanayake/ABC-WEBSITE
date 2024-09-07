<?php
include 'db_config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query_text = $_POST['query_text'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO Queries (user_id, query_text) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('is', $user_id, $query_text);

    if ($stmt->execute()) {
        echo "Query submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
