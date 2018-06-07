{include file="../includes/top.tpl"}
<script src="js/admin.js" language="javascript"></script>
<script src="js/datepicker.js" language="javascript"></script>
<script src="js/wuliuM.js" language="javascript"></script>	
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" width="230">{include file="../includes/sideMenu.tpl"}</td>
    <td>

	<div class="main-content"> <!-- Main Content Section with everything -->
			
			
			<div class="notification information png_bg">
				
				<div>
					欢迎您登陆使用，祝您使用愉快！
				</div>
			</div>
			
			
			<!-- Page Head -->
			
		
		
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-content forms">
				
					<form action="wuliuManage.php" method="get">
							<fieldset style="height:135px">  <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
				<p class="align-left vm">
									<label class="fl">所属供货商：</label>              
									<select name="aid" class="mini-input" id="aid">
										<option value=""> </option>
											{foreach from=$ghss item=vo}
												<option value="{$vo.aid}"> {$vo.name}</option>
											{/foreach}
									
									</select> 
									<br />
								</p>
				<p class="align-left" >
					<label class="fl">所属省份：</label>              
						<select name="province" id="province" class="" style="color:red; float:left; margin-right: 10px; margin-bottom: 5px; width:100px">
							{if $rank eq 1}<option value=""> </option>{/if}
							{foreach from=$ghs item=voo}
								<option value="{$voo.province}"> {$voo.province}</option>
							{/foreach}
									
						</select> 
						<br />
				</p>
									<p class="align-left vm">
									<label class="fl">所属分销商：</label>              
									<select name="uid" class="mini-input" id="uid">
											
									</select> 
									<br />
								</p>
								
		<p class="align-left vm">
									<label class="fl">评价等级：</label>              
									<select name="prank" class="" style="float:left; margin-right: 10px; margin-bottom: 5px; width:100px">
										
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
<input name="fatime1" id="inputDate" class="input-small inputDate" value="" style="height:24px">-
<input name="fatime2" id="inputDate1" class="input-small inputDate1" value="" style="height:24px">

</p>

		        <p class="align-left">
								
				
				
								
<label class="fl">预计到货时间：</label>   
<input name="daotime1" id="inputDate2" class="input-small inputDate2" value="" style="height:24px">-
<input name="daotime2" id="inputDate3" class="input-small inputDate3" value="" style="height:24px">


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
								请谨慎删除操作，不可恢复！
							</div>
						</div>
						
						<table>
							
							<thead>
								<tr>
								  
								    <th>供货商</th>
								   <th>经销商</th>
								  <th>发货时间</th>
								    <th>预计到货时间</th>
									<th>货物名称</th>
									<th>数量</th>
									<th>总价</th>
									
									<th>到货地址</th>
									
									
									<th>评价</th>
									<th>更新</th>
								
								   <th>操作</th>
								</tr>
								
							</thead>
						 
							
						 
							<tbody>
							
							{foreach from=$wulius item=item}
								<tr class="vm">
									
									<td  align="center" style="width:100px;">{$item.aname}</td>
									<td style=" width:100px; "  align="center">{$item.uname}</td>
									<td  align="center">{$item.fatime}</td>
									<td  align="center">{$item.daotime}</td>
									<td  align="center">{$item.name}</td>
									<td  align="center">{$item.shumu}</td>
									<td  align="center">{$item.price}</td>
									
									<td  align="center">{$item.address}</td>
								
									<td  align="center">{$item.prankname}</td>
									<td  align="center">{$item.uptime}</td>
									
									<td  align="center">
										<!-- Icons -->
										{if $rank eq 1}
										 <a href="wuliuManage.php?act=edit&m=wuliu&n=manage&id={$item.id}" title="Edit"><img src="/css/images/icons/pencil.png" alt="Edit" border="0" /></a>
										 <a href="wuliuManage.php?act=del&m=wuliu&id={$item.id}" title="Delete"><img src="/css/images/icons/cross.png" alt="Delete" border="0" /></a> 
										 
										 {else}
										 	 <a href="wuliuManage.php?act=cha&m=wuliu&n=manage&id={$item.id}" target="_blank" title="Edit">查看</a>
										 {/if}<!--<a href="#" title="Edit Meta"><img src="/assets/images//icons/hammer_screwdriver.png" alt="Edit Meta" /></a>-->
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
		</div> </td>
  </tr>
</table>
	</div>
</div>
</body></html>
	