<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/nieuwsberichten.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;800&display=swap" rel="stylesheet">
    <title>Nieuwsberichten</title>
</head>

<body>
<div class="navbar">
        <img src="../images/1280px-PVV_logo_(2006–present).svg.png" class="logo" alt="logo">
        <div class="header-menu">
            <img src="images/menu.png" alt="menu" onclick="togglemenu()" class="menu">
        </div>
        <nav>
            <ul id="menulist">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../nieuwsberichten.php">Nieuwsberichten</a></li>
                <li><a href="../leden.php">Leden</a></li>
                <li><a href="../standpunten.php">Standpunten</a></li>
                <li><a href="../doneren.php">Doneren</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <li><a href="../Main.php" class="button">Lid worden</a></li>
            </ul>
        </nav>
    </div>

    <?php
    session_start();
    require_once 'dbHandler.php';

    if (isset($_POST['submit'])) {
        $username = $_POST['naam'];
        $password = $_POST['password'];

        $db = new dbHandler();
        $user = $db->getUser($username, $password);
        $GebruikersId = $db->getGebruikersId($username, $password);

        if ($user && $GebruikersId) {
            $_SESSION['naam'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['GebruikersId'] = $GebruikersId; 
            header("Location: account.php");
            
            exit;
        } else {
            header("Location: login.php?error=1");
            echo "test";
            var_dump($username, $password);
            exit;
        }
    }
    ?>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="naam">Vul hier uw naam</label>
                    <input type="text" name="naam" id="naam" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field">
                    <input type="submit" name="submit" value="submit" required>
                </div>
                <div class="link">
                    Geen account? <a href="Main.php">Registreer nu!</a>
                </div>
            </form>
        </div>
    </div>



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