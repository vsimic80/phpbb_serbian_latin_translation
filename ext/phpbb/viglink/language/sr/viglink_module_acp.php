<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink podešavanja',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink je eksterni servis koji diskretno monetizuje linkove koje su postavili korisnici bez ikakve promene korisničkog iskustva. Kada korisnik klikne na eksterne linkove ka proizvodima i servisima da bi nešto kupili, prodavac plaća VigLink malu proviziju, od koje se mali deo donira phpBB projektu. Izborom da omogućite VigLink, vi podržavate našu organizaciju otvorenog koda i osiguravate našu finansijsku bezbednost.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Uvek možete promeniti ova podešavanja u “<a href="%1$s">VigLink podešavanja</a>” panelu.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Nećete više biti redirektovani na ovu stranicu kada izaberete opcije ispod, klikom na Pošalji dugme.',
	'ACP_VIGLINK_ENABLE'			=> 'Omogući VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Uključuje korišćenje VigLink servisa.',
	'ACP_VIGLINK_EARNINGS'			=> 'Potražite zaradu za vas (opciono)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Možete potražiti sopstvena priimanja tako što ćete se registrovati za VigLink Convert nalog.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink servisi su onemogućeni od phpBB-a.',
	'ACP_VIGLINK_CLAIM'				=> 'Potražite svoju zaradu',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Možete preuzeti zaradu vašeg foruma sa VigLink monetizovanih linkova, umesto da donirate zaradu phpBB projektu. Da bi to uradili, registrujte se za “VigLink Convert” nalog tako što kliknete na “Konvertuj nalog”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Konvertuj nalog',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink konvertuj nalog link je nedostupan.',
));
