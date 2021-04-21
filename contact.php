<?php
//where customers can ask to arrange a meeting
//connects to: submission success.php + database submission + send email to menzo
$dateTime = date('j F Y, G:i:s')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css" type="text/css"/>
    <title>Contact - Timmer- En Bouwbedrijf V.D. Scheer</title>
</head>
<body>
    <div class="companyName">
        <h1>Timmer- En Bouwbedrijf V.D. Scheer</h1>
        <hr/>
        <nav>
            <a href="" >Over ons</a>
            <a href="">Project Fotos</a>
            <a href="contact.php">Contact</a>
            <hr/>
        </nav>
    </div>
    <div>
        <br><br><br>
        <form name="contact" id="contact" action="aanvraag.php" method="POST">
            <div>
                <label for="name"><strong>Naam:</strong></label>
                <input type="text" id="name" name="name" placeholder="Naam" required><br>
            </div>
            <div>
                <label for="adress"><strong>Adres:</strong></label>
                <input type="text" id="adress" name="adress" placeholder="Adres" required><br>
            </div>
            <div>
                <label for="tel"><strong>Telefoonnummer:</strong></label>
                <input type="tel" id="tel" name="tel" placeholder="Telefoonnummer" required><br>
            </div>
            <div>
                <label for="email"><strong>Email:</strong></label>
                <input type="email" id="email" name="email" placeholder="Email" required><br>
            </div>
            <div>
                <label for="budget"><strong>Budget:</strong></label>
                <input type="text" id="budget" name="budget" placeholder="Budget" required><br>
            </div>
            <div>
                <label for="details"><strong>Klus details:</strong> Type aub uit wat u gedaan wilt hebben. Graag zo gedetaileerd mogelijk.</label><br>
                <textarea id="details" form="contact" name="details" placeholder="Klus details" required></textarea>
            </div>
            <div>
                <input type="hidden" id="datetime" name="datetime" value="<?= $dateTime;?>">
            </div>
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>
