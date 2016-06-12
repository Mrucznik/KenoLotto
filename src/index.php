<?php

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Keno Lotto</title>

<!--     Styles:-->
    <link rel="stylesheet" href="css/Normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/buttons.css">
</head>
<body>
    <img src="img/lottery-balls.jpg" class="blur" id="background-img"/>
    <div id="top">
        <div id="logo_container">
            <a href="index.php">
                <div class="button" style="display:inline-block; margin:10px 15px 0px 35px;">
                    <div class="round white">
                        <div style="text-decoration: underline; font-size:2em;">7</div>
                        <span class="round white">Przejdź na stronę główną</span>
                    </div>
                </div>
                <img src="img/logo.png" alt="Logo"/>
            </a>
        </div>

        <span style="display:none;">
            Górna część tooo wymyślone/znalezione logo oraz menu do podstron z historią gry, zasadami etc.
        </span>
    </div>
    <div id="mid">
<!--        <div id="menu_bar">-->
<!--            <a href="index.php?page=graj" class="menulink">Graj!</a>-->
<!--            <a href="index.php?page=zasady" class="menulink">Zasady</a>-->
<!--            <a href="index.php?page=historia" class="menulink">Histeeeeeeeeeeoria gry</a>-->
<!--        </div>-->
        <div id="midcontainer">
            <?php
                if(!empty($_GET['page']))
                {
                    switch ($_GET['page'])
                    {
                        case "graj":
                            include "graj.php";
                            break;
                        case "zasady":
                            include "zasady.php";
                            break;
                        case "historia":
                            include "historia.php";
                            break;
                        case "kontakt":
                            include "kontakt.php";
                            break;
                        default:
                            include "hello.php";
                            break;
                    }
                }
                else
                {
                    include "hello.php";
                }
            ?>
        </div>
        <span style="display:none;">
            Srodek to oczywiscie główna część strony. Podział jaki zostanie zastosowany pozostawiam do wymyślenia i dostosowania do własnych potrzeb.
        </span>
    </div>
    <div id="bot">
        <span class="botspan">
            <a href="index.php?page=kontakt" class="menulink">Skontaktuj się z twórcą</a>
        </span>
        <span id="copyright" class="botspan">
            <a href="http://szymongajda.pl" class="menulink">ⓒ Szymon Roger Gajda</a>
        </span>

        <span style="display:none;">
            Dół strony to oczywiscie kontakt do autora z linkiem do postrony z przykładowym formularzem wysłania maila(użyte legend,textarea,inputy).
            Podstrona z formularzem ma następnie wyświetlic w przystępny sposób wszystkie podane dane przez użytkownika.
            W dolnej części strony można zawrzeć również ewentualne inne informację - imie,nazwisko etc.
        </span>
    </div>
</body>
</html>
