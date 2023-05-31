<?php
require_once('../db/db.php');

function validate($user)
{
    $conn = dbConnection();

    if (!$conn) {
        echo "DB connection error";
    }
                
    $sql = "select * from attempts where sid='{$user['sid']}' and firstname='{$user['firstname']}' and lastname='{$user['lastname']}'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    
    if(gettype($user) === NULL) {
        if(count($user)>-1) {
            return count($user);
        } else {
            return count($user);
        }
    }else return 1;
}

function uploadQuiz($sid, $attemptDate, $firstname, $lastname, $attemptNo, $score)
{
    $conn = dbConnection();
    if (!$conn) {
        echo "DB connection error";
    }
    
    $sql = "INSERT INTO `attempts` VALUES ('','$sid','$attemptDate', '$firstname', '$lastname', '$attemptNo', '$score')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
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
        if ($_POST['mp3-name'] === "Karlheinz Brandenburg" && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
        if($_POST['mp3-name'] === "Karlheinz Brandenburg" && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-year'] === "1991" && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
        if($_POST['mp3-year'] === "1991" && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-advantage'] === "Lower file size and easier transmission over networks" && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
        if($_POST['mp3-advantage'] === "Lower file size and easier transmission over networks" && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-reason'] === "To provide a high-quality, low-bitrate copy of a sound file" && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
         if($_POST['mp3-reason'] === "To provide a high-quality, low-bitrate copy of a sound file" && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-mp4'] === "MP3 is a digital multimedia format that can store video, audio, subtitles, and other media files, while MP4 is a format for storage and audio coding" && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
         if($_POST['mp3-mp4'] === "MP3 is a digital multimedia format that can store video, audio, subtitles, and other media files, while MP4 is a format for storage and audio coding" && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-content'] === "No" && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
         if($_POST['mp3-content'] === "No" && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp4-year'] === "1999" && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
        if($_POST['mp4-year'] === "1999" && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp4-content'] === "Video, audio, images, and text" && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
         if($_POST['mp4-content'] === "Video, audio, images, and text" && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp4-compressed'] === "Yes" && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
         if($_POST['mp4-compressed'] === "Yes" && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['mp3-support'] === "Yes" && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
         if($_POST['mp3-support'] === "Yes" && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
        if ($_POST['category_1'] === true && $_POST['category_2'] === true && $_POST['category_3'] === true && $status === 1) {
            $scoreAll =  $scoreAll + 2;
        } 
        if($_POST['category_1'] === true && $_POST['category_2'] === true && $_POST['category_3'] === true && $status === 2){
            $scoreAll =  $scoreAll + 1;
        }
       
        if ($status<2) { 
            $statusquiz = uploadQuiz($sid, date("Y-m-d"), $firstname, $lastname, $status, $scoreAll);
            if ($statusquiz) {
                header('location: ../markquiz.php');
            } else {
                header('location: ./index.php');
            }
        } else {
            header('location: ../index.php?error=failed');
        }
    }
}


if (isset($_POST['update'])) {
    $score 	= $_POST['score'];
    $id 	= $_POST['id'];

    var_dump($score);
    var_dump($id);

    if (empty($score) || empty($id)) {
        header('location: ../php/quizCheck.php');
    } else {
        $quizupdate = [
            'score'=> $score,
            'id'=> $id
        ];

        $status = updateScore($quizupdate);

        if ($status) {
            header('location: ../markquiz.php?success=done');
        } else {
            header('location: manage.php?id={$id}');
        }
    }
}