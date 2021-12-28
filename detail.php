<?php
//connectie databank
// require_once("assets/dbcon/index.php");

// $id = $_GET["id"];

// $databaseLocal = new Database("localhost", "root", "root", "sortinghat", 8889);
$databaseLocal = new Database("ID362587_sortinghat.db.webhosting.be", "ID362587_sortinghat", "HtmlPhp123", "ID362587_sortinghat", 3306);

//query maken om al onze gegevens op te halen
$products = "SELECT firstname, lastname, gender, motivatie FROM hogwarts WHERE id=2;";



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
                    <h1 class="mb-5">Sorting hat Back-end</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- overzicht assortiment -->

    <div class="container">
        <h1>Overzicht van aangemelde gebruikers</h1>



        <p><a href="login.php"><i class="fas fa-plus-circle"></i> Persoon toevoegen </a></p>
        <div class="container">
            <div class="card bg-light mb-3" style="max-width: 100%;">
                <div class="card-header">
                    <h2>Detail product</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>product</th>
                            <td><?php echo $firstname; ?></td>
                        </tr>
                        <tr>
                            <th>omschrijving</th>
                            <td><?php echo $lastname; ?> </td>
                        </tr>
                        <tr>
                            <th>prijs</th>
                            <td><?php echo $gender; ?> </td>
                        </tr>
                        <tr>
                            <th>maat</th>
                            <td><?php echo $motivatie; ?> </td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>


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