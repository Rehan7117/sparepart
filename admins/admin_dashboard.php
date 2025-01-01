<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Reset basic styles for better control */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Basic body styling */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f1f1f1;
    padding: 0;
    margin: 0;
    color: #333;
}

/* Container for the dashboard */
.dashboard-container {
    max-width: 1000px;
    margin: 50px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

/* Header of the dashboard */
.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    border-bottom: 2px solid #eee;
    padding-bottom: 10px;
}

/* Title of the dashboard */
.dashboard-header h1 {
    font-size: 28px;
    color: #333;
    font-weight: 600;
}

/* Logout link */
.dashboard-header a {
    font-size: 16px;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    padding: 12px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    text-align: center;
}

/* Hover effect for the logout button */
.dashboard-header a:hover {
    background-color: #0056b3;
}

/* Main content styling */
.dashboard-content {
    font-size: 18px;
    color: #555;
    padding-top: 20px;
}

/* Styling for unordered list */
ul {
    list-style-type: none;
    padding: 0;
}

/* List items styling */
li {
    margin: 15px 0;
}

/* Link inside list items */
li a {
    color: #007bff;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Hover effect for links */
li a:hover {
    background-color: #f1f1f1;
    color: #0056b3;
}

/* Media queries for responsiveness */
@media (max-width: 768px) {
    .dashboard-container {
        padding: 20px;
        margin: 20px;
    }

    .dashboard-header h1 {
        font-size: 24px;
    }

    .dashboard-header a {
        padding: 10px 15px;
        font-size: 14px;
    }

    .dashboard-content {
        font-size: 16px;
    }
}

    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['admin_name']); ?></h1>
            <a href="admin_logout.php">Logout</a> <!-- Uncommented logout link -->
        </div>
        <div class="dashboard-content">
            <p>You are logged in as an admin.</p>
            <ul>
                <li><a href="users.php">View Users</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
