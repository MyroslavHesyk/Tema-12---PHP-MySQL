<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пошук по базі даних</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div class="intro">
            <h2 class="title">Пошук по базі даних</h2>
            <form action="z7.php" method="POST">
                <label for="str">Введіть прізвище</label>
                <input type="text" name="str" id="str"> <br>
                <input type="submit" value="Знайти">
            </form>
        </div>
        <div class="dani">
            <?php
            if (isset($_POST['str'])) {
                $str = trim($_POST['str']);
                unset($_POST['str']);

                $str = big_first_char_str($str);

                require_once "db-connect.php";

                $tab = mysql_query("SELECT * FROM firma WHERE lastname = '$str' ", $db);
                $tak = true;

                while ($row = mysql_fetch_array($tab)) {
                    echo '<div class="result">';
                    echo "<p>Номер у базі даних: <b>" . $row['id'] . "</b> </p>";
                    echo "<p>Ім'я: <b>" . $row['name'] . "</b> </p>";
                    echo "<p>Прізвище: <b>" . $row['lastname'] . "</b> </p>";
                    echo "<p>Посада: <b>" . $row['post'] . "</b> </p> <br><br>";
                    echo '</div>';
                    $tak = false;
                }
                if ($tak) {

                    echo '<p><b>Нікого не знайдено</b></p>';
                }
            }

            function big_first_char_str($r)
            {
                $r = mb_strtolower($r, "UTF-8");
                return ucfirst($r);
            }
            ?>
        </div>
    </div>
</body>

</html>