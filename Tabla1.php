<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #CCA9DD;
        }
        th:empty {
            background-color: #ADD8E6;
        }
        .row-odd {
            background-color: #FFFFE0;
        }
        .row-even {
            background-color: #FFB552;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <?php
            for ($i = 50; $i <= 60; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        for ($j = 1; $j <= 10; $j++) {
            $rowClass = ($j % 2 == 0) ? 'row-even' : 'row-odd';
            echo "<tr class='$rowClass'><th>$j</th>";
            for ($k = 50; $k <= 60; $k++) {
                echo "<td>" . ($k % $j == 0 ? '*' : '-') . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>