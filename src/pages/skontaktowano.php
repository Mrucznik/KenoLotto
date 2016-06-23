<?php
/**
 * Created by PhpStorm.
 * User: Mrucznik
 * Date: 22.06.2016
 * Time: 20:38
 */

$mail = $_POST['email'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <$mail (szymongajda.pl/keno/index.php?page=kontakt)> " . "\r\n";
$message = strip_tags($_POST['message']) . "\r\n" . strip_tags($_POST['name']) . " " . strip_tags($_POST['surname']);

/*mail("szymonrogergajda@gmail.com", strip_tags($_POST['topic']), $message, $headers);*/
?>

<h1>Wiadomość wysłana</h1>

<h2>Treść wiadomości</h2>

<div id="cmcontainer">
    <div>
        <div id="cmtopic">
            <b><?php echo $_POST['topic']; ?></b>
        </div>
        <div id="cmmessage">
            <?php echo $_POST['message'] ?>
        </div>
    </div>
    <div id="contactsignature">
        <div>
            <?php echo $_POST['name'] . " " . $_POST['surname']; ?>
        </div>
        <div>
            <?php echo $_POST['email'] ?>
        </div>
    </div>
</div>

Wiadomość do twórcy została poprawnie przesłana.
