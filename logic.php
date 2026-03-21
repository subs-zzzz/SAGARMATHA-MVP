<?php
include 'db.php';

if(isset($_POST['add'])) {
    $task = $_POST['task'];
    $conn->query("INSERT INTO tasks (task_name) VALUES ('$task')");
    header('location: index.php');
}

if(isset($_GET['del'])) {
    $id = $_GET['del'];
    $conn->query("DELETE FROM tasks WHERE id=$id");
    header('location: index.php');
}
?>  