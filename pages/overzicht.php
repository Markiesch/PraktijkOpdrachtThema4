<!-- 
    Author: Mark Schuurmans
    Date: 12-5-2021

    Praktijkopdracht Thema 4    
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <title>Home · BTC de Pettelaer</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/overzicht.css">
        <!-- Defer zorgt ervoor dat de script pas na de HTML/PHP wordt ingeladen -->
    <script src="../scripts/script.js" defer></script>
</head>
<body>
    <?php
        // Het starten van de sessie (nodig om session data op te halen)
        session_start();
        // Invoegen Header
        include "../includes/header.php";
        
        echo "<section>";
        $data = [
            [
                "Eliene Holla",
                "Philip Boekholt",
                "Selami Meulenbroeks",
                "Semira Trines",
                "Christian Kroos",
                "Doede Smeulders",
                "Siebren Breukers",
                "Jouke Walhout",
                "Hossein Waterman",
                "Lilia van Antwerpen",
                "Allal Poelsma",
                "Bouke Haalboom",
                "Dio Bramer",
                "Linda Butter",
                "Jorian de Bot",
            ],
            [
                "06-44662246",
                "06-82528319",
                "06-56109212",
                "06-89084537",
                "06-28868799",
                "06-86217996",
                "06-94192111",
                "06-93561432",
                "06-44303878",
                "06-99685607",
                "06-38560634",
                "06-87883016",
                "06-79615938",
                "06-28317272",
                "06-88546197",
            ],
            [
                "ElieneHolla@outlook.com",
                "PhilipBoekholt@outlook.com",
                "SelamiMeulenbroeks@gmail.com",
                "SemiraTrines@yahoo.com",
                "ChristianKroos@hotmail.nl",
                "DoedeSmeulders@gmail.com",
                "SiebrenBreukers@yahoo.com",
                "JoukeWalhout@gmail.com",
                "HosseinWaterman@outlook.com",
                "LiliavanAntwerpen@hotmail.nl",
                "AllalPoelsma@ziggo.nl",
                "BoukeHaalboom@yahoo.com",
                "DioBramer@ziggo.nl",
                "LindaButter@ziggo.nl",
                "JoriandeBot@ziggo.nl",
            ],
            [
                "Maandagochtend, vrijdagavond",
                "Maandagavond",
                "Dinsdagavond",
                "Woensdagavond, vrijdag",
                "Dinsdagavond",
                "Dinsdagavond, woensdagochtend",
                "Woensdagochtend, donderdag",
                "Maandag, vrijdag",
                "Dinsdagmiddag, donderdag",
                "Vrijdag",
                "Maandagochtend, maandagavond",
                "Dinsdagmiddag, vrijdag",
                "Woensdagmiddag",
                "Woensdagmiddag",
                "Dinsdagmiddag, woensdagmiddag",
            ]
        ];

        function init($data) {
            $correctUsername = "pettelaer";
            $correctPassword = "T3nn1sIsH1p";
            $username = isset($_POST["username"]) ? $_POST["username"] : false;
            $password = isset($_POST["password"]) ? $_POST["password"] : false;
            $loginBtn = "<a class='loginBtn' href='login.php'>Inloggen</a>";

            if (isset($_SESSION["loggedin"])) return loadTable($data[0], $data[1], $data[2], $data[3]);

            if (!$username || !$password) {
                echo "<p class='wrong--password'>U heeft geen gebruiksnaam en/of wachtwoord ingevuld.</p>
                      $loginBtn";
                return;
            };


            if ($correctUsername != $username || $correctPassword != $password) {
                echo "<p class='wrong--password'>U heeft niet de juiste inloggevens ingevuld</p>
                $loginBtn";
                return;
            }

            // Alle checks voorbij
            return loadTable($data[0], $data[1], $data[2], $data[3]);
        }

        init($data);

        function loadTable($names, $phoneNumbers, $emails, $days) {
            $_SESSION["loggedin"] = true;

            echo "<table>
                    <tr>
                        <th>Namen</th>
                        <th>Telefoonnummers</th>
                        <th>E-mailadress</th>
                        <th>Trainingsdagen</th>
                    </tr>";

            for ($i = 0; $i < count($names); $i++) {
                echo "<tr>
                        <td>$names[$i]</td>
                        <td>$phoneNumbers[$i]</td>
                        <td>$emails[$i]</td>
                        <td>$days[$i]</td>
                    </tr>";
            }
            echo "</table>";
        }
    ?>
    </section>
    <?php 
        include "../includes/footer.php";
    ?>
</body>
</html>