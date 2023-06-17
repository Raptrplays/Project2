<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Public/leden.css">
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

   <h1>De leden van de PVV</h1>

<div class="container">
  <div class="grid">
    <div class="block1">
     <h3>Geert Wilders</h3>
     <h4>PVV</h4>
     <br>
     <p>Leeftijd: 59 Jaar</p>
     <p>Anciënniteit: 8990 dagen</p>
    </div>

    <div class="block2">
        <h3>Martin Bosma</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: 'Amsterdam</p>
        <p>Leeftijd: 58 Jaar</p>
        <p>Anciënniteit: 6035 dagen</p>
    </div>


    <div class="block3">
        <h3>Raymond de Roon</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: Aardenburg</p>
        <p>Leeftijd: 70 Jaar</p>
        <p>Anciënniteit: 6035 dagen</p>
    </div>

    <div class="block4">
        <h3>Dion Graus</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: Heerlen</p>
        <p>Leeftijd: 65 Jaar</p>
        <p>Anciënniteit: 6035 dagen</p>
    </div>

    <div class="block5">
        <h3>Tony van Dijck</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: 's-Gravenhage</p>
        <p>Leeftijd: 59 Jaar</p>
        <p>Anciënniteit: 6035 dagen</p>
    </div>

    <div class="block6">
        <h3>Fleur Agema</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: 's-Gravenhage</p>
        <p>Leeftijd: 46 Jaar</p>
        <p>Anciënniteit: 5923 dagen</p>
    </div>

    <div class="block7">
        <h3>Sietse Fritsma</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: 's-Gravenhage</p>
        <p>Leeftijd: 51 Jaar</p>
        <p>Anciënniteit: 5730 dagen</p>
    </div>

    <div class="block8">
        <h3>Barry Madlener</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: Rockanje</p>
        <p>Leeftijd: 54 Jaar</p>
        <p>Anciënniteit: 4871 dagen</p>
    </div>

    <div class="block9">
        <h3>Lilian Helder</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: Venlo</p>
        <p>Leeftijd: 50 Jaar</p>
        <p>Anciënniteit: 4740 dagen</p>
    </div>

    <div class="block10">
        <h3>Harm Beertema</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: Voorburg</p>
        <p>Leeftijd: 71 Jaar</p>
        <p>Anciënniteit: 4740 dagen</p>
    </div>

    <div class="block11">
        <h3>Machiel de Graaf</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: 's-Gravenhage</p>
        <p>Leeftijd: 53 Jaar</p>
        <p>Anciënniteit: 3914 dagen</p>
    </div>

    <div class="block12">
        <h3>Léon de Jong</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: 's-Gravenhage</p>
        <p>Leeftijd: 40 Jaar</p>
        <p>Anciënniteit: 3095 dagen</p>
    </div>

    <div class="block13">
        <h3>Gidi Markuszower</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: Amstelveen</p>
        <p>Leeftijd: 45 Jaar</p>
        <p>Anciënniteit: 2269 dagen</p>
    </div>

    <div class="block14">
        <h3>Alexander Kops</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: Overasselt</p>
        <p>Leeftijd: 38 Jaar</p>
        <p>Anciënniteit: 2269 dagen</p>
    </div>

    <div class="block15">
        <h3>Danai van Weerdenburg</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: Amstelveen</p>
        <p>Leeftijd: 46 Jaar</p>
        <p>Anciënniteit: 2269 dagen</p>
    </div>

    <div class="block16">
        <h3>Edgar Mulder</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: Zwolle</p>
        <p>Leeftijd: 61 Jaar</p>
        <p>Anciënniteit: 2269 dagen</p>
    </div>

    <div class="block17">
        <h3>Vicky Maeijer</h3>
        <h4>PVV</h4>
        <br>
        <p>Woonplaats: Krimpen aan den IJssel</p>
        <p>Leeftijd: 36 Jaar</p>
        <p>Anciënniteit: 2157 dagen</p>
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
