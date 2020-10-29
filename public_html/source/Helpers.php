<?php

use Monolog\Logger;

function site(string $param = null)
{
if ($param && !empty(SITE[$param])) {
return SITE[$param];
} else {
return SITE["root"];
}
}

/**
* @param string $uri
* @return string
*/
function url(string $uri = null): string
{
if ($uri) {
return SITE["root"] . "/{$uri}";
}
return SITE["root"];
}

/**
 * @param string $imageUrl
 * @return string
 */
function routeImage(string $imageUrl): string
{
    return "https://via.placeholder.com/1200*628/0984e3/FFFFFF?text={$imageUrl}";
}

/**
 * @param string $param
 * @return string|null
 */
function social(string $param = null): ?string
{
    if ($param && !empty(SOCIAL[$param])) {
        return SOCIAL[$param];
    } else {
        return null;
    }
}

/**
 * @param string $param
 * @return string|null
 */
function site_seo(string $param = null): ?string
{
    if ($param && !empty(SEO[$param])) {
        return SEO[$param];
    } else {
        return null;
    }
}

/**
 * @param string $path
 * @return string
 */
function asset(string $path): string
{
    return SITE["root"] . "/views/assets/{$path}";
}

/**
 * @param string $type
 * @param string $message
 * @return string|null
 */
function flash(string $type = null, string $message = null): ?string
{
    if ($type && $message) {
        $_SESSION["flash"] = [
            "type" => $type,
            "message" => $message
        ];
        return null;
    }

    if (!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
        unset($_SESSION["flash"]);
        return "<div class=\"flash {$flash["type"]}\">{$flash["message"]}</div>";
    }

    return null;
}

/**
 * #############
 * ###  DATE ###
 * #############
 */

/**
 * formatTime
 *
 * @param string $timef
 * @param boolean $includeHour
 * @return string
 */
function formatTime(string $timef, bool $includeHour = false): string
{
    if ($includeHour) {
        return (new DateTime($timef))->format("d-m-Y H:i:s");
    } else {
        return (new DateTime($timef))->format("d/m/Y");
    }
}

function getTimeForFuneral(){
    return date('Y-m-d', strtotime('-1 day'));
}

function formatTimeOnlyDayAndMonth(string $timef): string
{
    return (new DateTime($timef))->format("d/m");
}

/**
 * #############
 * ### EMAIL ###
 * #############
 */


/**
 * get_email_body
 *
 * @param array $params
 * @return string
 */
function get_email_body(array $params): string
{
    $body = "<h1>Formulário preenchido em seu site</h1>";
    foreach ($params as $key => $value) {
        if ($key != "pagina" or $key != "botao") {
            $body = $body .  "<p><strong>{$key}</strong> : {$value}";
        }
    }

    $body = $body . formatTime(date("d-m-Y H:i:s"), true);

    return $body;
}

/**
 * ###############
 * ###  STRING ###
 * ###############
 */

/**
 * @param string $string
 * @return string
 */
function str_slug(string $string): string
{
    $string = filter_var(mb_strtolower($string), FILTER_SANITIZE_STRIPPED);
    $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

    $slug = str_replace(["----", "----", "---", "--"], "-", str_replace(" ", "-", trim(strtr(utf8_decode($string), utf8_decode($formats), $replace))));
    return $slug;
}

/**
 * @param string $string
 * @return string
 */
function str_param(string $string): string
{
    $string = filter_var($string, FILTER_SANITIZE_STRIPPED);
    $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

    $slug = str_replace(["+++++", "++++", "+++", "++"], "+", str_replace(" ", "+", trim(strtr(utf8_decode($string), utf8_decode($formats), $replace))));
    return $slug;
}

/**
 * @param string $string
 * @return string
 */
function str_studly_case(string $string): string
{
    $string = str_slug($string);
    $studlyCase = str_replace(" ", "", mb_convert_case(str_replace("-", " ", $string), MB_CASE_TITLE));

    return $studlyCase;
}

/**
 * @param string $string
 * @return string
 */
function str_camel_case(string $string): string
{
    return lcfirst(str_studly_case($string));
}

/**
 * @param string $string
 * @return string
 */
function str_title(string $string): string
{
    return mb_convert_case(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS), MB_CASE_TITLE);
}

/**
 * @param string $string
 * @param integer $limit
 * @param string $pointer
 * @return string
 */
function str_limit_words(string $string, int $limit, string $pointer = '...'): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    $arrWords = explode(" ", $string);
    $numWords = count($arrWords);

    if ($numWords < $limit) {
        return $string;
    }

    $words = implode(" ", array_slice($arrWords, 0, $limit));
    return "{$words} {$pointer}";
}

/**
 * @param string $string
 * @param integer $limit
 * @param string $pointer
 * @return string
 */
function str_limit_chars(string $string, int $limit, $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    if (mb_strlen($string) <= $limit) {
        return $string;
    }

    $chars = mb_substr($string, 0, mb_strrpos(mb_substr($string, 0, $limit), " "));
    return "{$chars} {$pointer}";
}

function format_document($document)
{
    return $document =
        substr($document, 0, 3) . "." .
        substr($document, 3, 3) . "." .
        substr($document, 6, 3) . "-" .
        substr($document, 9, 2)
        ;
}

function validate_document($document)
{
    // 12345678901
    // 36053126837
    $docLen = 11;

    $document = str_replace('-', '', str_replace('.','',$document));

    if(mb_strlen($document) != $docLen){
        return false;
    }

    return $document;
}

function format_zip_code($zip)
{
    //04547-140
    return $zip =
        substr($zip, 0, 5) . "-" . substr($zip, 5,4);
    ;
}

function validate_zip_code($zip)
{
    // 12345678
    // 03735140
    $zip_len = 8;
    $zip = str_replace('-', '', $zip);

    if(mb_strlen($zip) != 8) {
        return false;
    }

    return $zip;
}

function validate_telephone($tel)
{
    //12345678901
    //11977040389
    $tel_len = 11;
    $tel = str_replace(['(', ')', '-', ' '], ['','','',''], $tel);
    if(mb_strlen($tel) != $tel_len){
        return false;
    }

    return $tel;
}

function formatMoney($amount): string
{
    return "R$ " . number_format($amount, 2, ',', '.');
}

/**
 * #############
 * ###  LOGS ###
 * #############
 */

function setLog(string $name, string $message, array $context, string $type = 'info' )
{
    $logger = new Logger($name);
    $logger->pushHandler(new \Monolog\Handler\BrowserConsoleHandler(Logger::DEBUG));
    $logger->pushHandler(new \Monolog\Handler\StreamHandler('Logger/log.txt', Logger::INFO));

    switch($type){
        case 'info':
            $logger->info($message, $context);
            break;
        case 'notice':
            $logger->info($message, $context);
            break;
        case 'error':
            $logger->error($message, $context);
            break;
    }
}