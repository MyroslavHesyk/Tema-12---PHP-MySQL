<?php

require_once "db-connect.php";

$str ='учень';

$tab = mysql_query("SELECT * FROM firma WHERE post = '$str' ORDER BY id DESC ",$db);
                                                            /* сортування елементів по спаданню */
echo '<b>Учні: </b> <br>';


while ( $row = mysql_fetch_array($tab) ){
    echo $row['id'].' '.$row['name'].' '.$row['lastname']."<br>";
   
};



