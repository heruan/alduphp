<?php

define('ALDU_ROOT', getcwd());
define('ALDU_APPLICATION', ALDU_ROOT . DIRECTORY_SEPARATOR . "application");
set_include_path(get_include_path() . PATH_SEPARATOR . ALDU_APPLICATION);

require 'Aldu' . DIRECTORY_SEPARATOR . 'Bootstrap.php';
