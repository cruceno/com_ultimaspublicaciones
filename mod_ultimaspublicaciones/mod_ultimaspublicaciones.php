<?php
defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$list = mod_ultimaspublicacionesHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_ultimaspublicaciones', $params->get('layout', 'default'));