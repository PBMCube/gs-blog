<?php if(!defined('IN_GS')){die('You cannot load this file directly!');} // Security Check
/**************************************************************************************************\
* English (American) Language File for GetSimple Blog                                              *
* ------------------------------------------------------------------------------------------------ *
* Last Modified: 15 February 2015                                                                  *
* Compiled By: johnstray (John Stray)                                                              *
\**************************************************************************************************/
 
$i18n = array(
  
  # Language Configuration
  'LANGUAGE_CODE'             =>  'en_US',
  'DATE_FORMAT'               =>  'm/d/Y h:i:s a',
  'DATE_DISPLAY'              =>  'F jS, Y',
  'DATE_ARCHIVE'              =>  'F Y',
  
  # Plugin Information
  'PLUGIN_TITLE'              =>  ($plugin = 'GetSimple Blog'),
  'PLUGIN_DESC'               =>  'A simple yet powerful Blog system for GetSimple CMS',
  
  # Tab/Sidebar Actions (Administration)
  'BLOG_TAB_BUTTON'           =>  'B<em>l</em>og',
  'MANAGE_POSTS_BUTTON'       =>  'Manage Posts',
  'CATEGORIES_BUTTON'         =>  'Categories',
  'AUTOIMPORTER_BUTTON'       =>  'RSS Auto-Importer',
  'SETTINGS_BUTTON'           =>  'Settings',
  'UPDATE_BUTTON'             =>  'Update Check',
  'HELP_BUTTON'               =>  'Help'
  
  # Generic Strings
  'WRITE_OK'                  =>  'File successfully written!',
  'EDIT_OK'                   =>  'File successfully modified!',
  'DATA_FILE_ERROR'           =>  'File could not be written!',
  'CANCEL'                    =>  'Cancel',
  'DELETE'                    =>  'Delete',
  'SAVE'                      =>  'Save',
  'OR'                        =>  'Or',
  'YES'                       =>  'Yes',
  'NO'                        =>  'No',
  'ADDED'                     =>  'Added',
  'MANAGE'                    =>  'Manage',
  'LANGUAGE'                  =>  'Language',
  'DATE'                      =>  'Date',
  
  # Class Constructor
  'DATA_BLOG_DIR'             =>  '<em>data/blog</em> directory successfully created.',
  'DATA_BLOG_DIR_ERR'         =>  'The <em>data/blog</em> folder could not be created!',
  'DATA_BLOG_DIR_ERR_HINT'    =>  'You are going to have to create this directory yourself for '.
                                  'the plugin to work properly',
  'DATA_BLOG_CATEGORIES'      =>  '<em>blog_categories.xml</em> file successfully created!',
  'DATA_BLOG_CATEGORIES_ERR'  =>  '<em>blog_categories.xml</em> file could not be created!',
  'DATA_BLOG_RSS'             =>  '<em>blog_rss.xml</em> file successfully created!',
  'DATA_BLOG_RSS_ERR'         =>  '<em>blog_rss.xml</em> file could not be created!',
  'BLOG_SETTINGS'             =>  'Blog Settings',
  
  # 'Post Management' Strings
  'POST_ADDED'                =>  'Successfully saved post!',
  'POST_ERROR'                =>  'Post could not be saved!',
  'POST_DELETED'              =>  'Post successfully deleted!',
  'POST_DELETE_ERROR'         =>  'Post could not be deleted!',
  'BLOG_CREATE_EDIT_NO_TITLE' =>  'A title is required for the post before it can be saved!',
  'BLOG_RETURN_TO_PREV_PAGE'  =>  'Return to post',
  'ADD_NEW_POST'              =>  'Add New Post',
  'EDIT_EXISTING_POST'        =>  'Edit Post',
  'VIEW_POST'                 =>  'View Post',
  'POST_OPTIONS'              =>  'Post Options',
  'UPLOAD_THUMBNAIL'          =>  'Upload Thumbnail',
  'UPLOAD_ENABLE_JAVASCRIPT'  =>  'Please enable JavaScript to use the file uploader!',
  'SAVE_POST'                 =>  'Save Post',
  'MANAGE_POSTS'              =>  'Posts',
  'CUSTOM_FIELDS_BUTTON'      =>  'Custom Fields',
  'NEW_POST_BUTTON'           =>  'New Post',
  'MANAGE_POSTS_DESC'         =>  'Edit existing posts or create new posts. The table below shows '.
                                  'posts that currently exist.',
  'NO_POSTS'                  =>  'There are no posts to show!',
  'CLICK_TO_CREATE'           =>  'Click here to create one',
  'PAGE_TITLE'                =>  'Page Title',
  
  # 'Category Management' Strings
  'CATEGORY_ADDED'            =>  'Successfully added Category!',
  'CATEGORY_ERROR'            =>  'Category could not be saved!',
  'MANAGE_CATEGORIES'         =>  'Manage Categories',
  'ADD_CATEGORY'              =>  'Add Category',
  'SETTINGS_CATEGORY_DESC'    =>  'Add or Edit categories to assign your posts to. This will '.
                                  'enable you to sort your posts by displaying only those in a '.
                                  'given category.',
  'CATEGORY_NAME'             =>  'Category Name',
  'CATEGORY_RSS_FEED'         =>  'Category RSS Feed',
  
  # 'RSS Auto-Importer' Strings
  'FEED_ADDED'                =>  'Successfully added RSS Feed!',
  'FEED_ERROR'                =>  'RSS Feed could not be saved!',
  'FEED_DELETED'              =>  'Successfully deleted RSS Feed!',
  'FEED_DELETE_ERROR'         =>  'RSS Feed could not be deleted!',
  'READ_FULL_ARTICLE'         =>  'Read The Full Article',
  'RSS_FEED_NO_POSTS_DESC'    =>  'There are no posts available for this RSS feed. Please contact '.
                                  'the website administrator for more information.',
  'RSS_FILE_OPEN_FAIL'        =>  'Could not open the &apos;rss.rss&apos; file.',
  'RSS_FILE_WRITE_FAIL'       =>  'Could not write to the &apos;rss.rss&apos; file.',
  'RSS_HEADER'                =>  'RSS Auto-Importer',
  'ADD_FEED'                  =>  'Add RSS Feed',
  'SETTINGS_FEED_DESC'        =>  'The RSS Auto-Importer will import and create posts from RSS '.
                                  'feeds on other websites. This is useful if you want to manage '.
                                  'this blog with content from another blog.',
  'ADD_NEW_FEED'              =>  'Add new RSS Feed',
  'BLOG_CATEGORY'             =>  'Blog Category',
  'RSS_FEED'                  =>  'RSS Feed',
  'FEED_CATEGORY'             =>  'RSS Feed Category',
  'DELETE_FEED'               =>  'Delete Feed',
  
  # 'Settings' Strings
  'SETTINGS_SAVE_OK'          =>  'Successfully saved settings!',
  'SETTINGS_SAVE_ERROR'       =>  'Could not save your settings!',
  'BLOG_SETTINGS'             =>  'Blog Settings',
  'SETTINGS_MAIN_DESC'        =>  'Manage the settings for your blog. These are the main settings '.
                                  'for the blog.',
  'PAGE_URL'                  =>  'Page to display blog posts',
  'EXCERPT_OPTION'            =>  'Posts format on posts page',
  'FULL_TEXT'                 =>  'Full Text',
  'EXCERPT'                   =>  'Excerpt',
  'EXCERPT_LENGTH'            =>  'Length of excerpt (characters)',
  'POSTS_PER_PAGE'            =>  '&num; of posts per page',
  'RECENT_POSTS'              =>  '&num; of recent posts',
  'DISPLAY_POST_COUNT_ARCH'   =>  'Display post count in Archives',
  'HTACCESS_HEADLINE'         =>  'Pretty URLs',
  'PRETTY_URLS'               =>  'Use pretty URLs',
  'VIEW_HTACCESS'             =>  'View what your site&apos;s .htaccess should be!',
  'PRETTY_URLS_PARA'          =>  'If Yes, you will have to edit .htaccess file after saving settings',
  'HTACCESS_1'                =>  'Blocks direct access to the XML files - they hold all the data!',
  'HTACCESS_2'                =>  'Usually RewriteBase is just &apos;/&apos;, but replace it with '.
                                  'your subdirectory path',
  'HTACCESS_3'                =>  'IMPORTANT -> if your site is located in subfolder you need to '.
                                  'change this to reflect (eg: /subfolder/)',
  'BLOG_PRETTY_NOTICE'        =>  'You need to turn on pretty urls in GetSimple before ',
                                  'instructions will show here',
  'SAVE_SETTINGS'             =>  'Save Settings',
  
  # 'Help' Strings
  'HELP'                      =>  'Help',
  'FRONT_END_FUNCTIONS'       =>  'Front End Functions',
  'HELP_CATEGORIES'           =>  'Display blog categories',
  'HELP_SEARCH'               =>  'Display blog search bar',
  'HELP_ARCHIVES'             =>  'Display blog archives',
  'HELP_RECENT'               =>  'Show your blogs most recent posts',
  'HELP_RECENT_2'             =>  'This function has 4 <strong>optional</strong> available parameters',
  'HELP_RECENT_3'             =>  'Usage Example (display excerpt, default excerpt length, '.
                                  'display thumbnail and display read more link)',
  'RSS_LOCATION'              =>  'Below is your blogs RSS Feed',
  'DYNAMIC_RSS_LOCATION'      =>  'Dynamic RSS Feed Location (Generates RSS feed on the fly)',
  'AUTO_IMPORTER_TITLE'       =>  'RSS Feed Auto Importer Cronjob Setup',
  'AUTO_IMPORTER_DESC'        =>  'You should be able to setup cronjobs through your web hosting '.
                                  'admin interface. This plugin assume you know how. The below '.
                                  'snippet is what your cron job should look like this.',
  'BLOG_PAGE_DESC_TITLE'      =>  'Custom Blog Page Help',
  'BLOG_PAGE_RECOM'           =>  'It is recommended you view the <code>show_blog_post()</code> '.
                                  'function in plugins/blog/inc/frontEndFunctions.php to see how '.
                                  'best to implement a custom blog page.',
  'BLOG_PAGE_DESC_LINE_1'     =>  'You are able to use html, php, xml and js in this textarea.',
  'BLOG_PAGE_DESC_LINE_2'     =>  'It will behave as if coding it directly into the plugin '.
                                  'itself. The post data is passed via an object.',
  'BLOG_PAGE_DESC_LINE_3'     =>  'So to access a custom field you can do something like below',
  'BLOG_PAGE_AVAILABLE_FUNC'  =>  'Available Functions &amp; Helpers:',
  'BLOG_PAGE_FRMT_DATE_LABEL' =>  'Format Date',
  'BLOG_PAGE_FRMT_DATA_DESC'  =>  'You pass it the the data straight from the data object and '.
                                  'it will format it.',
  'BLOG_PAGE_GET_URL_TO_AREAS'=>  'Get URL To Blog Areas',
  'BLOG_PAGE_URL_EX_LABEL'    =>  'ex (get url of post)',
  'BLOG_PAGE_AVAILABLE_AREAS' =>  'Available Areas',
  'BLOG_PAGE_POST'            =>  'post',
  'BLOG_PAGE_TAG'             =>  'tag',
  'BLOG_PAGE_PAGE'            =>  'page',
  'BLOG_PAGE_ARCHIVE'         =>  'archive',
  'BLOG_PAGE_CATEGORY'        =>  'category',
  'BLOG_PAGE_CREATE_EXCERPT'  =>  'Create Excerpt',
  'BLOG_PAGE_EXCERPT_DESC'    =>  'This will create an excerpt of specified length. The '.
                                  '$excerpt_length variable would need to be an integer and is '.
                                  'the length of the excerpt.',
  'BLOG_PAGE_DECODE_CONTENT'  =>  'Decode Content',
  
  # 'Front-End' Strings
  'BY'                        =>  'By',
  'ON'                        =>  'On',
  'IN'                        =>  'In',
  'TAGS'                      =>  'Tags',
  'NO_CATEGORIES'             =>  'There are no categories to display!',
  'NO_POSTS'                  =>  'There are no posts to display!',
  'NO_ARCHIVES'               =>  'There are no Archives to display!',
  'SEARCH'                    =>  'Search',
  'FOUND'                     =>  'The following posts were found:',
  'NOT_FOUND'                 =>  'Sorry, No posts were found!',
  'NEXT_PAGE'                 =>  '&larr; Next Page',
  'PREV_PAGE'                 =>  'Previous Page &rarr;',
  'ARCHIVE_PRETITLE'          =>  'Blog Archive: ',
  'CATEGORY_PRETITLE'         =>  'Blog Category: ',
  
  # Custom Fields Manager
  'CUSTOM_FIELDS'             =>  'Custom Fields',
  'CUSTOMFIELDS_DESCR'        =>  'This plugin allows you to specify custom fields which are '.
                                  'displayed when you edit a page.',
  'CUSTOM_FIELDS_OPTIONS_AREA'=>  'Options Area',
  'OPTIONS_AREA_DESCRP'       =>  '(Options: Custom fields will be displayed in the "Post '.
                                  'Options" section).',
  'NAME'                      =>  'Name',
  'LABEL'                     =>  'Label',
  'TYPE'                      =>  'Type',
  'DEFAULT_VALUE'             =>  'Default Value',
  'ADD'                       =>  'Add new field',
  'CUSTOM_FIELDS_MAIN_AREA'   =>  'Main Area',
  'MAIN_AREA_DESCRP'          =>  '(Main: Custom fields will be <em>under</em> the "Post '.
                                  'Options" section).',
  'TEXT_FIELD'                =>  'Text Field',
  'LONG_TEXT_FIELD'           =>  'Long Text Field',
  'DROPDOWN_BOX'              =>  'Drop-down Box',
  'CHECKBOX'                  =>  'Check Box',
  'WYSIWYG_EDITOR'            =>  'WYSIWYG Editor',
  'TITLE'                     =>  'Title',
  'HIDDEN_FIELD'              =>  'Hidden Field',
  
  # VersionCheck Updater
  'VERSION_NOMESSAGE'         =>  'No error message has been set! This is a problem.',
  'VERSION_NORESPONSE'        =>  'Could not get a response from the Extend API server.',
  'VERSION_NOFUNCTION'        =>  'Your PHP environment is not configured correctly.',
  'VERSION_UPDATEAVAILABLE'   =>  'An update is available!',
  'VERSION_UPTODATE'          =>  $plugin.' is up to date!',
  'VERSION_BETA'              =>  'You are currently using a Beta version of '.$plugin.'.',
  'VERSION_FAILEDCOMPARE'     =>  'Failed to compare versions during update check.',
  'VERSION_APIFAIL'           =>  'The check with the Extend API was not successful.',
  'VERSION_INTERNALERROR'     =>  'An internal error has occurred with VersionCheck.',
  
  'VERSION_STATUS'            =>  'Plugin Updates',
  'VERSION_STATUS_DESC'       =>  'Ensure you&apos;re running the latest version of the '.$plugin.' '.
                                  'plugin so that you can benefit from the latest fixes and features',
  'VERSION_UPDATESTATUS'      =>  'Update Status',
  'VERSION_CURRENTVER'        =>  'Current Version',
  'VERSION_LATESTVER'         =>  'Latest Version',
  
);