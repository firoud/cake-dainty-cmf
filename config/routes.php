<?php


/**
* CakePHP Dainty CMF
* http://cake-dainty-cmf.googlecode.com
*
* @package cake
* @subpackage cake.app.config
* @author Ivan Chistyakov <zetruger@gmail.com>
* @version $Id$
* @link $HeadURL$
* @license MIT License (http://opensource.org/licenses/mit-license.php)
*/


Router::connect('/', array('controller' => 'pages', 'action' => 'mainpage'));

//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));


?>