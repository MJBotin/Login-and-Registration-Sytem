<?php
session_start();
include("connect.php");

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION['user'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $name = $user['fullname'];
    $member_since = $user['created_at'];
} else {
    header("Location: logout.php");
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="dashboard.css" />
</head>
<body>
    <div class="dashboard-container">
        <nav class="navbar">
            <h2>Welcome, <span id="username"><?php echo htmlspecialchars($name); ?></span></h2>
            <a href="logout.php">
                <button id="logout" class="btn logout-btn">Logout <i class="fas fa-sign-out-alt"></i></button>
            </a>
        </nav>
        <div class="user-details">
            <img src="https://xsgames.co/randomusers/avatar.php?g=female" alt="profile picture" style="border-radius:8px;" />
            <h3>Your Profile</h3>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Member Since:</strong> <?php echo htmlspecialchars(date('F Y', strtotime($member_since))); ?></p>
        </div>
    </div>
</body>
</html>
