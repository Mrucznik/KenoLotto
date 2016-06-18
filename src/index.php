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
    <link rel="stylesheet" href="css/anim.css">
</head>
<body>
    <img src="img/lottery-balls.jpg" class="blur" id="background-img"/>
    <div id="top">
        <span id="logo_container">
            <a href="index.php">
                <div class="button" style="display:inline-block; margin:0px;">
                    <div class="round white">
                        <div style="text-decoration: underline; font-size:2em;">7</div>
                        <span class="round white">Przejdź na stronę główną</span>
                    </div>
                </div>
                <img src="img/logo.png" alt="Logo"/>
            </a>
        </span>

        <span id="top_rozdzialka"></span>

        <span id="menu_bar">
           <ul class="button" style="margin:0;">
                <li class="button"><a href="index.php?page=hello" class="round green">Graj<span class="round">Zagraj w KENO&nbsp;LOTTO!</span></a></li>
                <li class="button"><a href="index.php?page=zasady" class="round red">Zasady<span class="round">Zasady oraz opis gry KENO&nbsp;LOTTO</span></a></li>
                <li class="button"><a href="index.php?page=historia" class="round yellow">Historia<span class="round yellow">Historia gry KENO&nbsp;LOTTO</span></a></li>
            </ul>

        </span>
    </div>
    <div id="mid">
        <div id="midcontainer" class="">
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
    </div>
    <div id="bot">
        <span class="botspan">
            <a href="index.php?page=kontakt" class="menulink">Skontaktuj się z twórcą</a>
        </span>
        <span id="copyright" class="botspan">
            <a href="http://szymongajda.pl" class="menulink">ⓒ Szymon Roger Gajda</a>
        </span>
    </div>
</body>
</html>
