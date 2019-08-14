<?php
use core\Route;
require_once 'application/config/Autoload.php';
require_once 'core/Model.php';
require_once 'core/Controller.php';
require_once 'application/config/config.php';
require_once 'Config.php';
require_once 'application/Main_Functions.php';
require_once 'core/Route.php';

$start = new Route; 
//запускаем маршрутизатор
$start->start();