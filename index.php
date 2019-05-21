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
        <hr>
        <ul>
            <li style="margin-bottom:10px;"><a href="create/crea_fatture.php">crea fatture</a></li>
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



//=============================
/*
+---------------------------------+
| Tables_in_db_gestionale-2       |
+---------------------------------+
| 01. areageografica              |
| 02. assegni                     |
| 03. brand                       |
| 04. buste_paga                  |
| 05. carnet                      |
| 06. classeimballaggio           |
| 07. classeprodotto              |
| 08. clienti                     |
| 09. codiciiva                   |
| 10. contratti                   |
| 11. dash                        |
| 12. ddout_row                   |
| 13. ddt_causali                 |
| 14. ddtin                       |
| 15. ddtout                      |
| 16. depositi                    |
| 17. depositi_movimenti          |
| 18. dich_intenti                |
| 19. dich_intenti_ric            |
| 20. dipendenti                  |
| 21. dipendenti_certificati      |
| 22. dipendenti_contratti        |
| 23. distrimballaggi             |
| 24. divise                      |
| 25. eftin_import                |
| 26. eftout_ricevute             |
| 27. entrate                     |
| 28. fondi                       |
| 29. fornitori                   |
| 30. ftin                        |
| 31. ftin_copia                  |
| 32. ftin_online                 |
| 33. ftin_row                    |
| 34. ftout                       |
| 35. ftout_row                   |
| 36. imballaggi                  |
| 37. incassi                     |
| 38. incassi_dati                |
| 39. incassi_nc                  |
| 40. incassi_row                 |
| 41. lavorazioni                 |
| 42. login                       |
| 43. lottipf                     |
| 44. mercetichettata             |
| 45. messaggi                    |
| 46. metodipagamento             |
| 47. movimballaggi               |
| 48. movimbscheda                |
| 49. movimentifinanziari         |
| 50. movlottipf                  |
| 51. movpfiniti                  |
| 52. ncredito_emesse             |
| 53. ncredito_ricevute           |
| 54. ordineout                   |
| 55. ordinideposito              |
| 56. ordiniin                    |
| 57. pagamenti                   |
| 58. pagamenti_bp                |
| 59. pagamenti_dati              |
| 60. pagamenti_nc                |
| 61. pagamenti_parcella          |
| 62. pagamenti_row               |
| 63. parcelle                    |
| 64. pedane                      |
| 65. prodottifiniti              |
| 66. prodottifiniti_old          |
| 67. riepilogo_imballaggi        |
| 68. riepilogo_prodotti          |
| 69. riepilogomaterialicontratto |
| 70. rowordineout                |
| 71. rowordinideposito           |
| 72. scadenzario                 |
| 73. schedacontabilecliente      |
| 74. schedacontabiledipendente   |
| 75. schedacontabilefornitore    |
| 76. shipment                    |
| 77. unitamisura                 |
| 78. uscite                      |
| 79. vettori                     |
| 80. vocidicosto                 |
| 81. volantino                   |
+---------------------------------+
*/

/*
## 01. areageografica
- id: 1
- paese: Italia
- codice_iso: IT
---
## 02. assegni
- id:
- numero:
- carnet:
- importo:
- dataEmissione:
- beneficiario:
- dataIncasso:
- stato:
---
## 03. brand
- id:       1
- brand:    ALTUN
-
---
## 04. buste_paga
-
-
-
---
## 05. carnet
-
-
-
---
## 06. classeimballaggio
-
-
-
---
## 07. classeprodotto
-
-
-
---
## 08. clienti
-
-
-
---
## 09. codiciiva
-
-
-
---
## 10. contratti
-
-
-
---
## 11. dash
-
-
-
---
## 12.
-
-
-
---
## 13.
-
-
-
---
## 14.
-
-
-
---
##  15.
-
-
-
---
## 16.
-
---
## 17.
-
---
## 18.
-
---
## 19.
-
---
## 20.
-
---
## 21.
-
---
## 22.
-
---
## 23.
-
---
## 24.
-
---
## 25.
-
---
## 26.
-
---
## 27
-
---
## 28.
-
---
## 29.
-
---
## 30.
-
---
## 31.
-
---
## 32.
-
---
## 33.
-
---
## 34.
-
---
## 35.
-
---
## 36.
-
---
## 37.
-
---
## 38.
-
---
## 39.
-
---
## 40.
-
---
## 41.
-
---
## 42.
-
---
## 43.
-
---
## 44.
-
---
## 45.
-
---
## 46.
-
---
## 47.
-
---
## 48.
-
---
## 49.
-
---
## 50.
-
---
## 51.
-
---
## 52.
-
---
## 53.
-
---
## 54.
-
---
## 55.
-
---
## 56.
-
---
## 57.
-
---
## 58.
-
---
## 59.
-
---
## 60.
-
---
## 61.
-
---
## 62.
-
---
## 63.
-
---
## 64.
-
---
## 65.
-
---
## 66.
-
---
## 67.
-
---
## 68.
-
---
## 69.
-
---
## 70.
-
---
## 71.
-
---
## 72.
-
---
## 73.
-
---
## 74.
-
---
## 75.
-
---
## 76.
-
---
## 77.
-
---
## 78.
-
---
## 79.
-
---
## 80.
-
---

*/



        ?>
    </div>
</body>
</html>


