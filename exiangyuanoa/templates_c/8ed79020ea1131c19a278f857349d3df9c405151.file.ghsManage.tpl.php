<?php /* Smarty version Smarty-3.1.15, created on 2016-08-15 01:39:02
         compiled from ".\templates\ghsManage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2220853d89568036aa2-23231243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ed79020ea1131c19a278f857349d3df9c405151' => 
    array (
      0 => '.\\templates\\ghsManage.tpl',
      1 => 1471225106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2220853d89568036aa2-23231243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53d89568a01104_34230294',
  'variables' => 
  array (
    'users' => 0,
    'item' => 0,
    'page_arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d89568a01104_34230294')) {function content_53d89568a01104_34230294($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
								  
								    <th>供货商名称</th>
								   <th>供货商帐号</th>
								  
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
										 <a href="ghsManage.php?act=edit&m=ghs&n=manage&aid=<?php echo $_smarty_tpl->tpl_vars['item']->value['aid'];?>
" target="_blank" title="Edit"><img src="/css/images/icons/pencil.png" alt="Edit" border="0" /></a>
										 <a href="ghsManage.php?act=del&m=ghs&aid=<?php echo $_smarty_tpl->tpl_vars['item']->value['aid'];?>
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

		</div>	</td></tr></table>
		</div> 
	</div>
	</body></html><?php }} ?>
