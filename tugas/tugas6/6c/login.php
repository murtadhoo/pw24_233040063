<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "login") {
        header("location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body {
            background-color: cornsilk;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px;
        }

        .container {
            width: 310px;
            height: 320px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: white;
        }

        img {
            background-image: url(img/bg.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        ul form li {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-bottom: 10px;
            list-style: none;
        }

        h1 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            color: white;
        }

        button {
            cursor: pointer;
            background-color: lightcoral;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>login</h1>
        <img src="img/bg.jpg" alt="">


        <?php if (isset($error)) : ?>
            <p>username atau password salah</p>
        <?php endif; ?>

        <ul>
            <form action="" method="post">
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="text" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="submit">Login</button>
                </li>
            </form>
        </ul>
    </div>
</body>

</html>