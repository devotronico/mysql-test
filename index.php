<?php

require 'conn.php';
require "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faker Data</title>
</head>
<body style="background-color:#333">
    <div class="container" style="padding:100px;width:800px;height:100vh;margin:100px auto;background-color:silver">
        <h1>Faker Data</h1>
        <ul>
            <li style="margin-bottom:10px;"><a href="create/crea_fatture.php">crea fatture</a></li>
            <li style="margin-bottom:10px;"><a href="create/crea_notecredito.php">crea notecredito</a></li>
            <li style="margin-bottom:10px;"><a href="create/crea_parcelle.php">crea parcelle</a></li>
            <li style="margin-bottom:10px;"><a href="create/crea_payment.php">crea pagamenti</a></li>
            <li style="margin-bottom:10px;"><a href="create/crea_clienti.php">crea clienti</a></li>
            <li style="margin-bottom:10px;"><a href="select/select-1.php">select-1</a></li>
            <li style="margin-bottom:10px;"><a href="select/select-2.php">select-2</a></li>
            <li style="margin-bottom:10px;"><a href="select/select-3.php">select-3</a></li>
            <li style="margin-bottom:10px;"><a href="select/select-4.php">select-4</a></li>
            <li style="margin-bottom:10px;"><a href="select/select-5.php">select-5</a></li>
            <li style="margin-bottom:10px;"><a href="select/select-6.php">select-6</a></li>
        </ul>
        <?php

        // mysql teset
        //$faker = Faker\Factory::create('it_IT'); // create a French faker
        /*
        echo 'nome: ' . $faker->name;
        echo '<br>';
        echo 'indirizzo: ' . $faker->address;
        echo '<br>';


        echo 'lavoro: ' . $faker->jobTitle;
        echo '<br>';
        echo 'colore: ' . $faker->safeColorName;
        echo '<br>';
        echo 'nazione: ' . $faker->country;
        echo '<br>';
        echo 'città: ' . $faker->city;
        echo '<br>';
        echo $faker->numberBetween($min = 1, $max = 10);
        echo '<br>';
        echo rand(1, 10);

        */
        // echo $faker->date($format = 'Y-m-d', $max = 'now'); // '1979-06-09'
        //  echo '<br>';
        // echo $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999); // 48.8932
        // echo '<br>';
        // echo $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999); // 48.8932
        ?>
    </div>
</body>
</html>


