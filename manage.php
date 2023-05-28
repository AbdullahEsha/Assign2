<?php
    require_once('/php/populatedata.php');
    ?>

<!DOCTYPE html>
<html>

<head>
    <link href="styles/quiz.css" rel="stylesheet" />
    <style>
        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            height: 70px;
        }
    </style>
</head>

<body>
    <h1>MP3 and MP4 Quiz</h1>
    <?php include "menu.inc"; ?>
    <table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Attempt Date</th>
            <th>Attempt No</th>
            <th>Score</th>
        </tr>
        <?php
            $quiz = getAllQuizData();
    for ($i=0; $i != count($quiz); $i++) {  ?>
        <tr>
            <th><?=$users[$i]['firstName']?></th>
            <th><?=$users[$i]['lastName']?></th>
            <th><?=$users[$i]['attemptDate']?>
            </th>
            <th><?=$users[$i]['attemptNo']?></th>
            <th><?=$users[$i]['score']?></th>
        </tr>
        <?php } ?>
    </table>
    <?php include "footer.inc"; ?>
</body>

</html>