<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr> 
	<td align="left" valign="bottom" colspan="2"><a class="maintitle" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a>
	  <span class="gensmall"><b>{PAGINATION}</b>
	  &nbsp; </span></td>
  </tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr> 
	<td align="left" valign="bottom" nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>
		<td align="left" valign="middle" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a> 
	  	  <!-- BEGIN switch_parent_link -->
	 -> <a class="nav" href="{PARENT_URL}">{PARENT_NAME}</a>
	  	  <!-- END switch_parent_link -->
	 -> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></span></td>
	<td align="right" valign="bottom" class="nav" nowrap="nowrap"><span class="gensmall">{S_TOOLBAR_TOPIC}</span></td>

  </tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
	<tr align="right">
			{POLL_DISPLAY}
	<!-- BEGIN postrow -->
	<tr align="right">
		<td class="catHead" colspan="2" height="28">
			<span class="name"><a name="{postrow.S_NUM_ROW}" id="{postrow.S_NUM_ROW}"></a></span>
			<span class="nav">{postrow.S_NAV_BUTTONS}</span>
		</td>
	</tr>
	<tr>
		<th class="thLeft" width="150" height="26" nowrap="nowrap">{L_AUTHOR}</th>
		<th class="thRight" nowrap="nowrap">{L_MESSAGE}</th>
	</tr>
	
	<tr> 
		<td width="150" align="left" valign="top" class="{postrow.ROW_CLASS}"><span class="name"><a name="{postrow.U_POST_ID}"></a><a href="{postrow.U_VIEW_POSTER_PROFILE}" class="name" {postrow.POSTER_STYLE}><b>{postrow.POSTER_NAME}</b></a></span><br /><span class="postdetails">{postrow.POSTER_RANK}<br />{postrow.RANK_IMAGE}{postrow.POSTER_AVATAR}<br /><br />{postrow.POSTER_AGE}{postrow.POSTER_CAKE}{postrow.POSTER_JOINED}<br />{postrow.POSTER_UIN}<br />{postrow.POSTER_POSTS}<br />{postrow.POSTER_FROM}</span><br /></td>
		<td class="{postrow.ROW_CLASS}" width="100%" height="28" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="100%"><img src="{postrow.I_MINITIME}" width="12" height="9" alt="" title="{L_POSTED}" /><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}<br /><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" border="0" /></a>{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></td>
				<td valign="top" nowrap="nowrap">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG} <a href="{postrow.DOWNLOAD_POST}" class="genmed"><img src="{I_DOWNLOAD_POST}" title="{L_DOWNLOAD_POST}" alt="{L_DOWNLOAD_POST}" border="0" /></a></td>
			</tr>
			<tr> 
				<td colspan="2"><hr /></td>
			</tr>
			<tr>
				<td colspan="2"><span class="postbody">{postrow.MESSAGE}{postrow.SIGNATURE}</span><span class="gensmall">{postrow.EDITED_MESSAGE}</span></td>
			</tr>
		</table></td>
	</tr>
	<tr> 
		
		<td class="{postrow.ROW_CLASS}" width="100%" height="28" valign="bottom" colspan="2"><table cellspacing="0" cellpadding="0" border="0" height="18" width="18">
			<tr> 
				<td valign="middle" nowrap="nowrap">{postrow.MINI_PROFILE_IMG}&nbsp;{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.AIM_IMG} {postrow.YIM_IMG} {postrow.MSN_IMG}<script language="JavaScript" type="text/javascript"><!-- 

	if ( navigator.userAgent.toLowerCase().indexOf('mozilla') != -1 && navigator.userAgent.indexOf('5.') == -1 && navigator.userAgent.indexOf('6.') == -1 )
		document.write(' {postrow.ICQ_IMG}');
	else
		document.write('</td><td>&nbsp;</td><td valign="top" nowrap="nowrap"><div style="position:relative"><div style="position:absolute">{postrow.ICQ_IMG}</div><div style="position:absolute;left:3px;top:-1px">{postrow.ICQ_STATUS_IMG}</div></div>');
				
				//--></script><noscript>{postrow.ICQ_IMG}</noscript></td>
			</tr>
		</table></td>
	</tr>
	<tr> 
		<td class="spaceRow" colspan="2" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<!-- BEGIN spacing -->
	</table>
	<br class="nav" />
	<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
	<!-- END spacing -->
	<!-- END postrow -->
   <tr>
      <td class="spaceRow" colspan="2" height="1" align="center"><a href="http://www.osteonix.com" target="_blank"><img src="http://www.osteonix.com/banniere.gif" border="0"></a></td>
   </tr>
	<tr align="center"> 
		<td class="catBottom" colspan="2" height="28"><table cellspacing="0" cellpadding="0" border="0">
			<tr><form method="post" action="{S_POST_DAYS_ACTION}">
				<td align="center"><span class="gensmall">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;<input type="submit" value="{L_GO}" class="liteoption" name="submit" /></span></td>
			</form></tr>
		</table></td>
	</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left" valign="middle" nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>
	<td align="right" valign="middle" nowrap="nowrap"><span class="nav"><a href="{DOWNLOAD_TOPIC}" class="genmed"><img src="{I_DOWNLOAD_TOPIC}" border="0" alt="{L_DOWNLOAD_TOPIC}" align="middle" /></a>
		<td align="left" valign="middle" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a> 
	  	  <!-- BEGIN switch_parent_link -->
	  -> <a class="nav" href="{PARENT_URL}">{PARENT_NAME}</a>
	  	  <!-- END switch_parent_link -->
	  -> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></span></td>
	  </tr>
</table>
<br class="nav" />
  <table width="100%" border="0" cellpadding="3" cellspacing="1" class="forumline">
  <tr> 
	<th class="thCornerL" colspan="2" height="25" nowrap="nowrap" align="center"><b>Reponse Rapide</b></span></th>
  </tr>
    <tr>
      <td class="row1" align="center">
{QUICK_REPLY_FORM}
</td>
    </tr>
  </table><br />
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
  <tr>
	<td class="catHead" colspan="2" height="28"><span class="cattitle" valign="top"><b>{L_BT_TITLE}</b></span></td>
  </tr>
  <tr>
	<td class="row2 gensmall" width="150" nowrap="nowrap">{PAGE_NUMBER}</td>
	<td class="row1 gensmall" width="100%">{PAGINATION}</td>
  </tr>
  <!-- BEGIN switch_user_logged_in -->
  <tr>
	<td class="row2 gensmall" colspan="2">{S_WATCH_TOPIC}</td>
  </tr>
  <!-- END switch_user_logged_in -->
  <tbody id="info_display" style="display:none;">
	<tr>
		<td class="row2 gensmall" valign="top" width="150" nowrap="nowrap" valign="top"><b>{L_BT_PERMS}:</b></td>
		<td class="row1 gensmall" width="100%">{S_AUTH_LIST}</td>
	</tr>
  </tbody>
</table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="100%" align="left" valign="top" nowrap="nowrap">{S_TOPIC_ADMIN}</td>
	<td align="right" valign="top"><span class="gensmall">
		<a href="javascript:dom_toggle.toggle('info_display','info_close');"><img alt="{L_BT_SHOWHIDE_ALT}" src="{I_BT_SHOWHIDE}" title="{L_BT_SHOWHIDE_ALT}" width="22" height="12" border="0" /></a>
	</span></td>
  </tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="left">{JUMPBOX}</td>
  </tr>
</table>
