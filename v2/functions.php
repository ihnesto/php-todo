<?php

function add_task() {
    $new_task = $_POST['new-task'];
    if (strlen($new_task) != 0) {
        $link = mysqli_connect('localhost', 'root', '', 'todolist');
        $sql = "INSERT INTO tasks(taskname) VALUES('$new_task')";
        $res = mysqli_query($link, $sql);
        mysqli_close($link);
    }
}

function save_task() {
    $edited_task = $_POST['edited-task'];
    $id = $_POST['id'];
    $link = mysqli_connect('localhost', 'root', '', 'todolist');
    $sql = "UPDATE tasks SET taskname='$edited_task' WHERE id=$id";
    $res = mysqli_query($link, $sql);
    mysqli_close($link);
}

function remove_task() {
    $action = $_GET['action'];
    $id = $_GET['id'];
    if ($action == 'remove-task') {
        $link = mysqli_connect('localhost', 'root', '', 'todolist');
        $sql = "DELETE FROM tasks WHERE id=$id";
        $res = mysqli_query($link, $sql);
        mysqli_close($link);
    } else {
        //echo 'Unknown action';
    }
}

function show_task() {
    global $tasks;
    $link = mysqli_connect('localhost', 'root', '', 'todolist');
    $sql = 'SELECT * FROM tasks';
    $res = mysqli_query($link, $sql);
    $tasks = mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_close($link);
}

function get_taskname() {
    global $tasks, $id;
	$id = $_GET['id'];
	$link = mysqli_connect('localhost', 'root', '', 'todolist');
	$sql = "SELECT taskname FROM tasks WHERE id=$id";
	$res = mysqli_query($link, $sql);
	$tasks = mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_close($link);
}
