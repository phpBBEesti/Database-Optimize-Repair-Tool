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
	'DISABLE_BOARD_EXPLAIN'			=> 'Sellise protsessi ajaks saate foorumi keelata. Peale protsessi lõppu foorum automaatselt lubatakse.',
	'OPTIMIZE'			=> 'Optimeeri',
	'OPTIMIZE_SUCCESS'	=> 'Valitud tabeli (te) optimeerimine on lõpetatud.',
	'REPAIR'			=> 'Paranda',
	'REPAIR_SUCCESS'	=> 'Valitud tabeli (te) parandamine on lõpetatud.',
	'CHECK'				=> 'Kontrolli',
	'CHECK_SUCCESS'		=> 'Kontrollimine lõpetatud.<br />Kui te ei saa “OK”, või “Tabel on juba ajakohane” peaksite tabelit parandama.',
	'WARNING'			=> 'Hoiatus',
	'WARNING_EXPLAIN'	=> 'See tööriist ei sisalda ühtegi GARANTIID ja selle tööriista kasutamiseks, peaks varundama kogu oma andmebaasi.<br /><br />Enne jätkamist veenduge, et teil on andmebaasi varukoopia!',
	'WARNING_MYSQL'		=> 'See funktsioon töötab ainult MySQL andmebaasidega.',
	'MARK_OVERHEAD'		=> 'Märgi tabelid, millel on overhead',
	'PROCESSING'		=> 'Taotluse töötlemine... Palun oodake...',
	'TH_NAME'			=> 'Tabeli nimetus',
	'TH_TYPE'			=> 'Tüüp',
	'TH_SIZE'			=> 'Suurus',
	'TH_TOTAL'			=> 'Summad',
	'TH_OVERHEAD'		=> 'Overhead',
	'TABLE_ERROR'		=> 'Peate valima vähemalt ühe tabeli.',
	'TABLE_EMPTY'		=> 'Tabeli ladustamismootor ei ole toetatud.',
));
