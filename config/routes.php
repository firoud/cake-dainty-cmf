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


Router::connect('/phpinfo', array('plugin' => 'routines', 'controller' => 'routines', 'action' => 'phpinfo'));
Router::connect('/captcha', array('plugin' => 'routines', 'controller' => 'routines', 'action' => 'kcaptcha'));


Router::connect('/', array('controller' => 'pages', 'action' => 'mainpage'));

//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));


?>