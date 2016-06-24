<?php
/**
 * Created by PhpStorm.
 * User: Mrucznik
 * Date: 22.06.2016
 * Time: 20:38
 */

/*
 * We gets:
 * balls
 * ball_1 to ball_10
 */

//--------------[ Losowanie ]--------------
// losowanie przez system 20 liczb z przedziału 1-50
/**
 * @param $ball
 * @return bool
 */
function isProperlyBall($ball)
{
    if(!empty($ball) && is_numeric($ball) && $ball >= 1 && $ball <= 50)
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
$random_balls = range(1, 50);
for($i = 0; $i < 50; $i++)
{
    $random_balls[$i] = array("ball" => $random_balls[$i], "winner"=>false); //tworzenie tablic
}
$winballs_ammount = 0;
$balls = array(10);
$balls_number = $_POST['balls'];
//1 wymiar - ilosc typowanych liczb
//2 wymiar - ilosc trafionych liczb
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


//typowanie zwyciezcow
for($i = 0; $i < $balls_number; $i++)
{
    $balls[$i] = $_POST['ball_' . $i];
    if(isProperlyBall($balls[$i]))
    {
        $random_balls[$balls[$i]-1]['winner'] = true;
    }
    else
    {
        echo "ERROR2";
        return;
    }
}

//losowanie (mieszanie)
shuffle($random_balls);

//--------------[ Wygrana ]--------------
for($i = 0; $i<20; $i++)
{
    if($random_balls[$i]['winner'])
        $winballs_ammount++;
}

$prize = $prize_table[$balls_number][$winballs_ammount]*2;

//--------------[ Wyświetlanie ]--------------
/**
 * @param $ball
 */
function printBall($ball)
{
    $class ='';
    if(empty($ball['ball']))
    {
        $number = $ball;
    }
    else
    {
        if($ball['winner'])
        {
            $class = ' win';
        }
        $number = $ball['ball'];
    }
    echo "<span class='lottoball$class'> <div type='number' class='lottoball win'>$number</div> </span>";
}

/**
 * @param $balls
 * @param $ammount
 */
function printBalls($balls, $ammount)
{
    for($i = 0; $i<$ammount; $i++)
        printBall($balls[$i]);
}

echo "<h1>Typowane liczby: </h1><div class='ballcontainer'>";
printBalls($balls, $balls_number);

echo "</div><h1>Wylosowane liczby: </h1><div class='ballcontainer'>";
printBalls($random_balls, 20);
echo '</div>';

if($prize > 0)
    echo "<h1 style='color:dodgerblue;'>Trafiłeś $winballs_ammount i wygrałeś $prize złotych!</h2>";
else
    echo "<h2 style='margin:1.33em auto;'>Niestety nic nie wygrałeś :(</h2>";

echo "<a href='index.php?page=gra1&selected=$balls_number'><button class=\"losujbutton\">Wytypuj inne liczby</button></a>";
?>

<input class="losujbutton" form="formagain" type="submit" value="Jeszcze raz te same liczby">
<form id="formagain" method="post" action="index.php" enctype="application/x-www-form-urlencoded">
    <?php
    echo "<input type='hidden' name='balls' value='$balls_number'>";
    for($i=0; $i<$balls_number; $i++)
    {
        echo " <input type='hidden' name='ball_$i' value=' " . $balls[$i] . "'>";
    }
    ?>
    <input type="hidden" name="action" value="gra1">
</form>
