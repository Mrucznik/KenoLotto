<?php
/**
 * Created by PhpStorm.
 * User: Mrucznik
 * Date: 22.06.2016
 * Time: 20:38
 */


$maxballnumber = 70;

//--------------[ Losowanie ]--------------
// losowanie przez system 20 liczb z przedziału 1-50
/**
 * @param $ball
 * @return bool
 */
function isProperlyBall($ball)
{
    if(!empty($ball) && is_numeric($ball) && $ball >= 1 && $ball <= 70)
        return true;
    return false;
}

//warunek poczatkowy
if(!is_numeric($_POST['balls']) || $_POST['balls'] < 1 || $_POST['balls'] > 10)
{
    echo "ERROR1";
    return;
}

//inicjacja
$balls_number = $_POST['balls'];
$wallet = 100;
$game = $_POST['game'];
$wygrane = 0;
$liczby_losowane = array_fill(0, $maxballnumber, 0);
$prize_table = array(
    1 => array(
        0 => 0,
        1 => 3,
    ),
    2 => array(
        0 => 0,
        1 => 0,
        2 => 14,
    ),
    3 => array(
        0 => 0,
        1 => 0,
        2 => 4,
        3 => 18,
    ),
    4 => array(
        0 => 0,
        1 => 0,
        2 => 2,
        3 => 4,
        4 => 60,
    ),
    5 => array(
        0 => 0,
        1 => 0,
        2 => 0,
        3 => 4,
        4 => 18,
        5 => 250,
    ),
    6 => array(
        0 => 0,
        1 => 0,
        2 => 0,
        3 => 2,
        4 => 6,
        5 => 54,
        6 => 500,
    ),
    7 => array(
        0 => 0,
        1 => 0,
        2 => 0,
        3 => 2,
        4 => 4,
        5 => 8,
        6 => 66,
        7 => 1500,
    ),
    8 => array(
        0 => 2,
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 2,
        5 => 8,
        6 => 44,
        7 => 300,
        8 => 10000,
    ),
    9 => array(
        0 => 2,
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 2,
        5 => 4,
        6 => 10,
        7 => 100,
        8 => 750,
        9 => 50000,
    ),
    10 => array(
        0 => 6,
        1 => 2,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 2,
        6 => 6,
        7 => 32,
        8 => 250,
        9 => 3000,
        10 => 200000
    )
);

//główna pętla
for($idx=0; $idx<$game; $idx++)
{
    //inicjacja
    $random_balls = range(1, $maxballnumber);
    for($i = 0; $i < $maxballnumber; $i++)
    {
        $random_balls[$i] = array("ball" => $random_balls[$i], "winner"=>false); //tworzenie tablic
    }

    $winballs_ammount = 0;
    $balls = range(1, $maxballnumber);
    shuffle($balls);


    //typowanie zwyciezcow
    for($i = 0; $i < $balls_number; $i++)
    {
        $random_balls[$balls[$i]-1]['winner'] = true;
    }

    //losowanie (mieszanie)
    shuffle($random_balls);

    //--------------[ Wygrana ]--------------
    for($i = 0; $i<20; $i++)
    {
        if($random_balls[$i]['winner'])
            $winballs_ammount++;
        $liczby_losowane[$random_balls[$i]['ball']] ++;
        $liczby_losowane[0]++;
    }

    //1 wymiar - ilosc typowanych liczb
    //2 wymiar - ilosc trafionych liczb
    

    $prize = $prize_table[$balls_number][$winballs_ammount];
    $wallet = $wallet + $prize - 2;
    if($prize > 0)
        $wygrane++;

    if($wallet <= 0)
    {
        echo "<h2>Skończyły się pieniądze! Przerwano grę :(</h2>";
        break;
    }
}


//--------------[ Wyświetlanie ]--------------
/**
 * @param $ball
 * @param $percent
 */
function printBallPercent($ball, $percent)
{
    $percent = round($percent, 2);
    $number = $ball;
    echo "<span style='word-break: keep-all; display:inline-block;'><span class='lottoball'> <div type='number' class='lottoball win'>$number</div> </span><span class='percent'>$percent%</span></span>";
}

/**
 * @param $balls
 */
function printBallsPercent($balls)
{
    echo "<span class='lbpc'>";
    for($i=1; $i<=70; $i++)
    {
        printBallPercent($i, ($balls[$i]/$balls[0])*100);
    }
    echo "</span>";
}

echo "<h1>Wyniki:</h1>";
echo "<h2>Wygrane: <b style='color:green;'>$wygrane</b></h2>";
echo "<h2>Przegrane: <b style='color:red;'>" . ($game - $wygrane) . "</b></h2>";
echo "<h2>Portfel: <b>$wallet zł</b> </h2>";
echo "<h2>Rozkład procentowy wylosowanych kul: </h2>";
printBallsPercent($liczby_losowane);

?>

<div style="margin-top:1em;"><a href="index.php?page=gra2&selected=<?php echo $balls_number; ?>"><button class="losujbutton" type="submit">Wróć</button></a></div>
