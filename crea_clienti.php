<a href="index.php">home</a><br>
<?php

require 'conn.php';

require "vendor/autoload.php";

$faker = Faker\Factory::create('it_IT'); // create a French faker


// TRUNCATE TABLE `clienti`


for ($i=0; $i < 10; $i++) {

    $sql = "INSERT INTO `clienti` (`id`, `nome`) VALUES (NULL, ?)";

    if (!$stmt = $mysqli->prepare($sql)) { die('KO-1'); }

        $stmt->bind_param('s', $param1);

        $param1 = $faker->name;

        if (!$stmt->execute()) { die('KO-2'); }

        $stmt->close();
}

$mysqli->close();



/*
// clienti
+----+------+
| id | nome |
+-----------+
| 1  | dan  |
+-----------+
| 2  | nic  |
+-----------+
| 3  | par  |
+-----------+

// lavori
+----+------+
| id | tipo |
+-----------+
| 1  | doc  |
+-----------+
| 2  | ing  |
+-----------+
| 3  | sol  |
+-----------+

// città
+----+-------+
| id | sigla |
+------------+
| 1  | TO    |
+------------+
| 2  | NA    |
+------------+
| 3  | MI    |
+------------+





*/