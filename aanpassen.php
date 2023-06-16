<?php
include_once "PHP/DBreactie.php";
$DBreactie = new DBreactie();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reactie aanpassen</title>
</head>
<body>

<?php
    if (isset($_POST["commentId"])) {
        $commentId = $DBreactie->selectOneComment($_POST["commentId"]);
    }
?>

<form method='post' action='nieuwsberichten.php'>
        <div class="row">
            <input type="hidden" name="commentId" value="<?= $commentId['commentId'] ?>"/>
            <div>
                <label for="comment">Name</label>
                <input id="comment" name="comment" required value="<?= $commentId['comment'] ?>"/>
            </div>
            <button type="submit" name='edit' value="edit" style="margin-top: 20px;">
                <p>Reactie aanpassen</p>
            </button>
        </div>
    </form>
</body>
</html>
