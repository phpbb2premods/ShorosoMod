<?php
define('IN_PHPBB', true);
$phpbb_root_path = './';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_VIEWMEMBERS);
init_userprefs($userdata);
//
// End session management
//
$page_title = $lang['Table_ranks'];
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

$template->set_filenames(array(
	"body" => "ranks_body.tpl")
);
	
$sql = "SELECT * FROM " . RANKS_TABLE . "
		ORDER BY rank_min ASC, rank_special ASC";

if( !$result = $db->sql_query($sql) )
{
	message_die(GENERAL_ERROR, "Could npt obtain ranks data", "", __LINE__, __FILE__, $sql);
}

$i=0;
while( $rank_row = $db->sql_fetchrow($result) )
{	
	$rank = $rank_row['rank_title'];
	$rank_id = $rank_row['rank_id'];
	$rank_min = $rank_row['rank_min'];
	$rank_image = $rank_row['rank_image'];
		
	if( $rank_row['rank_special'] == 1 )
	{
		$rank_min = $lang['Rank_special'];
	}

	$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];
	$template->assign_block_vars("rank_row", array(
		"ROW_CLASS" => $row_class,
		"RANK_NAME" => $rank,
		"RANK_MIN" => $rank_min,
		"RANK_IMAGE" => $images['rank'].$rank_image
		)
	);
    $i++;
}

$template->assign_vars(array(
    "L_RANK_NAME" => $lang['Rank_title'],
    "L_RANK_MIN" => $lang['Rank_minimum'],
    "L_RANK_IMAGE" => $lang['Rank_image'] )
);

$template->pparse("body");

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
?>

