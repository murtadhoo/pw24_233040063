<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>

    <style>
        .kotak {
            display: inline-block;
            width: 50px;
            height: 50px;
            background-color: blue;
            color: black;
            text-align: center;
            line-height: 50px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 10; $i >= 10; $i--) {
        for ($x = 1; $$x <= $i; $x++) {
            echo '<div class="kotak">' . $x . '</div>';
        }
        echo "<br/>";
    }
    ?>
</body>

</html>