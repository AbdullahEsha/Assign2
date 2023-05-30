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

function updateScore($quizupdate)
{
    $conn = dbConnection();
    if (!$conn) {
        echo "DB connection error";
    }

    $sql = "update attempts set score='{$quizupdate['score']}' where id={$quizupdate['id']}";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}


if (isset($_POST['submit'])) {
    $score 	= $_POST['score'];
    $id 	= $_POST['id'];

    if (empty($username) || empty($password) || empty($email)) {
        header('location: ../views/edit.php?id={$id}');
    } else {
        $quizupdate = [
            'score'=> $score,
            'id'=> $id
        ];

        $status = update($quizupdate);

        if ($status) {
            header('location: index.php?success=done');
        } else {
            header('location: manage.php?id={$id}');
        }
    }
}
