<?php

if (isset($_POST["submit"])) {
    if ($_POST["uname"] == "admin" && ($_POST["pw"] == "admin")) {
        header("Location:admin.php");
        exit;
    } else {
        $err = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMIN</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            height: 100vh;
            font-family: Arial;
            background-color: blue;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .container h1 {
            text-shadow: 2px 2px 2px salmon;
        }

        .content {
            width: 50%;
            height: 50%;
            background-color: lightblue;
            margin: auto;
            border: 2px solid black;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            box-shadow: 2px 2px 4px 2px #999;
        }

        input {
            margin: 3px;
        }

        input[type="password"] {
            margin-right: 3px;
        }

        button {
            background-color: red;
            border-radius: 20%;
            padding: 3px;
            transition: 1s all;
            display: flex;
            justify-content: center;
        }

        button:hover {
            transform: scale(90%);

        }
    </style>
</head>

<body>

    <div class="container">
        <div class="content">
            <h1>Login Admin</h1>

            <div class="gambar"></div>

            <?php if (isset($err)) : ?>
                <h4>Username atau Password <i>salah!</i></h4>
            <?php endif; ?>

            <form action="" method="post">
                <label for="uname">Username :</label>
                <input type="text" name="uname" id="uname">
                <br>
                <label for="pw">Password :</label>
                <input type="password" name="pw" id="pw">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>