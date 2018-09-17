<?php
/**
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
*
* Database Optimize & Repair Tool [English]
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_OPTIMIZE_REPAIR'	=> 'Optimeeri &amp; Paranda',
	'OPTIMIZE_LOG'			=> '<strong>Andmebaasi tabelid optimeeritud</strong><br />» %s',
	'REPAIR_LOG'			=> '<strong>andmebaasi tabelid parandatud</strong><br />» %s',
	'CHECK_LOG'				=> '<strong>Andmebaasi tabelid kontrollitud</strong><br />» %s',
));
