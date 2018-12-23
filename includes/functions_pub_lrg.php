<?php
/***************************************************************************
 *                              functions_pub_lrg.php
 *                            -------------------
 *   begin                : 23 mars 2004
 *   copyright            : (c) Mojy - Mojytech http://www.phpbb-fr-themes.com
 *   email                : webmaster@phpbb-fr-themes.com.com
 *
 *
 *
 ***************************************************************************
 * Ce mod n'est pas sous licence GNU/GPL.
 * Vous pouvez l'utiliser sur votre forum mais pas le distribuer
 * ni le modifier ni l'inclure dans une prémod sans autorisation. 
 ***************************************************************************/
include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_pub_lrg.' . $phpEx);

function display_pub_lrg( $box_pub_lrg )
{
	global $db, $template;

	$sql = "SELECT text_pub_lrg,titre_pub_lrg,width,height,scrollamount,scrolldelay,way,logo_left,logo_right FROM ". PUB_LRG_TABLE ;
	if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, 'Could not obtain topic information', '', __LINE__, __FILE__, $sql);
	if ( !($row = $db->sql_fetchrow($result)) ) return false;

	// choisir le template
	$template->set_filenames(array( $box_pub_lrg => 'pub_lrg_body.tpl'));

	// charger l'écran
	$template->assign_vars(array(
		'TEXTE_PUB_LRG' => $row['text_pub_lrg'],
		'TITRE_PUB_LRG' => $row['titre_pub_lrg'],
		'WIDTH' => $row['width'],
		'HEIGHT' => $row['height'],
		'SCROLLAMOUNT' => $row['scrollamount'],
		'SCROLLDELAY' => $row['scrolldelay'],
		'WAY' => $row['way'],
		'LOGO_LEFT' => $row['logo_left'],
		'LOGO_RIGHT' => $row['logo_right'],
		)
	);

	return $box_pub_lrg;
}

// Créer la valeur
 $sql = "SELECT * FROM " . PUB_LRG_CONFIG_TABLE;
	if( !($result = $db->sql_query($sql)) )
	{
		message_die(CRITICAL_ERROR, "Could not query config information", "", __LINE__, __FILE__, $sql);
	}

	while ( $row = $db->sql_fetchrow($result) )
	{
		$pub_lrg_config[$row['config_name']] = $row['config_value'];
	}	
	
//envoyer les switches

	global $template;
		
	if ($pub_lrg_config['pub_lrg_enable'] == '1') 
	{
		$template->assign_block_vars('pub_lrg_footer_enable', array()); 
	}
	else
	{
		$template->assign_block_vars('pub_lrg_footer_disable', array()); 
	}
	
	if ($pub_lrg_config['pub_lrg_enable'] == '2') 
	{
		$template->assign_block_vars('pub_lrg_index_enable', array()); 
	}
	else
	{
		$template->assign_block_vars('pub_lrg_index_disable', array()); 
	}
	
	if ($pub_lrg_config['pub_lrg_enable'] == '3') 
	{
		$template->assign_block_vars('pub_lrg_header_enable', array()); 
	}
	else
	{
		$template->assign_block_vars('pub_lrg_header_disable', array()); 
	}
	
	if ($pub_lrg_config['pub_lrg_enable'] == '4') 
	{
		$template->assign_block_vars('pub_lrg_portal_enable', array()); 
	}
	else
	{
		$template->assign_block_vars('pub_lrg_portal_disable', array()); 
	}
	
	
// Box pub défilante verticale large.
	if ($box_pub_lrg = display_pub_lrg('pub_lrg') ) $template->assign_var_from_handle('PUB_LRG_BOX', $box_pub_lrg );
?>