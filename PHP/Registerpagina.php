<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Home - PVV</title>
</head>
<body>
    <header>
        <h1>Home</h1>
        <img src="images/1280px-PVV_logo_(2006–present).svg.png" alt="pvvlogo">
        <nav>
            <ul class="nav">
                <li><a href="">Nieuwsberichten</a></li>
                <li><a href="">Leden</a></li>
                <li><a href="">Standpunten</a></li>
                <li><a href="">Lid worden</a></li>
            </ul>
        </nav>

    </header>

        
        <div class="container">
            <h1>Registreer hier uw account</h1>
            <form action="Register.php" method="POST">
                <label for="naam"></label>
                <input type="text" name="naam" placeholder="Vul hier uw Naam:">

                <label for="password"></label>
                <input type="password" name="password" placeholder="Vul hier uw password in:">

                <label for="herhaalpassword"></label>
                <input type="text" name="herhaalpassword" placeholder="Vul hier uw password nogmaals in:">

                <input type="submit" value="register" name="submit">
            </form>
        </div>



        
</body>
</html>