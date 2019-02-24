<a href="../index.php">home</a><br>
<?php

require '../conn.php';

require "vendor/autoload.php";

$faker = Faker\Factory::create('it_IT'); // create a French faker

// TRUNCATE TABLE `fatture`

for ($i=0; $i < 100; $i++) {

    $sql = "INSERT INTO `fatture` (`id`, `cliente_id`, `pagamento_id`, `data`, `importo`) VALUES (NULL, ?, ?, ?, ?)";

    if (!$stmt = $mysqli->prepare($sql)) { die('KO-1'); }

        $stmt->bind_param('iisd', $param1, $param2, $param3, $param4);

        $param1 = rand(1, 10);
        $param2 = rand(1, 3);
        $param3 = $faker->date($format = 'Y-m-d', $max = 'now');
        $param4 = $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999);

        if (!$stmt->execute()) { die('KO-2'); }

        $stmt->close();
}

$mysqli->close();
