<!DOCTYPE html>
<html lang="en">

<?php
require_once 'dbHandler.php';
$db = new dbHandler();
var_dump($id);

?>
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
    <div class="navbar">
        <img src="../images/1280px-PVV_logo_(2006–present).svg.png" class="logo" alt="logo">
        <div class="header-menu">
            <img src="../images/menu.png" alt="menu" onclick="togglemenu()" class="menu">
        </div>
        <nav>
            <ul id="menulist">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../nieuwsberichten.php">Nieuwsberichten</a></li>
                <li><a href="../leden.php">Leden</a></li>
                <li><a href="../standpunten.php">Standpunten</a></li>
                <li><a href="../doneren.php">Doneren</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <?php
                session_start();
                if (isset($_SESSION['naam'])) {
                    echo '<li><a href="account.php" class="button">Mijn account</a></li>';
                } else if ((isset($_POST['delete']))) {
                    session_destroy();
                } else {
                    echo '<li><a href="Main.php" class="button">Lid worden</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>

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
                <form action="Main.php" method="post">
                    <input type="submit" name="logout" id="logout" value="Uitloggen" class="button">
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

    <script>
    var menulist = document.getElementById("menulist");

    menulist.style.maxHeight = "0px";

    function togglemenu() {
      if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "300px";
      } else {
        menulist.style.maxHeight = "0px";
      }

    }
  </script>
</body>

</html>