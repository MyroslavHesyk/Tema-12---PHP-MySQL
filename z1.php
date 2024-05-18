<?php

require_once "db-connect.php";

$tab = mysql_query("SELECT name, lastname, post FROM firma",$db);

for ($i=1; $i<=mysql_num_rows($tab); $i++){
    $row = mysql_fetch_array($tab);
    echo $i.'. '.$row['name'].' '.$row['lastname']." - ".$row['post']."<br>";
}
