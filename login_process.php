<?php
session_start();
require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        die("Please enter both email and password.");
    }

    $stmt = $conn->prepare("SELECT id, password, is_admin FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($user_id, $hashed_password, $is_admin);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['email'] = $email;
                $_SESSION['is_admin'] = $is_admin;

                if ($is_admin) {
                    header("Location: /odoo_hackathon/Rewear/admin/dashboard.html");
                } else {
                    header("Location: /odoo_hackathon/Rewear/user/browse.html");

                }
                exit;
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "Email not registered.";
        }
    } else {
        echo "Something went wrong.";
    }

    $stmt->close();
}
$conn->close();
?>
