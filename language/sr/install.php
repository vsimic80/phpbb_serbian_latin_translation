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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'				=> 'Instalacioni panel',
	'SELECT_LANG'				=> 'Izaberite jezik',

	'STAGE_INSTALL'	=> 'Instaliram phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Uvod',
	'INTRODUCTION_BODY'		=> 'Dobrodošli u phpBB3!<br /><br />phpBB® je najkorišćeniji bilten board otvorenog koda na svetu. phpBB3 je poslednje izdanje u liniji paketa koje je počelo u 2000. KAo i njegovi prethodnici, phpBB3 je pun mogučnosti, jednostavan, i potpuno podržan od phpBB tima. phpBB3 ispravlja sve ono što je phpBB2 učinilo popularnim, i donosi često tražene mogučnosit koje nisu bile prisutne u prethodnim verzijama. Nadamo se da će ispuniti vaša iščekivanja.<br /><br />Ovaj instalacioni sistem će vas voditi kroz instalaciju phpBB3, nadogradnju sa prethodnih verzija, kao i konvertovanja na phpBB3 sa drugih forums (uključujući i phpBB2). Za više informacija, pročitajte <a href="../docs/INSTALL.html">instalacioni vodič</a>.<br /><br />Da vidite phpBB3 licencu ili potražite pomoć, izaberite odgovarajuće opcije i bočnog menija. Za nastavak, izaberite odgovarajući tab iznad.',

	// Support page
	'SUPPORT_TITLE'		=> 'Podrška',
	'SUPPORT_BODY'		=> 'Puna podrška će biti pružena za trenutno izdanje phpBB3, besplatno. Ovo uključuje:</p><ul><li>instalaciju</li><li>konfiguraciju</li><li>tehnička pitanja</li><li>problemi vezani za potencijalne greške u softveru</li><li>ažuriranje from Release Candidate (RC) verzija na poslednju stabilnu verziju</li><li>konvertovanje sa phpBB 2.0.x na phpBB3</li><li>konvertovanje sa drugih foruma na phpBB3 (pogledajte <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Ohrabrujemo korisnike koji još uvek koriste beta verziju phpBB3 da zamene svoje instalacije svežom kopijom poslednje verzije.</p><h2>Ekstenzije / Stilovi</h2><p>Za probleme sa ekstenzijama, pišite u udgovorajućem <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />Za probleme sa stilovima, šablonima i temama, pišite u odgovarajućem <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Ukoliko se pitanje odnosi na određeni paket, pišite direktno u temi posvećenoj paketu.</p><h2>Kako dobiti podršku</h2><p><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Quick Start Guide</a><br /><br />Da bi ste bili u toku sa novostima i izadnjima, pratite na na <a href="https://www.twitter.com/phpbb/">Twitter-u</a> i <a href="https://www.facebook.com/phpbb/">Facebook-u</a><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'Licenca',
	
	// Install page
	'INSTALL_INTRO'				=> 'Dobrodošli na instalaciju',
	'INSTALL_INTRO_BODY'		=> 'Sa ovom opcijom, moguće je instalirati phpBB na vš server.</p><p>Da bi nastavili, moraćete da imate podatke o bazi. Ukoliko to ne znate, molimo Vas da prvo pitate kod vašeg hosting provajder. Nećete moći da nastavite bez njih. Trebaće vam:</p>

	<ul>
	<li>Tip baze - baza koju ćete koristiti</li>
	<li>Server ime baze ili DSN - adresa servera baze</li>
	<li>Port baze - u većini slučaja ovo vam neće trebati</li>
	<li>Ime baze - naziv baze na serveru</li>
	<li>Korisničko ime i šifra baze - podaci sa kojima pristupate bazi</li>
	</ul>
	
	<p><strong>Note:</strong> ukoliko instalirate koristeći SQLite, trebate uneti punu putanju do baze u DSN polju i ostavite korisničko ime i šifru prazno. Zbog bezbednosnih razloga, pobriniti se da se fajl baze ne nalazi na lokaciji kojoj se može pristupiti sa interneta.</p>
	
	<p>phpBB3 podržava sledeće baze:</p>
	<ul>
		<li>MySQL 4.1.3 ili noviji (MySQLi je obavezan)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ili noviji (direktno ili putem ODBC)</li>
		<li>MS SQL Server 2005 ili noviji (native)</li>
		<li>Oracle</li>
	</ul>

	<p>Samo baze podržane od vašeg servera će biti prikazane.',

	'ACP_LINK'	=> 'Vodi me na <a href="%1$s">AKP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB je već instaliran.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB još uvek nije instaliran.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Fajl ne postojit',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Da bi instalirali phpBB fajl %1$s mora da postoji.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Preporučujemo da fajl %1$s postoji u sistemu zbog boljeg korisničkog iskustva.',
	'FILE_NOT_WRITABLE'						=> 'Fajl nije upisiv',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Da bi instalirali phpBB %1$s fajl mora da je upisiv.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Preporučujemo da fajl %1$s bude upisiv zbog boljeg korisničkog iskustva.',

	'DIRECTORY_NOT_EXISTS'						=> 'Folder ne postoji',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Da bi instalirali phpBB folder %1$s mora da postoji.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Preporučujemo da folder %1$s postoji u sistemu zbog boljeg korisničkog iskustva.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Folder nije upisiv',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Da bi instalirali phpBB folder %1$s mora da bude upisiv.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Preporučujemo da fajl %1$s bude upisiv zbog boljeg korisničkog iskustva.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP verzija',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB zahteva PHP veryiju 7.1.3 ili noviju.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP funkcija getimagesize() je dostupna',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Da bi phpBB ispravno funkcionisao, getimagesize funkcija mora biti dostupna.',
	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 Podrška',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB neće raditi ako vaša PHP instalacija nije kompajlirana sa UTF-8 podrškom u PCRE ekstenziji',
	'PHP_JSON_SUPPORT'				=> 'PHP JSON podrška',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> 'Da bi phpBB ispravno funkcionisao, PHP JSON ekstenzija mora biti dostupna.',
	'PHP_MBSTRING_SUPPORT'				=> 'PHP mbstring podrška',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'Da bi phpBB ispravno funkcionisao, PHP mbstring ekstenzija mora biti dostupna.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM podrška',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Da bi phpBB ispravno funkcionisao, PHP PHP XML/DOM ekstenzija mora biti dostupna.',
	'PHP_SUPPORTED_DB'				=> 'Podržane Baze',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Obavezni</strong> - Morate imati podršku za najmanje jednu bazu kompatibilnu sa PHP-om. Ako nema modula baza prikazanih kao dostupni trebalo bi da kontaktirate vašeg hosting provajdera.',

	'RETEST_REQUIREMENTS'	=> 'Ponovo proveri zahteve',

	'STAGE_REQUIREMENTS'	=> 'Proveri zahteve',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Morate popuniti sva polja u ovom bloku',

	'TIMEOUT_DETECTED_TITLE'	=> 'Instaler je primetio zastoj',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Instalaciona skripta je primetila zastoj. Možete probati da osvežite stranicu što može dovesti do problema sa podacima. Predlažemo da ili povećate timeout podešavanje ili pokušate da koristite CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Postavite instalacione podatke',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'		=> 'Detalji Administratora',

	// From labels
	'ADMIN_CONFIG'				=> 'Admin Konfiguracija',
	'ADMIN_PASSWORD'			=> 'Šifra administratora',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Potvrdi šifu administratora',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Molimo vas da unesete šifru dužine između 6 i 30 karaktera)',
	'ADMIN_USERNAME'			=> 'Korisničko ime administratora',
	'ADMIN_USERNAME_EXPLAIN'	=> '(Molimo vas da unesete korisničko ime dužine između 3 i 20 karaktera)',

	// Errors
	'INST_ERR_EMAIL_INVALID'	=> 'Email adresa koju ste uneli je neispravna',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Šifre koje ste uneli se ne poklapaju.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Šifra koju ste uneli je predugačka. Maksimalna dužina je 30 karaktera.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Šifra koju ste uneli je prekratka. Minimalna dužina je 6 karaktera.',
	'INST_ERR_USER_TOO_LONG'	=> 'Korisničko ime koje ste uneli je predugačko. Maksimalna dužina je 20 karaktera.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Korisničko ime koje ste uneli je prekratko. Minimalna dužina je 3 karaktera.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Board konfiguracija',
	'DEFAULT_LANGUAGE'	=> 'Podrazumevani jezik',
	'BOARD_NAME'		=> 'Naziv boarda',
	'BOARD_DESCRIPTION'	=> 'Kratak opis boarda',

	//
	// Database data
	//
	'STAGE_DATABASE'			=> 'Podešavanje Baze',

	// Form labels
	'DB_CONFIG'					=> 'Konfiguracija baze',
	'DBMS'						=> 'Tip baze',
	'DB_HOST'					=> 'Database server hostname ili DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN je skraćenica od Naziv Izvora Podataka i važi samo za ODBC instalacije.',
	'DB_PORT'					=> 'Port baze',
	'DB_PORT_EXPLAIN'			=> 'Ostavite prazno osim ako znate da server radi na nestandardnom portu.',
	'DB_PASSWORD'				=> 'Šifra baze',
	'DB_NAME'					=> 'Ime baze',
	'DB_USERNAME'				=> 'Korisničko ime baze',
	'DATABASE_VERSION'			=> 'Verzija baze',
	'TABLE_PREFIX'				=> 'Prefixks za tabele u bazi',
	'TABLE_PREFIX_EXPLAIN'		=> 'Prefiks more počinjati sa slovom i može da sadrži samo slova, brojeve i donju crticu.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'				=> 'Greška pri instalaciji baze',
	'INST_ERR_NO_DB'			=> 'Ne mogu da učitam PHP modul za izabrani tip baze',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Prefiks koji ste uneli je neispravan. Mora da počinje sa slovom i mora da sadrži samo slova, brojeve i donju crtu.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Prefiks tabele koji ste izabrali je predugačak. Maksimalna dužina je %d karaktera.',
	'INST_ERR_DB_NO_NAME'		=> 'Niste odredili ime baze',
	'INST_ERR_DB_FORUM_PATH'	=> 'Fajl baze podataka se nalazi u direktorijumu vašeg foruma. Ovaj fajl bi trebalo da cuvate na lokaciji koja nije web dostupna',
	'INST_ERR_DB_CONNECT'		=> 'Ne mogu da se povežem na bazu, pogledajte poruku o grešci ispod',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Baza i folder u kome se nalazi moraju biti upisivi.',
	'INST_ERR_DB_NO_ERROR'		=> 'Nije data poruka o grešci',
	'INST_ERR_PREFIX'			=> 'Tabele sa izabranim prefiksom već postoje, molimo vas da izaberete alternativni.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Verzija MySQL-a instalirana na ovoj mašini je nekompatibilna sa “MySQL sa MySQLi Ekstenzijom” opcijom koju ste izabrali. Molimo vas da pokušate sa “MySQL” opcijom.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'Verzija SQLite ekstenzije koju imate instaliranu je previše stara, mora biti ažurirana bar na verziju 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Verzija Oracle-a instalirana na ovoj mašini zahteva od vas da podesite <var>NLS_CHARACTERSET</var> parametar u <var>UTF8</var>. Ili nadogradite vašu instalaciju na 9.2+ ili promenite parametar.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Baza koju ste izabrali nije kreirana u <var>UNICODE</var> ili <var>UTF8</var> enkoding. Pokušajte instalaciju sa bazom u <var>UNICODE</var> ili <var>UTF8</var> enkodingu',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Fajl šeme nije upisiv',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail konfiguracija',

	// Package info
	'PACKAGE_VERSION'					=> 'Instalirana verzija paketa',
	'UPDATE_INCOMPLETE'				=> 'Vaša instalacija phpBB-a nije ispravno nadograđena.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Pogledajte informacije ispod da bi ispravili ovu grešku.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Nekompletna nadogradnja</h1>

	<p>Primetili smo da je poslednja nadogradnja ili instalacija phpBB-a nedovršena. Posetite <a href="%1$s" title="%1$s">nadogradnju baze</a>, i proverite da je opcija <em>Nadogradi samo bazu</em> izabrana i kliknite na <strong>Potvrdi</strong>. Ne zaboravite da obrišete "install" folder nakon što ažurirate bazu.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Nova verzija <strong>%1$s</strong> je dostupna. Pročitajte <a href="%2$s" title="%2$s"><strong>obaveštenje o izdanju</strong></a> da bi videli šta je novo i kako da se nadogradite.',
	'SERVER_CONFIG'				=> 'Konfiguracija Servera',
	'SCRIPT_PATH'				=> 'Putanja skripti',
	'SCRIPT_PATH_EXPLAIN'		=> 'Putanj gde je phpBB lociran relativno id naziva domena',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Hvala, Uprava',
	'CONFIG_SITE_DESC'				=> 'Kratak tekst za opis vašeg foruma',
	'CONFIG_SITENAME'				=> 'vašdomen.com',

	'DEFAULT_INSTALL_POST'			=> '<t>Ovo je primer posta u vašoj phpBB3 instalaciji. Izgleda da je sve u redu. Ovaj post možete obrisati i nastaviti da podešavate board. Tokom instalacija prvoj kategoriji i prvom postu su dodeljene odgovarajuće dozvole za predefinisane korisničeke grupe, administratore, botove, globalne moderatore, goste, registrovane korisnike i registrovane COPPA korisnike. Ukoliko odlučite da obrišete prvu kategoriju i prvi forum, ne zaboravite da dodelite dozvole za sve korisničke grupe za sve nove kategorije i forume koje kreirate. Preporučujemo da preimenujete prvu kategoriju i prvi forum i kopirate njihove dozvole kada budete kreirali nove kategorije i forume. Zabavite se!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Moja prva kategorija',
	'FORUMS_TEST_FORUM_DESC'		=> 'Opis vašeg prvog foruma.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Vaš prvi forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Admin sajta',
	'REPORT_WAREZ'					=> 'Post sadrži linkove ka ilegalnom ili piratskom softveru.',
	'REPORT_SPAM'					=> 'Prijavljen post ima jedinu svrhu da reklamira neki sajt ili neki proizvod.',
	'REPORT_OFF_TOPIC'				=> 'Prijavljeni post je promašena tema.',
	'REPORT_OTHER'					=> 'Prijavljen post se ne uklapa ni u jednu drugu kategoriju, molimo vas da koristite polje da dalje informacije.',

	'SMILIES_ARROW'					=> 'Strelica',
	'SMILIES_CONFUSED'				=> 'Zbunjen',
	'SMILIES_COOL'					=> 'Kul',
	'SMILIES_CRYING'				=> 'Plače ili je veoma tužan',
	'SMILIES_EMARRASSED'			=> 'Posramljen',
	'SMILIES_EVIL'					=> 'Zao ili jako besan',
	'SMILIES_EXCLAMATION'			=> 'Uzvik',
	'SMILIES_GEEK'					=> 'Štreber',
	'SMILIES_IDEA'					=> 'Ideja',
	'SMILIES_LAUGHING'				=> 'Smeh',
	'SMILIES_MAD'					=> 'Zao',
	'SMILIES_MR_GREEN'				=> 'Gospodin Zeleni',
	'SMILIES_NEUTRAL'				=> 'Neutralan',
	'SMILIES_QUESTION'				=> 'Čuđenje',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Kolutanje očima',
	'SMILIES_SAD'					=> 'Tužan',
	'SMILIES_SHOCKED'				=> 'Šokiran',
	'SMILIES_SMILE'					=> 'Smeh',
	'SMILIES_SURPRISED'				=> 'Izneneđen',
	'SMILIES_TWISTED_EVIL'			=> 'Skriveno zlo',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Veoma srećan',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'Dobrodošli na phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Pregled',
	'MENU_INTRO'		=> 'Uvod',
	'MENU_LICENSE'		=> 'Licenca',
	'MENU_SUPPORT'		=> 'Podrška',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Pravljenje konfiguracionog fajla',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Dodavanje konfiguracionih podešavanja',
	'TASK_ADD_DEFAULT_DATA'				=> 'Dodavanje podešavanja u bazu',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Pravljenje fajla šeme za bazu',
	'TASK_SETUP_DATABASE'				=> 'Podešavanja baze',
	'TASK_CREATE_TABLES'				=> 'Pravljenje tabela',

	// Install data
	'TASK_ADD_BOTS'				=> 'Registracija botova',
	'TASK_ADD_LANGUAGES'		=> 'Instalacija dostupnih jezika',
	'TASK_ADD_MODULES'			=> 'Instalacija modula',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Pravljenje indeksa pretrage',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Instalacija ekstenzija',
	'TASK_NOTIFY_USER'			=> 'Slanje email-a obaveštenja',
	'TASK_POPULATE_MIGRATIONS'	=> 'Ispunjavanje migracija',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Instalacija je uspešno završena',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modul nije pronašen',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Modul nije nađen jer je servis, %s, nedefinisan.',

	'TASK_NOT_FOUND'				=> 'Zadatak nije našen',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Zadatan nije nađen jer je servis, %s, nedefinisan.',

	'SKIP_MODULE'	=> 'Preskoči “%s” modul',
	'SKIP_TASK'		=> 'Preskoči “%s” zadatak',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Svi servisi zadataka za instaler bi trebalo da počinju sa “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Definicije servisa zadataka za instaler su neispravne. Dato ime servisa “%1$s”, očekivano namespace klase je “%2$s”. Za više informacija pogledajte dokumentaciju za task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Konfiguracioni fajl instalacije nije upisiv.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Instaliraj phpBB',
	'CLI_UPDATE_BOARD'				=> 'Nadogradi phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Prikaži konfiguraciju koja će biti korišćena',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Proveri konfiguracioni fajl',
	'CLI_CONFIG_FILE'				=> 'Konfiguracioni fajl koji se korist',
	'MISSING_FILE'					=> 'Ne mogu da pristupim fajlu %1$s',
	'MISSING_DATA'					=> 'Konfiguracionom fajlu nedostaju podaci ili sadrži neispravna podešavanja.',
	'INVALID_YAML_FILE'				=> 'Ne mogu da obradim YAML fajl %1$s',
	'CONFIGURATION_VALID'			=> 'Konfiguracioni fajl je ispravan',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Nadogradi phpBB Instalaciju',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Sa ovom opcijom, moguće je da nadogradite vašu phpBB instalaciju na poslednju verziju.<br />Tokom procesa svi vaši fajlovi će biti provereni za njihov integritet. U mogućnosti ste da pregledate sve razlike i fajlove pre nadogradnje.<br /><br />Nadogradnja samog fajla može se izvršiti na dva različita načina.</p><h2>Manuelna Nadogradnja</h2><p>Sa ovom nadogradnjom možete samo preuzeti vaš lični set izmenjenih fajlova da bi bili sigurni da ne izgubite modifikacije koje ste možda uradili. Nakon preuzimanja ovog paketa potrebno je da ručno pošaljete fajlove na njihovu ispravnu poziciju u phpBB root direktorijumu. Kada to uradite, možete ponovo proveriti status fajla da bi provereili da li ste pomerili fajlove u njihove tačne lokacije. Ako je sve ispravno ažurirano bićete prosleđeni na ažuriranje baze.</p><h2>Napredna nadogradnja sa FTP-om</h2><p>Ovaj metod je sličan prvom ali bez potrebe da preuzimate promenjene fajlove i šaljete ih na vaš server. Ovo će biti urađeno umesto vas. Da bi koristili ovaj metod potrebno je da znate detalje o vašem FTP nalogu jer će vam oni biti zatraženi. Kada završite proceduru bićete redirektovani na ažuriranje fajlova gde možete proveriti da li je sve ažurirano korektno.',
	'UPDATE_INSTRUCTIONS'			=> '
	
	<h1>Obaveštenje o izdanju</h1>
	
	<p>Molimo Vas da pričitate obaveštenje o izdanju za poslednju verziju pre nego što krenete na proces nadogradnje, jer sadrži korisne informacije. Takođe sadrži i potpune linkove za preuzimanje kao i log sa izmenama.</p>

	<br />

	<h1>Kako da nadogradite vašu instalaciju sa Full Package</h1>

	<p>The recommended way of updating your installation is using the full package. If core phpBB files have been modified in your installation you may wish to use the advanced update package in order to not lose these changes. You are also able to update your installation using the other methods listed within the INSTALL.html document. The steps for updating phpBB3 using the full package are:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Backup all board files and the database.</strong></li>
			<li>Go to the <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com downloads page</a> and download the latest "Full Package" archive.</li>
			<li>Unpack the archive.</li>
			<li>Remove (delete) the <code class="inline">config.php</code> file, and the <code class="inline">/images</code>, <code class="inline">/store</code> and <code class="inline">/files</code> folders <em>from the package</em> (not your site).</li>
			<li>Go to the ACP, Board settings, and make sure prosilver is set as the default style. If not, set it to prosilver.</li>
			<li>Delete the <code class="inline">/vendor</code> and <code class="inline">/cache</code> folders from the board’s root folder on the host.</li>
			<li>Via FTP or SSH upload the remaining files and folders (that is, the remaining CONTENTS of the phpBB3 folder) to the root folder of your board installation on the server, overwriting the existing files. (Note: take care not to delete any extensions in your <code class="inline">/ext</code> folder when uploading the new phpBB3 contents.)</li>
			<li><strong><a href="%1$s" title="%1$s">Now start the update process by pointing your browser to the install folder</a>.</strong></li>
			<li>Follow the steps to update the database and let that run to completion.</li>
			<li>Via FTP or SSH delete the <code class="inline">/install</code> folder from the root of your board installation.<br><br></li>
		</ol>

		<p>You now have a new up to date board containing all your users and posts. Follow up tasks:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Update your language pack</li>
			<li>Update your style<br><br></li>
		</ul>

		<h1>How to update your installation with the Advanced Update Package</h1>

		<p>The advanced update package is only recommended for expert users in case core phpBB files have been modified in your installation. You are also able to update your installation using the methods listed within the INSTALL.html document. The steps for updating phpBB3 using the advanced update package are:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com downloads page</a> and download the "Advanced Update Package" archive.</li>
			<li>Unpack the archive.</li>
			<li>Upload the complete uncompressed "install" and "vendor" folders to your phpBB root directory (where your config.php file is).<br><br></li>
		</ol>

		<p>Once uploaded your board will be offline for normal users due to the install directory you uploaded now being present.<br /><br />
		<strong><a href="%1$s" title="%1$s">Now start the update process by pointing your browser to the install folder</a>.</strong><br />
		<br />
		You will then be guided through the update process. You will be notified once the update is complete.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Type of update to run',

	'UPDATE_TYPE_ALL'		=> 'Update filesystem and database',
	'UPDATE_TYPE_DB_ONLY'	=> 'Update database only',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'File updater methods',

	'UPDATE_FILE_METHOD'			=> 'File updater method',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Download modified files in an archive',
	'UPDATE_FILE_METHOD_FTP'		=> 'Update files via FTP (Automatic)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Update files via direct file access (Automatic)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Izaberite format preuzimanja arhive',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP podešavanja',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'No valid update directory was found, please make sure you uploaded the relevant files.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'OLD_UPDATE_FILES'				=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Update files',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Check files to update',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'The file differ failed to open %s.',

	'UPDATE_FILE_DIFF'		=> 'Diffing changed files',
	'ALL_FILES_DIFFED'		=> 'All modified files has been diffed.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Update files',

	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_CONFLICTS'				=> 'Download merge conflicts archive',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Search for &lt;&lt;&lt; to spot conflicts',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download modified files archive',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Once downloaded you should unpack the archive. You will find the modified files you need to upload to your phpBB root directory within it. Please upload the files to their respective locations then. After you have uploaded all files, you may continue with the update process.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'File is already up to date.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'File not allowed to be diffed.',
	'FILE_USED'						=> 'Information used from',			// Single file
	'FILES_CONFLICT'				=> 'Conflict files',
	'FILES_CONFLICT_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. phpBB determined that these files create conflicts if they are tried to be merged. Please investigate the conflicts and try to manually resolve them or continue the update choosing the preferred merging method. If you resolve the conflicts manually check the files again after you modified them. You are also able to choose between the preferred merge method for every file. The first one will result in a file where the conflicting lines from your old file will be lost, the other one will result in losing the changes from the newer file.',
	'FILES_DELETED'					=> 'Deleted files',
	'FILES_DELETED_EXPLAIN'			=> 'The following files do not exist in the new version. These files have to be deleted from your installation.',
	'FILES_MODIFIED'				=> 'Modified files',
	'FILES_MODIFIED_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. The updated file will be a merge between your modifications and the new file.',
	'FILES_NEW'						=> 'New files',
	'FILES_NEW_EXPLAIN'				=> 'The following files currently do not exist within your installation. These files will be added to your installation.',
	'FILES_NEW_CONFLICT'			=> 'New conflicting files',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'The following files are new within the latest version but it has been determined that there is already a file with the same name within the same position. This file will be overwritten by the new file.',
	'FILES_NOT_MODIFIED'			=> 'Not modified files',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'The following files are not modified and represent the original phpBB files from the version you want to update from.',
	'FILES_UP_TO_DATE'				=> 'Already updated files',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'The following files are already up to date and do not need to be updated.',
	'FILES_VERSION'					=> 'Files Version',
	'TOGGLE_DISPLAY'				=> 'View/Hide file list',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Updating files',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'File updater “%1$s“ has failed. The installer will try to fallback to “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'The file updater failed. No further fallback methods are available.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continue update process',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Check files again',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Update database',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'The database update was successful.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Updating extensions',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'The specified convertor does not exist.',
	'DEV_NO_TEST_FILE'			=> 'No value has been specified for the test_file variable in the convertor. If you are a user of this convertor, you should not be seeing this error, please report this message to the convertor author. If you are a convertor author, you must specify the name of a file which exists in the source board to allow the path to it to be verified.',
	'COULD_NOT_FIND_PATH'		=> 'Could not find path to your former board. Please check your settings and try again.<br />» %s was specified as the source path.',
	'CONFIG_PHPBB_EMPTY'		=> 'The phpBB3 config variable for “%s” is empty.',

	'MAKE_FOLDER_WRITABLE'		=> 'Please make sure that this folder exists and is writable by the webserver then try again:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Please make sure that these folders exist and are writable by the webserver then try again:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Test again',

	'NO_TABLES_FOUND'			=> 'No tables found.',
	'TABLES_MISSING'			=> 'Could not find these tables<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Please check your table prefix and try again.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Continue conversion',
	'CONTINUE_CONVERT_BODY'		=> 'A previous conversion attempt has been determined. You are now able to choose between starting a new conversion or continuing the conversion.',
	'CONVERT_NEW_CONVERSION'	=> 'New conversion',
	'CONTINUE_OLD_CONVERSION'	=> 'Continue previously started conversion',

	// Start conversion
	'SUB_INTRO'					=> 'Introduction',
	'CONVERT_INTRO'				=> 'Welcome to the phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'From here, you are able to import data from other (installed) board systems. The list below shows all the conversion modules currently available. If there is no convertor shown in this list for the board software you wish to convert from, please check our website where further conversion modules may be available for download.',
	'AVAILABLE_CONVERTORS'		=> 'Available convertors',
	'NO_CONVERTORS'				=> 'No convertors are available for use.',
	'CONVERT_OPTIONS'			=> 'Options',
	'SOFTWARE'					=> 'Board software',
	'VERSION'					=> 'Version',
	'CONVERT'					=> 'Convert',

	// Settings
	'STAGE_SETTINGS'			=> 'Settings',
	'TABLE_PREFIX_SAME'			=> 'The table prefix needs to be the one used by the software you are converting from.<br />» Specified table prefix was %s.',
	'DEFAULT_PREFIX_IS'			=> 'The convertor was not able to find tables with the specified prefix. Please make sure you have entered the correct details for the board you are converting from. The default table prefix for %1$s is <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Specify conversion options',
	'FORUM_PATH'				=> 'Board path',
	'FORUM_PATH_EXPLAIN'		=> 'This is the <strong>relative</strong> path on disk to your former board from the <strong>root of this phpBB3 installation</strong>.',
	'REFRESH_PAGE'				=> 'Refresh page to continue conversion',
	'REFRESH_PAGE_EXPLAIN'		=> 'If set to yes, the convertor will refresh the page to continue the conversion after having finished a step. If this is your first conversion for testing purposes and to determine any errors in advance, we suggest to set this to No.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Conversion in progress',

	'AUTHOR_NOTES'				=> 'Author notes<br />» %s',
	'STARTING_CONVERT'			=> 'Starting conversion process',
	'CONFIG_CONVERT'			=> 'Converting the configuration',
	'DONE'						=> 'Done',
	'PREPROCESS_STEP'			=> 'Executing pre-processing functions/queries',
	'FILLING_TABLE'				=> 'Filling table <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Filling tables',
	'DB_ERR_INSERT'				=> 'Error while processing <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'Error while processing <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error while executing <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error while executing <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Error while running <code>SELECT</code> query.',
	'STEP_PERCENT_COMPLETED'	=> 'Step <strong>%d</strong> of <strong>%d</strong>',
	'FINAL_STEP'				=> 'Process final step',
	'SYNC_FORUMS'				=> 'Starting to synchronise forums',
	'SYNC_POST_COUNT'			=> 'Synchronising post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synchronising post_counts from <var>entry</var> %1$s to %2$s.',
	'SYNC_TOPICS'				=> 'Starting to synchronise topics',
	'SYNC_TOPIC_ID'				=> 'Synchronising topics from <var>topic_id</var> %1$s to %2$s.',
	'PROCESS_LAST'					=> 'Processing last statements',
	'UPDATE_TOPICS_POSTED'		=> 'Generating topics posted information',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'An error occurred while generating topics posted information. You can retry this step in the ACP after the conversion process is completed.',
	'CONTINUE_LAST'				=> 'Continue last statements',
	'CLEAN_VERIFY'				=> 'Cleaning up and verifying the final structure',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Naming conflict: %s and %s are both aliases<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Conversion completed',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'You have now successfully converted your board to phpBB 3.3. You can now login and <a href="../">access your board</a>. Please ensure that the settings were transferred correctly before enabling your board by deleting the install directory. Remember that help on using phpBB is available online via the <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Documentation</a> and the <a href="https://www.phpbb.com/community/viewforum.php?f=661">support forums</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP slanje prikačenih fajlova je uključeno na starom boardu. Molimo vas da prekopirate sve prikačene fajlove u određeni direktorijum, isključite ftp slanje i proverite da je izabran ispravan direktorijum za slanje. Ako ste ovo uradili, restartujte konvertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nema konfiguracione informacije za konverziju.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Ne mogu da dobijem informaciju o pristupu forumu.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Ne mogu da dobijem kategorije.',
	'CONV_ERROR_GET_CONFIG'				=> 'Ne mogu da dobijem configuraciju vašeg foruma.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Ne mogu da pristupim/pročitam "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Ne mogu da dobijem informacije o autorizaciji grupe.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Nekonsistencija u tabeli sa grupama detektovana u add_bots() - moraćete da dodate sve specijalne grupeo ako to uradite manuelno.',
	'CONV_ERROR_INSERT_BOT'				=> 'Ne mogu da dodam bot-a u tabelu korisnika.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Ne mogu da dodam bota u bots tabelu.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Ne mogu da ubacim korisnika u user_group tabelu.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Greška u prosleđivaču poruka',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Za developere: morate odrediti $convertor[\'avatar_path\'] da bi koristili %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Relativna putanja do foruma nie određena.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Za developere: morate odrediti $convertor[\'avatar_gallery_path\'] da bi koristili %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grupa "%1$s" ne može biti pronađena u %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Za developere: morate odrediti $convertor[\'ranks_path\'] da bi koristili %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Za developere: morate odrediti $convertor[\'smilies_path\'] da bi koristili %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Za developere: morate odrediti $convertor[\'upload_dir\'] da bi koristili %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Ne mogu da ubacim/ažuriram podešavanja dozvola.',
	'CONV_ERROR_PM_COUNT'				=> 'Ne mogu da izaberem folder pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Ne mogu da ubacim nov forum menjajući staru kategoriju.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Ne mogu da ubacim nov forum menjajući stari forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Ne mogu da dobijem informaciju o autorijaciji korisnika.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Pogrešna grupa "%1$s" definisana u %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Ova stranica sakuplja podatke neophodne za pristup izvoru boarda. Unesite detalje o bazi vašeg bivšeg boarda; konverter neće izmeniti ništa u bazi. Izvorni board bi trebalo onemogućiti da bi se omogućila nesmetana konverzija.',
	'CONV_SAVED_MESSAGES'				=> 'Sačuvane poruke',

	'PRE_CONVERT_COMPLETE'			=> 'All pre-conversion steps have successfully been completed. You may now begin the actual conversion process. Please note that you may have to manually do and adjust several things. After conversion, especially check the permissions assigned, rebuild your search index which is not converted and also make sure files got copied correctly, for example avatars and smilies.',
));
