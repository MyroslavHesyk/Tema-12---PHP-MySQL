<?php

require_once "db-connect.php";

$str = 'учень';

$tab1 = mysql_query("SELECT * FROM firma WHERE post = '$str' ORDER BY lastname ", $db);
/* сортування елементів по прізвищах */
echo '<b>Учні: </b> <br>';
echo '<sup><i>Сортування учнів по прізвищах</i></sup><br><br> ';

while ($row = mysql_fetch_array($tab1)) {
    echo $row['lastname'] . ' ' . $row['name'] . "<br>";
};

$tab2 = mysql_query("SELECT * FROM firma WHERE post = '$str' ORDER BY id DESC LIMIT 0 , 6 ", $db);
/* сортування елементів по прізвищах */

echo '<br><br><sup><i>Сортування шість останніх імен і прізвищ учнів</i></sup><br><br> ';

while ($row = mysql_fetch_array($tab2)) {
    echo $row['lastname'] . ' ' . $row['name'] . "<br>";
};
