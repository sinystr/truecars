 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Редактирай новина</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="<?=base_url();?>assets/admin/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="<?=base_url();?>assets/admin/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
	<?=validation_errors();?>

		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
			<?=form_open_multipart('admin/edit/'.end($this->uri->segments));?>
		<tr>
			<th valign="top">Заглавие:</th>
			<td><input type="text" value="<?=$news['title'];?>" name="title" class="inp-form" /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top">Съдържание:</th>
			<td><textarea name="content" style="width:500px; height: 200px;"><?=$news['content'];?></textarea></td>
			<td></td>
		</tr>


		<tr>
			<th valign="top">Снимка:</th>
			<td style="width:150px;"><input type="file" name="userfile" /></td>
			<td>*Само, ако искате да замените предишната!</td>
		</tr>
		
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" name="add_news" value="" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
		<?=form_close();?>
	</tr>
	</table>
	<!-- end id-form  -->

	</td>
	<td>

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>









 





<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
    