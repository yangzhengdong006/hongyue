<?php /* Smarty version Smarty-3.1.15, created on 2016-08-15 01:40:03
         compiled from ".\templates\ghsedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2569353d89954355c76-62611879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52e8ff42dc118490561613de414870e79449d317' => 
    array (
      0 => '.\\templates\\ghsedit.tpl',
      1 => 1471225166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2569353d89954355c76-62611879',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53d899545f08f9_98244057',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d899545f08f9_98244057')) {function content_53d899545f08f9_98244057($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/admin.js" language="javascript"></script>
<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" width="230"><?php echo $_smarty_tpl->getSubTemplate ("../includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</td>
    <td>

	<div class="main-content"> 
			
		
			<!-- Page Head -->
			<div class="notification information png_bg">
		
				<div>
					为了能准确信息，请务必正确填写每一项！
				</div>
			</div>
		
			<p class="page-intro">编辑供货商</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
						<form action="ghsmanage.php" method="post" name="form1" id="form1">
						<fieldset> 
								
								<p>
									<label>供货商帐号(只能由英文字母，数字和下划线组成)：</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"  id="username" readonly/>
									
									
								</p>
								<p>
									<label>供货商密码</label>
									<input class="text-input medium-input datepicker" type="password" class="medium-input" name="password" value="" />
									<span class="input-notification success png_bg">留空表示不修改</span>
									
									
								</p>
							
								<p>
									<label>供货商名称</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>电话</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['mobile'];?>
" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>联系人</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['realname'];?>
" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>联系地址</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>备注</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="beizu" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['beizu'];?>
" />
									<span class="input-notification success png_bg">选填</span>
									
									
								</p>
								
								
								
								
							
								 <input type="hidden"  name="aid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['aid'];?>
">
								 <input type="hidden"  name="act" value="editdo">
								<input class="button ml10" type="submit" name="post_title" value="编辑" />
								<br/><br/>
						</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>


												
						
						</div>
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			

			<div class="clear"></div> <!-- End .clear -->

<?php echo $_smarty_tpl->getSubTemplate ("../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
		</div> </td></tr></table>
	</div>
</div></body></html><?php }} ?>
