<?php
include_once "PHP/DBreactie.php";
$DBreactie = new DBreactie();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/aanpassen.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;800&display=swap" rel="stylesheet">
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
                <input type="text" id="comment" name="comment" required value="<?= $commentId['comment'] ?>"/>
            <button type="submit" name='edit' value="edit" style="margin-top: 20px;">
                <p>Reactie aanpassen</p>
            </button>
        </div>
</form>

</body>
</html>
