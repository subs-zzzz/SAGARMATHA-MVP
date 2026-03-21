<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sagarmatha To-Do</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Team Tasks</h1>
        <form action="logic.php" method="POST">
            <input type="text" name="task" placeholder="Add a task..." required>
            <button type="submit" name="add">Add</button>
        </form>
        <ul>
            <?php
            $rows = $conn->query("SELECT * FROM tasks");
            while($row = $rows->fetch_assoc()): ?>
                <li>
                    <?php echo $row['task_name']; ?>
                    <a href="logic.php?del=<?php echo $row['id']; ?>">Delete</a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>