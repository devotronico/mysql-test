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
|campo | tipo | valore |
|---| ---|| ------||
## 01. areageografica
|id: 1
|paese: Italia
|codice_iso: IT
---
## 02. assegni
|id:
|numero:
|carnet:
|importo:
|dataEmissione:
|beneficiario:
|dataIncasso:
|stato:
---
## 03. brand
|id:       1
|brand:    ALTUN
---
## 04. buste_paga
|id:               1758
|dipendente:       34
|dataElaborazione: 2019-04-01
|mese:             3
|anno:             2019
|compentenze:      1896.12
|trattenute:       377.17
|netta:            1518.95
---
## 05. carnet
|id:
|numero:
|dataRitiro
|fondo:
---
## 06. classeimballaggio
|id:       7
|classe:   ETICHETTA
|formula:  v*b
---
## 07. classeprodotto
|id:       1
|classe:   LEGUMI
---
## 08. clienti
|id | INT(11) | 374 |
|ragione_sociale | TEXT | MASINO CASILLI GBR |
|partita_iva | TEXT | DE 261938277 |
|protFatturazione | TEXT | T |
|codice_fiscale | TEXT | 97181460581 |
|email | TEXT |  rottamigalasso@legalmail.it |
|telefono | TEXT | +966126061160 |
|fax | TEXT | 08118857189 |
|indirizzo | TEXT | PIAZZA IV NOVEMBRE , 4 |20124 MILANO (MI) |IT |
|area_geografica | TEXT | 51 |
|altriIndirizzi | TEXT | PORTO DI SALERNO |JEDDAH  |
|pec | VARCHAR(255) | rottamigalasso@legalmail.it |
|codice_identificativo_sdi | VARCHAR(7) | SUBM70N |
|indirizzo_via | VARCHAR(255) | PIAZZA IV NOVEMBRE |
|indirizzo_ncivico | VARCHAR(100) | 80 |
|indirizzo_cap | VARCHAR(100) | 80022 |
|indirizzo_comune | VARCHAR(255) | MILANO |
|indirizzo_provincia | VARCHAR(100) | MI |
|indirizzo_nazione | VARCHAR(2) | IT |
---
## 09. codiciiva
|id | INT(11) | 1 | 23 |
|codice | TEXT | 4% | Documenti elettronici |non soggette |
|aliquota | INT(11) | aliquota | 0 |
|sigla | TEXT | 4 | N2 |
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
## 12. ddout_row
-
-
-
---
## 13. ddtin
-
-
-
---
## 14. ddtout
-
-
-
---
##  15. ddt_casuali
-
-
-
---
## 16. depositi
-
---
## 17. depositi_movimenti
-
---
## 18. dich_intenti
-
---
## 19. dich_intenti_ric
|id | INT(11) | 1 |
|numero | INT(11) | 34 |
|anno | INT(11) | 2017 |
|cliente | INT(11) | 212 |
|importo | FLOAT | 100000 |
|da | DATE | 2017-01-02 |
---
## 20. dipendenti
|id | INT(11) | 256 |
|nomeCognome | TEXT | PERITO SALVATORE LUCA |
|codiceFiscale | TEXT | PRTSVT92H04F912G |
|mansione | TEXT | ope |
---
## 21. dipendenti_certificati
-
---
## 22. dipendenti_contratti
-
---
## 23. distrimballaggi
-
---
## 24. divise
|id | MEDIUMINT(4) | 1 |
|codice | VARCHAR(3) | EUR |
|valuta | VARCHAR(50) | euro |
|numero | MEDIUMINT(3) | 978 |
---
## 25. eftin_import
|id | INT(11) | 711 |
|unzip_dir | VARCHAR(255) | 20190522_0752_03252_B2B_FATTURE_PASSIVE_IT00183180652 |
|file_sbustato | VARCHAR(100) | 20190522_IT13378520152_0003695419.xml |
|data | DATETIME | 2019-05-20 00:00:00 |
|tipo_documento | VARCHAR(255) | FATTURA |
|allegati | TEXT | 3695419\IT04839740489_BVA6H_MT_001.xml |
|importazione_db | TINYINT(1) | 1 |
---
## 26. eftout_ricevute
-
---
## 27 entrate
| id                | INT(11) | 4877       |
| rowordineout      | INT(11) | 5714       |
| rowordinideposito | INT(11) | 0          |
| dataIngresso      | DATE    | 2019-05-21 |
| ddt               | INT(11) | 4877       |
| qt                | INT(11) | 270000     |
---
## 28. fondi
|id | INT(11) | 2 |
|descrizione | TEXT | UNICREDIT EURO |
|istituto | TEXT | UNICREDIT |
|indirizzo | TEXT | PAGANI (SA) Agenzia 0633 Via De Gasperi, 435/437 84016 |PAGANI(SA) |
|tipo | TEXT | ccbanca |
|iban | TEXT | IT44Z 33333 22222 111111 000000 | 
|bic_swift | TEXT | UNCRITM1234 |
|saldo0 | DOUBLE | 10000.1234 |
|colore | TEXT | #FFFF80 |
---
## 29. fornitori
|id: 676
|ragione_sociale: F. DIVELLA S.P.A.
|partita_iva: 00257660720
|codice_fiscale: 00257660720
|email: divella@divella.it;
|telefono: 080 4779111
|fax: 0804762056
|indirizzo: LARGO  DOMENICO DIVELLA, 1 |70018 RUTIGLIANO ((BA)) |IT
|area_geografica: 1
|altrinIndirizzi: 
|pec: f.divella@legalmail.it; fornitori@pec.divella.it
|codice_identificativo_sdi:MZO2A0U
|indirizzo_via: LARGO  DOMENICO DIVELLA
|indirizzo_civico: 1
|indirizzo_cap: 70018
|indirizzo_comune: RUTIGLIANO
|indirizzo_provincia: (BA)
|indirizzo_nazione: IT
---
## 30. ftin
|id | INT(11) | 5914 |
|codice | TEXT | 710/19/E |
|protocollo | TEXT | 7607/A |
|fornitore | INT(11) | 340 |
|cliente | INT(11) | 0 |
|dataEmissione | DATE | 2019-05-21 |
|dataScadenza | DATE | 2019-06-20 |
|dataRegistrazione | DATE | 2019-05-22 |
|imponibile | DOUBLE | 545 |
|importoIva | FLOAT | 10.37 |
|totale | DOUBLE | 652.03 |
|ordine | TEXT | (0) |
|stato | TEXT | ricevuta |
|pagamento | TEXT | 120 |
|valuta | TEXT | euro |
|dicIntenti | INT(11) | 0 |
|cambio | FLOAT | 1 |
|impoEuro | DOUBLE | 545.45 |
|totaleEuro | DOUBLE | 456.78 |
|rifFtOut | TEXT | (0) |
|is_elettronica | TINYINT(1) | 1 |
|pec | VARCHAR(255) | NULL |
|codice_identificativo | VARCHAR(7) | NULL |
|file | VARCHAR(255) | 20190521_IT02249120102_0003680854.xml |
|allegati | TEXT | 3680854\IT02249120102_8KU.xml.PDF;3680854\IT03466010232_0NYbH_MT_001.xml |
|validata | TINYINT(1) | 0 |
---
## 31. ftin_copia
-
---
## 32. ftin_online
-
---
## 33. ftin_row
|id | INT(11) | 19670 |
|fattura | INT(11) | 5914 |
|data | DATE | 2019-05-21 |
|costo | INT(11) | 0|
|descrizione | TEXT | vs fattura 630/19 dtd.03/05/19 |
|qt | INT(11) | 1 |
|pzu | FLOAT | 14.9 |
|pzt | DOUBLE | 15.8
|vat | INT(11) | 23 |
|tot | DOUBLE | 510 |
---
## 34. ftout
|id | INT(11) | 7355
|codice | TEXT | 7777
|dataEnissione | DATE | 2019-05-28 |
|dataScadenza | DATE | 2019-05-28
|cliente | INT(11) | 12 |
|fornitore | INT(11) | 0 |
|indirizzo | TEXT | VIA BATTIMELLI , 25 |80139 SANT`ANTONIO ABATE (NA) |IT |
|stato | TEXT | emessa |
|ordine | TEXT | (6587) |
|imponibile | DOUBLE | 802745.86 |
|valuta | TEXT | euro |
|importoIva | DOUBLE | 32109.83 |
|totaleFattura | DOUBLE | 834855.69 |
|pagamento | TEXT | 1 |
|incoterms | TEXT | FOB NAPLES
|stornata | INT(11) |
|tassoCambio | DOUBLE |
|imponibileEuro | DOUBLE |
|totaleFatturaEuro | DOUBLE |
|fondo | INT(11) |
|note | TEXT |
|gw | TEXT |
|nw | TEXT |
|cbm | TEXT |
|dicIntenti | INT(11) |
|is_elettronica | TINYINT(1) |
|pec | VARCHAR(255) |
|codice_destinatario | VARCHAR(7) |
|file | VARCHAR(255) |
|file_zip | VARCHAR(255) |
|fe_progressivo | VARCHAR(10) |
|fe_stato | VARCHAR(100) |
---
## 35. ftout_row
| id          | INT(11) | 21974        |
| fattura     | INT(11) | 7365         |
| prodotto    | INT(11) | 112          |
| imballaggio | INT(11) | 215          |
| um          | TEXT    | 1            |
| qt          | DOUBLE  | 1013.568     |
| pzu         | DOUBLE  | 100          |
| discount    | DOUBLE  | 2            |
| pzt         | DOUBLE  | 802745.856   |
| vat         | TEXT    | 10           |
| tot         | DOUBLE  | 834855.69024 |
| gw          | FLOAT   | 4            |
| nw          | FLOAT   | 5            |
| cbm         | FLOAT   | 6            |
| taricCode   | TEXT    | hs-code      |
| lotti       | TEXT    | note-1       |
| ddt         | TEXT    | (18);(19)    |

---
## 36. imballaggi
-
---
## 37. incassi
-
---
## 38. incassi_dati
-
---
## 39. incassi_nc
-
---
## 40. incassi_row
-
---
## 41. lavorazioni
-
---
## 42. login
-
---
## 43. lottipf
-
---
## 44. mercetichettata
-
---
## 45. messaggi
-
---
## 46. metodipagamento
|id | INT(11) | 1 |
|metodo | TEXT | 120 DAYS FROM B/L DATE |
|scadenze | TEXT | niente |
|classe | TEXT | ALTRO |
|codice_fe | VARCHAR(4) | NULL |
---
## 47. movimballaggi
-
---
## 48. movimbscheda
-
---
## 49. movimentifinanziari
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
## 65. prodottifiniti
|id                | INT(11) |  |
|codice            | TEXT |  |
|codiceNumerico    | TEXT |  |
|unit_misura       | TEXT |  |
|vassoi            | INT(11) |  |
|etichette         | INT(11) |  |
|formato           | TEXT |  |
|cliente           | INT(11) |  |
|prodotto          | TEXT |  |
|materiali         | TEXT |  |
|inglese | TEXT |  |
|francese | TEXT |  |
|plastica | INT(11) |  |
|qtPlastica | DOUBLE |  |

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


