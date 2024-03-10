<?php
$hardware = ["CPU", "RAM", "Motherboard", "SSD", "GPU", "FAN COOLER"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>

</head>

<body>

    <h3>List Perangkat Keras Komputer</h3>
    <ol>
        <?php
        foreach ($hardware as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ol>

    <h3>List Perangkat Keras Komputer Baru</h3>
    <ol>
        <?php
        $hardware[] = "Sound Card <== NEW ITEM";
        $hardware[] = "Modem <== NEW ITEM";

        sort($hardware);
        foreach ($hardware as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ol>

</body>

</html>