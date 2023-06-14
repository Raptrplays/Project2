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
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="#"><img class="navimg" src="../images/1280px-PVV_logo_(2006–present).svg.png" alt="Logo"></a>
        </div>
        <ul class="navbar-links">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../nieuwsberichten.html">Nieuwsberichten</a></li>
            <li><a href="../leden.html">Leden</a></li>
            <li><a href="../standpunten.html">Standpunten</a></li>
            <li><a href="../doneren.html">Doneren</a></li>
            <li><a href="../contact.html">Contact</a></li>
            <li><a href="Main.php" class="button">Lid worden</a></li>
        </ul>
    </nav>

    <?php
    session_start();
    require_once 'dbHandler.php'; // Include or require the dbHandler class file

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $db = new dbHandler();
        $user = $db->getUser($username, $password); // Assuming a method named getUser in the dbHandler class

        if ($user) {
            
            
        } else {
            // Invalid username or password
            // Display an error message or redirect back to the login page
            header("login.php");

            echo "Invalid username or password";
        }
    }
    ?>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="account.php" method="post">
                <div class="field input">
                    <label for="username">Vul hier uw naam</label>
                    <input type="text" name="username" id="username" required>
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


</body>

</html>