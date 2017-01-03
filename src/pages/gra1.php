<div id="graj_div">
    <h1>Szybka gra</h1>

    <h2>Każdy zakład kosztuje 2zł</h2>

    <form method="post" action="index.php" enctype="application/x-www-form-urlencoded">
        <p class="center">
            <label for="liczba_kul">Ile liczb obstawiasz?</label>
            <select id="liczba_kul" name="balls" onchange="createLottoBalls();" autofocus>
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

        <div>
            <p class="center">Wpisz poniżej liczby, które obstawiasz. </p>
            <p class="center">Liczby te muszą mieścić się w przedziale od 1 do 50.</p>
        </div>


        <div>
            <div id='ballcontainer'>

            </div>
            <input class="losujbutton" type="submit" value="Losuj!">
        </div>

        <input type="hidden" name="action" value="gra1">
    </form>
</div>

<script type="text/javascript">createLottoBalls();</script>