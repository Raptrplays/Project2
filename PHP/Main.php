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
   require_once "dbHandler.php";
   $db = new dbHandler();
   
   if(isset($_POST["submit"])) {
    $naam = $_POST['naam'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    // Check if the input fields are empty
    if (empty($naam) || empty($password) || empty($repeat_password)) {
        echo "Error: Please fill in all the fields";
        exit;
    }

    if ($password !== $repeat_password) {
        echo "Error: Passwords do not match";
        exit;
    }

    $result = $db->createUser($naam, $password);
    if ($result) {
        echo "Registration successful!";
        // Redirect to a success page or login page
        header("Location: account.html");
        exit;
    } else {
        echo "Error: Failed to register user";
        // Handle the error as per your requirement
    }
}
?>
    <div class="container">
        <header>Registreer hier!</header>
        <form action="Main.php" method="post">
            <div class="form-group">
                <label for="naam">Naam:</label>
                <input type="text" name="naam" placeholder="Naam:">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <label for="repear_password">Herhaal password</label>
                <input type="password" name="repeat_password" placeholder="Herhaal passwoord:">
            </div>
            <div class="form-btn">
                <input type="submit" gvalue="Register" name="submit">
            </div>
        </form>
        <div>
            <div>
                <p>Al geregistreerd?<a href="login.php">Log hier in!</a></p>
            </div>
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