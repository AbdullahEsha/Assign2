<?php
    require_once('./php/populatedata.php');

    if (isset($_GET['id'])) {
        $quizById = getQuizByID($_GET['id']);
    } else {
        header('location: markquiz.php');
    }

    ?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Score</title>
    <link href="styles/quiz.css" rel="stylesheet" />
</head>

<body>
    <h1>MP3 and MP4 Quiz</h1>
    <?php include "menu.inc"; ?>
    <form action="./php/quizCheck.php" method="post">
        <fieldset>
            <legend>Edit Quiz</legend>
            <table>
                <tr>
                    <td>Score</td>
                    <td><input type="text" name="score"
                            value="<?=$quizById['score']?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id"
                            value="<?=$quizById['id']?>">
                        <input type="submit" name="update" value="Update">
                        <a href="markquiz.php">Back</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php include "footer.inc"; ?>
</body>

</html>