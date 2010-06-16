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


Configure::write('Engine.name', 'CakePHP Dainty CMF');
Configure::write('Engine.version', '1.0.0');

// gost 7.79 system b (russian)
Inflector::rules('transliteration', array(
	'/а/u' => 'a', '/б/u' => 'b', '/в/u' => 'v', '/г/u' => 'g', '/д/u' => 'd', '/е/u' => 'e', '/ё/u' => 'yo', '/ж/u' => 'zh', '/з/u' => 'z', '/и/u' => 'i', '/й/u' => 'j',
	'/к/u' => 'k', '/л/u' => 'l', '/м/u' => 'm', '/н/u' => 'n', '/о/u' => 'о', '/п/u' => 'p', '/р/u' => 'r', '/с/u' => 's', '/т/u' => 't', '/у/u' => 'u', '/ф/u' => 'f',
	'/х/u' => 'h', '/ц/u' => 'cz', '/ч/u' => 'ch', '/ш/u' => 'sh', '/щ/u' => 'shh', '/ъ/u' => '``', '/ы/u' => 'y`', '/ь/u' => '`', '/э/u' => 'e`', '/ю/u' => 'yu', '/я/u' => 'ya',
	'/А/u' => 'A', '/Б/u' => 'B', '/В/u' => 'V', '/Г/u' => 'G', '/Д/u' => 'D', '/Е/u' => 'E', '/Ё/u' => 'Yo', '/Ж/u' => 'Zh', '/З/u' => 'Z', '/И/u' => 'I', '/Й/u' => 'J',
	'/К/u' => 'K', '/Л/u' => 'L', '/М/u' => 'M', '/Н/u' => 'N', '/О/u' => 'О', '/П/u' => 'P', '/Р/u' => 'R', '/С/u' => 'S', '/Т/u' => 'T', '/У/u' => 'U', '/Ф/u' => 'F',
	'/Х/u' => 'H', '/Ц/u' => 'Cz', '/Ч/u' => 'Ch', '/Ш/u' => 'Sh', '/Щ/u' => 'Shh', '/Ъ/u' => '``', '/Ы/u' => 'Y`', '/Ь/u' => '`', '/Э/u' => 'E`', '/Ю/u' => 'Yu', '/Я/u' => 'Ya',
	'/’/' => '\'', '/№/' => '#', '/(c)z(?=[ieyj])/i' => '\1', '/[“”«»]/' => '"'
));

// project config
Configure::load('project');

// FirePHP
if (App::import('Vendor', 'FirePHP', array('file' => 'FirePHP' . DS . 'fb.php'))) {
	FB::setEnabled((bool)Configure::read('debug'));
}

// language
if (!defined('DEFAULT_LANGUAGE')) {
	define('DEFAULT_LANGUAGE', 'rus');
}
Configure::write('Config.language', DEFAULT_LANGUAGE);


?>