<?php
// Start session to check if the user is logged in
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'awes'); // Connect to 'awes' database

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all users from the 'users' table
$sql = "SELECT id, username, email, first_name, last_name, phone FROM users";
$result = $conn->query($sql);

// Check if there are any users in the table
if ($result->num_rows > 0) {
    // Display the users in a table
    echo "<h2>All Registered Users</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['username'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['first_name'] . "</td>
                <td>" . $row['last_name'] . "</td>
                <td>" . $row['phone'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No users found.";
}

$conn->close();
?>
