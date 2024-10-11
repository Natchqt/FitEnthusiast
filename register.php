<?php
// Include the database connection file
require_once 'config.php';

// Initialize response array
$response = ['success' => false, 'message' => ''];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

    // Prepare SQL statement to insert data
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");

    // Bind parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    // Execute the statement
    try {
        $stmt->execute();
        $response['success'] = true; // Registration was successful
    } catch (PDOException $e) {
        $response['message'] = "Error: " . $e->getMessage();
    }
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
