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

// https://trac.cakephp.org/ticket/2056
function afterFind($results, $primary = FALSE) {
	$results = parent::afterFind($results, $primary);
	if (!$primary && $this->Behaviors->enabled('Uploadable')) {
		$results = $this->Behaviors->Uploadable->afterFind($this, $results, FALSE);
	}
	return $results;
}

}


App::import('Model', 'AppProjectModel');


?>