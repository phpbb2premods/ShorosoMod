<h1>{L_MODIF_PUB_LRG}</h1>


<p class="gen">{L_PUB_LRG_EXPLAIN}</p>


{PUB_LRG_BOX}
<br />

<form method="post" name="pub" action="{S_PGM}">

<table width="100%" cellpadding="5" cellspacing="1" border="0" class="forumline">
<tr>
	<th class="thHead" colspan="3">{L_TITRE}</th>
</tr>
<tr>
	<td class="row1"><span class="gen">{L_TEXTE_TITRE_PUB_LRG}</span><span class="gensmall"><br>{L_TITRE_EXPLAIN_PUB}</span></td>
	<td class="row2" colspan="2"><input type="text" name="titre_pub_lrg" value="{TITRE_PUB_LRG}" size="62" class="post"></td>
</tr>

<tr>
	<td class="row1" valign="top"><span class="gen">{L_TEXTE_PUB_LRG}</span><span class="gensmall"><br>{L_TEXTE_PUB_EXPLAIN}</span></td>
	<td class="row2" colspan="2"><textarea name="texte_pub_lrg" cols="60" rows="20" class="post">{TEXTE_PUB_LRG}</textarea></td>
</tr>
<tr>
	<td class="cat" align="center" colspan="3"><span class="cattitle">{L_TITRE_LOGO}</span></td>
</tr>
<tr>
	<td class="row1" valign="top"><span class="gen">{L_LOGO_LEFT}</span><br /><span class="gensmall">{L_LOGO_EXPLAIN}</span></td>
	<td class="row2" valign="top" colspan="2"><textarea name="logo_left" cols="60" rows="3" class="post">{LOGO_LEFT}</textarea></td>	
</tr>
<tr>
	<td class="row1" valign="top"><span class="gen">{L_LOGO_RIGHT}</span><br /><span class="gensmall">{L_LOGO_EXPLAIN}</span></td>
	<td class="row2" valign="top" colspan="2"><textarea name="logo_right" cols="60" rows="3" class="post">{LOGO_RIGHT}</textarea></td>	
</tr>
<tr>
	<td class="cat" align="center" colspan="3"><span class="cattitle">{L_PARAMETERS}</span></td>
</tr>
<tr>
	<td class="row1"><span class="gen">{L_WIDTH}</span><span class="gensmall"><br>{L_WIDTH_EXPLAIN}</span></td>
	<td class="row2" colspan="2"><input type="text" name="width" value="{WIDTH}" size="3" maxlength="3" class="post"></td>
</tr>
<tr>
	<td class="row1"><span class="gen">{L_HEIGHT}</span></td>
	<td class="row2" colspan="2"><input type="text" name="height" value="{HEIGHT}" size="3" maxlength="3" class="post"></td>
</tr>
<tr>
	<td class="row1" valign="top" rowspan="2"><span class="gen">{L_SCROLL}<br /></span><span class="gensmall">{L_SCROLL_EXPLAIN}</span></td>
	<td class="row2" colspan="2"><input type="text" name="scrollamount" value="{SCROLLAMOUNT}" size="1" maxlength="2" class="post">&nbsp;{L_SCROLLAMOUNT}&nbsp;</td>
</tr>
<tr>
	
	<td class="row2" colspan="2"><input type="text" name="scrolldelay" value="{SCROLLDELAY}" size="1" maxlength="2" class="post">&nbsp;{L_SCROLLDELAY}&nbsp;</td>
</tr>
<tr>
	<td class="row1" rowspan="4" valign="top"><span class="gen">{L_WAY}</span></td>
	<td class="row2" colspan="2"><input type="radio" name="way" value="up" {UP} />{L_UP}</td></tr>
	<tr><td class="row2" colspan="2"><input type="radio" name="way" value="down" {DOWN} />{L_DOWN}</td></tr>
	<tr><td class="row2" colspan="2"><input type="radio" name="way" value="left" {LEFT} />{L_LEFT}</td></tr>
	<tr><td class="row2" colspan="2"><input type="radio" name="way" value="right" {RIGHT} />{L_RIGHT}</td>
</tr>
<tr>
	<td class="cat" align="center" colspan="2"><span class="cattitle">{L_SHOW_ON}</span></td>
	<td class="cat" align="center"><span class="cattitle">{L_CONDITION}</span></td>
</tr>
<tr>
	<td class="row1"><span class="gen">{L_SHOW_HEADER}</span></td>
	<td class="row2"><input type="radio" name="pub_lrg_enable" value="3" {PUB_LRG_HEADER_YES} />{L_YES}</td>
	<td class="row2" align="center"><span class="gen">
	 <!-- BEGIN pub_lrg_header_enable -->
	 <b> - {L_CONDITION_ON} -</b>
	 <!-- END pub_lrg_header_enable -->	
	 <!-- BEGIN pub_lrg_header_disable -->
	 <b> - {L_CONDITION_OFF} -</b>
	 <!-- END pub_lrg_header_disable --> 
	 </span>
	</td>
</tr>
<tr>
	<td class="row1"><span class="gen">{L_SHOW_FOOTER}</span></td>
	<td class="row2"><input type="radio" name="pub_lrg_enable" value="1" {PUB_LRG_FOOTER_YES} />{L_YES}</td>
	<td class="row2" align="center"><span class="gen">
	 <!-- BEGIN pub_lrg_footer_enable -->
	 <b> - {L_CONDITION_ON} -</b>
	 <!-- END pub_lrg_footer_enable -->
	 <!-- BEGIN pub_lrg_footer_disable -->
	 <b> - {L_CONDITION_OFF} -</b>
	 <!-- END pub_lrg_footer_disable -->
	 </span>
	</td>
</tr>
<tr>
	<td class="row1"><span class="gen">{L_SHOW_INDEX}</span></td>
	<td class="row2"><input type="radio" name="pub_lrg_enable" value="2" {PUB_LRG_INDEX_YES} />{L_YES}</td>
	 <td class="row2" align="center"><span class="gen">
	 <!-- BEGIN pub_lrg_index_enable -->
	 <b> - {L_CONDITION_ON} -</b>
	 <!-- END pub_lrg_index_enable -->
	 <!-- BEGIN pub_lrg_index_disable -->
	 <b> - {L_CONDITION_OFF} -</b>
	 <!-- END pub_lrg_index_disable -->
	 </span>
	</td>
</tr>
<tr>
	<td class="row1"><span class="gen">{L_SHOW_PORTAL}</span><br /><span class="gensmall">{L_SHOW_PORTAL_EXPLAIN}</span></td>
	<td class="row2"><input type="radio" name="pub_lrg_enable" value="4" {PUB_LRG_PORTAL_YES} />{L_YES}</td>
	<td class="row2" align="center"><span class="gen">
	 <!-- BEGIN pub_lrg_portal_enable -->
	 <b> - {L_CONDITION_ON} -</b>
	 <!-- END pub_lrg_portal_enable -->
	 <!-- BEGIN pub_lrg_portal_disable -->
	 <b> - {L_CONDITION_OFF} -</b>
	 <!-- END pub_lrg_portal_disable -->
	 </span>
	</td>
</tr>
<tr>
	<td class="row1"><span class="gen">{L_SHOW}</span></td>
	<td class="row2" colspan="2"><input type="radio" name="pub_lrg_enable" value="0" {PUB_LRG_FOOTER_NO} />{L_NO}</td>
	
</tr>
<tr>
	<td class="catBottom" align="center" colspan="3">
		{S_HIDDEN_FIELDS}
		<input type="submit" class="liteoption" name="submit" value="{L_SUBMIT}">
	</td>
</tr>
</table>
</form>
