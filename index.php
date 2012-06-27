﻿<?php
/***********************************/
// ** Initialize the constants  ** //
/***********************************/
define('CORE_PATH', 'core/');
define('CONFIG_PATH', 'config/');

/***********************************/
// **** Initialize the system **** //
/***********************************/
require_once(CORE_PATH.'System.class.php');
require_once(CORE_PATH.'Bootstrap.class.php');
require_once(CORE_PATH.'ConfigsManager.class.php');
require_once(CORE_PATH.'Logger.class.php');

$system = System::getInstance();

$system -> init();

Logger::w("Warning aqui pq a treta é séria");