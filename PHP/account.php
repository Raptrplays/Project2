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
            <li><a href="Main.php" class="button">Lid worden</a></li>
        </ul>
    </nav>

    <?php
    session_start();

    if (isset($_SESSION['naam'])) {
        $username = $_SESSION['naam'];
        $password = $_SESSION['password'];

        echo '<div class="container">';
        echo '<div class="box">';
        echo 'Welcome, ' . $username . '!<br>';
        echo 'Your password: ' . $password . '<br>';

        if (isset($_POST['submit'])) {
            $newUsername = $_POST['new_username'];

            // Update the user's name in the database
            require_once 'dbHandler.php';
            $db = new dbHandler();
            $success = $db->updateUsername($username, $newUsername);

            if ($success) {
                // Update the session with the new username
                $_SESSION['naam'] = $newUsername;
                $username = $newUsername; // Update the variable used for display
                echo 'Your name has been updated successfully!';
            } else {
                echo 'Failed to update your name.';
            }
        }

        echo '<form action="account.php" method="post">'; // Stay on the same page
        echo '<div class="field">';
        echo '<label for="new_username">Edit Name</label>';
        echo '<input type="text" name="new_username" id="new_username" required>';
        echo '</div>';
        echo '<input type="submit" name="submit" value="Update" class="button">';
        echo '</form>';
        echo '<form action="delete.php" method="post">';
        echo '<input type="submit" name="submit" value="Delete Account" class="button">';
        echo '</form>';
        echo '</div>';
        echo '</div>';
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