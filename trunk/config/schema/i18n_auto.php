<?php


/**
* CakePHP Dainty CMF
* http://cake-dainty-cmf.googlecode.com
*
* @package dainty
* @subpackage dainty.config.schema
* @author Ivan Chistyakov <zetruger@gmail.com>
* @version $Id$
* @link $HeadURL$
* @license MIT License (http://opensource.org/licenses/mit-license.php)
*/


class i18nAutoSchema extends CakeSchema {

var $name = 'i18nAuto';

function __construct($options = array()) {
	parent::__construct($options);
	require_once($this->path . DS . 'i18n.php');
	$schemaVars = get_class_vars('i18nSchema');
	$this->tables['i18n'] = $schemaVars['i18n'];
	foreach (App::objects('model') as $modelClass) {
		if (App::import('Model', $modelClass)) {
			$modelVars = get_class_vars($modelClass);
			if (isset($modelVars['translateTable'])) {
				$this->tables[$modelVars['translateTable']] = $schemaVars['i18n'];
			}
		}
	}
}

}


?>