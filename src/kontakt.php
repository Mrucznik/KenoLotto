<?php
/**
 * Created by PhpStorm.
 * User: Mrucznik
 * Date: 26.05.2016
 * Time: 19:43
 */


?>

<div id="kontakt_div">
    Formularz kontaktowy
    <form method="post" id="form_contact">
        <fieldset>
            <legend>Wypełnij formularz kontaktowy:</legend>

            <div>
                <label for="contact_name" title="">
                    Imię
                </label>
                <input id="contact_name" type="text" size="10" aria-required="true" required>
                <label for="contact_surname" title="">
                    Nazwisko
                </label>
                <input id="contact_surname" type="text" size="10" aria-required="true" required>
            </div>

            <div>
                <label for="contact_email" title="">
                    Email
                </label>
                <input id="contact_email" type="email" size="30" aria-required="true" required>
            </div>

            <div>
                <label for="contact_topic" title="">
                    Temat
                </label>
                <input id="contact_topic" type="text" size="30" aria-required="true" required>
            </div>

            <div>
                <label for="contact_textarea" title="">
                    Wiadomość
                </label>
                <textarea id="contact_textarea" cols="50" rows="10" class="required" aria-required="true" required></textarea>
            </div>

        </fieldset>

        <div class="submit">
            <button class="button validate" type="submit">Wyślij list</button>
        </div>

        <input type="hidden" name="option" value="com_contact">
        <input type="hidden" name="task" value="contact.submit">
        <input type="hidden" name="return" value="">
        <input type="hidden" name="id" value="6:stowarzyszenie">
        <input type="hidden" name="66e45525d7b42cbc025e834bc5c1fd95" value="1">
    </form>
</div>