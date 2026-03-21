<?php

include 'db.php';

$sql = "TRUNCATE TABLE tasks";

if ($conn->query($sql) === TRUE) {
    echo "<div style='font-family: Arial; padding: 20px; color: green; border: 1px solid green; border-radius: 8px;'>";
    echo "<h2>QA System Reset Successful</h2>";
    echo "<p>All test data has been removed. The 'tasks' table is now empty and ready for the Sprint 1 Demo.</p>";
    echo "<a href='index.php'>Return to App</a>";
    echo "</div>";
} else {
    echo "Error resetting database: " . $conn->error;
}

$conn->close();
?>