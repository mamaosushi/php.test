<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九表</title>
</head>
<body>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: solid 1px black;
        }
    </style>
    <table>
        <?php
            for ($i = 1; $i <= 9; $i++) {
                echo '<tr>';
                for ($a = 1; $a <=9; $a++) {
                    $ans = $i * $a;
                    echo '<td>'. $ans. '</td>';
                }
                echo '<br />';
            }
        ?>
    </table>
</body>
</html>
