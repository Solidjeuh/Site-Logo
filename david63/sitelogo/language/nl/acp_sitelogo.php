<?php
/**
*
* @package Site Logo Extension
* @copyright (c) 2014 david63
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* * @license GNU General Public License, version 2 (GPL-2.0)
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
	'BANNER_HEIGHT'						=> 'Banner hoogte',
	'BANNER_HEIGHT_EXPLAIN'				=> 'Deze instelling zal de afmetingen instellen van het gedeelte voor de site banner afbeelding. De werkelijke afbeelding grootte kan moeten aangepast worden om in dat gedeelte te passen, anders zou het kunnen dat deze niet correct wordt weergegeven.',
	'BANNER_OPTIONS'					=> 'Banner opties',
	'BANNER_RADIUS'						=> 'Banner radius',
	'BANNER_RADIUS_EXPLAIN'				=> 'Kies het aantal pixels voor het afronden van de banner hoeken. Dit instellen op 0 betekent dat de banner rechte hoeken zal hebben..',

	'CLICK_TO_SELECT'					=> 'Klik in de box om een kleur te selecteren',

	'EXTENDED_SITE_DESCRIPTION'			=> 'Uitgebreide site beschrijving',
	'EXTENDED_SITE_DESCRIPTION_EXPLAIN'	=> 'Dit zal je toestaan om een site beschrijving aan te maken die groter is dan de standaard 255 karakter limiet en zal de standaard site beschrijving <strong>vervangen</strong>.<br /><strong>Let op:</strong> Indien de tekst toch iets te lang is kunnen er enkele vreemde “neveneffecten” ontstaan. De meeste van deze neveneffecten kunnen opgelost worden door enkele andere instellingen aan te passen.',

	'HEADER_COLOUR'						=> 'Header bar kleur',
	'HEADER_COLOUR_EXPLAIN'				=> 'Kies een kleur voor de header achtergrond.<br />Deze optie instellen zal “waar mogelijk” dezelfde “gradient offsets” toepassen op de achtergrond kleur dat gebruikt wordt in “prosilver”.<br /><em>Standaard is = #12A3EB</em>',
	'HEADER_OPTIONS'					=> 'Header opties',

	'LOGO_CENTRE'						=> 'Midden',
	'LOGO_LEFT'							=> 'Links',
	'LOGO_RIGHT'						=> 'Rechts',

	'OVERRIDE_COLOUR'					=> 'Overschrijf kleur',
	'OVERRIDE_COLOUR_EXPLAIN'			=> 'Selecteer een kleur voor de Site naam en Site beschrijving die de standaard kleur in de stijl zal overschrijven.',

	'PIXELS'							=> 'px',

	'REMOVE_HEADER_BAR'					=> 'Verwijder de header bar',
	'REMOVE_HEADER_BAR_EXPLAIN'			=> 'Deze optie instellen zal het tonen van de header bar voorkomen..',

	'SEARCH_OPTIONS'					=> 'Zoek box opties',
	'SITE_BACKGROUND'					=> 'Site achtergrond',
	'SITE_BACKGROUND_IMAGE'				=> 'Pad naar de site achtergrond',
	'SITE_BACKGROUND_IMAGE_EXPLAIN'		=> 'Indien je een externe afbeelding wenst te gebruiken moet je de volledige url naar de afbeelding gebruiken, gebruik anders gewoon de locatie van de afbeelding.<br /><em>Vb: images/mijn_achtergrond.jpg - of<br />http://www.test.be/nieuwe_achtergrond.png</em>',
	'SITE_LOGO_EXPLAIN'					=> 'Hier kan je de opties instellen voor het aangepaste site logo om het standaard logo te vervangen, een aangepaste banner toe te voegen, een uitgebreide forum beschrijving toe te voegen en een achtergrond te plaatsen.',
	'SITE_LOGO_BANNER_IMAGE'			=> 'Pad naar de aangepaste banner',
	'SITE_LOGO_BANNER_IMAGE_EXPLAIN'	=> 'Indien je een externe afbeelding wenst te gebruiken moet je de volledige url naar de afbeelding gebruiken, gebruik anders gewoon de locatie van de afbeelding.<br /><em>Vb: images/mijn_banner.jpg - of<br />http://www.test.be/nieuwe_banner.png</em>',
	'SITE_LOGO_HEIGHT'					=> 'Logo hoogte',
	'SITE_LOGO_HEIGHT_EXPLAIN'			=> 'Indien je dit veld leeg laat zal de standaard hoogte gebruikt worden.<br /><em>De standaard logo hoogte is 52px.</em>',
	'SITE_LOGO_IMAGE'					=> 'Pad naar aangepast site logo.',
	'SITE_LOGO_IMAGE_EXPLAIN'			=> 'Indien je dit veld leeg laat zal het standaard logo gebruikt worden.<br />Indien je een externe afbeelding wenst te gebruiken moet je de volledige url naar de afbeelding gebruiken, gebruik anders gewoon de locatie van de afbeelding.<br /><em>Vb: images/mijn_logo.jpg - of<br />http://www.test.be/nieuwe_logo.png</em>',
	'SITE_LOGO_LEFT'					=> 'Linker hoeken',
	'SITE_LOGO_LEFT_EXPLAIN'			=> 'Rond de linker hoeken af om de banner aan te passen.',
	'SITE_LOGO_OPTIONS'					=> 'Logo opties',
	'SITE_LOGO_PIXELS'					=> 'Logo radius',
	'SITE_LOGO_PIXELS_EXPLAIN'			=> 'Kies het aantal pixels om de logo hoeken af te ronden.<br /><em>De standaard voor prosilver is 7px.</em>',
	'SITE_LOGO_POSITION'				=> 'Site logo positie',
	'SITE_LOGO_REMOVE'					=> 'Verwijder site logo',
	'SITE_LOGO_REMOVE_EXPLAIN'			=> 'Deze optie instellen zal voorkomen dat de site logo getoond wordt.',
	'SITE_LOGO_RESPONSIVE'				=> 'Maak responsive',
	'SITE_LOGO_RESPONSIVE_EXPLAIN'		=> 'Deze optie zal instellen dat het site logo goed vertoont wordt op mobiele toestellen en tablets..',
	'SITE_LOGO_RIGHT'					=> 'Rechter hoeken',
	'SITE_LOGO_RIGHT_EXPLAIN'			=> 'Rond de rechter hoeken af om de banner aan te passen.',
	'SITE_LOGO_SIZE_EXPLAIN'			=> '<strong>Let op: Deze instelling zal de afmetingen instellen van het gedeelte voor de site logo afbeelding. De werkelijke afbeelding grootte kan moeten aangepast worden om in dat gedeelte te passen, anders zou het kunnen dat deze niet correct wordt weergegeven.</strong>',
	'SITE_LOGO_URL'						=> 'Link voor de Site Logo',
	'SITE_LOGO_URL_EXPLAIN'				=> 'De link waar gebruikers doorgestuurd zullen worden als ze op het Site Logo klikken. Plaats gewoon de locatie van de link.<br /><em>Vb: mijn_site/mijn_pagina.php - of<br />http://een_site.be/mijn_pagina.html</em><br /></em><br /><strong>Door deze optie leeg te laten zal de standaard forum link gebruikt worden.</strong>',
	'SITE_LOGO_WIDTH'					=> 'Logo breedte',
	'SITE_LOGO_WIDTH_EXPLAIN'			=> 'Door dit leeg te laten zal de standaard breedte gebruikt worden.<br /><em>De standaard logo breedte is 149px.</em>',
	'SITE_NAME_BELOW'					=> 'Site naam en beschrijving onderaan het logo',
	'SITE_NAME_BELOW_EXPLAIN'			=> 'Verplaats de Site naam en Site beschrijving onderaan het logo. Dit zal ook de zoek box verplaatsen naar de top navigatie bar. De tekst zal (links/midden/rechts) geplaatst worden, net zoals het logo.',
	'SITE_NAME_SUPRESS'					=> 'Verwijder tekstweergave',
	'SITE_NAME_SUPRESS_EXPLAIN'			=> 'Deze instellingen zal voorkomen dat de Site naam en Site beschrijving weergegeven worden.',
	'SITE_SEARCH_IN_NAVBAR'				=> 'Verplaats de zoek box naar de top navigatie bar',
	'SITE_SEARCH_IN_NAVBAR_EXPLAIN'		=> 'Verplaats de zoek box naar de top navigatie bar.<br />Dit kan nodig zijn bij het gebruik van de aangepaste banner optie.',
	'SITE_SEARCH_REMOVE'				=> 'Verwijder zoek box',
	'SITE_SEARCH_REMOVE_EXPLAIN'		=> 'deze optie instellen zal de zoek box van het header paneel verwijderen.',

	'TEXT_OPTIONS'						=> 'Tekst opties',

	'USE_BANNER'						=> 'Gebruik aangepaste banner',
	'USE_BANNER_EXPLAIN'				=> 'Voeg een aangepaste banner toe aan de bovenkant van het forum.',
	'USE_EXTENED_SITE_DESC'				=> 'Gebruik een uitgebreide site beschrijving',
	'USE_EXTENED_SITE_DESC_EXPLAIN'		=> 'Vervang de standaard site beschrijving met de uitgebreide site beschrijving.',
	'USE_HEADER_COLOURS'				=> 'Aangepaste header bar kleuren',
	'USE_HEADER_COLOURS_EXPLAIN'		=> 'Gebruik aangepaste kleuren voor de forum header bar.<br /><strong>let op: Deze optie zal geen effect hebben als <em>Verwijder Header Bar</em> geselecteerd is.</strong>',
	'USE_SOLID_HEADER_COLOURS'			=> 'Gebruik effen kleuren',
	'USE_SOLID_HEADER_COLOURS_EXPLAIN'	=> 'Gebruik effen kleuren voor de header bar in plaats van uitgelopen kleuren.<br />Deze optie vereist dat <em>aangepaste header bar kleuren</em> ingesteld is op “Ja”.',
	'USE_OVERRIDE_COLOUR'				=> 'Overschrijf standaard kleuren',
	'USE_OVERRIDE_COLOUR_EXPLAIN'		=> 'Sta het overschrijven van kleuren toe om gebruikt te worden in de Site naam en Site beschrijving.',
	'USE_SITE_BACKGROUND'				=> 'Gebruik een site achtergrond',
	'USE_SITE_BACKGROUND_EXPLAIN'		=> 'Voeg de afbeelding toe die de achtergrond van jouw forum moet worden.',
));
