<?php

/**
 * SITE
 */
define("SITE", [
    "name" => "Auth em MVC com php",
    "desc" => "Aprenda a contruir uma aplicação de autenticação de MVC com PHP do jeito certo",
    "domain" => "localauth.com",
    "locale" => "pt_BR",
    "root" => "http://localhost/bruno/upinside/php/login"
]);

/**
 * SITE MINIFY
 */

if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . "/Minify.php";
}

/**
 * DB
 */

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "login",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


/**
 * SOCIAL CONFIG
 */

define("SOCIAL", [
    "facebook_page" => "robsonvleite2",
    "facebook_author" => "robsonvleite",
    "facebook_appId" => "2193729837289",
    "twitter_creator" => "@robsonvleite",
    "twitter_site" => "@robsonvleite"
]);

/**
 * MAIL CONNECT 
 */

define("MAIL", [
    "host" => "smtp.sendgrid.net",
    "port" => "587",
    "user" => "apikey",
    "passwd" => "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",
    "from_name" => "Bruno Hoffmann",
    "from_email" => "brunohoffmanndev@gmail.com"
]);

/**
 * SOCIAL LoGIN: FACEBOOK
 */

define("FACEBOOK_LOGIN", []);

/**
 * SOCIAL LoGIN: GOOGLE
 */

define("GOOGLE_LOGIN", []);
