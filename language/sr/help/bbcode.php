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

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Prikaz slika u postovima',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Uvod',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Kreiranje linkova',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Pravljenje listi',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Drugo',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Citiranje i tekst fiksirane širine',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Formatiranje teksta',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Fajlove sada možete postaviti u bilo kojem delu posta koristeći novi <strong>[attachment=][/attachment]</strong> BBKod, ukoliko je opcija fajlova omogućena od administratora i imate odgovarajuće dozvole. Na ekraju posta je padajuća lista (dugme) za ubacivanje fajlova.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Dodavanje fajlova u post',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBKod sadrži tag za dodavanje slika u vaš post. Dve vrlo važne stvari koje treba da znate kada koristite ovaj tag su: mnogi korisnici ne vole kada ima previše slika u postu, i drugo, slika koju prikazujete mora već da postoji na internetu (ne može da bude samo na Vašem kompjuteru, osim ako nemate web server!). Da bi prikazali sliku morate da obuhvatite URL ka slici sa <strong>[img][/img]</strong> tagovima. Na primer:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Kao što je naznačeno u URL sekciji iznad, možete umotati sliku u <strong>[url][/url]</strong> tag ukoliko želite, npr.<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />će dati:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Dodavanje slika u post',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBKod je specijalna implementacija HTML-a. Mogućnost da koristite BBKod u vašim postovima je određena od strane administratora. Dodatno, možete onemogućiti BBKod po postu koristeći formu za pisanje posta.. BBKod ima sličan stil kao i HTML, tagovi su okruženi pravougaonim zagradama [ i ] umesto da se koriste &lt; i &gt; i nudi veću kontrolu šta se i kako prikazuje. U zavisnosti on šablona koji koristite dodavanje BBKod-a može biti mnogo lakše koristeći ikonice na formi za post. Čak i sa tim može vam koristiti ovo uputstvo.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Šta je BBKod?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBKod podržava nekoliko načina za kreiranje URI-ja (Uniform Resource Indicators) poznatijim kao URLs.<ul><li>Prvi od ova dva koristi <strong>[url=][/url]</strong> tag, šta god da unesete posle znaka = će sadržaj tog taga tretirati kao URL. Na primer da postavite link na phpBB.com možete da koristite:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Posetite phpBB!<strong>[/url]</strong><br /><br />Ovo će generisati sledeći link, <a href="https://www.phpbb.com/">Posetite phpBB!</a> Znajte da se link otvara u istom prozoru ili u novom prozoru u zavisnosti od podešavanja u pregledaču korisnika.</li><li>Ukoliko želite da se sam URL prikaže kao link, možete uraditi ovo:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Ovo će generisati sledeći linkk, <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Dodatno, phpBB ima opciju <i>Magičnih Linkova</i>, što će svaki ispravni URL pretvoriti u link bez potrebe da dodajete bilo kakve tagove ili http:// prefiks. Na primer, ako upišete www.phpbb.com to će automatski postati link koji vodi na <a href="http://www.phpbb.com/">www.phpbb.com</a> kada budete pregledali poruku.</li><li>Isto važi i za email adrese, možete eksplicitno naznačiti email adresu npr:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />što će dati <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> ili možete prosto uneti no.one@domain.adr u vađoj poruci i email adresa će biti automatski konvertovana kada pudete pregledali poruku.</li></ul>Kao sa svim BBKod-ovima možete obuhvatiti bilo koji drugi tag kao <strong>[img][/img]</strong> (pogledajte sledeći unos), <strong>[b][/b]</strong>, itd. Kao i sa tagovima za formatiranje, na vama je da ispravno unesete otvorene i zatvorene zagrade, na primer:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /> <span style="text-decoration: underline">nije</span> ispravno i može dovesti do toga da se vaš post izbriše, tako da budite pažljivi.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Link ka drugom sajtu',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Drugi tip liste, poređana lista, daje vam kontoru šta se prikazuje pre svake stavke. Da bi napravi li poređanu listu koristite <strong>[list=1][/list]</strong> da bi napravili brojevnu listu ili <strong>[list=a][/list]</strong> za abecednu listu. Kao i sa nepoređanom listom, stavke su određene korišćenjem <strong>[*]</strong>. Na primer:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Idi u prodavnicu<br /><strong>[*]</strong>Kupi kompjuter<br /><strong>[*]</strong>Opsuj kompjuter kada se blokira<br /><strong>[/list]</strong><br /><br />će generisati sledeće:<ol style="list-style-type: decimal;"><li>Idi u prodavnicu</li><li>Kupi kompjuter</li><li>Opsuj kompjuter kada se blokira</li></ol>Za abecednu listu bi koristili:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Prvi mogući odgovor<br /><strong>[*]</strong>Drugi mogući odgovor<br /><strong>[*]</strong>Treći mogući odgovor<br /><strong>[/list]</strong><br /><br />daje<ol style="list-style-type: lower-alpha"><li>Prvi mogući odgovor</li><li>Drugi mogući odgovor</li><li>Treći mogući odgovor</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Prvi mogući odgovor<br /><strong>[*]</strong>Drugi mogući odgovor<br /><strong>[*]</strong>Treći mogući odgovor<br /><strong>[/list]</strong><br /><br />daje<ol style="list-style-type: upper-alpha"><li>Prvi mogući odgovor</li><li>Drugi mogući odgovor</li><li>Treći mogući odgovor</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Prvi mogući odgovor<br /><strong>[*]</strong>Drugi mogući odgovor<br /><strong>[*]</strong>Treći mogući odgovor<br /><strong>[/list]</strong><br /><br />daje<ol style="list-style-type: lower-roman"><li>Prvi mogući odgovor</li><li>Drugi mogući odgovor</li><li>Treći mogući odgovor</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Prvi mogući odgovor<br /><strong>[*]</strong>Drugi mogući odgovor<br /><strong>[*]</strong>Treći mogući odgovor<br /><strong>[/list]</strong><br /><br />daje<ol style="list-style-type: upper-roman"><li>Prvi mogući odgovor</li><li>Drugi mogući odgovor</li><li>Treći mogući odgovor</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Kreiranje poređane liste',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBKod podržava dva tipa lista, poređane i nepoređane. Praktično su iste kao i liste u HTML-u. Nepoređana lista prikazuje svaku stavku u listi sekvencijalno jednu za drugom tako što svaku stavku uvuče sa tačkastim karakterom. Da bi napravili nepoređanu listu koristite <strong>[list][/list]</strong> i definišete svaku stavku u okviru liste koristeći <strong>[*]</strong>. Na primer da bi napravili listu omiljenih boja koristićete:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Crvena<br /><strong>[*]</strong>Plava<br /><strong>[*]</strong>Žuta<br /><strong>[/list]</strong><br /><br />To će dati sledeću listu:<ul><li>Crvena</li><li>Plava</li><li>Žuta</li></ul><br />Alternativno možete definisati stil liste koristeći <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, ili <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Kreiranje nepoređane liste',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Ukoliko ste administrator ovog board i imate odgovarajuće dozvole, možete dodati još BBKod-ova koristeći sekciju proizvoljnih BBKod-ova.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Mogu li da dodam sopstvene tagove?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Ukoliko želite da prikažete deo koda ili bilo šta što zahteva fisnu širinu, npr. font tipa Courier, treba da obuhvatite tekst u <strong>[code][/code]</strong> tagove, npr.<br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong><br /><br />Svako formatiranje koje se nalazi između <strong>[code][/code]</strong> tagova ostaje sačuvano.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Prikaz koda ili teksta sa fiksnom širinom fonta',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Postoje dva načina pomoću kojih možete da citirate tekst, sa referencom ili bez.<ul><li>Kada koristite Citiraj funkciju da odgovorite na postvidećete da je tekst posta dodat u poruku i obuhvaćen <strong>[quote=&quot;&quot;][/quote]</strong> blokom. Ovaj metod vam omogućava da citirate sa referencom ka osobo ili šta god vi izaberete da stavite! Na primer da citirate tekst koji je Mr. Blobby napisao, upisaćete:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Tekst koji je Mr. Blobby napisao ide ovde<strong>[/quote]</strong><br /><br />Rezultat je automatsko dodavanje &quot;Mr. Blobby je napisao:&quot; pre samog teksta. Zapamtite da  <strong>morate</strong> da ubacite simbole za citat &quot;&quot; oko imana koje citirate, oni nisu opcioni.</li><li>Drugi metod vam omogućava da prosto citirate nešto. Da bi koristili ovo, obuhvatite teks u <strong>[quote][/quote]</strong> tagove. Kada pogledate poruku videćete da je teks jednostavno u citiranom bloku.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Citiranje teksta u odgovorima',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBKod sadrži tagove koji omogućuju da brzo izmenite osnovne stilove teksta. To se postiže na sledeći način: <ul><li>Da bi deo teksta bio podebljan, obuhvatite tekst koristeći <strong>[b][/b]</strong>, npr. <br /><br /><strong>[b]</strong>Zdravo<strong>[/b]</strong><br /><br />će postati <strong>Zdravo</strong></li><li>Za podvučeni tekst koristite <strong>[u][/u]</strong>, na primer:<br /><br /><strong>[u]</strong>Dobro jutro<strong>[/u]</strong><br /><br />postaje <span style="text-decoration: underline">Dobro jutro</span></li><li>Za kosa slova koristite <strong>[i][/i]</strong>, npr.<br /><br />Ovo je <strong>[i]</strong>Sjajno!<strong>[/i]</strong><br /><br />daje Ovo je <i>Sjajno!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Kako da napravite podeblja, podvučen i kosi tekst',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Da izmenite boju ili veličinu teksta koriste se sledeći tagovi. Znajte da će konačni izgled zavisiti i od korisničkog pretraživača i sistema: <ul><li>Menjanje boje teksta se ostvaruje tako što tekst obuhvatite sa <strong>[color=][/color]</strong>. Možete koristiti prepoznatljivo ime boje (npr. red, blue, yellow, itd.) ili heksadecimalnu vrednost, npr. #FFFFFF, #000000. Na primer, da bi napravili crveni tekst koristite:<br /><br /><strong>[color=red]</strong>Zdravo!<strong>[/color]</strong><br /><br />ili<br /><br /><strong>[color=#FF0000]</strong>Zdravo!<strong>[/color]</strong><br /><br />Oba načina daju <span style="color:red">Zdravo!</span></li><li>Veličina teksta se slično menja koristeći <strong>[size=][/size]</strong>. Ovaj tag zavisi od šablona koji korisnik koristi ali preporučeni format je brojčana vrednost koja predsavlja veličinu teksta u procentima, počevši od 20 (veoma mala slova) do 200 (veoma velika slova). Na primer:<br /><br /><strong>[size=30]</strong>MALA<strong>[/size]</strong><br /><br />će biti <span style="font-size:30%;">MALA</span><br /><br />dok:<br /><br /><strong>[size=200]</strong>OGROMNA!<strong>[/size]</strong><br /><br />daje <span style="font-size:200%;">OGROMNA!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Kako da promenite veličinu i boju teksta',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Da, naravno da možete, na bi na primer privukli nečiju pažnju možete napisati:<br /><br /><strong>[size=200][color=red][b]</strong>VIDI ME!<strong>[/b][/color][/size]</strong><br /><br />što daje <span style="color:red;font-size:200%;"><strong>VIDI ME!</strong></span><br /><br />Ne preporučujemo da koristite puno ovakvog teksta! Zapamtite, to je na vama, kao autoru da se pobrinete da su tagovi pravilno zatvoreni. Na primer, ovo je neispravno:<br /><br /><strong>[b][u]</strong>Ovo je neispravno<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Mogu li da kombinujem tagove za formatiranje?',
));
