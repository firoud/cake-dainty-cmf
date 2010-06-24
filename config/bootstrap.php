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

Configure::write('fb', TRUE);

// gost 7.79 system b (russian)
Inflector::rules('transliteration', array(
	'/а/' => 'a', '/б/' => 'b', '/в/' => 'v', '/г/' => 'g', '/д/' => 'd', '/е/' => 'e', '/ё/' => 'yo', '/ж/' => 'zh', '/з/' => 'z', '/и/' => 'i', '/й/' => 'j',
	'/к/' => 'k', '/л/' => 'l', '/м/' => 'm', '/н/' => 'n', '/о/' => 'о', '/п/' => 'p', '/р/' => 'r', '/с/' => 's', '/т/' => 't', '/у/' => 'u', '/ф/' => 'f',
	'/х/' => 'h', '/ц/' => 'cz', '/ч/' => 'ch', '/ш/' => 'sh', '/щ/' => 'shh', '/ъ/' => '``', '/ы/' => 'y`', '/ь/' => '`', '/э/' => 'e`', '/ю/' => 'yu', '/я/' => 'ya',
	'/А/' => 'A', '/Б/' => 'B', '/В/' => 'V', '/Г/' => 'G', '/Д/' => 'D', '/Е/' => 'E', '/Ё/' => 'Yo', '/Ж/' => 'Zh', '/З/' => 'Z', '/И/' => 'I', '/Й/' => 'J',
	'/К/' => 'K', '/Л/' => 'L', '/М/' => 'M', '/Н/' => 'N', '/О/' => 'О', '/П/' => 'P', '/Р/' => 'R', '/С/' => 'S', '/Т/' => 'T', '/У/' => 'U', '/Ф/' => 'F',
	'/Х/' => 'H', '/Ц/' => 'Cz', '/Ч/' => 'Ch', '/Ш/' => 'Sh', '/Щ/' => 'Shh', '/Ъ/' => '``', '/Ы/' => 'Y`', '/Ь/' => '`', '/Э/' => 'E`', '/Ю/' => 'Yu', '/Я/' => 'Ya',
	'/’/' => '\'', '/№/' => '#', '/(c)z(?=[ieyj])/i' => '\1', '/[“”«»]/' => '"'
));

// project config
Configure::load('project');

// language
if (!defined('DEFAULT_LANGUAGE')) {
	define('DEFAULT_LANGUAGE', 'rus');
}
Configure::write('Config.language', DEFAULT_LANGUAGE);


?>