<?php
/*
 * Copyright (c) 2014, Sgt. Kabukiman, https://bitbucket.org/sgt-kabukiman/
 *
 * This file is released under the terms of the MIT license. You can find the
 * complete text in the attached LICENSE file or online at:
 *
 * http://www.opensource.org/licenses/mit-license.php
 */

define('HORARO_ROOT', dirname(__DIR__));
require HORARO_ROOT.'/vendor/autoload.php';

$app = new horaro\RestApp\Application();
$app->run();