<a href="../index.php">home</a><br>
<?php

require '../conn.php';


// FUNZIONA (non cancellare)
// $sql = "SELECT C.id, F.importo, N.importo, P.importo, F.cliente_id, N.cliente_id, P.cliente_id
$sql = "SELECT *
FROM `clienti` AS C
LEFT JOIN `fatture`     AS F ON C.id = F.cliente_id 
LEFT JOIN `notecredito` AS N ON C.id = N.cliente_id 
LEFT JOIN `parcelle`    AS P ON C.id = P.cliente_id 
WHERE C.id = 8"; 
// $sql = "SELECT *
// FROM `clienti` AS C
// LEFT JOIN `fatture`     AS F ON C.id = F.cliente_id AND F.pagamento_id = 2 AND YEAR(F.data) BETWEEN 1990 AND 2019
// LEFT JOIN `notecredito` AS N ON C.id = N.cliente_id AND N.pagamento_id = 2 AND YEAR(N.data) BETWEEN 1990 AND 2019
// LEFT JOIN `parcelle`    AS P ON C.id = P.cliente_id AND P.pagamento_id = 2 AND YEAR(P.data) BETWEEN 1990 AND 2019
// WHERE C.id = 8"; // AND YEAR(data) BETWEEN 1990 AND 2019";


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
