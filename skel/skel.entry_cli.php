<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Miniblog
 *  @version    $Id$
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Miniblog_Controller.php';

ini_set('max_execution_time', 0);

Miniblog_Controller::main_CLI('Miniblog_Controller', '{$action_name}');
?>
