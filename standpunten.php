<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/standpunten.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;800&display=swap" rel="stylesheet">
    <title>Nieuwsberichten</title>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="#"><img class="navimg" src="images/1280px-PVV_logo_(2006–present).svg.png" alt="Logo"></a>
        </div>
        <ul class="navbar-links">
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
            ?>
        </ul>
    </nav>

    <div class="container">
        <h1>Onze standpunten</h1>
        <br>

        <h3>Kiezen voor Nederland</h3>
        <p>Het kabinet belast Nederland kapot, verscheept miljarden naar Zuid-Europa en zet onze grenzen wagenwijd open.
            Allemaal om te voldoen aan de eisen van de Europese Unie. Het resultaat? Onze economie presteert ondermaats,
            steeds meer werklozen. Er is maar één uitweg: kiezen voor Nederland.
        </p>

        <br>

        <h3>Uit de EU, uit de euro</h3>
        <P>De PVV wil Nederland uit de EU. We voeren de gulden weer in en behouden toegang tot de interne markt door
            bilaterale handelsverdragen te sluiten met de EU. Dat levert 10% extra welvaart op tegen 2024 en 13% tegen
            2035: bijna 10.000 euro per huishouden per jaar.

            Handel drijven met de hele wereld
            Door ons te bevrijden van Brussel kunnen we handelsverdragen sluiten met de rest van de wereld. Onze handel
            met de EU blijft intact. Dankzij onze ligging, innovatie en werklust zijn wij de toegangspoort van de wereld
            tot Europa. Ook zijn we één van de grootste handelspartners van de EU.
        </P>

        <br>

        <h3>Baas over eigen grenzen</h3>
        <p>De PVV wil dat Nederland weer baas wordt over de eigen grenzen. We bepalen zelf wie hier binnenkomt. We
            sluiten onze grenzen voor arbeidsimmigratie uit Polen, Roemenië, Bulgarije, etc, en voor alle immigratie uit
            islamitische landen.
        </p>

        <br>

        <h3>Baas over eigen geld</h3>
        <p>Nederland is de grootste nettobetaler van de EU. We moeten miljarden geven aan andere landen. We staan voor
            honderden miljarden garant voor failliete landen en banken. De PVV wil dit geld volledig en onmiddellijk
            terug.
        </p>

        <br>

        <h3>Eigen economisch beleid voeren</h3>
        <p>Buiten de EU is Nederland weer in staat om de economische en monetaire politiek af te stemmen op onze eigen
            noden. De PVV wil de accijnzen en de belastingen verlagen. Dat leidt tot extra koopkracht, extra groei en
            extra banen. Daar worden we allemaal beter van.
        </p>

        <br>

        <h3>Blijven wie we zijn</h3>
        <p>De massa-immigratie en de islamisering zijn rampzalig voor Nederland. Onze identiteit is in gevaar. We willen
            geen Eurabië worden; we willen blijven wie we zijn. We willen vrij en soeverein zijn. Politieke beslissingen
            nemen we in Den Haag, niet in Brussel.</p>
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