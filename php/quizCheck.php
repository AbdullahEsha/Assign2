<?php
session_start();
require_once('../php/session_header.php');
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

    if (count($user) > 0) {
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
        header('location: index.php?error=null_value');
    } else {
        $user = [
            'sid'=>$sid,
            'firstname'=>$firstname,
            'lastname'=>$lastname,
        ];
            
        $status = validate($user);
                

        if ($status) {
            $_SESSION['username'] = $username;
            // id	attemptDate	firstName	lastName	noStudent	noAttemptno	score
            $sid = $_POST['mp3-name'];
            $firstname = $_POST['mp3-year'];
            $lastname = $_POST['mp3-advantage'];
            $lastname = $_POST['mp3-reason'];
            $lastname = $_POST['mp3-mp4'];
            $lastname = $_POST['mp3-advantage'];
            $lastname = $_POST['mp3-advantage'];
            $lastname = $_POST['mp3-advantage'];
        } else {
            header('location: ../views/login.php?error=invalid_user');
        }
    }
}
