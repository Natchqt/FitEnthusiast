<?php
session_start(); // Start session for storing user data

// Include the database connection file
require_once 'config.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement to fetch user from database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :username");

    // Bind parameters
    $stmt->bindParam(':username', $username);

    // Execute the statement
    try {
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password if user exists
        if ($user && password_verify($password, $user['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Send a success response (for AJAX)
            echo json_encode(["success" => true]);
        } else {
            // Send an error response (for AJAX)
            echo json_encode(["success" => false, "message" => "Invalid username or password."]);
        }
    } catch (PDOException $e) {
        // Send an error response if there's a database error
        echo json_encode(["success" => false, "message" => "Error: " . $e->getMessage()]);
    }
    exit; // Ensure no further output
}
?>
