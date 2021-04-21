<?php
//overview of all received contacts
//connects to: photoupload.php + details.php

require_once  'connect.php';

$result = $conn->query('SELECT * FROM jobs');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css" type="text/css"/>
    <title>Inbox - Timmer- En Bouwbedrijf V.D. Scheer</title>
</head>
<body>
    <div class="companyName">
        <h1>Timmer- En Bouwbedrijf V.D. Scheer</h1>
        <hr/>
    </div>
    <div>
        <table>
            <thead>Inbox
            <tr>
                <th>#</th>
                <th>Naam</th>
                <th>Adres</th>
                <th>Telefoonnummer</th>
                <th>Email</th>
                <th>Budget</th>
                <th>Details</th>
                <th>Laatste Aanpassing:</th>
            </tr>
            </thead>
            <tbody>
            <?= $total = 0; //<== dit kut nulletje weigert weg te gaan
            foreach ($result as $row) {?>
            <tr class="item_row">
            <td><?php echo ++$total; ?></td>
            <td> <?php echo $name = $row['name']; ?></td>
            <td> <?php echo $adress = $row['adress']; ?></td>
            <td> <?php echo $tel = $row['tel']; ?></td>
            <td> <?php echo $email = $row['email']; ?></td>
            <td> <?php echo $budget = $row['budget']; ?></td>
            <td> <?php echo $details = $row['details']; ?></td>
            <td> <?php echo $lastEdit = $row['lastEdit']; ?></td>
            <td>
                 <form name="details" id="details" action="details.php" method="POST">
                     <input type="hidden" value="<?php echo $id = $row['id']; ?>" name="customerId">
                     <input type="hidden" value="<?php echo $name = $row['name']; ?>" name="name">
                     <input type="hidden" value="<?php echo $adress = $row['adress']; ?>" name="adress">
                     <input type="hidden" value="<?php echo $tel = $row['tel']; ?>" name="tel">
                     <input type="hidden" value="<?php echo $email = $row['email']; ?>" name="email">
                     <input type="hidden" value="<?php echo $budget = $row['budget']; ?>" name="budget">
                     <input type="hidden" value="<?php echo $details = $row['details']; ?>" name="details">
                     <input type="hidden" value="<?php echo $contractorsInfo = $row['contractorsInfo']; ?>" name="contractorsInfo">
                     <input type="hidden" value="<?php echo $comments = $row['comments']; ?>" name="comments">
                     <input type="hidden" value="<?php echo $lastEdit = $row['lastEdit']; ?>" name="lastEdit">
                     <input type="submit" value="Details">
                 </form>
            </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
