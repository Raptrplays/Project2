<?php
include_once "PHP/DBnieuws.php";
include_once "PHP/DBreactie.php";
$DBnieuws = new DBnieuws();
$DBreactie = new DBreactie();
session_start();

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/nieuwsberichten.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;800&display=swap" rel="stylesheet">
    <title>Nieuwsberichten</title>
</head>

<body>
    <div class="navbar">
        <img src="images/1280px-PVV_logo_(2006–present).svg.png" class="logo" alt="logo">
        <div class="header-menu">
            <img src="images/menu.png" alt="menu" onclick="togglemenu()" class="menu">
        </div>
        <nav>
            <ul id="menulist">
                <li><a href="index.php">Home</a></li>
                <li><a href="nieuwsberichten.php">Nieuwsberichten</a></li>
                <li><a href="leden.php">Leden</a></li>
                <li><a href="standpunten.php">Standpunten</a></li>
                <li><a href="doneren.php">Doneren</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                session_start();
                if (isset($_SESSION['naam'])) {
                    echo '<li><a href="PHP/account.php" class="button">Mijn account</a></li>';
                } else if ((isset($_POST['delete']))) {
                    session_destroy();
                } else {
                    echo '<li><a href="PHP/Main.php" class="button">Lid worden</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>

    <?php

    if (isset($_POST['submit'], $_POST['GebruikersId'], $_POST['NieuwsId'])) {
        $DBreactie->reactieMaken($_POST['Comment'], $_POST['GebruikersId'], $_POST['NieuwsId']);
    } else if (isset($_POST['delete'])) {
        $DBreactie->reactieVerwijderen($_POST['CommentId']);
    } else if (isset($_POST['edit'])) {

        $DBreactie->reactieAanpassen($_POST['comment'], $_POST['commentId']);
    }
    ?>

    <div class="container">
        <?php
        $newsItems = $DBnieuws->selectAll();
        foreach ($newsItems as $newsItem) {
            $comments = $DBreactie->selectAllCommentsForNews($newsItem['NieuwsId']);
        ?>
            <div class="article">
                <h2><?= $newsItem['NieuwsId']; ?></h2>
                <h1><?= $newsItem['Titel']; ?></h1>
                <p><?= $newsItem['Tekst']; ?></p>
                <br>

                <div class="comment-box">
                    <?php
                    foreach ($comments as $comment) {
                    ?>
                        <table>
                            <tr>
                                <td><?= $comment["Naam"] ?></td>
                                <td><?= $comment["Comment"] ?></td>
                                <td>
                                    <form method="POST" action="aanpassen.php">
                                        <input type="hidden" name="commentId" value="<?= $comment['CommentId'] ?>" />
                                        <button type="submit">
                                            <p>Reactie aanpassen</p>
                                        </button>
                                    </form>
                                    <form method="POST" action="nieuwsberichten.php">
                                        <input type="hidden" name="CommentId" value="<?= $comment['CommentId'] ?>" />
                                        <button type="submit" name="delete">
                                            <p>Reactie verwijderen</p>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                        <br>
                    <?php
                    }
                    ?>
                </div>
                <br>


                <form method='post' id="comment-form" action="nieuwsberichten.php">
                    <div class="form-group">
                        <label for="Comment">Reactie:</label>
                        <input type="hidden" name="NieuwsId" id="NieuwsId" value="<?= $newsItem['NieuwsId']; ?>" />
                        <input type="hidden" name="GebruikersId" value="<?= ($_SESSION['GebruikersId']) ?>" />
                        <textarea id="Comment" name="Comment" required></textarea>
                    </div>
                    <button type="submit" name="submit" value="submit">Plaats reactie</button>
                </form>
                <br>
                <hr>
            </div>
        <?php
        }
        ?>



        <footer>
            <div class="footerlinks">
                <ul>
                    <li><a href="https://twitter.com/geertwilderspvv">Twitter</a></li>
                    <li><a href="https://www.geertwilders.nl/">Geertwilders.nl</a></li>
                    <li><a href="https://www.haagsepvv.nl/">PVVDenHaag</a></li>
                    <li><a href="https://www.pvveerstekamer.nl/">PVVEersteKamer</a></li>
                </ul>
            </div>
        </footer>


</body>

</html>