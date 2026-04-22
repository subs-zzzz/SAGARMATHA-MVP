<?php
session_start();

if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'Admin') {
    die("<div style='font-family: Arial; padding: 20px; color: red; border: 1px solid red; border-radius: 8px;'>
            <h2>Access Denied - Security Alert</h2>
            <p>You do not have the required Administrator privileges to perform a database reset.</p>
            <a href='index.php'>Return to App</a>
         </div>");
}

include 'db.php';
$sql = "TRUNCATE TABLE tasks";
if ($conn->query($sql) === TRUE) {
    echo "<div style='font-family: Arial; padding: 20px; color: green; border: 1px solid green; border-radius: 8px;'>";
    echo "<h2>QA System Reset Successful</h2>";
    echo "<p>All test data has been removed. The 'tasks' table is now empty.</p>";
    echo "<a href='index.php'>Return to App</a>";
    echo "</div>";
} else {
    echo "Error resetting database: " . $conn->error;
}

$conn->close();
?>
