<?php
//login page admin
//connects to (on login success): inbox.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css" type="text/css"/>
    <title>Login - Timmer- En Bouwbedrijf V.D. Scheer</title>
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
        <form action="inbox.php">
            <label for="name"><strong>Naam:</strong></label>
            <input type="text" id="name" name="name" placeholder="Naam" <!--required--><br>
            <label for="password"><strong>Wachtwoord:</strong></label>
            <input type="password" id="password" name="password" placeholder="Wachtwoord" <!--required--><br>
            <button type="submit" >Login</button>
        </form>
    </div>
</body>
</html>
