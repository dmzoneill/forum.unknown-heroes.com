
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left" class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
	</tr>
</table>


<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
  		<td class="tableborder">
		
			<table width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
				<tr>
					<th class="catHead"><span class="cattitle">{L_FAQ_TITLE}</span></th>
				</tr>
				<tr>
					<td class="row1">
						<!-- BEGIN faq_block_link -->
						<span class="genmed"><b>{faq_block_link.BLOCK_TITLE}</b></span><br />
						<!-- BEGIN faq_row_link -->
						<span class="genmed"><a href="{faq_block_link.faq_row_link.U_FAQ_LINK}" class="faqlink">{faq_block_link.faq_row_link.FAQ_LINK}</a></span><br />
						<!-- END faq_row_link -->
						<br />
						<!-- END faq_block_link -->
					</td>
				</tr>
				<tr>
					<td class="catBottom" height="28">&nbsp;</td>
				</tr>
			</table>

		</td>
	</tr>
</table>

<br clear="all" />



<!-- BEGIN faq_block -->

<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr> 
  		<td class="tableborder">

			<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
				<tr> 
					<td class="catHead" align="center"><span class="cattitle">{faq_block.BLOCK_TITLE}</span></td>
				</tr>
				<!-- BEGIN faq_row -->  
				<tr> 
					<td class="{faq_block.faq_row.ROW_CLASS}" align="left" valign="top"><span class="postbody"><a name="{faq_block.faq_row.U_FAQ_ID}"></a><b>{faq_block.faq_row.FAQ_QUESTION}</b></span><br /><span class="postbody">{faq_block.faq_row.FAQ_ANSWER}<br /><a class="faqlink" href="#Top">{L_BACK_TO_TOP}&nbsp;&raquo;</a></span></td>
				</tr>
				<tr>
					<td class="row3" height="1"><img src="templates/Solaris/images/spacer.gif" alt="" width="1" height="1" /></td>
				</tr>
				<!-- END faq_row -->
			</table>

		</td>
	</tr>
</table

<br clear="all" />
<!-- END faq_block -->

<table width="100%" cellspacing="2" border="0" align="center">
	<tr>
		<td align="right" valign="middle" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span><br /><br />{JUMPBOX}</td> 
	</tr>
</table>
