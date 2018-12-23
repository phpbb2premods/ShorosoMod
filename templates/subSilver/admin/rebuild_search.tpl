<!-- $Id: rebuild_search.tpl,v 2.2.1.1 2005/10/03 19:32:23 chatasos Exp $ -->

<SCRIPT type="text/javascript" language="JavaScript"><!--

// update the description on button and disable it
function update_button(button)
{
	button.value = '{L_PROCESSING}';
	button.disabled = true;

	return true;
}

// disable/enable the clear search options
function update_clear_search(myselect)
{
	// enable/disable radio buttons
	for (i = 0; i < 3; i++)
	{
		document.rebuild.clear_search[i].disabled = ( myselect.options[myselect.selectedIndex].value != 0 ) ? true : false;
	}

	swap_values();
}

// swap the values for total and remaining
function swap_values()
{
	var temp_value;

	temp_value = document.rebuild.post_limit.value;
	document.rebuild.post_limit.value = document.rebuild.post_limit_stored.value;
	document.rebuild.post_limit_stored.value = temp_value;

	temp_value = document.rebuild.session_posts_processing.value;
	document.rebuild.session_posts_processing.value = document.rebuild.total_posts_stored.value;
	document.rebuild.total_posts_stored.value = temp_value;
}
//-->
</SCRIPT>

<h1>{L_REBUILD_SEARCH}</h1>

<p>{L_REBUILD_SEARCH_DESC}</p>

<form name="rebuild" method="post" action="{S_REBUILD_SEARCH_ACTION}" onsubmit="update_button(rebuild.submit);">
	<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
		<tr>
			<th colspan="2" class="thHead">{L_REBUILD_SEARCH}</th>
		</tr>
		<tr>
			<td class="row1" nowrap="nowrap">
				{L_STARTING_POST_ID}<br />
				<span class="gensmall">{L_STARTING_POST_ID_EXPLAIN}</span>
			</td>
			<td class="row1" align="center">
				<!-- BEGIN start_text_input -->
				<input class="post" type="text" name="start_t" value="0" size="10" disabled="disabled" />
				<input type="hidden" name="start" value="0" />
				<!-- END start_text_input -->
				<!-- BEGIN start_select_input -->
				<select name="start" onChange="update_clear_search(this)">
					<option value="0">0 ({L_START_OPTION_BEGINNING})</option>
					<option value="{NEXT_START_POST_ID}" selected="selected">{NEXT_START_POST_ID} ({L_START_OPTION_CONTINUE})</option>
				</select>
				<!-- END start_select_input -->
			</td>
		</tr>
		<tr>
			<td class="row2" nowrap="nowrap">
				{L_CLEAR_SEARCH_TABLES}<br />
				<span class="gensmall">{L_CLEAR_SEARCH_TABLES_EXPLAIN}</span>
			</td>
			<td class="row2" align="left">
				<input type="radio" name="clear_search" value="0" {CLEAR_SEARCH_DISABLED} checked="checked" /><span class="gensmall">{L_CLEAR_SEARCH_NO}</span><br />
				<input type="radio" name="clear_search" value="1" {CLEAR_SEARCH_DISABLED} /><span class="gensmall">{L_CLEAR_SEARCH_DELETE}</span><br />
				<input type="radio" name="clear_search" value="2" {CLEAR_SEARCH_DISABLED} /><span class="gensmall">{L_CLEAR_SEARCH_TRUNCATE}</span>
			</td>
		</tr>
		<tr>
			<td class="row1" nowrap="nowrap">
				{L_NUM_OF_POSTS}<br /><span class="gensmall">{L_NUM_OF_POSTS_EXPLAIN}</span>
			</td>
			<td class="row1" align="center">
				<input class="post" type="text" name="session_posts_processing" value="{SESSION_POSTS_PROCESSING}" size="10" />
			</td>
		</tr>
		<tr>
			<td class="row2" nowrap="nowrap">
				{L_POSTS_PER_CYCLE}<br />
				<span class="gensmall">{L_POSTS_PER_CYCLE_EXPLAIN}</span>
			</td>
			<td class="row2" align="center">
				<input class="post" type="text" name="post_limit" value="{POST_LIMIT}" size="10" />
			</td>
		</tr>
		<tr>
			<td class="row1" nowrap="nowrap">
				{L_TIME_LIMIT}<br />
				<span class="gensmall">{L_TIME_LIMIT_EXPLAIN}</span>
			</td>
			<td class="row1" align="center">
				<input class="post" type="text" name="time_limit" value="{TIME_LIMIT}" size="10" />
			</td>
		</tr>
		<tr>
			<td class="row2" nowrap="nowrap">
				{L_REFRESH_RATE}<br />
				<span class="gensmall">{L_REFRESH_RATE_EXPLAIN}</span>
			</td>
			<td class="row2" align="center">
				<input class="post" type="text" name="refresh_rate" value="{REFRESH_RATE}" size="10" />
			</td>
		</tr>
		<tr>
			<td class="row1" nowrap="nowrap">
				{L_DISABLE_BOARD}<br />
				<span class="gensmall">{L_DISABLE_BOARD_EXPLAIN}</span>
			</td>
			<td class="row1" align="center">
				<input class="post" type="checkbox" name="disable_board" {BOARD_DISABLED} />
			</td>
		</tr>
		<tr>
		<!-- BEGIN last_saved_info -->
		<tr>
			<td class="row3" colspan="2" align="center">
				<span class="gensmall">{LAST_SAVED_PROCESSING}</span>
			</td>
		</tr>
		<!-- END last_saved_info -->
		<tr>
			<td class="catBottom" colspan="2" align="center">
				<input type="hidden" name="sid" value="{SESSION_ID}" />
				{S_HIDDEN_FIELDS}
				<input class="mainoption" type="submit" name="submit" value="{L_REBUILD_SEARCH}" />
			</td>
		</tr>
	</table>
</form>

<div align="center"><span class="copyright">{L_REBUILD_SEARCH} {REBUILD_SEARCH_VERSION}</span></div>

<br clear="all" />

