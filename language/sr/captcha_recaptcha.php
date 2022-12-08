<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	$lang = [];
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

$lang = array_merge($lang, [
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'sr',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Rešenje koje ste uneli je netačno',
	'RECAPTCHA_NOSCRIPT'				=> 'Molimo Vas da omogućite JavaScript u pretraživaču da bi se učitala vizuelna potvrda.',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Da bi koristili reCaptcha-u, morate prethodno da napravite nalog na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'reCaptcha je nevidljiva. Da bi proverili da li radi, mala ikonica treba da se pojavi u donjem desnom uglu ove stranice.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Prekoračili ste maksimalan broj pokušaja za prijavu.<br>Pored korisničkog imena i šifre, nevidljiva reCAPTCHA v3 će biti korišćena za autentifikaciju vaše sesije.',

	'RECAPTCHA_PUBLIC'				=> 'Javni reCaptcha ključ',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Vaš javni reCaptcha ključ. Ključeve možete dobiti na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Molimo vas da koristite reCAPTCHA v2 &gt; nevidljivi reCAPTCHA tip značke.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'reCAPTCHA ključ za vaš sajt. Ključeve možete preuzeti na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Molimo vas da koristite reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Privatni reCaptcha ključ',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Vaš privatni reCaptcha ključ. Ključeve možete dobiti na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>. Molimo vas da koristite reCAPTCHA v2 &gt; nevidljivi reCAPTCHA tip značke.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Vaš tajni reCAPTCHA ključ. Ključeve možete dobiti na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Molimo vas da koristite reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Request domain',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Domen sa kog se preuzima skripta i gde se proverava zahtev.<br>Koristite <samp>recaptcha.net</samp> kada <samp>google.com</samp> nije dostupan.',

	'RECAPTCHA_V3_METHOD'				=> 'Request metod',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Metod koji se koristi za proveru.<br>Onemogućene opcije nisu dostupne u okviru vašeg podešavanja.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Podrazumevana tolerancija',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Koristi se kada se ne primenjuje ni jedna druga akcija.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Tolerancija za prijavu',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Tolerancija za post',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Tolerancija za registraciju',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Tolerancija za prijavu',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Tolerancije',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 skor (<samp>1.0</samp> je vrlo verovatno dobra interakcija, <samp>0.0</samp> je vrlo verovatno bot). Ovde možete da odredite minimalni skor za svaku akciju.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 zahteva da zna koji dostupni metod želite da koristite kada radite proveru.',
]);
