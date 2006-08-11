<?php
/*
  $Id: en_US.php 554 2006-04-29 16:26:53Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or execute 'locale -a' on the server.
// Examples:
// on Linux try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
define('LANGUAGE_LOCALE', 'nl_NL');

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
 if ($reverse) {
     return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
 } else {
     return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
 }
}

define('NUMERIC_DECIMAL_SEPARATOR', ',');
define('NUMERIC_THOUSANDS_SEPARATOR', '.');

// Global entries for the <html> tag
define('HTML_PARAMS','xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="en" lang="en"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', 'osCommerce');

// header text in includes/header.php
define('HEADER_TITLE_HELP', 'Help');
define('HEADER_TITLE_OSCOMMERCE_SUPPORT_SITE', 'osCommerce Support Site');
define('HEADER_TITLE_ONLINE_CATALOG', 'Online Winkel');
define('HEADER_TITLE_LANGUAGES', 'Talen');

define('BOX_CONNECTION_PROTECTED', 'U bent beschermd door een %s beveiligde SSL verbinding.');
define('BOX_CONNECTION_UNPROTECTED', 'U bent <font color="#ff0000">niet</font> beschermd door een beveiligde SSL verbinding.');
define('BOX_CONNECTION_UNKNOWN', 'onbekend');

// text for gender
define('MALE', 'Man');
define('FEMALE', 'Vrouw');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

define('BOX_CONFIGURATION_ADMINISTRATORS', 'Administrators');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuratie');
define('BOX_CONFIGURATION_MYSTORE', 'Mijn Winkel');
define('BOX_CONFIGURATION_LOGGING', 'Logging');
define('BOX_CONFIGURATION_CACHE', 'Cache');
define('BOX_CONFIGURATION_SERVICES', 'Services');
define('BOX_CONFIGURATION_CREDIT_CARD_TYPES', 'Credit Card soorten');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Modules');
define('BOX_MODULES_PAYMENT', 'Betalingen');
define('BOX_MODULES_SHIPPING', 'Verzendingen');
define('BOX_MODULES_ORDER_TOTAL', 'Bestellings  Totalen');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Winkel');
define('BOX_CATALOG_CATEGORIES', 'Categori�n');
define('BOX_CATALOG_PRODUCTS', 'Producten');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Produkt Attributen');
define('BOX_CATALOG_MANUFACTURERS', 'Fabrikanten');
define('BOX_CATALOG_REVIEWS', 'Reviews');
define('BOX_CATALOG_SPECIALS', 'Aanbiedingen');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Verwachte Produkten');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Klanten');
define('BOX_CUSTOMERS_CUSTOMERS', 'Klanten');
define('BOX_CUSTOMERS_ORDERS', 'Bestellingen');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Lokaties / Belastingen');
define('BOX_TAXES_COUNTRIES', 'Landen');
define('BOX_TAXES_ZONES', 'Gebieden');
define('BOX_TAXES_GEO_ZONES', 'Belasting Gebieden');
define('BOX_TAXES_TAX_CLASSES', 'Belasting Groepen');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Rapporten');
define('BOX_REPORTS_STATISTICS', 'Statistieken');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Werktuigen');
define('BOX_TOOLS_BACKUP', 'Database Backup');
define('BOX_TOOLS_BANNER_MANAGER', 'Banner Beheer');
define('BOX_TOOLS_CACHE', 'Cache Control');
define('BOX_TOOLS_FILE_MANAGER', 'Bestandsbeheer');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Nieuwsbrief Beheer');
define('BOX_TOOLS_SERVER_INFO', 'Server Info');
define('BOX_TOOLS_WHOS_ONLINE', 'Wie is er Online');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Lokalisatie');
define('BOX_LOCALIZATION_CURRENCIES', 'Valuta');
define('BOX_LOCALIZATION_LANGUAGES', 'Talen');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Bestellings Statussen');
define('BOX_LOCALIZATION_WEIGHT_CLASSES', 'Gewichtsklassen');

define('BOX_HEADING_LOGOFF', 'Uitloggen');

// javascript messages
define('JS_ERROR', 'Fout(en) is/zijn opgetreden tijdens het uitvoeren van het formulier!\nMaakt u aub. de benodigde correcties:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* De nieuwe produkt optie heeft een prijswaarde nodig\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* De nieuwe produkt optie heeft een valutateken nodig\n');
define('JS_PRODUCTS_NAME', '* Het nieuwe produkt heeft een naam nodig\n');
define('JS_PRODUCTS_DESCRIPTION', '* Het nieuwe produkt heeft een beschrijving nodig\n');
define('JS_PRODUCTS_PRICE', '* Het nieuwe produkt heeft een prijs waarde nodig\n');
define('JS_PRODUCTS_WEIGHT', '* Het nieuwe produkt heeft een gewichts waarde nodig\n');
define('JS_PRODUCTS_QUANTITY', '* Het nieuwe produkt heeft een hoeveelheids waarde nodig\n');
define('JS_PRODUCTS_MODEL', '* Het nieuwe produkt heeft een model waarde nodig\n');
define('JS_PRODUCTS_IMAGE', '* Het nieuwe produkt heeft een plaatjes waarde nodig\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* Er moet een nieuwe prijs voor dit produkt opgegeven worden\n');
define('JS_ORDER_DOES_NOT_EXIST', 'Bestellingsnummer %s bestaat niet!');

define('CATEGORY_PERSONAL', 'Persoonlijk');
define('CATEGORY_ADDRESS', 'Adres');
define('CATEGORY_CONTACT', 'Contact');
define('CATEGORY_COMPANY', 'Bedrijf');
define('CATEGORY_OPTIONS', 'Opties');

define('ENTRY_GENDER', 'Geslacht:');
define('ENTRY_GENDER_ERROR', 'Selecteer aub. uw geslacht.');
define('ENTRY_FIRST_NAME', 'Voornaam:');
define('ENTRY_FIRST_NAME_ERROR', 'Uw voornaam moet tenminste ' . ACCOUNT_FIRST_NAME . ' karakters lang zijn.');
define('ENTRY_LAST_NAME', 'Achternaam:');
define('ENTRY_LAST_NAME_ERROR', 'Uw achternaam moet tenminste ' . ACCOUNT_LAST_NAME . ' karakters lang zijn.');
define('ENTRY_DATE_OF_BIRTH', 'Geboortedatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Uw geboortedatum moet correct ingevuld zijn.');
define('ENTRY_EMAIL_ADDRESS', 'E-Mailadres:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Uw E-Mailadres moet tenminste ' . ACCOUNT_EMAIL_ADDRESS . ' karakters lang zijn.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Uw E-Mailadres lijkt niet geldig te zijn - maakt u aub. de benodigde wijzigingen.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Uw E-Mailadres bestaat al in onze gegevens - logt u aub. in met het bestaande e-mailadres of cre�er een nieuw klantenprofiel met een ander e-mailadres.');
define('ENTRY_COMPANY', 'Bedrijfsnaam:');
define('ENTRY_COMPANY_ERROR', 'Uw bedrijfsnaam moet tenminste ' . ACCOUNT_COMPANY . ' karakters lang zijn.');
define('ENTRY_STREET_ADDRESS', 'Straatnaam:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Uw straatnaam moet tenminste ' . ACCOUNT_STREET_ADDRESS . ' karakters lang zijn.');
define('ENTRY_SUBURB', 'Regio:');
define('ENTRY_SUBURB_ERROR', 'U regionaam moet tenminste ' . ACCOUNT_SUBURB . ' karakters lang zijn.');
define('ENTRY_POST_CODE', 'Postcode:');
define('ENTRY_POST_CODE_ERROR', 'Uw postcode moet tenminste ' . ACCOUNT_POST_CODE . ' karakters lang zijn.');
define('ENTRY_CITY', 'Woonplaats:');
define('ENTRY_CITY_ERROR', 'Uw woonplaats moet tenminste ' . ACCOUNT_CITY . ' karakters lang zijn.');
define('ENTRY_STATE', 'Provincie:');
define('ENTRY_STATE_ERROR', 'Uw provincienaam moet tenminste ' . ACCOUNT_STATE . ' karakters lang zijn.');
define('ENTRY_STATE_ERROR_SELECT', 'Selecteert u aub. een provincie uit de keuzelijst.');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_COUNTRY_ERROR', 'U moet een land selecteren uit de landen keuzelijst.');
define('ENTRY_TELEPHONE_NUMBER', 'Telefoonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Uw telefoonnummer moet tenminste ' . ACCOUNT_TELEPHONE . ' karakters lang zijn.');
define('ENTRY_FAX_NUMBER', 'Faxnummer:');
define('ENTRY_FAX_NUMBER_ERROR', 'Uw faxnummer moet tenminste ' . ACCOUNT_FAX . ' karakters lang zijn.');
define('ENTRY_NEWSLETTER', 'Nieuwsbrief:');
define('ENTRY_NEWSLETTER_YES', 'Aangemeld');
define('ENTRY_NEWSLETTER_NO', 'Afgemeld');
define('ENTRY_PASSWORD', 'Wachtwoord:');
define('ENTRY_PASSWORD_ERROR', 'Uw wachtwoord moet tenminste ' . ACCOUNT_PASSWORD . ' karakters lang zijn.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'De wachtwoordbevestiging moet overeenkomen met uw wachtwoord.');
define('ENTRY_PASSWORD_CONFIRMATION', 'Wachtwoordbevestiging:');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Verstuur E-Mail');
define('IMAGE_APPROVE', 'Goedgekeurd');
define('IMAGE_BACK', 'Terug');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_BOX_REMOVE', 'Verwijder Box');
define('IMAGE_CANCEL', 'Afbreken');
define('IMAGE_CONFIGURE', 'Instellen');
define('IMAGE_CONFIRM', 'Bevestig');
define('IMAGE_COPY', 'Kopieer');
define('IMAGE_COPY_TO', 'Kopieer naar');
define('IMAGE_DETAILS', 'Details');
define('IMAGE_DELETE', 'Verwijder');
define('IMAGE_EDIT', 'Wijzig');
define('IMAGE_EDIT_DEFINITIONS', 'Wijzig definities');
define('IMAGE_EMAIL', 'E-mail');
define('IMAGE_EXECUTE', 'Uitvoeren');
define('IMAGE_EXPORT', 'Export');
define('IMAGE_FILE_MANAGER', 'Bestandsbeheer');
define('IMAGE_ICON_STATUS_GREEN', 'Actief');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Zet actief');
define('IMAGE_ICON_STATUS_RED', 'Inactief');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Zet inactief');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_IMPORT', 'Import');
define('IMAGE_INSERT', 'Invoegen');
define('IMAGE_LOCK', 'Vastzetten');
define('IMAGE_LOGIN', 'Login');
define('IMAGE_MODULE_INSTALL', 'Installeer module');
define('IMAGE_MODULE_REMOVE', 'Deinstalleer module');
define('IMAGE_MOVE', 'Verplaats');
define('IMAGE_NEW_BANNER', 'Nieuwe banner');
define('IMAGE_NEW_CATEGORY', 'Nieuwe categorie');
define('IMAGE_NEW_COUNTRY', 'Nieuw land');
define('IMAGE_NEW_CURRENCY', 'Nieuwe valuta');
define('IMAGE_NEW_FILE', 'Nieuw bestand');
define('IMAGE_NEW_FOLDER', 'Nieuwe map');
define('IMAGE_NEW_LANGUAGE', 'Nieuwe taal');
define('IMAGE_NEW_NEWSLETTER', 'Nieuwe nieuwsbrief');
define('IMAGE_NEW_PRODUCT', 'Nieuw produkt');
define('IMAGE_NEW_TAX_CLASS', 'Nieuwe belastingklasse');
define('IMAGE_NEW_TAX_RATE', 'Nieuw belastingtarief');
define('IMAGE_NEW_TAX_ZONE', 'Nieuwe belastingzone');
define('IMAGE_NEW_ZONE', 'Nieuwe zone');
define('IMAGE_ORDERS', 'Bestellingen');
define('IMAGE_ORDERS_INVOICE', 'Rekening');
define('IMAGE_ORDERS_PACKINGSLIP', 'Verpakkingsformulier');
define('IMAGE_PREVIEW', 'Bekijken');
define('IMAGE_REJECT', 'Afwijzen');
define('IMAGE_RESTORE', 'Herstellen');
define('IMAGE_RESET', 'Origineel');
define('IMAGE_SAVE', 'Bewaren');
define('IMAGE_SEARCH', 'Zoeken');
define('IMAGE_SELECT', 'Selecteren');
define('IMAGE_SEND', 'Versturen');
define('IMAGE_SEND_EMAIL', 'Verstuur E-mail');
define('IMAGE_UNLOCK', 'Vrijgeven');
define('IMAGE_UPDATE', 'Bijwerken');
define('IMAGE_UPDATE_CURRENCIES', 'Ververs wisselkoers(en)');
define('IMAGE_UPLOAD', 'Upload');

define('ICON_CROSS', 'False');
define('ICON_CURRENT_FOLDER', 'Huidige map');
define('ICON_DELETE', 'Verwijder');
define('ICON_ERROR', 'Fout');
define('ICON_FILE', 'Bestand');
define('ICON_FILE_DOWNLOAD', 'Download');
define('ICON_FOLDER', 'Map');
define('ICON_LOCKED', 'Vastgezet');
define('ICON_PREVIOUS_LEVEL', 'Vorige niveau');
define('ICON_PREVIEW', 'Bekijken');
define('ICON_STATISTICS', 'Statistieken');
define('ICON_SUCCESS', 'Succes');
define('ICON_TICK', 'True');
define('ICON_UNLOCKED', 'Vrijgegeven');
define('ICON_WARNING', 'Waarschuwing');

define('BUTTON_CANCEL', 'Afbreken');
define('BUTTON_BACK', 'Terug');
define('BUTTON_DELETE', 'Verwijder');
define('BUTTON_INSERT', 'Invoegen');
define('BUTTON_OK', 'OK');
define('BUTTON_SAVE', 'Bewaar');
define('BUTTON_SEND', 'Verstuur');

define('ICON_FILES', 'Bestanden');
define('ICON_ORDERS', 'Bestellingen');
define('ICON_PRODUCTS', 'Produkten');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Pagina&nbsp;%s&nbsp;van&nbsp;%d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINISTRATORS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> administratoren)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> categori�n)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> landen)');
define('TEXT_DISPLAY_NUMBER_OF_CREDIT_CARDS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> kredietkaarten)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> klanten)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> valuta\' )');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> talen)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> fabrikanten)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> nieuwsbrieven)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> bestellingen)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> bestellingstatussen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> produktattributen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES_GROUPS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> produktattribuut groepen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> produkten)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> verwachte produkten)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> produktbeoordelingen)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> produkten in de aanbieding)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> belastingklassen)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> belastinggebieden)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> belastingtarieven)');
define('TEXT_DISPLAY_NUMBER_OF_WEIGHT_CLASSES', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> gewichtsklassen)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Toont <b>%d</b> tot <b>%d</b> (van <b>%d</b> zones)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'standaard');
define('TEXT_SET_DEFAULT', 'Zet als standaard');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Verplicht</span>');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGE DOES NOT EXIST');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Fout: Er is geen valuta als standaard ingesteld. Stelt u er aub. een in via: Administratie Gereedschap->Lokalisatie->Valuta');

define('TEXT_CACHE_CATEGORIES', 'Categori�n Box');
define('TEXT_CACHE_MANUFACTURERS', 'Fabrikanten Box');
define('TEXT_CACHE_ALSO_PURCHASED', 'Ook Gekocht Module');

define('TEXT_NONE', '--geen--');
define('TEXT_TOP', 'Top');
define('TEXT_TRUE', 'True');
define('TEXT_FALSE', 'False');
define('TEXT_OPTIONAL', 'Vrijwillig');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Fout: Doel bestaat niet.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Fout: Doel is niet beschrijfbaar.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Fout: Het bestand kan niet verwijderd worden. Stelt u aub. de juiste toegangsrechten in voor dit bestand: %s');
define('ERROR_FILE_NOT_SAVED', 'Fout: Bestandsupload niet bewaard.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Fout: Bestandsupload type niet toegestaan.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Succes: Bestandsupload succesvol bewaard.');
define('WARNING_NO_FILE_UPLOADED', 'Waarschuwing: Geen bestand geupload.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Waarschuwing: Bestanduploads staan uitgeschakeld in het php.ini configuratiebestand.');

define('SUCCESS_DB_ROWS_UPDATED', 'Succes: Data succesvol bijgewerkt!');
define('WARNING_DB_ROWS_NOT_UPDATED', 'Waarschuwing: Data is niet bijgewerkt omdat de inhoud niet gewijzigd is.');
define('ERROR_DB_ROWS_NOT_UPDATED', 'Fout: Data is niet bijgewerkt ten gevolge van een fout.');

define('MAXIMUM_FILE_UPLOAD_SIZE', '(Max: %s)');
?>
