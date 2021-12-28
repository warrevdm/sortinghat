<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Warre van der Maat">

    <!-- title-->
    <title>Sorting Hat - Warre van der Maat</title>


    <!-- CSS -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <header>
        <span class="blue_line"></span>
        <div class="navigation">
            <nav>

                <a href="index.php">Start</a>
                <a href="login.php">Inschrijven</a>
                <a href="poll.php">Zet mensen in een huis</a>
            </nav>
        </div>
    </header>
    <main>
        <br>
        <div id="start">
            <h1>Login page</h1>

        </div>

        <div id="login">
            <h2 id="loginh2">Schrijf je in!</h2>
            <form action=" api/add.php">

                <label>
                    Voornaam:
                </label>

                <br>

                <input type="text" name="firstname" required>

                <br>
                <br>

                <label>
                    Achternaam:
                </label>

                <br>

                <input type="text" name="lastname" required>

                <br>
                <br>

                <label for="Gender">
                    Gender
                </label>

                <br>

                <label>
                    <input type="radio" name="gender" value="man" checked>
                    Man
                </label>

                <label>
                    <input type="radio" name="gender" value="vrouw">
                    Vrouw
                </label>

                <br>
                <br>

                <label>
                    Motivatie:
                </label>

                <br>

                <input type="text" name="motivatie" required>

                <br>
                <br>

                <input type="submit">
            </form>
        </div>

        <footer>
            <div class="contact_info">
                <p>
                    Thomas More Mechelen<br />

                </p>
            </div>
            <hr />
            <a href="https://www.warrevandermaat.be/" target="_blank">© Warre van der Maat 2021</a>
            <br>
            <a>Contactgegevens:</a>
            <br>
            <a href="https://warrevandermaat.be/">warrevandermaat.be</a>
            <br>
            <a href="mailto:info@warrevandermaat.be">info@warrevandermaat.be</a>
            <br>
        </footer>


</body>

</html>