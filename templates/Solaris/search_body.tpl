
<form action="{S_SEARCH_ACTION}" method="POST"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
		<td align="left"><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></td>
	</tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
  		<td class="tableborder">

			<table width="100%" cellpadding="4" cellspacing="1" border="0">
				<tr> 
					<th class="thHead"><span class="cattitle">{L_SEARCH_QUERY}</span></th>
				</tr>
				<tr> 
					<td class="row2" width="50%"><span class="genmed"><strong>{L_SEARCH_KEYWORDS}</strong></span><br /><span class="gensmall">{L_SEARCH_KEYWORDS_EXPLAIN}</span><br />
					<span class="genmed"><input type="text" style="width: 300px;" class="post" name="search_keywords" size="30" /><br /><input type="radio" name="search_terms" value="any" checked  class="checkbox" /> {L_SEARCH_ANY_TERMS}<br /><input type="radio" name="search_terms" value="all" class="checkbox" /> {L_SEARCH_ALL_TERMS}</span></td>
				</tr>
				<tr> 
					<td class="row2"><span class="genmed"><strong>{L_SEARCH_AUTHOR}</strong></span><br /><span class="gensmall">{L_SEARCH_AUTHOR_EXPLAIN}</span><br />
					<span class="genmed"><input type="text" style="width: 300px;" class="post" name="search_author" size="30" /></span></td>
				</tr>
				<tr> 
					<th class="thHead"><span class="cattitle">{L_SEARCH_OPTIONS}</span></th>
				</tr>
				<tr> 
					<td class="row2"><span class="genmed"><strong>{L_FORUM}</strong>&nbsp;</span>
					<span class="genmed"><select class="post" name="search_forum">{S_FORUM_OPTIONS}</select></span></td>
				</tr>
				<tr>
					<td class="row2"><span class="genmed"><strong>{L_SEARCH_PREVIOUS}</strong>&nbsp;</span>
					<span class="genmed"><select class="post" name="search_time">{S_TIME_OPTIONS}</select><br /><input type="radio" name="search_fields" value="all" checked class="checkbox" /> {L_SEARCH_MESSAGE_TITLE}<br /><input type="radio" name="search_fields" value="msgonly" class="checkbox" /> {L_SEARCH_MESSAGE_ONLY}</span></td>
				</tr>
				<tr> 
					<td class="row2"><span class="genmed"><strong>{L_CATEGORY}</strong>&nbsp;</span>
					<span class="genmed"><select class="post" name="search_cat">{S_CATEGORY_OPTIONS}</select></span></td>
				</tr>
				<tr>
					<td class="row2"><span class="genmed"><strong>{L_SORT_BY}</strong>&nbsp;</span>
					<span class="genmed"><select class="post" name="sort_by">{S_SORT_OPTIONS}</select> <input type="radio" name="sort_dir" value="ASC" class="checkbox" />{L_SORT_ASCENDING} <input type="radio" name="sort_dir" value="DESC" class="checkbox" checked /> {L_SORT_DESCENDING}</span>&nbsp;</td>
				</tr>
				<tr> 
					<td class="row2"><span class="genmed"><strong>{L_DISPLAY_RESULTS}</strong>&nbsp;</span>
					<input type="radio" name="show_results" value="posts" class="checkbox" /><span class="genmed">{L_POSTS}<input type="radio" name="show_results" value="topics" checked class="checkbox" />{L_TOPICS}</span></td>
				</tr>
				<tr>
					<td class="row2"><span class="genmed"><strong>{L_RETURN_FIRST}</strong>&nbsp;</span>
					<span class="genmed"><select class="post" name="return_chars">{S_CHARACTER_OPTIONS}</select> {L_CHARACTERS}</span></td>
				</tr>
				<tr> 
					<td class="catBottom" align="center">{S_HIDDEN_FIELDS}<input class="mainoption" type="submit" value="{L_SEARCH}" /></td>
				</tr>
			</table>

		</td>
	</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
		<td align="right" valign="middle"><span class="gensmall">{S_TIMEZONE}</span></td>
	</tr>
</table></form>

<table width="100%" border="0">
	<tr>
		<td align="right" valign="top">{JUMPBOX}</td>
	</tr>
</table>
