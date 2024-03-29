<?php
include 'models/config.php';
include 'models/database.php';
include 'models/character.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StreetFight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="assets/lib/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>

<body>
    <?php include "views/home/header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                     <?php
                if (isset($_GET["fightest"])) {
                        include "views/fightest/fightest.php";
                    }
                    elseif (isset($_GET["create"])) {
                        include "controllers/create.php";
                        include "views/create/create.php";
                    }
                    elseif (isset($_GET["list"])) {
                        include "controllers/list.php";
                        include "views/list/list.php";

                    }
                 else {
                    include "views/home/home.php";
                }
                ?>
            </div>
        </div>
    </div>
    <footer>
    </footer>
    <script src="assets/js/javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>