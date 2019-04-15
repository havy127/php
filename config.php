<?php
/**
 * Created by PhpStorm.
 * User: CHARIZARD
 * Date: 10/23/2016
 * Time: 9:18 AM
 */
define("URL_BACKEND", "https://adcp.vnuhcm.edu.vn/");

if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'local.jvn.honeynet.vn') {
    define("STATIC_URL", "http://local.jvn-static.systems.vn/");
    define("URL_SITE", "http://local.jvn.honeynet.vn/");
    define("DB_HOST", 'localhost');
    define("DB_NAME", 'users');
    define("DB_USER", 'root');
    define("DB_PASS", '');
}  else {
    define("STATIC_URL", "https://jvn-static.systems.vn/");
    define("URL_SITE", "https://jvn.systems.vn/");
    define("DB_HOST", 'localhost');
    define("DB_NAME", 'jvn');
    define("DB_USER", 'root');
    define("DB_PASS", 'h@neynetunix!@#');
}

