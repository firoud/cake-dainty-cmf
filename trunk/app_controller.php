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


class AppController extends Controller {

var $components = array('Session', 'RequestHandler', 'DebugKit.Toolbar');

var $helpers = array('Session', 'Html', 'Form');

var $layout = 'project';

function __mergeVars() {
	// ???
	parent::__mergeVars();
}

function _disableAll() {
	Configure::write('debug', 0);
	$this->disableCache();
	$this->autoRender = FALSE;
	@ob_clean();
}

function _setLanguage($lang = NULL) {
	if (is_null($lang) && isset($this->params['lang'])) {
		$lang = $this->params['lang'];
	}
	$l10n = new L10n();
	$l10n->get($lang);
	Configure::write('Config.language', $l10n->locale);
	$this->set(array('locale' => $l10n->locale, 'lang' => $l10n->lang, 'l10n' => $l10n->catalog($l10n->lang)));
}

var $RubricModel = NULL;
var $Model = NULL;
var $ItemModel = NULL;

function _setModel($modelClass = NULL, $id = NULL) {
	if (is_null($modelClass) && !is_null($this->modelClass)) {
		$modelClass = $this->modelClass;
	}
	if ($this->loadModel($modelClass, $id)) {
		$this->Model = &$this->{$modelClass};
		if ($this->Model->Behaviors->attached('Associable')) {
			if ($this->Model->isTree()) {
				// ???
			}
			if ($this->Model->hasRubric()) {
				$this->RubricModel = &$this->Model->getRubricModel();
				// ???
			}
			if ($this->Model->hasItems()) {
				$this->ItemModel = &$this->Model->getItemModel();
				// ???
			}
		}
		return TRUE;
	}
	return FALSE;
}

function beforeFilter() {
	parent::beforeFilter();
	$this->_setLanguage();
	$this->_setModel();
}

}


App::import('Controller', 'AppProject');


?>