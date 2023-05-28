<?php
require_once('../db/db.php');

function getAllQuizData()
{
    $conn = dbConnection();

    if (!$conn) {
        echo "DB connection error";
    }

    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);
    $users = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }

    return $users;
}
