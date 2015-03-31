<?php if(!defined('IN_GS')){die('You cannot load this file directly!');} // Security Check
/**************************************************************************************************\
* Italian (Italiano) Language File for GetSimple Blog                                              *
* ------------------------------------------------------------------------------------------------ *
* Last Modified: 28 Marzo 2015                                                                     *
* Compiled By: nikynik (Nicola Laviola)                                                            *
\**************************************************************************************************/
 
$i18n = array(
  
  # Language Configuration
  'LANGUAGE_CODE'             =>  'it_IT',
  'DATE_FORMAT'               =>  'd/m/Y h:i:s a',
  'DATE_DISPLAY'              =>  'd.F.Y',
  'DATE_ARCHIVE'              =>  'F Y',
  
  # Plugin Information
  'PLUGIN_TITLE'              =>  ($plugin = 'GetSimple Blog'),
  'PLUGIN_DESC'               =>  'Semplice ed efficace Blog per GetSimple CMS',
  
  # Tab/Sidebar Actions (Administration)
  'BLOG_TAB_BUTTON'           =>  'B<em>l</em>og',
  'MANAGE_POSTS_BUTTON'       =>  'Gestisci Articoli',
  'CATEGORIES_BUTTON'         =>  'Categorie',
  'AUTOIMPORTER_BUTTON'       =>  'RSS Auto-Importer',
  'SETTINGS_BUTTON'           =>  'Impostazioni',
  'UPDATE_BUTTON'             =>  'Controlla aggiornamenti',
  'HELP_BUTTON'               =>  'Aiuto',
  
  # Generic Strings
  'WRITE_OK'                  =>  'File scritto correttamente!',
  'EDIT_OK'                   =>  'File modificato correttamente!',
  'DATA_FILE_ERROR'           =>  'File non scrivibile!',
  'CANCEL'                    =>  'Cancella',
  'DELETE'                    =>  'Elimina',
  'SAVE'                      =>  'Salva',
  'OR'                        =>  'O',
  'YES'                       =>  'Si',
  'NO'                        =>  'No',
  'ADDED'                     =>  'Aggiunto',
  'MANAGE'                    =>  'Gestisci',
  'LANGUAGE'                  =>  'Lingua',
  'DATE'                      =>  'Data',
  
  # Class Constructor
  'DATA_BLOG_DIR'             =>  'La directory <em>data/blog</em> creata correttamente.',
  'DATA_BLOG_DIR_ERR'         =>  'La directory <em>data/blog</em> non pu&ograve; essere creata!',
  'DATA_BLOG_DIR_ERR_HINT'    =>  'Devi creare manualmente primala directory affinch&egrave; '.
                                  'il plugin funzioni correttamente',
  'DATA_BLOG_CATEGORIES'      =>  'Il file <em>blog_categories.xml</em> &egrave; stato creato correttamente!',
  'DATA_BLOG_CATEGORIES_ERR'  =>  'Il file <em>blog_categories.xml</em> non pu&ograve; essere creato!',
  'DATA_BLOG_RSS'             =>  'Il file <em>blog_rss.xml</em> &egrave;  stato creato correttamente!',
  'DATA_BLOG_RSS_ERR'         =>  'Il file <em>blog_rss.xml</em> non pu&ograve; essere creato!',
  'BLOG_SETTINGS'             =>  'Impostazioni del Blog',
  
  # 'Post Management' Strings
  'POST_ADDED'                =>  'Articolo salvato con successo!',
  'POST_ERROR'                =>  'Errore nel salvataggio articolo!',
  'POST_DELETED'              =>  'Articolo cancellato correttamente!',
  'POST_DELETE_ERROR'         =>  'Errore nella cancellazione articolo!',
  'BLOG_CREATE_EDIT_NO_TITLE' =>  'Un titolo &egrave;  richiesto per il salvatoaggio dell\'articolo!',
  'BLOG_RETURN_TO_PREV_PAGE'  =>  'Ritorna all\'articolo',
  'ADD_NEW_POST'              =>  'Aggiungi articolo',
  'EDIT_EXISTING_POST'        =>  'Edita articolo',
  'VIEW_POST'                 =>  'Visualizza articolo',
  'POST_OPTIONS'              =>  'Opzioni articolo',
  'UPLOAD_THUMBNAIL'          =>  'Carica miniatura',
  'UPLOAD_ENABLE_JAVASCRIPT'  =>  'Gentilmente abilita il JavaScript per usare questo file uploader!',
  'SAVE_POST'                 =>  'Salva articolo',
  'MANAGE_POSTS'              =>  'Articoli',
  'CUSTOM_FIELDS_BUTTON'      =>  'Campi personalizzati',
  'NEW_POST_BUTTON'           =>  'Nuovo articolo',
  'MANAGE_POSTS_DESC'         =>  'Edita o crea nuovo articolo.'.
                                  'La tabella seguente visualizza gli articoli esistenti.',
  'NO_POSTS'                  =>  'Nessun articolo trovato!',
  'CLICK_TO_CREATE'           =>  'Clicca qui per crearne uno',
  'PAGE_TITLE'                =>  'Titolo pagina',
  
  # 'Category Management' Strings
  'CATEGORY_ADDED'            =>  'Categoria creata correttamente!',
  'CATEGORY_ERROR'            =>  'Categoria non pu&ograve; essere creata!',
  'MANAGE_CATEGORIES'         =>  'Gestisci Categorie',
  'ADD_CATEGORY'              =>  'Aggiungi Categoria',
  'SETTINGS_CATEGORY_DESC'    =>  'Aggiungi o Edita le categorie da assegnare ai tuoi articoli. Questo ',
  'CATEGORY_NAME'             =>  'Nome Categoria',
  'CATEGORY_RSS_FEED'         =>  'Feed RSS della Categora',

  # 'RSS Auto-Importer' Strings
  'FEED_ADDED'                =>  'Feed RSS aggiunto con successo!',
  'FEED_ERROR'                =>  'Il Feed RSS non pu&oacute; essere salvato!',
  'FEED_DELETED'              =>  'Successfully deleted RSS Feed!',
  'FEED_DELETE_ERROR'         =>  'Feed RSS cancellato con successo!',
  'READ_FULL_ARTICLE'         =>  'Leggi l\'articolo intero!',
  'RSS_FEED_NO_POSTS_DESC'    =>  'Non ci sono articoli per questo Feed RSS. Gentilmente contatta '.
                                  'l\'amministratore per maggiori info.',
  'RSS_FILE_OPEN_FAIL'        =>  'Non posso aprire il file &apos;rss.rss&apos;.',
  'RSS_FILE_WRITE_FAIL'       =>  'Non posso scrivere il file &apos;rss.rss&apos;.',
  'RSS_HEADER'                =>  'RSS Auto-Importer',
  'ADD_FEED'                  =>  'Aggiungi RSS Feed',
  'SETTINGS_FEED_DESC'        =>  'RSS Auto-Importer importa e crea articoli da feeds RSS di altri websites.'.
                                  'Questo &egrave; utile se vuoi gestire contenuti di altri blog.',

  'ADD_NEW_FEED'              =>  'Aggiungi nuovo Feed',
  'BLOG_CATEGORY'             =>  'Categoria Blog',
  'RSS_FEED'                  =>  'Feed',
  'FEED_CATEGORY'             =>  'Categoria',
  'DELETE_FEED'               =>  'Cancella',
  'RSS_SETTINGS_HEADER'       =>  'Impostazioni RSS Auto-Importer',
  'SETTINGS_RSS_DESC'         =>  'Scegli i settaggi per il RSS Auto-Importer. Auto-Importer pu&ograve; importare sia il contenuto completo dei feeds o un sommario con un link all&grave;articolo originario.',
  'RSS_IMPORTER'              =>  'Abilita Auto-Importatore RSS',
  'RSS_CONTENT_DESCRIPTION'   =>  'Includa Contenuto o Sommario RSS',
  'RSS_TITLE'                 =>  'Titolo Feed RSS',
  'RSS_DESCRIPTION'           =>  'Descrizione Feed RSS',
  'RSS_IMPORTER_PASS'         =>  'Password Auto-Importer (qualsiasi)',
  'RSS_FEED_NUM_POSTS'        =>  '&num; di feed da visualizzare',
  
  # 'Settings' Strings
  'SETTINGS_SAVE_OK'          =>  'Impostazioni salvate!',
  'SETTINGS_SAVE_ERROR'       =>  'Non posso salvare le impostazioni!',
  'BLOG_SETTINGS'             =>  'Impostazioni Blog',
  'SETTINGS_MAIN_DESC'        =>  'Modifica le opzioni del tuo blog. Queste sono le opzioni principali del tuo blog.',
  'PAGE_URL'                  =>  'Pagina da utilizzare per gli articoli del blog',
  'EXCERPT_OPTION'            =>  'Formato visualizzazione articoli nella pagina',
  'FULL_TEXT'                 =>  'Testo completo',
  'EXCERPT'                   =>  'Excerpt',
  'EXCERPT_LENGTH'            =>  'Lunghezza excerpt (caratteri):',
  'POSTS_PER_PAGE'            =>  '&num; di articoli per pagina',
  'RECENT_POSTS'              =>  '&num; di articoli recenti',
  'DISPLAY_POST_COUNT_ARCH'   =>  'Visualizza numero articoli in Archivio',
  'HTACCESS_HEADLINE'         =>  'Pretty URLs',
  'PRETTY_URLS'               =>  'Utilizza pretty URLs',
  'VIEW_HTACCESS'             =>  'Controlla che il flie .htaccess del sito esista!',
  'PRETTY_URLS_PARA'          =>  'Se impostato a si, devi editare il file .htaccess dopo aver salvato le opzioni',
  'HTACCESS_1'                =>  'Blocca l\'accesso diretto ai files XML!',
  'HTACCESS_2'                =>  'Generalmente RewriteBase è \'/\', ma puoi sostituirla con il percorso della tua sottodirectory',
  'HTACCESS_3'                =>  'IMPORTANTE -> se il tuo sito è posizionato in una sottocartella devi cambiarla in modo che punti ad essa (es: /sottocartella/)',
  'BLOG_PRETTY_NOTICE'        =>  'Devi abilitare pretty urls in GetSimple prima.'.
                                  'Le istruzioni saranno visualizzate qui',
  'SAVE_SETTINGS'             =>  'Salva Impostazioni',
  'MAIN_SETTINGS_BUTTON'      =>  'Impostazioni generali',
  
  # 'Help' Strings
  'HELP'                      =>  'Aiuto',
  'FRONT_END_FUNCTIONS'       =>  'Funzioni',
  'HELP_CATEGORIES'           =>  'Visualizza categorie blog',
  'HELP_SEARCH'               =>  'Visualizza barra di ricerca nel blog',
  'HELP_ARCHIVES'             =>  'Visualizza archivio blog',
  'HELP_RECENT'               =>  'Visualizza gli articoli pi&ugrave; recenti',
  'HELP_RECENT_2'             =>  'Questa funzione ha 4 parametri <strong>opzionali</strong>',
  'HELP_RECENT_3'             =>  'Esempio di utilizzo (visualizza excerpt, lunghezza di default degli excerpt,'.
                                  'visualizza miniatura e visualizza link continua)',
  'RSS_LOCATION'              =>  'Questo &egrave; il Feed Rss del blog',
  'DYNAMIC_RSS_LOCATION'      =>  'Dynamic RSS Feed Location (Genera Feed RSS al volo)',
  'AUTO_IMPORTER_TITLE'       =>  'Setup importatore Feed RSS',
  'AUTO_IMPORTER_DESC'        =>  'Dovresti effettuare il setup dei cronjobs attraverso il tuo pannello di amministrazione interfaccia del tuo web hosting.'.
                                  'Si presume che tu conosca questo plugin. I frammenti di codici seguenti ti danno un esempio..', 
  'BLOG_PAGE_DESC_TITLE'      =>  'Aiuto personalizzazione Pagina Blog',
  'BLOG_PAGE_RECOM'           =>  'Si raccomanda di visualizzare la funzione show_blog_post() presente in plugins/blog/inc/frontEndFunctions.php'.
                                  'per vedere come meglio impostare una pagina personalizzata del blog.',  
  'BLOG_PAGE_DESC_LINE_1'     =>  'Puoi usare html, php, xml e js in questo campo testo.',
  'BLOG_PAGE_DESC_LINE_2'     =>  'Si comporter&agrave; come se si codifica direttamente dal plugin stesso.'.
                                  'I dati dell&acute;articolo sono passati tramite oggetto.',
  'BLOG_PAGE_DESC_LINE_3'     =>  'Per accedere a un campo personalizzato puoi inserire qualcosa di simile a qui sotto',
  'BLOG_PAGE_AVAILABLE_FUNC'  =>  'Funzioni disponibili &amp; Aiuti:',
  'BLOG_PAGE_FRMT_DATE_LABEL' =>  'Formato Data',
  'BLOG_PAGE_FRMT_DATA_DESC'  =>  'Passando i dati direttamente dall&acute;oggetto saranno formattati automaticamente.',
  'BLOG_PAGE_GET_URL_TO_AREAS'=>  'Ottieni URL del Blog',
  'BLOG_PAGE_URL_EX_LABEL'    =>  'es. (ottieni url dell\'articolo)',
  'BLOG_PAGE_AVAILABLE_AREAS' =>  'Aree disponibili',
  'BLOG_PAGE_POST'            =>  'articolo',
  'BLOG_PAGE_TAG'             =>  'tag',
  'BLOG_PAGE_PAGE'            =>  'page',
  'BLOG_PAGE_ARCHIVE'         =>  'archivio',
  'BLOG_PAGE_CATEGORY'        =>  'categoria',
  'BLOG_PAGE_CREATE_EXCERPT'  =>  'Crea Excerpt',
  'BLOG_PAGE_EXCERPT_DESC'    =>  'Questo crea un excerpt con una lunghezza specifica. La variabile '.
                                  '$excerpt_length deve essere intero e rappresenta la lunghezza'.
                                  'del campo excerpt.',
  'BLOG_PAGE_DECODE_CONTENT'  =>  'Decodifica Contenuto',
  
  # 'Front-End' Strings
  'BY'                        =>  'da',
  'ON'                        =>  'Il',
  'IN'                        =>  'In',
  'TAGS'                      =>  'Tags',
  'NO_CATEGORIES'             =>  'Non ci sono categorie da visualizzare!',
  'NO_POSTS'                  =>  'Non ci sono articoli da visualizzare!',
  'NO_ARCHIVES'               =>  'Non ci sono archivi da visualizzare!',
  'SEARCH'                    =>  'Cerca',
  'FOUND'                     =>  'Sono stati trovati i seguenti articoli:',
  'NOT_FOUND'                 =>  'Peccato, non ho trovato nessun articolo!',
  'NEXT_PAGE'                 =>  '&larr; Pagina seguente',
  'PREV_PAGE'                 =>  'Pagina precedente &rarr;',
  'ARCHIVE_PRETITLE'          =>  'Archivio: ',
  'CATEGORY_PRETITLE'         =>  'Categoria: ',
  'RSS_FEED_NO_POSTS_DESC'    =>  'There are no posts to display in this feed!',
  
  # Custom Fields Manager
  'CUSTOM_FIELDS'             =>  'Campi personalizzati',
  'CUSTOMFIELDS_DESCR'        =>  'Questo plugin ti permette di specificare dei'.
                                  'campi personalizzati che saranno visualizzati quando editi una pagina.',
  'CUSTOM_FIELDS_OPTIONS_AREA'=>  'Area Opzioni',
  'OPTIONS_AREA_DESCRP'       =>  'Le Opzioni dei campi personalizzati saranno visualizzati nella sezione "Opzioni Articolo',  
  'NAME'                      =>  'Nome',
  'LABEL'                     =>  'Etichetta',
  'TYPE'                      =>  'Tipo',
  'DEFAULT_VALUE'             =>  'Valore predefinito',
  'ADD'                       =>  'Aggiungi campo',
  'CUSTOM_FIELDS_MAIN_AREA'   =>  'Area principale',
  'MAIN_AREA_DESCRP'          =>  '(Campi personalizzati principali saranno visualizzati nella sezione Opzioni articolo).', 
  'TEXT_FIELD'                =>  'Campo Testo',
  'LONG_TEXT_FIELD'           =>  'Campo Testo',
  'DROPDOWN_BOX'              =>  'Box Drop-down',
  'CHECKBOX'                  =>  'Check Box',
  'WYSIWYG_EDITOR'            =>  'Editore WYSIWYG',
  'TITLE'                     =>  'Titolo',
  'HIDDEN_FIELD'              =>  'Campi nascosti',
  
  # VersionCheck Updater
  'VERSION_NOMESSAGE'         =>  'Nessun messaggio inviato! Questo &egrave; un problema.',
  'VERSION_NORESPONSE'        =>  'Nessuna risposta dal serve API.',
  'VERSION_NOFUNCTION'        =>  'Il tuo PHP non &egrave; configurato correttamente.',
  'VERSION_UPDATEAVAILABLE'   =>  'Disponibile un nuovo aggiornamento!',
  'VERSION_UPTODATE'          =>  $plugin.' &egrave; aggiornato!',
  'VERSION_BETA'              =>  'Stai utilizzando una versione Beta di '.$plugin.'.',
  'VERSION_FAILEDCOMPARE'     =>  'Comparazione versione Fallita durante il controllo.',
  'VERSION_APIFAIL'           =>  'Il controllo con le API Estese &egrave; fallito',
  'VERSION_INTERNALERROR'     =>  'Si &egrave; verificato un errore interno durante il controllo!',
  'VERSION_STATUS'            =>  'Plugin aggiornato',
  'VERSION_STATUS_DESC'       =>  'Assicurarsi che si sta eseguendo l\'ultima versione'. 
                                  'di '.$plugin.' in modo da poter beneficiare delle funzionalità più recenti.',
  'VERSION_UPDATESTATUS'      =>  'Stato aggiornamento',
  'VERSION_CURRENTVER'        =>  'Versione Corrente',
  'VERSION_LATESTVER'         =>  'Ultima Versione',
  
);
