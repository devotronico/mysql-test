<a href="index.php">home</a><br>
<?php

require 'conn.php';

require "vendor/autoload.php";

$faker = Faker\Factory::create('it_IT'); // create a French faker


// TRUNCATE TABLE `pagamenti`
$arrCodice = [
        [10, 'bonifico'],
        [20, 'contante'],
        [30, 'assegno']
];
for ($i=0; $i < 3; $i++) {

    $sql = "INSERT INTO `pagamenti` (`id`, `codice`, `tipo`) VALUES (NULL, ?, ?)";

    if (!$stmt = $mysqli->prepare($sql)) { die('KO-1'); }

        $stmt->bind_param('is', $param1, $param2);

        $param1 = $arrCodice[$i][0];
        $param2 = $arrCodice[$i][1];

        if (!$stmt->execute()) { die('KO-2'); }

        $stmt->close();
}

$mysqli->close();


/*
// pagamenti
+----+--------+----------+
| id | codice | tipo     |
+-------------+----------+
| 1  | 10     | bonifico |
+-------------+----------+
| 2  | 20     | contante |
+-------------+----------+
| 3  | 30     | assegno  |
+-------------+----------+
*/