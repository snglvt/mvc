<?php
session_start(); //стартуем сессию

//если в сессии нет массива товара, то создаем его
if (!isset($_SESSION['product'])) {
    $_SESSION['product'] = array();
}
//показать ошибки
ini_set('display_errors',1);
error_reporting(E_ALL);

/*настройки LAST-MODIFIED*/
$LastModified_unix = 1294844676; // время последнего изменения страницы
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
$IfModifiedSince = false;
if (isset($_ENV['HTTP_IF_MODIFIED_SINCE'])) $IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) $IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
    exit;
}
header('Last-Modified: ' . $LastModified);

//подключаем класс начальной загрузки
require_once ('application/bootstrap.php');

?>