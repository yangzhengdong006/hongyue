<?php /* Smarty version Smarty-3.1.15, created on 2016-08-15 01:49:00
         compiled from ".\templates\fxsManage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:842753d89570612480-86883075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caa630859d319ca909f1b0913fbf35439db1a1b0' => 
    array (
      0 => '.\\templates\\fxsManage.tpl',
      1 => 1471225705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '842753d89570612480-86883075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53d89570d07cf9_64911834',
  'variables' => 
  array (
    'rank' => 0,
    'ghss' => 0,
    'vo' => 0,
    'ghs' => 0,
    'voo' => 0,
    'users' => 0,
    'item' => 0,
    'page_arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d89570d07cf9_64911834')) {function content_53d89570d07cf9_64911834($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/admin.js" language="javascript"></script>

<script src="js/quan.js" language="javascript"></script>	
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
				
			<form action="fxsManage.php" method="get">
				<fieldset style="height:100px">  <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
				<p class="align-left vm">
					<label class="fl">所属供应商：</label>              
						<select name="aid" class="mini-input" style="color:red">
							<?php if ($_smarty_tpl->tpl_vars['rank']->value==1) {?><option value=""> </option><?php }?>
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

				<p class="align-left" style="position:absolute;left:33px;top:150px;">
					<label class="fl">所属省份：</label>              
						<select name="province" class="mini-input" style="color:red">
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
							
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								<tr class="vm">
									
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
									<td style=" width:100px; "  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['aname'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['realname'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['mobile'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['beizu'];?>
</td>
									<td  align="center">
										<!-- Icons -->
										 <a href="fxsManage.php?act=edit&m=fxs&n=manage&uid=<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" title="Edit"><img src="/css/images/icons/pencil.png" alt="Edit" border="0" /></a>
										 <a href="fxsManage.php?act=del&m=fxs&uid=<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
" title="Delete"><img src="/css/images/icons/cross.png" alt="Delete" border="0" /></a> 
										 <!--<a href="#" title="Edit Meta"><img src="/assets/images//icons/hammer_screwdriver.png" alt="Edit Meta" /></a>-->
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

</div></td>
</tr>
</table>
</div>
</div>
</body></html>
	<?php }} ?>
