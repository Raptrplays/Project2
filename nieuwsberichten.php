<?php
include_once "PHP/DBnieuws.php";
include_once "PHP/DBreactie.php";
$DBnieuws = new DBnieuws();
$DBreactie = new DBreactie();
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
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="#"><img class="navimg" src="images/1280px-PVV_logo_(2006–present).svg.png" alt="Logo"></a>
        </div>
        <ul class="navbar-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="nieuwsberichten.php">Nieuwsberichten</a></li>
            <li><a href="leden.html">Leden</a></li>
            <li><a href="standpunten.html">Standpunten</a></li>
            <li><a href="doneren.html">Doneren</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="PHP/Main.php" class="button">Lid worden</a></li>
        </ul>
    </nav>

    <?php
    if (isset($_POST['submit'])) {
        $DBreactie->reactieMaken($_POST['Comment']);
    }
    else if (isset($_POST['delete'])) {
        $DBreactie->reactieVerwijderen($_POST['CommentId']);
    }
    ?>

    <div class="container">
        <?php
        $rows = $DBnieuws->selectAll();

        $rows2 = $DBreactie->selectAllcomments();
        if (!count($rows2) == 0) {
            foreach ($rows as $row) {
                foreach ($rows2 as $row2) {
        ?>
                    <div class="article">
                        <h2><?= $row['NieuwsId']; ?></h2>
                        <h1><?= $row['Titel']; ?></h1>
                        <p><?= $row['Tekst']; ?></p>
                        <br>

                        <div class="comment-box">
                            <p><?= $row2['Comment']; ?></p>
                        </div>
                        <br>


                        <form method='post' id="comment-form" action="nieuwsberichten.php">
                            <div class="form-group">
                                <label for="Comment">Reactie:</label>
                                <textarea id="Comment" name="Comment" required></textarea>
                            </div>
                            <div id="extra-buttons" class="form-group">
                                <button id="edit-comment" type="button">Bewerk reactie</button>
                                <button type="submit" name="CommentId" id="CommentId" type="button">Verwijder reactie</button>
                            </div>
                            <button type="submit" name="submit" value="submit">Plaats reactie</button>
                        </form>
                        <br>
                        <hr>
                    </div>
                <?php
                }
            }
        } else {
            foreach ($rows as $row) {

                ?>
                <div class="article">
                    <h2><?= $row['NieuwsId']; ?></h2>
                    <h1><?= $row['Titel']; ?></h1>
                    <p><?= $row['Tekst']; ?></p>
                    <br>



                    <form method='post' id="comment-form" action="nieuwsberichten.php">
                        <div class="form-group">
                            <label for="Comment">Reactie:</label>
                            <textarea id="Comment" name="Comment" required></textarea>
                        </div>
                        <div id="extra-buttons" class="form-group">
                            <button id="edit-comment" type="button">Bewerk reactie</button>
                            <button id="delete-comment" type="button">Verwijder reactie</button>
                        </div>
                        <button type="submit" name="submit" value="submit">Plaats reactie</button>
                    </form>
                    <br>
                    <hr>
                </div>
        <?php
            }
        }
        ?>

        <br>
        <br>
        <br>

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