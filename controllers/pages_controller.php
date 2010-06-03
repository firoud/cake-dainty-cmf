<?php


/**
* CakePHP Dainty CMF
* http://cake-dainty-cmf.googlecode.com
*
* @package dainty
* @subpackage dainty.controllers
* @author Ivan Chistyakov <zetruger@gmail.com>
* @version $Id$
* @link $HeadURL$
* @license MIT License (http://opensource.org/licenses/mit-license.php)
*/


class PagesController extends AppProjectController {

var $name = 'Pages';

var $uses = array();

function mainpage() {
    $this->layout = 'project_mainpage';
    // empty
}

}


?>