<link rel="stylesheet" href="css/game.css">

<div id="graj_div">
    <h1>Gra chybił-trafił</h1>

    <h2>
        Zaczynasz grę z 100zł w portfelu.<br/>
        Każdy zakład kosztuje 2zł.
    </h2>

    <form method="post" action="index.php" enctype="application/x-www-form-urlencoded">
        <p class="center">
            <label for="liczba_kul">Ile liczb obstawiasz?</label>
            <select name="balls" id="liczba_kul" autofocus>
                <?php
                if(empty($_GET['selected'])) $_GET['selected'] = 5;
                for($i=1; $i<=10; $i++)
                {
                    if($i == $_GET['selected'])
                    {
                        echo "<option selected=\"selected\">$i</option>";
                    }
                    else
                        echo "<option>$i</option>";
                }
                ?>
            </select>
        </p>

        <p class="center">
            <label for="liczba_losowan">Ile losowań chybił trafił mam losować?</label>
            <input name="game" id="liczba_losowan" type="number" min="1" max="99999" value="1">
        </p>

        <div>
            <input class="losujbutton" type="submit" value="Losuj!">
        </div>

        <input type="hidden" name="action" value="gra2">
    </form>
</div>