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


Configure::write('debug', 0);
Configure::write('log', TRUE);

Configure::write('App.encoding', 'UTF-8');
//Configure::write('App.baseUrl', env('SCRIPT_NAME')); // without mod_rewrite

//Configure::write('Routing.prefixes', array('admin'));

//Configure::write('Cache.disable', TRUE);
//Configure::write('Cache.check', TRUE);

define('LOG_ERROR', 2);

Configure::write('Session.save', 'php');
//Configure::write('Session.model', 'Session');
//Configure::write('Session.table', 'cake_sessions');
//Configure::write('Session.database', 'default');
Configure::write('Session.cookie', 'DAINTY'); // my precious :)
Configure::write('Session.timeout', '120');
Configure::write('Session.start', TRUE);
Configure::write('Session.checkAgent', FALSE);

Configure::write('Security.level', 'low');
Configure::write('Security.salt', 'DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi');
Configure::write('Security.cipherSeed', '76859309657453542496749683645');

//Configure::write('Asset.timestamp', TRUE);
//Configure::write('Asset.filter.css', 'css.php');
//Configure::write('Asset.filter.js', 'custom_javascript_output_filter.php');

Configure::write('Acl.classname', 'DbAcl');
Configure::write('Acl.database', 'admin');

if (function_exists('date_default_timezone_set')) {
	date_default_timezone_set('Europe/Moscow'); // php 5.3
}

Cache::config('default', array('engine' => 'File'));


?>