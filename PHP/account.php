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
            <li><a href="#">Leden</a></li>
            <li><a href="#">Standpunten</a></li>
            <li><a href="#">Doneren</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="Main.php" class="button">Lid worden</a></li>
        </ul>
    </nav>
<?php

session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
} else {
    // User not logged in, redirect or handle accordingly
    header("Location: login.php");
    exit;
}

?>
    <script>
        // Retrieve the name parameter from the URL
        const urlParams = new URLSearchParams(window.location.search);
        const name = urlParams.get('name');
      
        // Display the name on the page
        document.getElementById('name').innerText = name;
      </script>
      
      <div class="container">
        <h1>Welcome to your account, <span id="name"></span>!</h1>
        <!-- Rest of your account page content -->
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