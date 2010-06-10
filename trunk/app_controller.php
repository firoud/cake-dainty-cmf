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

function beforeFilter() {
	parent::beforeFilter();
	$this->_setLanguage();
}

}


App::import('Controller', 'AppProject');


?>