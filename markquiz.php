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
    <title>Marke Quiz</title>
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
            <th>Action</th>
        </tr>
        <?php
            $quiz = getAllQuizData();
    for ($i=0; $i != count($quiz); $i++) {  ?>
        <tr>
            <th><?=$quiz[$i]['firstName']?></th>
            <th><?=$quiz[$i]['lastName']?></th>
            <th><?=$quiz[$i]['attemptDate']?>
            </th>
            <th><?=$quiz[$i]['attemptNo']?></th>
            <th><?=$quiz[$i]['score']?></th>
            <th><a
                    href="manage.php?id=<?=$quiz[$i]['id']?>">Manage</a>
            </th>
        </tr>
        <?php } ?>
    </table>
    <?php include "footer.inc"; ?>
</body>

</html>