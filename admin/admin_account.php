<?php
define('IN_PHPBB', 1);
if( !empty($setmodules) )
{
	$file = basename(__FILE__);
	$module['Users']['Account_inactive'] = $file .'?action=inactive';
	$module['Users']['Account_active'] = $file .'?action=active';
	return;
}

$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

if( !function_exists('period') )
{
	function period($date) // borrowed from birthday mod
	{
		global $lang;

		$years = floor($date/31536000);
		$date = $date - ($years*31536000);
		$weeks = floor($date/604800);
		$date = $date - ($weeks*604800);
		$days = floor($date/86400);
		$date = $date - ($days*86400);
		$hours = floor($date/3600);

		$result = (( $years ) ? $years .' '. (( $years == '1' ) ? $lang['Account_year'] : $lang['Account_years']) .', ' : '').
		(( $years || $weeks ) ? $weeks .' '. (( $weeks == '1' ) ? $lang['Account_week'] : $lang['Account_weeks']) .', ' : '').
		(( $years || $weeks || $days ) ? $days .' '. (( $days == '1' ) ? $lang['Account_day'] : $lang['Account_days']) .', ' : '') .
		(( $years || $weeks || $days || $hours ) ? $hours .' '. (( $hours == '1' ) ? $lang['Account_hour'] : $lang['Account_hours']) : '');
		return $result;
	}
}

$submit_wait = ( isset($HTTP_POST_VARS['submit_wait']) ) ? TRUE : 0;
$confirm = ( isset($HTTP_POST_VARS['confirm']) ) ? TRUE : 0;
$delete = ( isset($HTTP_POST_VARS['delete']) ) ? TRUE : 0;
$activate = ( isset($HTTP_POST_VARS['activate']) ) ? TRUE : 0;
$mark_list = ( !empty($HTTP_POST_VARS['mark']) ) ? $HTTP_POST_VARS['mark'] : 0;

if( isset($HTTP_POST_VARS['letter']) )
{
	$by_letter = ( $HTTP_POST_VARS['letter'] ) ? $HTTP_POST_VARS['letter'] : 'all';
}
else if( isset($HTTP_GET_VARS['letter']) )
{
	$by_letter = ( $HTTP_GET_VARS['letter'] ) ? $HTTP_GET_VARS['letter'] : 'all';
}

if( isset($HTTP_POST_VARS['action']) || isset($HTTP_GET_VARS['action']) )
{
	$action = ( isset($HTTP_POST_VARS['action']) ) ? $HTTP_POST_VARS['action'] : $HTTP_GET_VARS['action'];
	if( $action != 'inactive' && $action != 'active' )
	{
		$action = 'inactive';
	}
}
else
{
	$action = 'inactive';
}

if( !empty($HTTP_POST_VARS['mode']) || !empty($HTTP_GET_VARS['mode']) )
{
	$mode = ( !empty($HTTP_POST_VARS['mode']) ) ? $HTTP_POST_VARS['mode'] : $HTTP_GET_VARS['mode'];
}
else
{
	$mode = '';
}

$start = ( !empty($HTTP_GET_VARS['start']) ) ? intval($HTTP_GET_VARS['start']) : 0;

if( isset($HTTP_POST_VARS[POST_USERS_URL]) || isset($HTTP_GET_VARS[POST_USERS_URL]) )
{
	$user_id = ( isset($HTTP_POST_VARS[POST_USERS_URL]) ) ? intval($HTTP_POST_VARS[POST_USERS_URL]) : intval($HTTP_GET_VARS[POST_USERS_URL]);
}
else
{
	$user_id = '';
}

if( (($delete && $confirm) || $activate) && $mark_list )
{
	if( count($mark_list) )
	{
		$email_id = '';
		for( $i = 0; $i < count($mark_list); $i++ )
		{
			$email_id .= (($email_id != '') ? ', ' : '') . intval($mark_list[$i]);
		}

		$sql_mail = "SELECT username, user_email, user_lang, user_active FROM ". USERS_TABLE ." WHERE user_id IN ($email_id)";
		if( !($result_mail = $db->sql_query($sql_mail)) )
		{
			message_die(GENERAL_ERROR, 'could not get mail addresses', '', __LINE__, __FILE__, $sql_mail);
		}
		while( $mail = $db->sql_fetchrow($result_mail) )
		{
			if( $delete )
			{
				$subject = $lang['Account_deleted'];
				$text = $lang['Account_deleted_text'];
			}
			else if( $activate )
			{
				$subject = ( $mail['user_active'] == '0' ) ? $lang['Account_activated'] : $lang['Account_deactivated'];
				$text = ( $mail['user_active'] == '0' ) ? $lang['Account_activated_text'] : $lang['Account_deactivated_text'];
			}

			include_once($phpbb_root_path .'includes/emailer.'.$phpEx);
			$emailer = new emailer($board_config['smtp_delivery']);
			$emailer->from($board_config['board_email']);
			$emailer->replyto($board_config['board_email']);
			$emailer->use_template('admin_account_action', stripslashes($mail['user_lang']));
			$emailer->email_address($mail['user_email']);
			$emailer->set_subject($subject);

			$emailer->assign_vars(array(
				'SUBJECT' => $subject,
				'TEXT' => sprintf($text, $board_config['sitename']),
				'USERNAME' => $mail['username'],
				'EMAIL_SIG' => ( !empty($board_config['board_email_sig']) ) ? str_replace('<br />', "\n", "-- \n" . $board_config['board_email_sig']) : '',
			));
			$emailer->send();
			$emailer->reset();
		}
		$db->sql_freeresult($result_mail);
	}
}

if( $delete && $mark_list )
{
	if( isset($mark_list) && !is_array($mark_list) )
	{
		$mark_list = array();
	}

	if( !$confirm )
	{
		$s_hidden_fields = '<input type="hidden" name="mode" value="'. $mode .'" />';
		$s_hidden_fields .= '<input type="hidden" name="delete" value="true" />';

		for( $i = 0; $i < count($mark_list); $i++ )
		{
			$s_hidden_fields .= '<input type="hidden" name="mark[]" value="'. intval($mark_list[$i]) .'" />';
		}

		$template->set_filenames(array(
			'confirm_body' => 'confirm_body.tpl')
		);
		$template->assign_vars(array(
			'MESSAGE_TITLE' => $lang['Information'],
			'MESSAGE_TEXT' => ( count($mark_list) == '1' ) ? $lang['Account_delete_user'] : $lang['Account_delete_users'],
			'L_YES' => $lang['Yes'],
			'L_NO' => $lang['No'],
			'S_CONFIRM_ACTION' => append_sid("admin_account.$phpEx?action=$action"),
			'S_HIDDEN_FIELDS' => $s_hidden_fields,
		));
		$template->pparse('confirm_body');
		include('./page_footer_admin.'.$phpEx);
	}
	else if( $confirm )
	{
		if( count($mark_list) )
		{
			$delete_id = '';
			for( $i = 0; $i < sizeof($mark_list); $i++ )
			{
				$delete_id .= (($delete_id != '') ? ', ' : '') . intval($mark_list[$i]);
			}

			$delete_u_sql = "DELETE FROM ". USERS_TABLE ." WHERE user_id IN ($delete_id) AND user_id <> ". ANONYMOUS ." AND ";
			switch( $action )
			{
				case 'inactive':
					$delete_u_sql .= "user_active = '0'";
					break;
				case 'active':
					$delete_u_sql .= "user_active = '1'";
					break;
			}
			if( !$db->sql_query($delete_u_sql, BEGIN_TRANSACTION) )
			{
				message_die(GENERAL_ERROR, 'could not delete users.', '', __LINE__, __FILE__, $delete_u_sql);
			}

			$delete_ug_sql = "DELETE FROM ". USER_GROUP_TABLE ." WHERE user_id IN ($delete_id) AND user_id <> ". ANONYMOUS;
			if ( !$db->sql_query($delete_ug_sql, END_TRANSACTION) )
			{
				message_die(GENERAL_ERROR, 'could not delete user groups.', '', __LINE__, __FILE__, $delete_ug_sql);
			}

			$select_g_sql = "SELECT g.group_id FROM ". GROUPS_TABLE ." g
                                                             LEFT JOIN ". USER_GROUP_TABLE ." ug ON g.group_id = ug.group_id
					 WHERE group_single_user = 1 AND ug.group_id IS NULL";
			if( !($result = $db->sql_query($select_g_sql)) )
			{
				message_die(GENERAL_ERROR, 'could not obtain group information.', '', __LINE__, __FILE__, $select_g_sql);
			}
			while( $group = $db->sql_fetchrow($result) )
			{
				$delete_g_sql = "DELETE FROM ". GROUPS_TABLE ." WHERE group_id = '". $group['group_id'] ."'";
				if( !($db->sql_query($delete_g_sql)) )
				{
					message_die(GENERAL_ERROR, 'could not delete group.', '', __LINE__, __FILE__, $delete_g_sql);
				}
			}
			$db->sql_freeresult($result);

			$template->assign_vars(array('MESSAGE' => (( count($mark_list) == '1' ) ? $lang['Account_user_deleted'] : $lang['Account_users_deleted']).' '. $lang['Account_notification']));
			$template->assign_block_vars("switch_message", array() );
		}
	}
}
else if( $activate && $mark_list )
{
	if( sizeof($mark_list) )
	{
		$activate_id = '';
		for ($i = 0; $i < sizeof($mark_list); $i++)
		{
			$activate_id .= (($activate_id != '') ? ', ' : '') . intval($mark_list[$i]);
		}

		$activate_sql = "UPDATE ". USERS_TABLE;
		switch( $action )
		{
			case 'inactive':
				$activate_sql .= " SET user_active = '1' WHERE user_active = '0'";
				break;
			case 'active':
				$activate_sql .= " SET user_active = '0' WHERE user_active = '1'";
				break;
		}
		$activate_sql .= " AND user_id IN ($activate_id)";
		if( !$db->sql_query($activate_sql) )
		{
			message_die(GENERAL_ERROR, 'could not activate users.', '', __LINE__, __FILE__, $activate_sql);
		}

		$template->assign_vars(array('MESSAGE' => (( count($mark_list) == '1' ) ? (( $action == 'active' ) ? $lang['Account_user_deactivated'] : $lang['Account_user_activated']) : (( $action == 'active' ) ? $lang['Account_users_deactivated'] : $lang['Account_users_activated'])).' '. $lang['Account_notification']));
		$template->assign_block_vars("switch_message", array() );
	}
}

//
// Output
//
$template->set_filenames(array('body' => 'admin/admin_account_body.tpl'));

$others_sql = '';
$select_letter = '';
for( $i = 97; $i <= 122; $i++ )
{
	$others_sql .= " AND username NOT LIKE '" . chr($i) . "%' ";
	$select_letter .= ( $by_letter == chr($i) ) ? strtoupper(chr($i)) .'&nbsp;' : '<a href="'. append_sid("admin_account.$phpEx?action=$action&amp;letter=". chr($i) ."&amp;start=$start") .'">'. strtoupper(chr($i)) .'</a>&nbsp;';
}
$select_letter .= ( $by_letter == 'others' ) ? $lang['Account_others'] .'&nbsp;' : '<a href="'. append_sid("admin_account.$phpEx?action=$action&amp;letter=others&amp;start=$start") .'">'. $lang['Account_others'] .'</a>&nbsp;';
$select_letter .= ( $by_letter == 'all' ) ? $lang['Account_all'] : '<a href="'. append_sid("admin_account.$phpEx?action=$action&amp;letter=all&amp;start=$start") .'">'. $lang['Account_all'] .'</a>';

if( $by_letter == 'all' )
{
	$letter_sql = '';
}
else if( $by_letter == 'others' )
{
	$letter_sql = $others_sql;
}
else
{
	$letter_sql = " AND username LIKE '$by_letter%' ";
}

$sql_count = "SELECT COUNT(user_id) AS total_users FROM ". USERS_TABLE ." ";
$sql = "SELECT username, user_id, user_actkey, user_regdate, user_email FROM ". USERS_TABLE ." ";
switch( $action )
{
	case 'inactive':
		$sql_count .= "WHERE user_id <> ". ANONYMOUS ." AND user_active != '1' $letter_sql";
		$sql .= "WHERE user_id <> ". ANONYMOUS ." AND user_active != '1' $letter_sql";
		break;
	case 'active':
		$sql_count .= "WHERE user_id <> ". ANONYMOUS ." AND user_active != '0' $letter_sql";
		$sql .= "WHERE user_id <> ". ANONYMOUS ." AND user_active != '0' $letter_sql";
		break;
	default:
		message_die(GENERAL_MESSAGE, $lang['No_mode']);
		break;
}

if( $submit_wait && (!empty($HTTP_POST_VARS['days']) || !empty($HTTP_GET_VARS['days'])) )
{
	$days = ( !empty($HTTP_POST_VARS['days']) ) ? intval($HTTP_POST_VARS['days']) : intval($HTTP_GET_VARS['days']);
	$awaits = time() - ($days * 86400);

	$limit_awaits_count = " AND user_regdate > $awaits";
	$limit_awaits = " AND user_regdate > $awaits ";

	if( !empty($HTTP_POST_VARS['days']) )
	{
		$start = 0;
	}
}
else
{
	$limit_awaits = '';
	$post_days = 0;
}

$sql .= $limit_awaits ." ORDER BY user_regdate DESC LIMIT $start, ". $board_config['posts_per_page'];
$sql_all = $sql_count;
$sql_count .= $limit_awaits_count;

if( !($result = $db->sql_query($sql_count)) )
{
	message_die(GENERAL_ERROR, 'could not query users information.', '', __LINE__, __FILE__, $sql_count);
}

$total_users = ( $row = $db->sql_fetchrow($result) ) ? $row['total_users'] : 0;
if( !($result = $db->sql_query($sql_all)) )
{
	message_die(GENERAL_ERROR, 'could not query users information.', '', __LINE__, __FILE__, $sql_all);
}

$all_total_users = ( $row = $db->sql_fetchrow($result) ) ? $row['total_users'] : 0;

$previous_days = array(0, 1, 7, 14, 30, 90, 180, 364);
$previous_days_text = array($lang['Account_all'], $lang['1_Day'], $lang['7_Days'], $lang['2_Weeks'], $lang['1_Month'], $lang['3_Months'], $lang['6_Months'], $lang['1_Year']);

$select_days = '';
for( $i = 0; $i < count($previous_days); $i++ )
{
	$selected = ( $days == $previous_days[$i] ) ? ' selected="selected"' : '';
	$select_days .= '<option value="'. $previous_days[$i] .'"'. $selected .'>'. $previous_days_text[$i] .'</option>';
}

$l_activation = $lang['Account_activation'] .': <b>'. (( $board_config['require_activation'] == USER_ACTIVATION_SELF ) ? $lang['Acc_User'] : (( $board_config['require_activation'] == USER_ACTIVATION_ADMIN ) ? $lang['Acc_Admin'] : $lang['None'])) .'</b>';

$template->assign_vars(array(
	'L_ACCOUNT_ACTIONS' => $lang['Account_actions'],
	'L_ACCOUNT_ACTIONS_EXPLAIN' => ( $action == 'inactive' ) ? $lang['Account_inactive_explain'] : $lang['Account_active_explain'],
	'L_MARK' => $lang['Mark'],
	'L_MARK_ALL' => $lang['Mark_all'],
	'L_UNMARK_ALL' => $lang['Unmark_all'],
	'L_DELETE_MARKED' => $lang['Delete_marked'],
	'L_DE_ACTIVATE_MARKED' => ( $action == 'inactive' ) ? $lang['Account_activate'] : $lang['Account_deactivate'],
	'L_EDIT_USER' => $lang['Edit'],
	'L_USER_AUTH' => $lang['Permissions'],
	'L_SORT_PER_LETTER' => $lang['Account_sort_letter'],
	'L_GO' => $lang['Go'], 
	'L_USERNAME' => $lang['Username'],
	'L_EMAIL' => $lang['Email'],
	'L_JOINED' => $lang['Joined'], 
	'L_REGISTERED_AWAITS' => ( $action == 'inactive' ) ? $lang['Account_awaits'] : $lang['Account_registered'],
	'L_ACTIVATION' => $l_activation,
	'TOTAL_USERS' => ( $total_users == '1' ) ? sprintf($lang['Account_total_user'], $total_users) : sprintf($lang['Account_total_users'], $total_users),
	'PAGINATION' => ( $total_users == '0' ) ? '' : generate_pagination("admin_account.$phpEx?action=$action&amp;letter=$letter", $total_users, $board_config['posts_per_page'], $start),
	'PAGE_NUMBER' => ( $total_users == '0' ) ? '' : sprintf($lang['Page_of'], ( floor( $start / $board_config['posts_per_page'] ) + 1 ), ceil( $total_users / $board_config['posts_per_page'] )), 
	'S_LETTER_SELECT' => $select_letter,
	'S_LETTER_HIDDEN' => '<input type="hidden" name="letter" value="'. $by_letter .'">',
	'S_ACCOUNT_ACTION' => append_sid("admin_account.$phpEx?action=$action"),
	'S_HIDDEN_FIELDS' => '',
	'S_SELECT_DAYS' => $select_days,
));

if( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'could not query users.', '', __LINE__, __FILE__, $sql);
}

if( $row = $db->sql_fetchrow($result) )
{
	$i = 0;
	do
	{
		$user_id = $row['user_id'];

		$email_url = ( $board_config['board_email_form'] ) ? append_sid("../profile.$phpEx?mode=email&amp;". POST_USERS_URL ."=$user_id") : 'mailto:'. $row['user_email'];
		$email = '<a href="'. $email_url .'" class="gensmall">'. $row['user_email'] .'</a>';

		$i++;
		$template->assign_block_vars('admin_account', array(
			'ROW_NUMBER' => $i + ( $HTTP_GET_VARS['start'] + 1 ),
			'ROW_CLASS' => ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'],
			'USERNAME' => $row['username'],
			'U_PROFILE' => append_sid("../profile.$phpEx?mode=viewprofile&amp;". POST_USERS_URL ."=$user_id"),
			'EMAIL' => $email,
			'JOINED' => create_date($board_config['default_dateformat'], $row['user_regdate'], $board_config['board_timezone']),
			'PERIOD' => period(time() - $row['user_regdate']),
			'U_EDIT_USER' => append_sid("admin_users.$phpEx?mode=edit&amp;". POST_USERS_URL ."=$user_id"),
			'U_USER_AUTH' => append_sid("admin_ug_auth.$phpEx?mode=user&amp;". POST_USERS_URL ."=$user_id"),
			'S_MARK_ID' => $user_id, 
		));
	}
	while( $row = $db->sql_fetchrow($result) );
	$db->sql_freeresult($result);
}
else
{
	$template->assign_vars(array('L_NO_USERS' => $lang['Account_none']));
	$template->assign_block_vars("switch_no_users", array() );
}

$template->pparse('body');
include('./page_footer_admin.'.$phpEx);
?>