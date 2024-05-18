<?php
require_once "db-connect.php";

$str = 'учень';

$tab = mysql_query("SELECT * FROM firma WHERE post = '$str' ", $db);

$i = 1;
while ($row = mysql_fetch_array($tab)) {
    $student[$i]['id'] = $row['id'];
    $student[$i]['name'] = $row['name'];
    $student[$i]['lastname'] = $row['lastname'];
    $i++;
};

echo ' <table align=center width=500 border=1>';
echo "<tr>
    <th width=25> id </th>
    <th> Ім'я </th>
    <th> Прізвище </th>
</tr>";

for ($i = 1; $i <= count($student); $i++) {
    echo "<tr align=center>
        <td>".$student[$i]['id']."</td>
        <td>".$student[$i]['name']."</td>
        <td>".$student[$i]['lastname'] ."</td>
    </tr>";
};



echo ' </table>';
