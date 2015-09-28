<?php
/**
*
* Toto rozšíření přídá na fórum indikátor načítání.
*
* Chyby v překladu prosím hlaste na adrese http://forum.czapp.cz/viewforum.php?f=17
*
* @copyright CZApp (http://www.czapp.cz)
* @original copyright (c) 2014 dmzx <http://www.dmzx-web.net>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* Následující kód neměnit!
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Poznámka vývojářů
//
// Všechny soubory musí být uložené v kódování UTF-8 bez BOM.
//
// Zástupné znaky nyní mohou obsahovat informaci o pořadí.
// Například místo 'Stánka %s z %s' můžete (a doporučuje se) napsat 'Stránka %1$s z %2$s'.
// To umožňuje při překládání upravit pořadí výpisu dat při zachování jeho správnosti.
//
// Informaci o pořadí nepotřebujete v případě, že je zástupný znak pouze jeden.
// Například zápis '%d zpráv' je v pořádku.
//
// Stejné je to v případě, kdy jsou použity dva zástupné znaky k vytvoření webové adresy z textu,
// kde nepotřebuje rozlišit pořadí zástupných znaků.
// Například zápis 'Klikněte %szde%s' je v pořádku.
//
// Pro zjednodušení vaší práce, můžete použít některé z následujících znaků a zkopírovat je do vašeho textu:
// ’ » “ ” … '
//

$lang = array_merge($lang, array(
	'LOADINGINDICATOR'	=> 'Načítání...',
));
