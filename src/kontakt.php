<?php
/**
 * Created by PhpStorm.
 * User: Mrucznik
 * Date: 26.05.2016
 * Time: 19:43
 */


?>

<div id="kontakt_div">
    <h1>Formularz kontaktowy</h1>
    <form id="contact_form" method="post" id="form_contact">
        <fieldset>
            <legend>Wypełnij formularz kontaktowy:</legend>

            <div>
                <label for="contact_name" class="cclabel" title="">
                    Imię
                </label>

                <input id="contact_name" type="text" size="10" aria-required="true" required>
            </div>

            <div>
                <label for="contact_surname" class="cclabel" title="">
                    Nazwisko
                </label>
                <input id="contact_surname" type="text" size="10" aria-required="true" required>
            </div>

            <div>
                <label for="contact_email" class="cclabel" title="">
                    Email
                </label>
                <input id="contact_email" type="email" size="30" aria-required="true" required>
            </div>

            <div>
                <label for="contact_topic" class="cclabel" title="">
                    Temat
                </label>
                <input id="contact_topic" type="text" size="30" aria-required="true" required>
            </div>

            <div>
                <label for="contact_textarea" class="cclabel" title="">
                    Wiadomość
                </label><br/>
                <textarea id="contact_textarea" cols="50" rows="10" class="required" aria-required="true" required></textarea>
            </div>

        </fieldset>

        <br/>

        <div class="submit" style="text-align:center;">
            <button class="sendButton" type="submit">Wyślij list</button>
        </div>

        <input type="hidden" name="option" value="com_contact">
        <input type="hidden" name="task" value="contact.submit">
        <input type="hidden" name="return" value="">
        <input type="hidden" name="id" value="6:stowarzyszenie">
        <input type="hidden" name="66e45525d7b42cbc025e834bc5c1fd95" value="1">
    </form>

    <span style="display:none;">
        Dół strony to oczywiscie kontakt do autora z linkiem do postrony z przykładowym formularzem wysłania maila(użyte legend,textarea,inputy).
        Podstrona z formularzem ma następnie wyświetlic w przystępny sposób wszystkie podane dane przez użytkownika.
        W dolnej części strony można zawrzeć również ewentualne inne informację - imie,nazwisko etc.
    </span>
</div>