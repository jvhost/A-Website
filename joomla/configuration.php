<?php
/**
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * -------------------------------------------------------------------------
 * THIS SHOULD ONLY BE USED AS A LAST RESORT WHEN THE WEB INSTALLER FAILS
 *
 * If you are installing Joomla! manually i.e. not using the web browser installer
 * then rename this file to configuration.php e.g.
 *
 * UNIX -> mv configuration.php-dist configuration.php
 * Windows -> rename configuration.php-dist configuration.php
 *
 * Now edit this file and configure the parameters for your site and
 * database.
 */
$_SERVER['DOCUMENT_ROOT'] = "/var/www/vhosts/apluspc.ca/staging.apluspc.ca/joomla";

class JConfig {
	/* Site Settings */
	public $offline = '0';
	public $offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'My CMS';            // Name of Joomla site
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $access = '1';

	/* Database Settings */
	public $dbtype = 'mysql';               // Normally mysqli
	public $host = 'localhost:3306';              // This is normally set to localhost
	public $user = 'joomla_6';                // DB username
	public $password = 'iK*6h34j';         // DB password
	public $db = 'joomla_staging';                   // DB database name
	public $dbprefix = 'jos_';           // Do not change unless you need to!

	/* Server Settings */
	public $secret = 'wvQ2XITPA0tFYSU8';     // Change this to something more secure
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '127.0.0.1';
	public $ftp_port = '21';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $tmp_path = '/var/www/vhosts/apluspc.ca/staging.apluspc.ca/joomla/tmp';                // Please check with your host that this is the correct path to the temp directory. This path needs to be writable by Joomla!
	public $log_path = '/var/www/vhosts/apluspc.ca/staging.apluspc.ca/joomla/logs';               // Please check with your host that this is the correct path to the logs directory. This path needs to be writable by Joomla!
	public $live_site = '';                               // Optional, full url to Joomla install.
	public $force_ssl = 0;                                // Force areas of the site to be SSL ONLY.  0 = None, 1 = Administrator, 2 = Both Site and Administrator

	/* Locale Settings */
	public $offset = 'UTC';
	public $offset_user = 'UTC';

	/* Session settings */
	public $lifetime = '15';                  // Session time
	public $session_handler = 'database';

	/* Mail Settings */
	public $mailer = 'mail';
	public $mailfrom = 'john@apluspc.ca';
	public $fromname = 'My CMS';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'example.com';
	public $smtpsecure = 'none';
	public $smtpport = '25';

	/* Cache Settings */
	public $caching = '0';
	public $cachetime = '15';
	public $cache_handler = 'file';

	/* Debug Settings */
	public $debug = '0';
	public $debug_lang = '0';

	/* Meta Settings */
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';

	/* SEO Settings */
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';

	/* Feed Settings */
	public $feed_limit = 10;
	public $feed_email = 'author';
}