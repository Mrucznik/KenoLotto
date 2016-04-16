<?php
/**
 * Created by PhpStorm.
 * User: Mrucznik
 * Date: 14.04.2016
 * Time: 19:34
 */

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'no mysqli :(';
} else {
    echo 'we gots it';
}
phpinfo();
?>