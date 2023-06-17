<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Public/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;800&display=swap" rel="stylesheet">
  <title>Home - PVV</title>
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
      ?>    </ul>
  </nav>

  <div class="tekst">


    <h1>Lid Worden</h1>
    <h3>
      Sluit u aan bij de PVV en ondersteun hun visie op vrijheid en nationale identiteit. Word lid en maak samen met hen
      het verschil.
    </h3>
    <a href="../Project2/PHP/Main.php"><button>Wordt hier lid!</button></a>

    <br>
    <br>
    <br>
    <br>

    <h1>Het gaat om U!</h1>
    <h3>
      Voor mensen die in een Nederland willen wonen waar ze weer veilig zijn, een land waar
      we trots zijn op onze eigen cultuur en ons geen racisme laten aanpraten.
    </h3>
    <a href="standpunten.html"><button>Bekijk onze standpunten</button></a>

    <br>
    <br>
    <br>
    <br>

    <h1>Laatste nieuws:</h1>
    <h3>
      De PVV eist directe stopzetting van het verstrekken van gratis inboedels aan statushouders door gemeenten. <br>
      PVV-woordvoerder wonen, Barry Madlener, benadrukt dat dit een aanzuigende werking heeft en <br> gelukszoekers
      misbruik
      maken van het asielbeleid.
    </h3>
    <a href="nieuwsberichten.html"><button>Bekijk hier alle nieuwsberichten</button></a>
  </div>

  <br>
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