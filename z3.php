<?php

require_once "db-connect.php";

$str ='учень';

$tab = mysql_query("SELECT name, lastname FROM firma WHERE post = '$str' ",$db);

echo '<b>Учні: </b> <br>';

$i=1;
while ( $row = mysql_fetch_array($tab) ){
    echo $row['name'].' '.$row['lastname']."<br>";
    $i++;
};

echo '<br><b>Кількість учнів: </b> '. ($i-1);

