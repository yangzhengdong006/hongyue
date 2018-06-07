{include file="../includes/top.tpl"}
<script src="js/admin.js" language="javascript"></script>
<script src="js/datepicker.js" language="javascript"></script>
<script src="js/wuliuM.js" language="javascript"></script>	
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->

{include file="../includes/sideMenu_top.tpl"}	

	<div class="main-content"> <!-- Main Content Section with everything -->
			
			
			<div class="notification information png_bg">
				
				<div>
					{$myname},欢迎您登陆使用，祝您使用愉快！
				</div>
			</div>
			
			
			<!-- Page Head -->
			
		
		
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-content forms">
				
					<form action="wuliufront.php" method="get">
							<fieldset>  <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
			
								
		<p class="align-left vm">
									<label class="fl">评价等级：</label>              
									<select name="prank" class="mini-input">
										
										<option value=""></option>
										<option value="1">非常满意</option>
										<option value="2">满意</option>
										<option value="3">一般</option>
										<option value="4">不满意</option>
										<option value="5">非常不满意</option>
									</select> 
									<br />
								</p>


					<div style="clear:both;"></div>			
				<p class="align-left">
<label class="fl">发货时间：</label>   
<input name="fatime1" id="inputDate" class="input-small inputDate" value="">-
<input name="fatime2" id="inputDate1" class="input-small inputDate1" value="">

</p>

		        <p class="align-left">
								
				
				
								
<label class="fl">预计到货时间：</label>   
<input name="daotime1" id="inputDate2" class="input-small inputDate2" value="">-
<input name="daotime2" id="inputDate3" class="input-small inputDate3" value="">


</p>
				
								<p class="align-left">
								<input class="button" type="hidden" name="m"  value="wuliu" />
								<input class="button" type="hidden" name="n"  value="manage" />
									<input class="button" type="submit" name="search"  value="筛选" />
									
								</p>
								
			    <p class="clear"></p>
				</fieldset>
		</form>
		
				
		
				<div class="content-box-content">
					<form class="form-search" action="goodsManage.php" method="post">
		<fieldset>
					<div class="tab-content default-tab" class="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<div class="notification attention png_bg">
							
							<div>
								点击右侧查看评价进行操作
							</div>
						</div>
						
						<table>
							
							<thead>
								<tr>
								  
								 
								  <th>发货时间</th>
								    <th>预计到货时间</th>;
									<th style="width:70px">货物名称</th>
									<th style="width:40px;">数量</th>
									<th style="width:40px;">总价</th>
									
									<th>到货地址</th>
									<th>查询电话</th>
									
									<th style="width:40px;">评价</th>
									<th>更新时间</th>
								
								   <th>操作</th>
								</tr>
								
							</thead>
						 
							
						 
							<tbody>
							
							{foreach from=$wulius item=item}
								<tr class="vm">
									
								
									<td  align="center">{$item.fatime}</td>
									<td  align="center">{$item.daotime}</td>
									<td  align="center">{$item.name}</td>
									<td  align="center">{$item.shumu}</td>
									<td  align="center">{$item.price}</td>
									
									<td  align="center">{$item.address}</td>
									<td  align="center">{$item.phone}</td>
									<td  align="center">{$item.prankname}</td>
									<td  align="center">{$item.uptime}</td>
									
									<td  align="center">
										<!-- Icons -->
									
										 	 <a href="wuliufront.php?act=cha&m=wuliu&n=manage&id={$item.id}" target="_blank" title="Edit">查看评价</a>
										<!--<a href="#" title="Edit Meta"><img src="/assets/images//icons/hammer_screwdriver.png" alt="Edit Meta" /></a>-->
									</td>
								</tr>
								{/foreach}
							
								
					</tbody>
							<tfoot>
								<tr>
									<td colspan="11">
										<div class="bulk-actions align-left">
										
										</div>
										{if $page_arr.str neq ""}{$page_arr.str}{/if}
										<!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>		
								</tfoot>
										
						</table>
								
						
					</div> <!-- End #tab1 -->
			</fieldset>
							<div class="clear"></div><!-- End .clear -->
					</form>
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
		
{include file="../includes/footer.tpl"}
		</div>	
		</div> 
	</div>