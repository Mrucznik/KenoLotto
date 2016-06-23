<?php
/**
 * Created by PhpStorm.
 * User: Mrucznik
 * Date: 22.06.2016
 * Time: 22:12
 */

if(!empty($_POST['action']))
{
    switch($_POST['action'])
    {
        case 'kontakt':
            include "pages/skontaktowano.php";
            break;
        case 'gra1':
            include "pages/wyniki1.php";
            break;
        case 'gra2':
            include "pages/wyniki2.php";
            break;
    }
}
else if(!empty($_GET['page']))
{
    switch ($_GET['page'])
    {
        case "gra1":
            include "pages/gra1.php";
            break;
        case "gra2":
            include "pages/gra2.php";
            break;
        case "zasady":
            include "pages/zasady.html";
            break;
        case "historia":
            include "pages/historia.html";
            break;
        case "kontakt":
            include "pages/kontakt.html";
            break;
        default:
            include "pages/hello.html";
            break;
    }
}
else
{
    include "pages/hello.html";
}