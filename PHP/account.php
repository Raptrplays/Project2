<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;800&display=swap" rel="stylesheet">
    <title>Nieuwsberichten</title>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="#"><img class="navimg" src="../images/1280px-PVV_logo_(2006–present).svg.png" alt="Logo"></a>
        </div>
        <ul class="navbar-links">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../nieuwsberichten.php">Nieuwsberichten</a></li>
            <li><a href="#">Leden</a></li>
            <li><a href="#">Standpunten</a></li>
            <li><a href="#">Doneren</a></li>
            <li><a href="#">Contact</a></li>
            <?php
            session_start();
            if (isset($_SESSION['naam'])) {
                echo '<li><a href="account.php" class="button">Mijn account</a></li>';
            } 
            else if ((isset($_POST['delete']))){
               session_destroy();
            }
            else {
                echo '<li><a href="Main.php" class="button">Lid worden</a></li>';
            }
            ?>
        </ul>
    </nav>

    <?php
    if (isset($_SESSION['naam'])) {
        $username = $_SESSION['naam'];
        $password = $_SESSION['password'];
        $GebruikersId = $_SESSION['GebruikersId'];
    ?>

        <div class="container">
            <div class="box">
                Welkom, <?php echo $username; ?>!<br>
                Uw Password: <?php echo $password; ?><br>
                Jou Id: <?php echo $GebruikersId; ?><br>

                <?php
                if (isset($_POST['submit'])) {
                    $newUsername = $_POST['new_username'];

                    require_once 'dbHandler.php';
                    $db = new dbHandler();
                    $success = $db->updateUsername($username, $newUsername);

                    if ($success) {
                        $_SESSION['naam'] = $newUsername;
                        $username = $newUsername;
                ?>
                        <p>Your name has been updated successfully!</p>
                    <?php
                    } else {
                    ?>
                        <p>Failed to update your name.</p>
                <?php
                    }
                }
                ?>

                <form action="account.php" method="post">
                    <div class="field">
                        <label for="new_username">Edit Name</label>
                        <input type="text" name="new_username" id="new_username" required>
                    </div>
                    <input type="submit" name="submit" value="Update" class="button">
                </form>
                <form action="delete.php" method="post">
                    <input type="submit" name="delete" id="delete" value="Verwijder Account" class="button">
                </form>
            </div>
        </div>

    <?php
    } else {
        header("Location: login.php");
        exit;
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