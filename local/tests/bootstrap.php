<?php

define('SITE_ID', 's1');
define('NOT_CHECK_PERMISSIONS',true);
define("NO_AGENT_CHECK", true);
$_SERVER['DOCUMENT_ROOT'] = realpath(__DIR__ . '/../../') . '/';

print($_SERVER['DOCUMENT_ROOT']);
require_once($_SERVER[ 'DOCUMENT_ROOT' ] . '/bitrix/modules/main/include/prolog_before.php');

