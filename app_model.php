<?php


/**
* CakePHP Dainty CMF
* http://cake-dainty-cmf.googlecode.com
*
* @package dainty
* @subpackage dainty
* @author Ivan Chistyakov <zetruger@gmail.com>
* @version $Id$
* @link $HeadURL$
* @license MIT License (http://opensource.org/licenses/mit-license.php)
*/


if (!PHP5 || !App::import('Lib', 'LazyModel.LazyModel')) {
	class LazyModel extends Model {} // dummy
}


class AppModel extends LazyModel {

function isAssociable() {
	return $this->Behaviors->attached('Associable');
}

}


App::import('Model', 'AppProjectModel');


?>