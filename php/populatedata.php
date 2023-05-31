<?php
require_once('./db/db.php');

function getAllQuizData()
{
    $conn = dbConnection();

    if (!$conn) {
        echo "DB connection error";
    }

    $sql = "select * from attempts";
    $result = mysqli_query($conn, $sql);
    $quiz = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($quiz, $row);
    }

    return $quiz;
}


function getQuizByID($id)
{
    $conn = dbConnection();

    if (!$conn) {
        echo "DB connection error";
    }

    $sql = "select * from attempts where id={$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
