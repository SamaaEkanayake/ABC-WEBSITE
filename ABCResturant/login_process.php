<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT password, role FROM Users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password, $role);
    
    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid credentials!";
        }
    } else {
        echo "User does not exist!";
    }

    $stmt->close();
    $conn->close();
}
?>
