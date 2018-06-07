{include file="../includes/top.tpl"}
<script src="js/admin.js" language="javascript"></script>

<script src="js/quan.js" language="javascript"></script>	
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
				
			<form action="fxsManage.php" method="get">
				<fieldset style="height:100px">  <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
				<p class="align-left vm">
					<label class="fl">所属供应商：</label>              
						<select name="aid" class="mini-input" style="color:red">
							{if $rank eq 1}<option value=""> </option>{/if}
							{foreach from=$ghss item=vo}
								<option value="{$vo.aid}"> {$vo.name}</option>
							{/foreach}
									
						</select> 
						<br />
				</p>

				<p class="align-left" style="position:absolute;left:33px;top:150px;">
					<label class="fl">所属省份：</label>              
						<select name="province" class="mini-input" style="color:red">
							{if $rank eq 1}<option value=""> </option>{/if}
							{foreach from=$ghs item=voo}
								<option value="{$voo.province}"> {$voo.province}</option>
							{/foreach}
									
						</select> 
						<br />
				</p>
				
				<p class="align-left">
									
				<label class="fl">分销商名称：</label>   
				<input name="name" id="typeclass" class="input-small" style="height:25px">


				<br />
				</p>
				
				<p class="align-left">
					<input class="button" type="hidden" name="m"  value="fxs" />
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
								  
								    <th>分销商名称</th>
								   <th>分销商帐号</th>
								  <th>所属供货商</th>
								    <th>联系人</th>
									<th>联系电话</th>
									<th>联系地址</th>
									<th>备注</th>
								
								   <th>操作</th>
								</tr>
								
							</thead>
						 
							
						 
							<tbody>
							
							{foreach from=$users item=item}
								<tr class="vm">
									
									<td  align="center">{$item.name}</td>
									<td style=" width:100px; "  align="center">{$item.username}</td>
									<td  align="center">{$item.aname}</td>
									<td  align="center">{$item.realname}</td>
									<td  align="center">{$item.mobile}</td>
									<td  align="center">{$item.address}</td>
									<td  align="center">{$item.beizu}</td>
									<td  align="center">
										<!-- Icons -->
										 <a href="fxsManage.php?act=edit&m=fxs&n=manage&uid={$item.uid}" title="Edit"><img src="/css/images/icons/pencil.png" alt="Edit" border="0" /></a>
										 <a href="fxsManage.php?act=del&m=fxs&uid={$item.uid}" title="Delete"><img src="/css/images/icons/cross.png" alt="Delete" border="0" /></a> 
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
</div></td>
</tr>
</table>
</div>
</div>
</body></html>
	