
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Всички новини</h1>
	</div>
	<!-- end page-heading -->

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
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
			<!--  start table-contents  -->
			<div id="table-content">
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Заглавие </a>	</th>
					<th class="table-header-repeat line-left"><a href="">Дата</a></th>
					<th class="table-header-options line-left"><a href="">Опции</a></th>
				</tr>
				<? 
					if(!empty($news)):
					foreach($news as $item):
				?>
				<tr>
					<td><?=$item['title'];?></td>
					<td><a href=""><?=$item['date'];?></a></td>
					<td class="options-width">
					<a href="<?=base_url('admin/edit/'.$item['id']);?>" title="Редактирай" class="icon-1 info-tooltip"></a>
					<a href="<?=base_url('admin/delete/'.$item['id']);?>" title="Изтрий" class="icon-2 info-tooltip"></a>
					</td>
				</tr>
				<? 
					endforeach;
					endif;
				?>
			<!-- end actions-box........... -->
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
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