<?php
session_start();
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            session_regenerate_id(true);
            $_SESSION['user'] = $user['email'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Wrong password!!'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('No user with that email.'); window.location.href='index.php';</script>";
    }
}
?>
