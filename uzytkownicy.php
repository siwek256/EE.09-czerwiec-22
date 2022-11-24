<!DOCTYPE html>
<html lang="pl">

<head>
    <meta http-equiv="refresh" content="1">
    <link rel="stylesheet" href="styl5.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
</head>

<body>
    <div id="banner">
        <div id="lewybanner">
            <h2>
                Nasze osiedle
            </h2>
        </div>
        <div id="prawybanner">
            <h5>
                Liczba użytkowników portalu:
                <?php
                $user = "root";
                $pass = "";
                $host = "localhost";
                $dbname = "portal";
                $conn = mysqli_connect($host, $user, $pass, $dbname);
                if ($conn) echo '';
                else echo 'Nie działa';
                $query = 'SELECT COUNT(*) FROM DANE;';
                $res = mysqli_query($conn, $query);
                while ($arr = mysqli_fetch_array($res)) {
                    echo $arr[0];
                }
                mysqli_close($conn);
                ?>
            </h5>
        </div>
    </div>
    <main>
        <div id="lewyglowny">
            <h3>
                Logowanie
            </h3>
            <form action="logowanie.php" method="POST">
                <label for="login" id="login-label">
                    login
                </label>
                <br>
                <input type="text" id="login">
                <br>
                <label for="passwd" id="passwd-label">
                    Hasło
                </label>
                <br>
                <input type="password" id="passwd">
                <br>
                <button type="submit" id="zaloguj">
                    Zaloguj
                </button>
            </form>
        </div>
        <div id="prawyglowny">
            <h3>
                Wizytówka
            </h3>
            <div id="wizytowka">

            </div>
        </div>
    </main>
    <footer>
        <p>
            Stronę wykonał: Siwek
        </p>
    </footer>
</body>

</html>