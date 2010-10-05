<?php


/**
* CakePHP Dainty CMF
* http://cake-dainty-cmf.googlecode.com
*
* @package dainty
* @subpackage dainty.config
* @author Ivan Chistyakov <zetruger@gmail.com>
* @version $Id$
* @link $HeadURL$
* @license MIT License (http://opensource.org/licenses/mit-license.php)
*/


App::import('Lib', 'Routines.Url');

//URL::connect('/phpinfo', array('plugin' => 'routines', 'controller' => 'routines', 'action' => 'phpinfo'));
//URL::connect('/captcha', array('plugin' => 'routines', 'controller' => 'routines', 'action' => 'captcha'));

include(CONFIGS . 'urls.php');


?>