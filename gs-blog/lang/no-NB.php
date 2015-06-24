<?php if(!defined('IN_GS')){die('You cannot load this file directly!');} // Security Check
/**************************************************************************************************\
* Norwegian (Bokmål) Language File for GetSimple Blog                                              *
* ------------------------------------------------------------------------------------------------ *
* Last Modified: 24 June     2015                                                                  *
* Compiled By: helgesverre ( https://helgesverre.com )                                             *
\**************************************************************************************************/

$i18n = array(

  # Language Configuration
  'LANGUAGE_CODE'             =>  'no_NB',
  'DATE_FORMAT'               =>  'm/d/Y h:i:s a',
  'DATE_DISPLAY'              =>  'F jS, Y',
  'DATE_ARCHIVE'              =>  'F Y',

  # Plugin Information
  'PLUGIN_TITLE'              =>  ($plugin = 'GetSimple Blogg'),
  'PLUGIN_DESC'               =>  'Et enkelt men kraftig blogg system for GetSimple CMS',

  # Tab/Sidebar Actions (Administration)
  'BLOG_TAB_BUTTON'           =>  'B<em>l</em>ogg',
  'MANAGE_POSTS_BUTTON'       =>  'Administrer Innlegg',
  'CATEGORIES_BUTTON'         =>  'Kategorier',
  'AUTOIMPORTER_BUTTON'       =>  'RSS Auto-Importør',
  'SETTINGS_BUTTON'           =>  'Innstillinger',
  'UPDATE_BUTTON'             =>  'Sjekk etter oppdatering',
  'HELP_BUTTON'               =>  'Hjelp',

  # Generic Strings
  'WRITE_OK'                  =>  'Filen ble skrevet!',
  'EDIT_OK'                   =>  'Filen ble endret!',
  'DATA_FILE_ERROR'           =>  'File kunne ikkje skrives!',
  'CANCEL'                    =>  'Avbryt',
  'DELETE'                    =>  'Slett',
  'SAVE'                      =>  'Lagre',
  'OR'                        =>  'Eller',
  'YES'                       =>  'Ja',
  'NO'                        =>  'Nei',
  'ADDED'                     =>  'Lagt til',
  'MANAGE'                    =>  'Administrer',
  'LANGUAGE'                  =>  'Språk',
  'DATE'                      =>  'Dato',

  # Class Constructor
  'DATA_BLOG_DIR'             =>  '<em>data/blog</em> mappen opprettet.',
  'DATA_BLOG_DIR_ERR'         =>  'The <em>data/blog</em> mappen kunne ikkje bli opprettet!',
  'DATA_BLOG_DIR_ERR_HINT'    =>  'Du er nødt til å lage denne mappen selv for programtilegget skal fungere skikkelig',
  'DATA_BLOG_CATEGORIES'      =>  '<em>blog_categories.xml</em> filen ble opprettet!',
  'DATA_BLOG_CATEGORIES_ERR'  =>  '<em>blog_categories.xml</em> filen kunne ikkje bli opprettet!',
  'DATA_BLOG_RSS'             =>  '<em>blog_rss.xml</em> filen ble opprettet!',
  'DATA_BLOG_RSS_ERR'         =>  '<em>blog_rss.xml</em> filen kunne ikkje bi opprettet!',
  'BLOG_SETTINGS'             =>  'Blogginnstillinger',

  # 'Post Management' Strings
  'POST_ADDED'                =>  'Innlegget ble lagret!',
  'POST_ERROR'                =>  'Kunne ikkje lagre innlegget!',
  'POST_DELETED'              =>  'Innlegget ble slettet!',
  'POST_DELETE_ERROR'         =>  'Innlegget kunne ikkje bli slettet!',
  'BLOG_CREATE_EDIT_NO_TITLE' =>  'Innlegget må ha ein tittel før du kan lagre',
  'BLOG_RETURN_TO_PREV_PAGE'  =>  'Tilbake til innlegget',
  'ADD_NEW_POST'              =>  'Legg til innlegg',
  'EDIT_EXISTING_POST'        =>  'Rediger Innlegg',
  'VIEW_POST'                 =>  'Vis Innlegg',
  'POST_OPTIONS'              =>  'Instillinger for innlegg',
  'UPLOAD_THUMBNAIL'          =>  'Last opp miniatyrbilde',
  'UPLOAD_ENABLE_JAVASCRIPT'  =>  'Vennligst aktiver Javascript for å bruke filopplasteren!',
  'SAVE_POST'                 =>  'Lagre Innlegg',
  'MANAGE_POSTS'              =>  'Innlegg',
  'CUSTOM_FIELDS_BUTTON'      =>  'Egendefinerte Felter',
  'NEW_POST_BUTTON'           =>  'Nytt Innlegg',
  'MANAGE_POSTS_DESC'         =>  'Redigere eksisterende innlegg eller lage nye innlegg. Tabellen nedenfor viser eksisterende innlegg.',
  'NO_POSTS'                  =>  'Det finnes ingen innlegg å vise frem.',
  'CLICK_TO_CREATE'           =>  'Klikk her for å lage eit nytt innlegg',
  'PAGE_TITLE'                =>  'Sidetittel',

  # 'Category Management' Strings
  'CATEGORY_ADDED'            =>  'La til kategori!',
  'CATEGORY_ERROR'            =>  'Kunne ikkje legge til ny kategori!',
  'MANAGE_CATEGORIES'         =>  'Administrer Kategorier',
  'ADD_CATEGORY'              =>  'Legg til kategori',
  'SETTINGS_CATEGORY_DESC'    =>  'Legg til eller Rediger kategorier for å legge innleggene dine i. Dette vil gjøre deg i stand til å sortere innleggene dine ved å vise bare de i en gitt kategori.',
  'CATEGORY_NAME'             =>  'Kategorinavn',
  'CATEGORY_RSS_FEED'         =>  'Kategori RSS Feed',

  # 'RSS Auto-Importer' Strings
  'FEED_ADDED'                =>  'La til RSS Feed!',
  'FEED_ERROR'                =>  'Kunne ikkje legge til RSS Feed!',
  'FEED_DELETED'              =>  'Slettet RSS Feeden!',
  'FEED_DELETE_ERROR'         =>  'Kunne ikkje slette RSS Feeden!',
  'READ_FULL_ARTICLE'         =>  'Les hele artikkelen',
  'RSS_FEED_NO_POSTS_DESC'    =>  'Det finnes ingen innlegg i denne RSS feeden. Ta kontakt med administrator for mer informasjon.',
  'RSS_FILE_OPEN_FAIL'        =>  'Kunne ikkje åpne &apos;rss.rss&apos; filen.',
  'RSS_FILE_WRITE_FAIL'       =>  'Kunne ikkje skrive til &apos;rss.rss&apos; filen.',
  'RSS_HEADER'                =>  'RSS Auto-Importør',
  'ADD_FEED'                  =>  'Legg til RSS Feed',
  'SETTINGS_FEED_DESC'        =>  'RSS Auto-importøren vil importere og lage nye innlegg fra RSS-feeder på andre nettsteder. Dette er nyttig hvis du ønsker å administrere denne bloggen med innhold fra en annen blogg.',
  'ADD_NEW_FEED'              =>  'Legg till ny RSS Feed',
  'BLOG_CATEGORY'             =>  'Blogg Kategori',
  'RSS_FEED'                  =>  'RSS Feed',
  'FEED_CATEGORY'             =>  'RSS Feed Kategori',
  'DELETE_FEED'               =>  'Slett Feed',
  'RSS_SETTINGS_HEADER'       =>  'RSS Auto-Importor Instillinger',
  'SETTINGS_RSS_DESC'         =>  'Velg innstillinger for RSS Auto-importøren. Auto-importør kan importere enten deler eller hele innholdet i feeden eller et sammendrag med en link tilbake til den opprinnelige artikkelen.',
  'RSS_IMPORTER'              =>  'Aktiver RSS Auto-Importør',
  'RSS_CONTENT_DESCRIPTION'   =>  'Inkluder RSS Innhold eller Oppsummering',
  'RSS_TITLE'                 =>  'RSS Feed Tittel',
  'RSS_DESCRIPTION'           =>  'RSS Feed Beskrivelse',
  'RSS_IMPORTER_PASS'         =>  'Auto-Importør Passord (hva som helst)',
  'RSS_FEED_NUM_POSTS'        =>  '&num; Innlegg i RSS Feed',

  # 'Settings' Strings
  'SETTINGS_SAVE_OK'          =>  'Lagret innstillingenne!',
  'SETTINGS_SAVE_ERROR'       =>  'Kunne ikkje lagre innstillingenne!',
  'BLOG_SETTINGS'             =>  'Blogginnstillinger',
  'SETTINGS_MAIN_DESC'        =>  'Administrer innstillingenne for bloggen din. Disse er hovedinnstillingenne for bloggen.',
  'PAGE_URL'                  =>  'Side som skal vise blogginnlegg',
  'EXCERPT_OPTION'            =>  'Innleggsformat på inleggssiden',
  'FULL_TEXT'                 =>  'Fullt Innhold',
  'EXCERPT'                   =>  'Oppsummering',
  'EXCERPT_LENGTH'            =>  'Lengden på oppsummeringen (tegn)',
  'POSTS_PER_PAGE'            =>  '&num; innlegg per side',
  'RECENT_POSTS'              =>  '&num; av siste innlegg ',
  'DISPLAY_POST_COUNT_ARCH'   =>  'Vis innleggsantallet i Arkivet',
  'HTACCESS_HEADLINE'         =>  'Søkevennlige Addresser',
  'PRETTY_URLS'               =>  'Bruk søkevennlige addresser',
  'VIEW_HTACCESS'             =>  'Se hva nettstedets .htaccess skal være',
  'PRETTY_URLS_PARA'          =>  'Hvis ja, må du redigere .htaccess filen etter du har lagret innstillingenne',
  'HTACCESS_1'                =>  'Blokker direkte tilgang til XML-filer - de inneholder alle dataene dine!',
  'HTACCESS_2'                =>  'Vanligsvis er RewriteBase bare &apos;/&apos;, men erstatt den med riktig filbanen',
  'HTACCESS_3'                =>  'VIKTIG -> hvis området ligger i ein undermappe, må du å endre dette for å gjenspeile riktig filbane (f.eks: /undermappe/)',
  'BLOG_PRETTY_NOTICE'        =>  'Du må slå på søkevennlige addresser i GetSimple før instruksjonene viser her',
  'SAVE_SETTINGS'             =>  'Lagre innstillingenne',
  'MAIN_SETTINGS_BUTTON'      =>  'Hovedinnstillingene',

  # 'Help' Strings
  'HELP'                      =>  'Hjelp',
  'FRONT_END_FUNCTIONS'       =>  'Forside funksjoner',
  'HELP_CATEGORIES'           =>  'Vis blogg kategorier',
  'HELP_SEARCH'               =>  'Vis blogg søkeline ',
  'HELP_ARCHIVES'             =>  'Vis blogg arkiv',
  'HELP_RECENT'               =>  'Vis dine nyeste blogginnlegg',
  'HELP_RECENT_2'             =>  'Denne funksjonen har fire <strong>valgfrie</strong> parametre tilgjengelig',
  'HELP_RECENT_3'             =>  'Eksempel (vis utdrag, standard utdragslengde, vise miniatyr og vise les mer link)',
  'RSS_LOCATION'              =>  'Nedenfor er RSS Feedene til bloggen din',
  'DYNAMIC_RSS_LOCATION'      =>  'Dynamisk RSS Feed Plassering (Generer RSS Feeden "on-the-fly")',
  'AUTO_IMPORTER_TITLE'       =>  'RSS Feed Auto Importør Cronjob Setup',
  'AUTO_IMPORTER_DESC'        =>  'Du bør kunne sette opp cronjobs gjennom administrasjonsgrensesnittet til din webhotell leverandør. Dette programtillegget antar at du vet hvordan. Nedenfor ser du hvordan Cron jobben skal se ut.',
  'BLOG_PAGE_DESC_TITLE'      =>  'Egendefinert Bloggside Hjelp',
  'BLOG_PAGE_RECOM'           =>  'Det anbefales at du ser igjennom <code>show_blog_post()</code> funksjonen i plugins/blog/inc/frontEndFunctions.php for å se hvordan man best kan gjennomføre en tilpasset blogg side.',
  'BLOG_PAGE_DESC_LINE_1'     =>  'Du kan bruke HTML, PHP, XML og JavaScript i dette tekstfeltet.',
  'BLOG_PAGE_DESC_LINE_2'     =>  'Det vil oppføre seg som om du koder direkte inn i selve programtillegget. Innleggsdataene føres via eit objekt.',
  'BLOG_PAGE_DESC_LINE_3'     =>  'Så for å få tilgang til et egendefinert felt du kan gjøre noe slikt som nedenfor',
  'BLOG_PAGE_AVAILABLE_FUNC'  =>  'Tilgjengelige funksjonen &amp; Hjelpere:',
  'BLOG_PAGE_FRMT_DATE_LABEL' =>  'Dato Format',
  'BLOG_PAGE_FRMT_DATA_DESC'  =>  'Du passerer dataene rett fra dataobjektet, og det vil formateres.',
  'BLOG_PAGE_GET_URL_TO_AREAS'=>  'Hent URL til bloggområder',
  'BLOG_PAGE_URL_EX_LABEL'    =>  'eks (hent url for innlegg)',
  'BLOG_PAGE_AVAILABLE_AREAS' =>  'Tilgjengelige Områder',
  'BLOG_PAGE_POST'            =>  'innlegg',
  'BLOG_PAGE_TAG'             =>  'tag',
  'BLOG_PAGE_PAGE'            =>  'side',
  'BLOG_PAGE_ARCHIVE'         =>  'arkiv',
  'BLOG_PAGE_CATEGORY'        =>  'kategori',
  'BLOG_PAGE_CREATE_EXCERPT'  =>  'Opprett utdrag',
  'BLOG_PAGE_EXCERPT_DESC'    =>  'Dette vil skape et utdrag av spesifisert lengde. variablen $excerpt_length må være et heltall og er lengden på utdraget.',
  'BLOG_PAGE_DECODE_CONTENT'  =>  'Dekod innholdet',

  # 'Front-End' Strings
  'BY'                        =>  'Av',
  'ON'                        =>  'den',
  'IN'                        =>  'I',
  'TAGS'                      =>  'Tags',
  'NO_CATEGORIES'             =>  'Det er ingen kategorier å vise!',
  'NO_POSTS'                  =>  'Det er ingen innlegg å vise!',
  'NO_ARCHIVES'               =>  'Det er ingen arkiv å vise!',
  'SEARCH'                    =>  'Søk',
  'FOUND'                     =>  'Følgende innlegg ble funnet:',
  'NOT_FOUND'                 =>  'Beklager, fant ingen innlegg!',
  'NEXT_PAGE'                 =>  '&larr; Neste Side',
  'PREV_PAGE'                 =>  'Forrige Side &rarr;',
  'ARCHIVE_PRETITLE'          =>  'Blogg Arkiv: ',
  'CATEGORY_PRETITLE'         =>  'Blogg Kategori: ',

  # Custom Fields Manager
  'CUSTOM_FIELDS'             =>  'Egendefinerte felt',
  'CUSTOMFIELDS_DESCR'        =>  'Med dette programtillegget kan du angi egendefinerte felter som vises når du redigerer en side.',
  'CUSTOM_FIELDS_OPTIONS_AREA'=>  'innstillingsområde',
  'OPTIONS_AREA_DESCRP'       =>  '(Alternativer: Egendefinerte felt vil bli vist i Innleggsinstillings-området).',
  'NAME'                      =>  'Navn',
  'LABEL'                     =>  'Etiketten',
  'TYPE'                      =>  'Type',
  'DEFAULT_VALUE'             =>  'Standardverdi',
  'ADD'                       =>  'Legg til nytt felt',
  'CUSTOM_FIELDS_MAIN_AREA'   =>  'Hovedområdet',
  'MAIN_AREA_DESCRP'          =>  '(Hoved: Egendefinerte felt vil være <em>under</em> Innleggsinstillings-området).',
  'TEXT_FIELD'                =>  'Tekst Felt',
  'LONG_TEXT_FIELD'           =>  'Langt Tekst Felt',
  'DROPDOWN_BOX'              =>  'Drop-down Boks',
  'CHECKBOX'                  =>  'Avkrysningsboks',
  'WYSIWYG_EDITOR'            =>  'WYSIWYG Editor',
  'TITLE'                     =>  'Tittel',
  'HIDDEN_FIELD'              =>  'Skjult Felt',

  # VersionCheck Updater
  'VERSION_NOMESSAGE'         =>  'Ingen feilmelding er satt! Dette er et problem.',
  'VERSION_NORESPONSE'        =>  'Fikk ikkje noe svar ifra Extend API serveren',
  'VERSION_NOFUNCTION'        =>  'PHP miljøet ditt er ikke konfigurert riktig.',
  'VERSION_UPDATEAVAILABLE'   =>  'Ein oppdatering er tilgjengelig!',
  'VERSION_UPTODATE'          =>  $plugin.' er oppdatert!',
  'VERSION_BETA'              =>  'Du bruker nå en betaversjon av '.$plugin.'.',
  'VERSION_FAILEDCOMPARE'     =>  'Klarte ikke å sammenligne versjoner under oppdatering.',
  'VERSION_APIFAIL'           =>  'Sjekken mot "Extend" APIen feilet.',
  'VERSION_INTERNALERROR'     =>  'Det har oppstått en intern feil med VersionCheck.',
  'VERSION_STATUS'            =>  'Plugin Oppdateringer',
  'VERSION_STATUS_DESC'       =>  'Ensure you&apos;re running the latest version of the '.$plugin.' plugin so that you can benefit from the latest fixes and features',
  'VERSION_UPDATESTATUS'      =>  'Oppdater Status',
  'VERSION_CURRENTVER'        =>  'Nåværende Versjon',
  'VERSION_LATESTVER'         =>  'Siste Versjon',

);
