<?php
session_start();
require 'config.php'; // Database connection file

class AuthController
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    // Register User
    public function register($username, $email, $password)
    {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Check if email already exists
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            return "Email already exists.";
        }

        // Insert user into database
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        if ($stmt->execute([$username, $email, $hashedPassword])) {
            return "User registered successfully.";
        } else {
            return "Registration failed.";
        }
    }

    // Login User
    public function login($email, $password)
    {
        // Fetch user from database
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Store user information in session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            return true;
        } else {
            return false;
        }
    }

    // Logout User
    public function logout()
    {
        // Clear session data
        session_unset();
        session_destroy();
        return true;
    }

    // Check if User is Logged In
    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }
}
