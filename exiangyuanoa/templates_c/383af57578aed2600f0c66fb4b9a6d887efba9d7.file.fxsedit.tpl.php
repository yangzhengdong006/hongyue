<?php /* Smarty version Smarty-3.1.15, created on 2016-08-15 01:48:42
         compiled from ".\templates\fxsedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:459553d89579c27df0-07025031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '383af57578aed2600f0c66fb4b9a6d887efba9d7' => 
    array (
      0 => '.\\templates\\fxsedit.tpl',
      1 => 1471225669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '459553d89579c27df0-07025031',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53d8957a558a08_54547876',
  'variables' => 
  array (
    'user' => 0,
    'ghss' => 0,
    'vo' => 0,
    'ghs' => 0,
    'voo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8957a558a08_54547876')) {function content_53d8957a558a08_54547876($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





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
		
			<p class="page-intro">编辑分销商</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
						<form action="fxsmanage.php" method="post" name="form1" id="form1">
						<fieldset> 
								
								<p>
									<label>分销商帐号(只能由英文字母，数字和下划线组成)：</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"  id="username" readonly/>
									
									
								</p>
								<p>
									<label>分销商密码</label>
									<input class="text-input medium-input datepicker" type="password" class="medium-input" name="password" value="" />
									<span class="input-notification success png_bg">留空表示不修改</span>
									
									
								</p>
							
								<p>
									<label>分销商名称</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>所属供货商</label>
									<select class="text-input small-input datepicker"  name="aid">
										<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ghss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['aid'];?>
" <?php if ($_smarty_tpl->tpl_vars['vo']->value['aid']==$_smarty_tpl->tpl_vars['user']->value['aid']) {?> selected<?php }?>> <?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</option>
										<?php } ?>
									</select>
									
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
									
								<p>
									<label style="color:red">所属省份</label>
									<select class="text-input small-input datepicker" name="province"  style="color:red">
										<option value="<?php echo $_smarty_tpl->tpl_vars['user']->value['province'];?>
"> <?php echo $_smarty_tpl->tpl_vars['user']->value['province'];?>
</option>
										<option></option>
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
								
								
								
								
							
								 <input type="hidden"  name="uid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>
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

</div></td>
</tr>
</table>
</div>
</div>
</body></html><?php }} ?>
