 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">
<script type="text/javascript">
    var count = 1;
	$(function(){
		$('#add_field').click(function(){
			count += 1;
			$('#container').append('<input class="inp-form" id="field_' + count + '" name="features[]" type="text" /><br />' );
		});
	});
</script>

<div id="page-heading"><h1>Добави ревю</h1></div>


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

			<?=form_open_multipart('admin/review');?>
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Заглавие:</th>
			<td><input type="text" name="title" class="inp-form" /></td>
			<td></td>
		</tr>

		
		<tr>
			<td>
      				<a href="#" id="add_field"><span>» Добави поле</span></a>
   			</td>
			<td id="container">
				<input class="inp-form" id="field_0" name="features[]" type="text" /><br />
			</td>
			<td></td>
		</tr>

		<tr>
			<th valign="top">Видео:</th>
			<td><input type="text" name="video" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Главна:</th>
			<td><input type="file" name="file" /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top">Снимки:</th>
			<td><input type="file" name="images[]" multiple /></td>
			<td></td>
		</tr>

		<tr>
			<th valign="top">Съдържание:</th>
			<td><textarea name="content" style="width: 400px; height: 150px;"></textarea></td>
			<td></td>
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
    