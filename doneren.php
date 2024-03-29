<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Public/doneren.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;800&display=swap" rel="stylesheet">
  <title>Home - PVV</title>
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
        if (isset($_POST["submit"])) 
        {
          $naam = $_POST["name"];
          $number = $_POST["amount"];
        }
        ?>
      </ul>
    </nav>
  </div>

  <section class="donation">
    <h2>Steun ons werk met een donatie</h2>
    <p>Help ons de vrijheid te verdedigen. Doneer nu!</p>
    <form action="bedankt.php" method="post">
      <div class="form-group">
        <label for="amount">Bedrag:</label>
        <input type="number" name="amount" min="1" step="1" required>
      </div>
      <div class="form-group">
        <label for="name">Naam:</label>
        <input type="text" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
      </div>
      <div class="form-btn">
        <input type="submit" value="Doneer">
      </div>
    </form>
  </section>






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