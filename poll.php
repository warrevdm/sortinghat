<?php
//connectie databank
require_once("db/index.php");

// $databaseLocal = new Database("localhost", "root", "root", "sortinghat", 8889);
$databaseLocal = new Database("ID362587_sortinghat.db.webhosting.be", "ID362587_sortinghat", "HtmlPhp123", "ID362587_sortinghat", 3306);

//query maken om al onze gegevens op te halen
$products = $databaseLocal->getQuery("select * from hogwarts;");

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Warre van der Maat">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/landing-page.css" rel="stylesheet">

    <!-- Fontawesome icons-->
    <script src="https://kit.fontawesome.com/9faf0c3d1a.js" crossorigin="anonymous"></script>


    <!-- linking script tijd -->
    <script type="text/javascript" src="date_time.js"></script>

    <!-- Titel-->
    <title>Sorting Hat - Warre van der Maat</title>

</head>

<body>
    <!-- banner-->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Sorting hat Poll options</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- overzicht  -->

    <div class="container">
        <h1>Overzicht van aangemelde gebruikers</h1>

        <table class="table table-bordered">
            <tr>
                <th>Voornaam</th>
                <th>Naam</th>
                <th>Gender</th>
                <th>Motivatie</th>
                <th>Detail</th>

            </tr>
            <!-- lijst van  -->

            <?php

            $databaseLocal = new Database("ID362587_sortinghat.db.webhosting.be", "ID362587_sortinghat", "HtmlPhp123", "ID362587_sortinghat", 3306);

            $sortinghat = $databaseLocal->getQuery("select * from hogwarts;");

            foreach ($sortinghat as $house) {
            ?>
                <tr>
                    <td><?php echo $house['firstname']; ?></td>
                    <td><?php echo $house['lastname']; ?></td>
                    <td><?php echo $house['gender']; ?></td>
                    <td><?php echo $house['motivatie']; ?></td>
                    <td><?php echo $house['id']; ?></td>
                    <td><a href="detail.php?id=<?php echo $house['id']; ?>"><i class="fas fa-info-circle"></i></a></td>
                </tr>
            <?php
            }
            ?>

        </table>

        <br>

        <!-- linking terug naar hoofdpage-->
        <p><a href="index.php">terug naar home</a></p>
    </div>





    <!-- Footer back end-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 h-100 text-center ">

                    <p class="text-muted small mb-4 mb-lg-0">
                        <a href="https://www.warrevandermaat.be/" target="_blank">© Warre van der Maat 2021</a>
                        <br>
                        <a>Contactgegevens:</a>
                        <br>
                        <a href="https://warrevandermaat.be/">warrevandermaat.be</a>
                        <br>
                        <a href="mailto:info@warrevandermaat.be">info@warrevandermaat.be</a>
                        <br>

                    </p>


                </div>


            </div>
        </div>
    </footer>
</body>

</html>