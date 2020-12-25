<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

// A hook can be defined in the application/cnfig/hooks.php

/*$hook['pre_controller'] = array(
    'class'=>'Classname',
    'function' => 'functionname',
    'filename' => 'filename.php',
    'filepath' => 'hooks',
    'params' => array()
    



) */


$hook['pre_controller'] = array(
    'class'=>'Exm',
    'function' => 'tut',
    'filename' => 'exm.php',
    'filepath' => 'hooks'

);
