<?php
//shows indepth information of a job.
//allows editing, and has room for additional comments
    //connects to: confirmdelete.php(popup?)
$dateTime = date('j F Y, G:i:s')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css" type="text/css"/>
    <title>Details - Timmer- En Bouwbedrijf V.D. Scheer</title>
</head>
<body>
    <div class="companyName">
        <h1>Timmer- En Bouwbedrijf V.D. Scheer</h1>
        <hr/>
    </div>
    <div>
        <form name="detailsform" id="detailsform" action="update.php" method="POST">
            <div>
                <label for="customerId"><strong>Klant Id:</strong></label>
                <input type="hidden" id="customerId" name="customerId" placeholder="customerId" value="<?php print_r($_POST['customerId']);?>" required>
                <span><?php print_r($_POST['customerId']);?></span><br>
            </div>
            <div>
                <label for="name"><strong>Naam:</strong></label>
                <input type="text" id="name" name="name" placeholder="Naam" value="<?php print_r($_POST['name']);?>" required><br>
            </div>
            <div>
                <label for="adress"><strong>Adres:</strong></label>
                <input type="text" id="adress" name="adress" placeholder="Adres" value="<?php print_r($_POST['adress']);?>" required><br>
            </div>
            <div>
                <label for="tel"><strong>Telefoonnummer:</strong></label>
                <input type="tel" id="tel" name="tel" placeholder="Telefoonnummer" value="<?php print_r($_POST['tel']);?>" required><br>
            </div>
            <div>
                <label for="email"><strong>Email:</strong></label>
                <input type="email" id="email" name="email" placeholder="Email" value="<?php print_r($_POST['email']);?>" required><br>
            </div>
            <div>
                <label for="budget"><strong>Budget:</strong></label>
                <input type="text" id="budget" name="budget" placeholder="Budget" value="<?php print_r($_POST['budget']);?>" required><br>
            </div>
            <div>
                <label for="details"><strong>Klus details:</strong></label><br>
                <textarea id="details" form="detailsform" name="details" placeholder="Klus details" required><?php print_r($_POST['details']);?></textarea>
            </div>
            <div>
                <label for="contractorsInfo"><strong>Mede-Aannemers Contact Informatie</strong></label><br>
                <textarea id="contractorsInfo" form="detailsform" name="contractorsInfo" placeholder="Mede-Aannemers Contact Informatie"><?php print_r($_POST['contractorsInfo']);?></textarea>
            </div>
            <div>
                <label for="comments"><strong>Notities:</strong></label><br>
                <textarea id="comments" form="detailsform" name="comments" placeholder="Notities"><?php print_r($_POST['comments']);?></textarea>
            </div>
            <div>
                <input type="hidden" id="datetime" name="datetime" value="<?= $dateTime;?>">
            </div>
            <input type="submit" name="submit" value="Opslaan">
        </form>
    </div>
    <div>
        <br><br>
        <form name="customerId" id="customerId" action="confirmdelete.php" method="POST">
            <input type="hidden" value="<?php print_r($_POST['customerId']); ?>" name="customerId">
            <input type="submit" value="Verwijder">
        </form>
    </div>
</body>
</html>