<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas GET</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            border: 1px solid black;
            display: flex;
            margin: 3px;
        }

        .kotak h2 {
            margin: auto;
        }

        .kotak1 {
            background-color: green;
        }

        .kotak2 {
            background-color: white;
        }

        .row {
            display: flex;
        }
    </style>

</head>

<body>
    <?php if (!isset($_GET["number"])) : ?>

        <h2>Variabel <i>"number"</i> belum dimasukkan, Silakan masukkan pada <b>URL</b> dengan menambahkan -> ?number=10</h2>
    <?php else : ?>

        <?php for ($i = $_GET["number"]; $i >= 1; $i--) : ?>
            <div class="row">
                <?php for ($j = 1; $j <= $i; $j++) : ?>

                    <?php if ($i % 2 == 0) : ?>
                        <div class="kotak kotak1">
                            <h2><?= "$i" ?></h2>
                        </div>
                    <?php else : ?>
                        <div class="kotak kotak2">
                            <h2><?= "$i" ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($i == $j) : ?>
                        <br>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>

    <?php endif; ?>
</body>

</html>