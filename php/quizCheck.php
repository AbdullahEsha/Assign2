<?php
$count = 0;
require_once('../db/db.php');

function validate($user)
{
    $conn = dbConnection();

    if (!$conn) {
        echo "DB connection error";
    }
                
    $sql = "select * from student where id='{$user['sid']}' and firstname='{$user['firstname']}' and lastname='{$user['lastname']}'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $count = count($user);

    if (2 > count($user) && count($user)> 0) {
        return true;
    } else {
        return false;
    }
}

function uploadQuiz($quiz)
{
    $conn = dbConnection();
    if (!$conn) {
        echo "DB connection error";
    }

    $sql = "insert into attempts values('', '{$quiz['attemptDate']}','{$quiz['firstName']}', '{$quiz['lastName']}', '{$quiz['attemptNo']}', '{$quiz['score']}')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}


if (isset($_POST['submit'])) {
    $sid = $_POST['sid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];


    if (empty($sid) || empty($firstname) || empty($lastname)) {
        header('location: index.php');
    } else {
        $user = [
            'sid'=>$sid,
            'firstname'=>$firstname,
            'lastname'=>$lastname,
        ];
            
        $status = validate($user);
        
        $scoreAll = 0;
        if ($_POST['mp3-name'] === "Ernst Eberlein" && $count === 1) {
            $scoreAll =  $scoreAll + 2;
        } else {
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-year'] === "Ernst Eberlein" && $count === 1) {
            $scoreAll =  $scoreAll + 2;
        } else {
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-advantage'] === "Ernst Eberlein" && $count === 1) {
            $scoreAll =  $scoreAll + 2;
        } else {
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-reason'] === "Ernst Eberlein" && $count === 1) {
            $scoreAll =  $scoreAll + 2;
        } else {
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-content'] === "Ernst Eberlein" && $count === 1) {
            $scoreAll =  $scoreAll + 2;
        } else {
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp4-year'] === "Ernst Eberlein" && $count === 1) {
            $scoreAll =  $scoreAll + 2;
        } else {
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp4-content'] === "Ernst Eberlein" && $count === 1) {
            $scoreAll =  $scoreAll + 2;
        } else {
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp4-compressed'] === "Ernst Eberlein" && $count === 1) {
            $scoreAll =  $scoreAll + 2;
        } else {
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-support'] === "Ernst Eberlein" && $count === 1) {
            $scoreAll =  $scoreAll + 2;
        } else {
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['category'] === "Ernst Eberlein" && $count === 1) {
            $scoreAll =  $scoreAll + 2;
        } else {
            $scoreAll =  $scoreAll + 1;
        }

        if ($status) {
            $quiz = [
                'sid'=>$sid,
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'attemptDate'=>date("Y/m/d"),
                'noAttemptno'=>$count,
                'score'=>$scoreAll,
            ];
            

            $statusquiz = uploadQuiz($quiz);
            if ($statusquiz) {
                header('location: ./markquiz.php');
            } else {
                header('location: ./index.php');
            }
        } else {
            header('location: index.php?error=failed!');
        }
    }
}
