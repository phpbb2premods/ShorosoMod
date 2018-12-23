
<form method="post" action="{S_POST_DAYS_ACTION}">
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left" valign="bottom" colspan="2">{FORUM_ICON_IMG}<a class="maintitle" href="{U_VIEW_FORUM}">{FORUM_NAME}</a><br /><span class="gensmall"><b>{L_MODERATOR}: {MODERATORS}<br /><br />{LOGGED_IN_USER_LIST}</b></span></td>
	  <td align="right" valign="bottom" nowrap="nowrap"><span class="gensmall"><b>{PAGINATION}</b></span></td>
	</tr>
	<tr> 
	  <td align="left" valign="middle" width="50"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" /></a></td>
	  	  <td align="left" valign="middle" class="nav" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a>

	  	  <!-- BEGIN switch_parent_link -->
	  	   -> <a class="nav" href="{PARENT_URL}">{PARENT_NAME}</a>
	  	  <!-- END switch_parent_link -->
	 -> <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a></span></td>
	  <td class="nav" style="text-align: right; vertical-align: bottom;"><span class="gensmall" style="white-space: nowrap;">{S_TOOLBAR_FORUM}
          <!-- BEGIN switch_attached_list -->
        <br /><a href="{U_MARK_READ_SUB}">{L_MARK_TOPICS_READ_SUB}</a>
        <!-- END switch_attached_list -->
        </span></td>
	</tr>
  </table>
<!-- BEGIN switch_attached_list -->
   <br />
   <table width="100%" border="0" cellpadding="4" cellspacing="1" width="100%" class="forumline">
     <tr>
		<th colspan="2" class="thCornerL" height="15" nowrap="nowrap">&nbsp;{switch_attached_list.L_ATTACHED_FORUM}&nbsp;</th>
		<th width="50" class="thTop" nowrap="nowrap">&nbsp;{switch_attached_list.L_ATTACHED_TOPICS}&nbsp;</th>
		<th width="50" class="thTop" nowrap="nowrap">&nbsp;{switch_attached_list.L_ATTACHED_POSTS}&nbsp;</th>
		<th width="50" class="thTop" nowrap="nowrap">&nbsp;{switch_attached_list.L_LAST_POST}&nbsp;</th>
     </tr>
	<!-- BEGIN switch_attached_present -->
	<tr>
		<td class="row1" align="center" valign="middle" height="38"><img src="{switch_attached_list.switch_attached_present.FORUM_FOLDER_IMG}" width="46" height="25" alt="{switch_attached_list.switch_attached_present.L_FORUM_FOLDER_ALT}" title="{switch_attached_list.switch_attached_present.L_FORUM_FOLDER_ALT}" /></td>
		<td class="row1" width="75%"><span class="forumlink"><a class="forumlink" href="{switch_attached_list.switch_attached_present.U_VIEWFORUM}">{switch_attached_list.switch_attached_present.FORUM_NAME}</a></span><br /><span class="genmed">{switch_attached_list.switch_attached_present.FORUM_DESC}</span></td>
		<td class="row2" align="center" valign="middle"><span class="gensmall">{switch_attached_list.switch_attached_present.TOPICS}</span></td>
		<td class="row2" align="center" valign="middle"><span class="gensmall">{switch_attached_list.switch_attached_present.POSTS}</span></td>
		<td class="row2" align="center" nowrap="nowrap" valign="middle"><span class="gensmall">{switch_attached_list.switch_attached_present.LAST_POST_ID}</span></td>
	</tr>
	<!-- END switch_attached_present -->
   </table>
   <br />
<!-- END switch_attached_list -->
  <table border="0" cellpadding="4" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th colspan="2" align="center" height="25" class="thCornerL" nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
	  <th width="50" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_REPLIES}&nbsp;</th>
	  <th width="100" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_AUTHOR}&nbsp;</th>
	  <th width="50" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_VIEWS}&nbsp;</th>
	  <th align="center" class="thCornerR" nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
	</tr>
	<!-- BEGIN topicrow -->
	<!-- BEGIN switch_post -->
	<tr>
	  <td class="row2" colspan="6" style="padding-left: 10px;"><span class="gensmall">{topicrow.switch_post.SPLIT_TYPE}</span></td>
	</tr>
	<!-- END switch_post -->
	<tr> 
	  <td class="row1" align="center" valign="middle" width="20"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="19" height="18" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	  <td class="row1" width="100%" onMouseOver="this.style.backgroundColor='{T_TD_COLOR1}'; this.style.cursor='hand';" onMouseOut=this.style.backgroundColor="{T_TR_COLOR1}" onclick="window.location.href='{topicrow.U_VIEW_TOPIC}'"><span class="topictitle">{topicrow.NEWEST_POST_IMG}{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span><span class="gensmall"><br />  
              <!-- BEGIN switch_topic_desc -->
              {L_DESCRIPTION} : {topicrow.switch_topic_desc.TOPIC_DESCRIPTION}<br />
              <!-- END switch_topic_desc -->
		{topicrow.GOTO_PAGE}</span></td>
	  <td class="row2" align="center" valign="middle"><span class="postdetails">{topicrow.REPLIES}</span></td>
	  <td class="row3" align="center" valign="middle"><span class="name">{topicrow.TOPIC_AUTHOR}</span></td>
	  <td class="row2" align="center" valign="middle"><span class="postdetails">{topicrow.VIEWS}</span></td>
	  <td class="row3Right" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}</span></td>
	</tr>
	<!-- END topicrow -->
	<!-- BEGIN switch_no_topics -->
	<tr> 
	  <td class="row1" colspan="6" height="30" align="center" valign="middle"><span class="gen">{L_NO_TOPICS}</span></td>
	</tr>
	<!-- END switch_no_topics -->
	<tr> 
	  <td class="catBottom" align="center" valign="middle" colspan="6" height="28"><span class="genmed">{L_DISPLAY_TOPICS}:&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp; 
		<input type="submit" class="liteoption" value="{L_GO}" name="submit" />
		</span></td>
	</tr>
  </table>

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="left" valign="middle" width="50"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" /></a></td>
	  	  <td align="left" valign="middle" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a>
	  	  <!-- BEGIN switch_parent_link -->
	  	   -> <a class="nav" href="{PARENT_URL}">{PARENT_NAME}</a>
	  	  <!-- END switch_parent_link -->
	 -> <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a></span></td>
	  	</tr>
  </table>
</form>
<br class="nav" />
<div id="info_display" style="display:none;">
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
  <tr>
	<td class="catHead" colspan="2" height="28"><span class="cattitle">{L_BT_TITLE}</span></td>
  </tr>
  <tr>
	<td class="row2 gensmall" width="150" nowrap="nowrap">{PAGE_NUMBER}</td>
	<td class="row1 gensmall" width="100%">{PAGINATION}</td>
  </tr>
  <tr>
	<td class="row2 gensmall" colspan="2"><b>{LOGGED_IN_USER_LIST}</b></td>
  </tr>
  <tr>
	<td class="row2 gensmall" width="150" nowrap="nowrap"><b>{L_MODERATOR}:</b></td>
	<td class="row1 gensmall" width="100%">{MODERATORS}</td>
  </tr>
  <tr>
	<td class="row2 gensmall" width="150" nowrap="nowrap" valign="top"><b>{L_BT_PERMS}:</b></td>
	<td class="row1 gensmall" width="100%">{S_AUTH_LIST}</td>
  </tr>
  <tr>
	<td class="row2 gensmall" width="150" nowrap="nowrap" valign="top"><b>{L_BT_ICONS}:</b></td>
	<td class="row1 gensmall" width="100%"><table cellspacing="3" cellpadding="0" border="0">
	  <tr>
		<td align="left"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" width="19" height="18" /></td>
		<td class="gensmall">{L_NEW_POSTS}</td>
		<td>&nbsp;&nbsp;</td>
		<td align="left"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" width="19" height="18" /></td>
		<td class="gensmall">{L_NO_NEW_POSTS}</td>
		<td>&nbsp;&nbsp;</td>
		<td align="left"><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}" width="19" height="18" /></td>
		<td class="gensmall">{L_ANNOUNCEMENT}</td>
	  </tr>
	  <tr> 
		<td align="left"><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" width="19" height="18" /></td>
		<td class="gensmall">{L_NEW_POSTS_HOT}</td>
		<td>&nbsp;&nbsp;</td>
		<td align="left"><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" width="19" height="18" /></td>
		<td class="gensmall">{L_NO_NEW_POSTS_HOT}</td>
		<td>&nbsp;&nbsp;</td>
		<td align="left"><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}" width="19" height="18" /></td>
		<td class="gensmall">{L_STICKY}</td>
	  </tr>
	  <tr>
		<td align="left"><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_LOCKED}" width="19" height="18" /></td>
		<td class="gensmall">{L_NEW_POSTS_LOCKED}</td>
		<td>&nbsp;&nbsp;</td>
		<td align="left"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}" width="19" height="18" /></td>
		<td class="gensmall">{L_NO_NEW_POSTS_LOCKED}</td>
	  </tr>
	</table></td>
  </tr>
</table>
</div>

<div id="info_close" style="display:visible;">
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
  <tr>
	<td class="catHead" colspan="2" height="28"><span class="cattitle">{L_BT_TITLE}</span></td>
  </tr>
  <tr>
	<td class="row2 gensmall" width="150" nowrap="nowrap">{PAGE_NUMBER}</td>
	<td class="row1 gensmall" width="100%">{PAGINATION}</td>
  </tr>
  <tr>
	<td class="row2 gensmall" colspan="2"><b>{LOGGED_IN_USER_LIST}</b></td>
  </tr>
  <tr>
	<td class="row2 gensmall" width="150" nowrap="nowrap" valign="top"><b>{L_BT_ICONS}:</b></td>
	<td class="row1 gensmall" width="100%"><table cellspacing="3" cellpadding="0" border="0">
	  <tr>
		<td align="left"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" width="19" height="18" /></td>
		<td class="gensmall">{L_NEW_POSTS}</td>
		<td>&nbsp;&nbsp;</td>
		<td align="left"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" width="19" height="18" /></td>
		<td class="gensmall">{L_NO_NEW_POSTS}</td>
	  </tr>
	</table></td>
  </tr>
</table>
</div>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td align="right" valign="top"><span class="gensmall">
		<a href="javascript:dom_toggle.toggle('info_display','info_close');"><img alt="{L_BT_SHOWHIDE_ALT}" src="{I_BT_SHOWHIDE}" title="{L_BT_SHOWHIDE_ALT}" width="22" height="12" border="0" /></a>
	</span></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
	<td align="left">{JUMPBOX}</td>
  </tr>
</table>
