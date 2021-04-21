<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css" type="text/css"/>
    <title>Verwijderen - Timmer- En Bouwbedrijf V.D. Scheer</title>
</head>
<body>
    <div class="companyName">
        <h1>Timmer- En Bouwbedrijf V.D. Scheer</h1>
        <hr/>
    </div>
    <div>
        <hr/>
        <h1>Verwijderen?</h1>
        <h4>Weet U zeker dat u deze afspraak wilt verwijderen?</h4>
        <div>
            <form name="customerId" id="customerId" action="deletion.php" method="POST">
                <input type="hidden" value="<?php echo $customerId = $_POST['customerId']; ?>" name="customerId">
                <input type="submit" value="Ja">
            </form>
        </div>
            <form action="inbox.php"><input type="submit" value="Nee"></form>
    </div>
</body>
</html>
