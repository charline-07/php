<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $firstName = "Charline";
        $lastName = "Apiado";
        $age = 22;
        $address = "taytay";
        $contact = 232123132;

        $firstName1 = "Jovielyn";
        $lastName1 = "Oleza";
        $age1 = 23;
        $address1 = "cainta";
        $contact1 = 2321238132;

        $firstName2 = "Vincent";
        $lastName2 = "Santos";
        $age2 = 23;
        $address2 = "antipolo";
        $contact2 = 213232123132;

        $firstName3 = "Aerunn";
        $lastName3 = "Allado";
        $age3 = 23;
        $address3 = "angono";
        $contact3 = 232123132223;
    ?>

    <div id="container">
       <div id="card">
        <h2>Time done: 5:00pm</h2>
        <h1>
            Firstname: <?=  $firstName . ' ' . $lastName  ?>
        </h1>
        <p>Age: <span><?=  $age; ?></span></p>
        <p>Address: <span><?=  $address; ?></span></p>
        <p>Contact: <span><?= $contact; ?></span></p>
       </div> 

       <h1>
            Firstname: <?= $firstName2 . ' ' . $lastName2  ?>
        </h1>
        <p>Age: <span><?= $age2; ?></span></p>
        <p>Address: <span><?= $address2; ?></span></p>
        <p>Contact: <span><?= $contact2; ?></span></p>
       </div> 

       <h1>
            Firstname: <?= $firstName1 . ' ' . $lastName1  ?>
        </h1>
        <p>Age: <span><?= $age1; ?></span></p>
        <p>Address: <span><?= $address1; ?></span></p>
        <p>Contact: <span><?= $contact1; ?></span></p>

        <h1>
            Firstname: <?= $firstName3 . ' ' . $lastName3  ?>
        </h1>
        <p>Age: <span><?= $age3; ?></span></p>
        <p>Address: <span><?= $address3; ?></span></p>
        <p>Contact: <span><?= $contact3; ?></span></p>
       </div> 
       </div> 
    </div>
</body>
</html>