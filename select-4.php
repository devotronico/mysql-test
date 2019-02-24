<a href="index.php">home</a><br>
<?php

require 'conn.php';

// Select [columns]
// from URLtraffic
// where RIGHT(Articles.ByPassURL,7) != '[placex')
$sql = "SELECT * FROM `clienti` WHERE RIGHT(`nome`, 2) IN('ta','ti','re')";

// $sql = "SELECT LEFT(`nome`, 3) AS `first_3_str` FROM `clienti`";
// $sql = "SELECT RIGHT(`nome`, 3) AS `last_3_str` FROM `clienti`";

// $sql = "SELECT SUM(anni) AS `sum_anni` FROM `clienti`";
// $sql = "SELECT AVG(anni) AS `avg_anni` FROM `clienti`";
// $sql = "SELECT COUNT(*) AS `numeroClienti` FROM `clienti`";
// $sql = "SELECT COUNT(provincia) AS `num_rows` FROM `clienti`";
// $sql = "SELECT COUNT(provincia) AS provincia FROM `clienti`";
// $sql = "SELECT CONCAT(id, nome) AS concatenato FROM `clienti` WHERE id = 1";


if (!$result = $mysqli->query($sql)) { die('KO'); }

$rows = $result->fetch_all(MYSQLI_ASSOC);

$row_count = $result->num_rows;
echo $row_count;

$status = explode('  ', $mysqli->stat());
echo '<pre>';print_r($status);echo '</pre>';
// echo $stat;

echo '<pre>';print_r($rows);echo '</pre>';

$result->close();

$mysqli->close();


?>
<?php /*foreach ($rows as $row) :*/ ?>
<!-- <div style="margin-bottom:20px;">
        <p style="line-height:.5"><?= $row['nome']; ?></p>
        <p style="line-height:.5"><?= $row['importo']; ?></p>
        <p style="line-height:.5"><?= $row['data']; ?></p>
        <p style="line-height:.5"><?= $row['tipo']; ?></p>
</div>
<hr> -->
<?php /* endforeach; */ ?>


<?php

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

// fatture
+----+------------+--------------+------------+---------+
| id | cliente_id | pagamento_id | data       | importo |
+-----------------+--------------+------------+---------+
| 1  | 8          | 20           | yyyy-mm-dd | 100.00  |
+-----------------+--------------+------------+---------+
| 2  | 3          | 30           | yyyy-mm-dd | 100.00  |
+-----------------+--------------+------------+---------+
| 3  | 3          | 30           | yyyy-mm-dd | 100.00  |
+-----------------+--------------+------------+---------+

// notecredito
+----+------------+--------------+------------+---------+
| id | cliente_id | pagamento_id | data       | importo |
+-----------------+--------------+------------+---------+
| 1  | 8          | 20           | yyyy-mm-dd | 100.00  |
+-----------------+--------------+------------+---------+
| 2  | 3          | 30           | yyyy-mm-dd | 100.00  |
+-----------------+--------------+------------+---------+
| 3  | 3          | 30           | yyyy-mm-dd | 100.00  |
+-----------------+--------------+------------+---------+

// parcelle
+----+------------+--------------+------------+---------+
| id | cliente_id | pagamento_id | data       | importo |
+-----------------+--------------+------------+---------+
| 1  | 8          | 20           | yyyy-mm-dd | 100.00  |
+-----------------+--------------+------------+---------+
| 2  | 3          | 30           | yyyy-mm-dd | 100.00  |
+-----------------+--------------+------------+---------+
| 3  | 3          | 30           | yyyy-mm-dd | 100.00  |
+-----------------+--------------+------------+---------+

*/




/*
$sql = "SELECT *
FROM utenti
INNER JOIN citta
ON utenti.citta_id = citta.id
WHERE citta.id = 1";

if (!$result = $mysqli->query($sql)) { die('KO'); }

$rows = $result->fetch_all(MYSQLI_ASSOC);

echo '<pre>';print_r($rows);echo '</pre>';

$result->close();

$mysqli->close();
*/
/*
// utenti
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
