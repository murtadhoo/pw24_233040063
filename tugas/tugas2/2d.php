<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
</head>

<body>
    <table width="350px" cellspacing="0px" cellpadding="0px">
        <?php
        for ($baris = 1; $baris <= 5; $baris++) {
            echo "<tr>";
            for ($kolom = 1; $kolom <= 5; $kolom++) {
                if (($kolom + $baris) % 2 == 0) {
                    echo "<td height='50px' width='50px' style='background:black; border:'1px solid black;'></td>";
                } else {
                    echo "<td height='50px' width='50px' style='background:white; border:'1px solid black;'></td>";
                }
            }
            echo "</tr>";
        }

        ?>
    </table>
</body>

</html>