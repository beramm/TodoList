<?php

$conn = mysqli_connect("localhost", "root", "", "todo");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function add($data)
{
    global $conn;
    $task = htmlspecialchars($data["task"]);
    $status = 0;
    $query = "INSERT INTO list 
VALUES ('','$task','$status')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function deleteTgt($id)
{
    global $conn;

    $query = "DELETE FROM list WHERE id='$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function editTask($data)
{

    global $conn;
    $task = htmlspecialchars($data["task"]);
    $id = $data["id"];


    $query = "UPDATE list set 
    task='$task'
    WHERE id='$id'
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



function change($data)
{
    global $conn;
    $id = htmlspecialchars($data);

    $temp = query("SELECT status FROM list WHERE id='$id'")[0];
    if ($temp["status"] == 1) {
        $query = "UPDATE LIST SET status=0 WHERE id='$id'; ";
    } else {
        $query = "UPDATE LIST SET status=1 WHERE id='$id'; ";
    }
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
