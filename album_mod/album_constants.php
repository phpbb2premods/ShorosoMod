<?php
/***************************************************************************
 *							   album_constants.php
 *                            -------------------
 *   begin                : Saturday, February 01, 2003
 *   copyright            : (C) 2003 Smartor
 *   email                : smartor_xp@hotmail.com
 *
 *   $Id: album_constants.php,v 1.0.4 2003/02/23 20:50:48 ngoctu Exp $
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
}

define('PAGE_ALBUM', -19);	// for Session Handling

define('PERSONAL_GALLERY', 0); // pic_cat_id <- do NOT change this value


// User Levels for Album system <- do NOT change these values
define('ALBUM_ANONYMOUS', -1);
define('ALBUM_GUEST', -1);

define('ALBUM_USER', 0);
define('ALBUM_ADMIN', 1);
define('ALBUM_MOD', 2);
define('ALBUM_PRIVATE', 3);


// Path (trailing slash required)
define('ALBUM_UPLOAD_PATH', 'album_mod/upload/');
define('ALBUM_CACHE_PATH', 'album_mod/upload/cache/');


// Table names
define('ALBUM_TABLE', $table_prefix.'album');
define('ALBUM_CAT_TABLE', $table_prefix.'album_cat');
define('ALBUM_CONFIG_TABLE', $table_prefix.'album_config');
define('ALBUM_COMMENT_TABLE', $table_prefix.'album_comment');
define('ALBUM_RATE_TABLE', $table_prefix.'album_rate');

?>