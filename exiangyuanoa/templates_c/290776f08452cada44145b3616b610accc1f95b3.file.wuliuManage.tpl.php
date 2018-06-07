<?php /* Smarty version Smarty-3.1.15, created on 2016-08-15 01:49:46
         compiled from ".\templates\wuliuManage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2004053d89c0a8ab570-55509032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '290776f08452cada44145b3616b610accc1f95b3' => 
    array (
      0 => '.\\templates\\wuliuManage.tpl',
      1 => 1471225748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2004053d89c0a8ab570-55509032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53d89c0ad4a655_48317361',
  'variables' => 
  array (
    'ghss' => 0,
    'vo' => 0,
    'rank' => 0,
    'ghs' => 0,
    'voo' => 0,
    'wulius' => 0,
    'item' => 0,
    'page_arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d89c0ad4a655_48317361')) {function content_53d89c0ad4a655_48317361($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/admin.js" language="javascript"></script>
<script src="js/datepicker.js" language="javascript"></script>
<script src="js/wuliuM.js" language="javascript"></script>	
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" width="230"><?php echo $_smarty_tpl->getSubTemplate ("../includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</td>
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
											<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ghss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['aid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</option>
											<?php } ?>
									
									</select> 
									<br />
								</p>
				<p class="align-left" >
					<label class="fl">所属省份：</label>              
						<select name="province" id="province" class="" style="color:red; float:left; margin-right: 10px; margin-bottom: 5px; width:100px">
							<?php if ($_smarty_tpl->tpl_vars['rank']->value==1) {?><option value=""> </option><?php }?>
							<?php  $_smarty_tpl->tpl_vars['voo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ghs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voo']->key => $_smarty_tpl->tpl_vars['voo']->value) {
$_smarty_tpl->tpl_vars['voo']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['voo']->value['province'];?>
"> <?php echo $_smarty_tpl->tpl_vars['voo']->value['province'];?>
</option>
							<?php } ?>
									
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
							
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wulius']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								<tr class="vm">
									
									<td  align="center" style="width:100px;"><?php echo $_smarty_tpl->tpl_vars['item']->value['aname'];?>
</td>
									<td style=" width:100px; "  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['uname'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['fatime'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['daotime'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['shumu'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
									
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
</td>
								
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['prankname'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['uptime'];?>
</td>
									
									<td  align="center">
										<!-- Icons -->
										<?php if ($_smarty_tpl->tpl_vars['rank']->value==1) {?>
										 <a href="wuliuManage.php?act=edit&m=wuliu&n=manage&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Edit"><img src="/css/images/icons/pencil.png" alt="Edit" border="0" /></a>
										 <a href="wuliuManage.php?act=del&m=wuliu&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Delete"><img src="/css/images/icons/cross.png" alt="Delete" border="0" /></a> 
										 
										 <?php } else { ?>
										 	 <a href="wuliuManage.php?act=cha&m=wuliu&n=manage&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" target="_blank" title="Edit">查看</a>
										 <?php }?><!--<a href="#" title="Edit Meta"><img src="/assets/images//icons/hammer_screwdriver.png" alt="Edit Meta" /></a>-->
									</td>
								</tr>
								<?php } ?>
							
								
					</tbody>
							<tfoot>
								<tr>
									<td colspan="11">
										<div class="bulk-actions align-left">
										
										</div>
										<?php if ($_smarty_tpl->tpl_vars['page_arr']->value['str']!='') {?><?php echo $_smarty_tpl->tpl_vars['page_arr']->value['str'];?>
<?php }?>
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
		
<?php echo $_smarty_tpl->getSubTemplate ("../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div> </td>
  </tr>
</table>
	</div>
</div>
</body></html>
	<?php }} ?>
