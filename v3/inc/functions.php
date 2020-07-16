<?php

include "inc/db.php";

function add_task() {
    $new_task = $_POST['new-task'];
    if (strlen($new_task) != 0) {
        $sql = "INSERT INTO tasks(taskname) VALUES('$new_task')";
        $r = make_req_to_db($sql)[0];
    }
}

function save_task() {
    $edited_task = $_POST['edited-task'];
    $id = $_POST['id'];
    $sql = "UPDATE tasks SET taskname='$edited_task' WHERE id=$id";
    $r = make_req_to_db($sql)[0];
}

function remove_task() {
    $action = $_GET['action'];
    $id = $_GET['id'];
    if ($action == 'remove-task') {
        $sql = "DELETE FROM tasks WHERE id=$id";
        $r = make_req_to_db($sql)[0];
    } else {
        //echo 'Unknown action';
    }
}

function show_task() {
    global $tasks;
    $sql = 'SELECT * FROM tasks';
    $r = make_req_to_db($sql);
	$tasks = $r[1];
}

function get_taskname() {
    global $tasks, $id;
	$id = $_GET['id'];
    $sql = "SELECT taskname FROM tasks WHERE id=$id";
    $r = make_req_to_db($sql);
	$tasks = $r[1];
}
