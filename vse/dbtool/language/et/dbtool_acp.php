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
	'ACP_OPTIMIZE_REPAIR'			=> 'Optimeerige &amp; Parandage',
	'ACP_OPTIMIZE_REPAIR_EXPLAIN'	=> 'Siin saate phpBB-ga seotud tabeleid optimeerida või parandada. Suurte andmebaaside puhul võib selleks kuluda rohkem aega. <strong>OPTIMEERITUD</strong> defragment võib pakkuda paremat andmebaasi jõudlust. <strong>PARANDUS</strong> tuleks kasutada ainult siis, kui teil on põhjust arvata, et teie andmebaasis on tabelid krahhinud. Märge: <strong>InnoDB</strong> ei toeta parandamist.',
	'OPTIMIZE_REPAIR_OPTIONS'		=> 'Andmebaasi valikud',
	'DISABLE_BOARD'					=> 'Keela foorum',
	'DISABLE_BOARD_EXPLAIN'			=> 'You may disable the board during this process. The board will be enabled at the end of the process.',
	'OPTIMIZE'			=> 'Optimise',
	'OPTIMIZE_SUCCESS'	=> 'Optimisation of the selected table(s) is complete.',
	'REPAIR'			=> 'Repair',
	'REPAIR_SUCCESS'	=> 'Repair of the selected table(s) is complete.',
	'CHECK'				=> 'Check',
	'CHECK_SUCCESS'		=> 'Check completed.<br />If you don’t get “OK”, or “Table is already up to date” you should normally run a repair of the table.',
	'WARNING'			=> 'Warning',
	'WARNING_EXPLAIN'	=> 'This tool comes with NO WARRANTY and users of this tool should back up their entire database in case of a failure.<br /><br />Before continuing, make sure you have a database backup!',
	'WARNING_MYSQL'		=> 'This feature only works with MySQL databases.',
	'MARK_OVERHEAD'		=> 'Mark tables having overhead',
	'PROCESSING'		=> 'Processing your request... Please wait...',
	'TH_NAME'			=> 'Table name',
	'TH_TYPE'			=> 'Type',
	'TH_SIZE'			=> 'Size',
	'TH_TOTAL'			=> 'Totals',
	'TH_OVERHEAD'		=> 'Overhead',
	'TABLE_ERROR'		=> 'You must select at least one table.',
	'TABLE_EMPTY'		=> 'Table storage engine not supported.',
));
