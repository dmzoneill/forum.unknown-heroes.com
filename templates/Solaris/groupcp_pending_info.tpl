
<br clear="all" />

<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
  		<td class="tableborder">

			<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
				<tr> 
				  <th class="thCornerL">{L_PM}</th>
				  <th class="thTop">{L_USERNAME}</th>
				  <th class="thTop">{L_POSTS}</th>
				  <th class="thTop">{L_FROM}</th>
				  <th class="thTop">{L_EMAIL}</th>
				  <th class="thTop">{L_WEBSITE}</th>
				  <th class="thCornerR">{L_SELECT}</th>
				</tr>
				<tr> 
				  <td class="catSides" colspan="8"><span class="cattitle">{L_PENDING_MEMBERS}</span></td>
				</tr>
				<!-- BEGIN pending_members_row -->
				<tr> 
				  <td class="{pending_members_row.ROW_CLASS}" align="center"> {pending_members_row.PM_IMG} 
				  </td>
				  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="genmed"><a href="{pending_members_row.U_VIEWPROFILE}" class="genmed">{pending_members_row.USERNAME}</a></span></td>
				  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="genmed">{pending_members_row.POSTS}</span></td>
				  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="genmed">{pending_members_row.FROM}</span></td>
				  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="genmed">{pending_members_row.EMAIL_IMG}</span></td>
				  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="genmed">{pending_members_row.WWW_IMG}</span></td>
				  <td class="{pending_members_row.ROW_CLASS}" align="center"><span class="gensmall"> <input type="checkbox" name="pending_members[]" value="{pending_members_row.USER_ID}" checked="checked" /></span></td>
				</tr>
				<!-- END pending_members_row -->
				<tr> 
				  <td class="cat" colspan="8" align="right"><span class="cattitle"> 
					<input type="submit" name="approve" value="{L_APPROVE_SELECTED}" class="mainoption" />
					&nbsp; 
					<input type="submit" name="deny" value="{L_DENY_SELECTED}" class="liteoption" />
					</span></td>
				</tr>
			</table>

		</td>
	</tr>
</table>