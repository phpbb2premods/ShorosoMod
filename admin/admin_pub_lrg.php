<?php
/***************************************************************************
 *                              admin_pub_lrg.php
 *                            -------------------
 *   begin                : 23 mars 2004
 *   copyright            : (c) Mojy - Mojytech http://www.phpbb-fr-themes.com
 *   email                : webmaster@phpbb-fr-themes.com.com
 *
 *
 *
 **************************************************************************** 
 * Ce mod n'est pas sous licence GNU/GPL.
 * Vous pouvez l'utiliser sur votre forum mais pas le distribuer
 * ni le modifier ni l'inclure dans une prémod sans autorisation. 
 ***************************************************************************/

 
define('IN_PHPBB', true);
//
// Let's set the root dir for phpBB
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
include_once('./pagestart.' . $phpEx);

//
//  récupérer les paramètres
include_once($phpbb_root_path . 'includes/functions_pub_lrg.' . $phpEx);

if( !empty($setmodules) )
{
	$file = basename(__FILE__);
	$module['Pub']['Pub_verticale_large'] = "$file";
	return;
}


//
// récupérer les boutons
$submit = isset($HTTP_POST_VARS['submit']);

// 
// vérifier le formulaire
if ($submit)
{
	// récupérer les valeurs du formulaire
	$texte_pub_lrg = trim(str_replace('"', '&quot;', $HTTP_POST_VARS['texte_pub_lrg']));
	$titre_pub_lrg = trim(str_replace('"', '&quot;', $HTTP_POST_VARS['titre_pub_lrg']));
	$width = trim(str_replace('"', '&quot;', $HTTP_POST_VARS['width']));
	$height = trim(str_replace('"', '&quot;', $HTTP_POST_VARS['height']));
	$scrollamount = trim(str_replace('"', '&quot;', $HTTP_POST_VARS['scrollamount']));
	$scrolldelay = trim(str_replace('"', '&quot;', $HTTP_POST_VARS['scrolldelay']));
	$way = trim(str_replace('"', '&quot;', $HTTP_POST_VARS['way']));
	$logo_left = trim(str_replace('"', '&quot;', $HTTP_POST_VARS['logo_left']));
	$logo_right = trim(str_replace('"', '&quot;', $HTTP_POST_VARS['logo_right']));

	// vérifier les valeurs
	if ( $texte_pub_lrg == '' ) message_die(GENERAL_ERROR, $lang['Empty'] . ': ' . $lang['texte_pub_lrg']);
	if ( $width == '' ) message_die(GENERAL_ERROR, $lang['Empty'] . ': ' . $lang['width']);
	if ( $height == '' ) message_die(GENERAL_ERROR, $lang['Empty'] . ': ' . $lang['height']);
	if ( $scrollamount == '' ) message_die(GENERAL_ERROR, $lang['Empty'] . ': ' . $lang['scrollamount']);
	if ( $scrolldelay == '' ) message_die(GENERAL_ERROR, $lang['Empty'] . ': ' . $lang['scrolldelay']);
	if ( $way == '' ) message_die(GENERAL_ERROR, $lang['Empty'] . ': ' . $lang['way']);
	
	// mettre à jour la bdd
	$sql = "select text_pub_lrg,titre_pub_lrg,width,height,scrollamount,scrolldelay,way,logo_left,logo_right from " . PUB_LRG_TABLE ;
	if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, "Could not acces pub_lrg table.", '', __LINE__, __FILE__, $sql);
	$exist = ($row = $db->sql_fetchrow($result));
	if (!$exist)
	{
		// création
	$sql = "insert into " . PUB_LRG_TABLE . "(text_pub_lrg,titre_pub_lrg,width,height,scrollamount,scrolldelay,way,logo_left,logo_right) VALUES  ('$texte_pub_lrg','$titre_pub_lrg','$width','$height','$scrollamount','$scrolldelay','$way','$logo_left','$logo_right')";
	if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, "Could not acces pub_lrg table.", '', __LINE__, __FILE__, $sql);
	}
	else
	{
		// mise à jour
	$sql ="update " . PUB_LRG_TABLE . " set text_pub_lrg='$texte_pub_lrg',titre_pub_lrg='$titre_pub_lrg',width='$width',height='$height',scrollamount='$scrollamount',scrolldelay='$scrolldelay',way='$way',logo_left='$logo_left',logo_right='$logo_right'"; 
	if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, "Could not acces pub_lrg table.", '', __LINE__, __FILE__, $sql);
	}
	$submit = false;
}
//
// Mettre à jour la table config
$sql = "SELECT * FROM " . PUB_LRG_CONFIG_TABLE;
if(!$result = $db->sql_query($sql))
{
	message_die(CRITICAL_ERROR, "Could not query config information config table", "", __LINE__, __FILE__, $sql);
}
else
{
	while( $row = $db->sql_fetchrow($result) )
	{
		$config_name = $row['config_name'];
		$config_value = $row['config_value'];
		$default_config[$config_name] = $config_value;
		
		$new[$config_name] = ( isset($HTTP_POST_VARS[$config_name]) ) ? $HTTP_POST_VARS[$config_name] : $default_config[$config_name];

		if( submit )
		{
			$sql = "UPDATE " . PUB_LRG_CONFIG_TABLE . " SET
				config_value = '" . str_replace("\'", "''", $new[$config_name]) . "'
				WHERE config_name = '$config_name'";
			if( !$db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Failed to update general configuration for $config_name", "", __LINE__, __FILE__, $sql);
			}
		}
	}
	if( isset($HTTP_POST_VARS['submit']) )
	{
		$message = $lang['Done'] . "<br /><br />" . sprintf($lang['Click_return'], "<a href=\"" . append_sid("admin_pub_lrg.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
	}

  }
	

// choix des pages d'affichage
$pub_lrg_footer_none	= ( $new['pub_lrg_enable'] == '0' ) ? "checked=\"checked\"" : "";
$pub_lrg_footer			= ( $new['pub_lrg_enable'] == '1' ) ? "checked=\"checked\"" : "";
$pub_lrg_index			= ( $new['pub_lrg_enable'] == '2' ) ? "checked=\"checked\"" : "";
$pub_lrg_header			= ( $new['pub_lrg_enable'] == '3' ) ? "checked=\"checked\"" : "";
$pub_lrg_portal			= ( $new['pub_lrg_enable'] == '4' ) ? "checked=\"checked\"" : "";

// choix du sens de défilement
$up						= ( !$new['way'] ) ? "checked=\"checked\"" : "";
$down					= ( $new['way'] ) ? "checked=\"checked\"" : "";
$left					= ( $new['way'] ) ? "checked=\"checked\"" : "";
$right					= ( $new['way'] ) ? "checked=\"checked\"" : "";

//
// nom de l'écran
$template->set_filenames(array(
	"body" => "admin/admin_pub_lrg_body.tpl")
);

// Box pub défilante verticale large.
if ($box_pub_lrg = display_pub_lrg('pub_lrg') ) $template->assign_var_from_handle('PUB_LRG_BOX', $box_pub_lrg );

//
// entête page : les constantes titres, etc.
$template->assign_vars(array(
	'L_MODIF_PUB_LRG'			=> $lang['modif_pub_lrg'],
	'L_TEXTE_TITRE_PUB_LRG'		=> $lang['texte_titre_pub_lrg'],
	'L_TEXTE_PUB_LRG'       	=> $lang['texte_pub_lrg'],
	'L_TITRE_EXPLAIN_PUB'		=> $lang['Titre_explain_pub'],
	'L_TITRE'					=> $lang['Titre'],
	'L_TEXTE_PUB'				=> $lang['texte_pub'],
	'L_TEXTE_PUB_EXPLAIN'		=> $lang['texte_pub_explain'],
	'L_PUB_LRG_EXPLAIN'			=> $lang['pub_lrg_explain'],
	'L_SUBMIT'					=> $lang['Submit'],
	'L_YES'						=> $lang['Yes'],
	'L_NO'						=> $lang['No'],
	'L_SHOW_ON'					=> $lang['Show_on'],
	'L_SHOW'					=> $lang['show'],
	'L_SHOW_NO'					=> $lang['Show_no'],
	'L_SHOW_INDEX'				=> $lang['show_index'],
	'L_SHOW_HEADER'				=> $lang['show_header'],
	'L_SHOW_FOOTER'				=> $lang['show_footer'],
	'L_SHOW_PORTAL'				=> $lang['show_portal'],
	'L_SHOW_PORTAL_EXPLAIN'		=> $lang['show_portal_explain'],
	'L_PARAMETERS'				=> $lang['parameters'],
	'L_WIDTH'					=> $lang['width'],
	'L_HEIGHT'					=> $lang['height'],
	'L_CONDITION'				=> $lang['condition'],
	'L_CONDITION_ON'			=> $lang['condition_on'],
	'L_CONDITION_OFF'			=> $lang['condition_off'],
	'L_SCROLLAMOUNT'			=> $lang['scrollamount'],
	'L_SCROLLDELAY'				=> $lang['scrolldelay'],
	'L_SCROLL_EXPLAIN'			=> $lang['scroll_explain'],
	'L_SCROLL'					=> $lang['scroll'],
	'L_UP'						=> $lang['up'],
	'L_DOWN'					=> $lang['down'],
	'L_LEFT'					=> $lang['left'],
	'L_RIGHT'					=> $lang['right'],
	'L_WAY'						=> $lang['way'],
	'L_LOGO_LEFT'				=> $lang['logo_left'],
	'L_LOGO_RIGHT'				=> $lang['logo_right'],
	'L_TITRE_LOGO'				=> $lang['titre_logo'],
	'L_LOGO_EXPLAIN'			=> $lang['logo_explain'],
	)
);

// RaZ des variables écrans
$texte_pub_lrg = '';
$titre_pub_lrg = '';
$width = '';
$height = '';
$scrollamount = '';
$scrolldelay = '';
$way = '';

// lecture de la base
$sql = "select * from " . PUB_LRG_TABLE ;
if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, "Could not acces pub_lrg table.", '', __LINE__, __FILE__, $sql);
if ($row = $db->sql_fetchrow($result))
{
	$texte_pub_lrg = $row['text_pub_lrg'];
	$titre_pub_lrg = $row['titre_pub_lrg'];
	$width = $row['width'];
	$height = $row['height'];
	$bgcolor = $row['bgcolor'];
	$scrollamount = $row['scrollamount'];
	$scrolldelay = $row['scrolldelay'];
	$way = $row['way'];	
}

// sauvegarde des paramètres
$s_hidden_fields  = '<input type="hidden" name="mode" value="' . $mode . '">';
$s_hidden_fields .= '<input type="hidden" name="key"  value="' . $key . '">';

// charger les variables
$pgm_ret = append_sid( "admin_pub_lrg.$phpEx?mode=$mode&key=$key" );
$template->assign_vars(array(
	'TEXTE_PUB_LRG'			=> $texte_pub_lrg,
	'TITRE_PUB_LRG'			=> $titre_pub_lrg,
	'PUB_LRG_INDEX_NO'		=> $pub_lrg_index_none,
	'PUB_LRG_INDEX_YES'		=> $pub_lrg_index,
	'PUB_LRG_HEADER_NO'		=> $pub_lrg_header_none,
	'PUB_LRG_HEADER_YES'	=> $pub_lrg_header,
	'PUB_LRG_FOOTER_NO'		=> $pub_lrg_footer_none,
	'PUB_LRG_FOOTER_YES'	=> $pub_lrg_footer,
	'PUB_LRG_PORTAL_NO'		=> $pub_lrg_portal_none,
	'PUB_LRG_PORTAL_YES'	=> $pub_lrg_portal,
	'LEFT'					=> $left,
	'RIGHT'					=> $right,
	'UP'					=> $up,
	'DOWN'					=> $down,
	'WAY'					=> $way,	

	'S_PGM'					=> $pgm_ret,
	'S_HIDDEN_FIELDS'		=> $s_hidden_fields,
	)
);


//
// pied de page
$template->pparse("body");
include('./page_footer_admin.'.$phpEx);

?>