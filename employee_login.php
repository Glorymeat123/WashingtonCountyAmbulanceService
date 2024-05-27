<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example of password hashing and verification
    $stored_username = 'Tfloyd';
    $stored_password_hash = password_hash('WCAS2024!', PASSWORD_BCRYPT);

    if ($username === $stored_username && password_verify($password, $stored_password_hash)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        session_regenerate_id(true); // Regenerate session ID to prevent session fixation
        header('Location: director_dashboard.html');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>
