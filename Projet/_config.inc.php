<?php
define('SMARTY_DIR', '../outils/Smarty/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
$tpl = new Smarty();
$tpl->debugging = 0;
$tpl->template_dir = 'tpl/templates/';
$tpl->compile_dir = 'tpl/templates_c/';
$tpl->config_dir = 'tpl/configs/';
$tpl->cache_dir = 'tpl/cahe/';
$tpl->left_delimiter = '{';
$tpl->right_delimiter = '}';
$AGREGATE = ';';