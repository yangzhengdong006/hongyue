<?php /* Smarty version Smarty-3.1.15, created on 2016-08-15 01:44:30
         compiled from ".\templates\wuliuedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2992153d89f4665b986-33578940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20f602d1afcbc79e9249e3aea3b84e29e3010207' => 
    array (
      0 => '.\\templates\\wuliuedit.tpl',
      1 => 1471225433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2992153d89f4665b986-33578940',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53d89f46ea2da4_93793827',
  'variables' => 
  array (
    'ghss' => 0,
    'vo' => 0,
    'wuliu' => 0,
    'ghs' => 0,
    'voo' => 0,
    'fxss' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d89f46ea2da4_93793827')) {function content_53d89f46ea2da4_93793827($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<script src="js/admin.js" language="javascript"></script>
<script src="js/datepicker.js" language="javascript"></script>
<script src="js/wuliu.js" language="javascript"></script>
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
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
		
			<p class="page-intro">编辑物流信息</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
						<form action="wuliumanage.php" method="post" name="form1" id="form1">
						<fieldset> 
								
								<p>
									<label>供货商(发货方)：</label>
									<select   class="small-input aid" name="aid" value=""  id='aid' />
										
										<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ghss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['aid'];?>
" <?php if ($_smarty_tpl->tpl_vars['vo']->value['aid']==$_smarty_tpl->tpl_vars['wuliu']->value['aid']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</option>
										<?php } ?>
									</select>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label style="color:red">所属省份</label>
									<select id="province" class="text-input small-input datepicker" name="province"  style="color:red">
										<option value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['province'];?>
"> <?php echo $_smarty_tpl->tpl_vars['wuliu']->value['province'];?>
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
									<label>经销商(收货方)：</label>
									<select   class="small-input uid" name="uid" value=""  id="uid"/>
										<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fxss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['uid'];?>
" <?php if ($_smarty_tpl->tpl_vars['vo']->value['uid']==$_smarty_tpl->tpl_vars['wuliu']->value['uid']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</option>
										<?php } ?>
									</select>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								<p>
									<label>发货时间</label>
									<input class="text-input small-input datepicker inputDate" type="text" class="small-input" name="fatime" value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['fatime'];?>
"  id="inputDate"/>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
							
								<p>
									<label>预计到货时间</label>
									<input class="text-input small-input datepicker inputDate2" type="text" class="small-input" name="daotime" value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['daotime'];?>
"  id="inputDate2"/>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
							
								
								
								<p>
									<label>货物名称</label>
									
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="name" value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['name'];?>
" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>数量</label>
									<input class="text-input small-input datepicker" type="text" class="small-input" name="shumu" value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['shumu'];?>
" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>总价</label>
									<input class="text-input small-input datepicker" type="text" class="small-input" name="price" value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['price'];?>
" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>到货地址</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="address" value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['address'];?>
" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>查询电话</label>
									<input  type="text" class="text-input small-input datepicker" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['phone'];?>
" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>评价等级：</label>
									<select   class="small-input uid" name="prank"   id="prank"/>
										
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['wuliu']->value['prank']==0) {?>selected<?php }?>>未评价</option>
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['wuliu']->value['prank']==1) {?>selected<?php }?>>非常满意</option>
											<option value="2" <?php if ($_smarty_tpl->tpl_vars['wuliu']->value['prank']==2) {?>selected<?php }?>>满意</option>
											<option value="3" <?php if ($_smarty_tpl->tpl_vars['wuliu']->value['prank']==3) {?>selected<?php }?>>一般</option>
											<option value="4" <?php if ($_smarty_tpl->tpl_vars['wuliu']->value['prank']==4) {?>selected<?php }?>>不满意</option>
											<option value="5" <?php if ($_smarty_tpl->tpl_vars['wuliu']->value['prank']==5) {?>selected<?php }?>>非常不满意</option>
										
									</select>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>评价信息</label>
									<textarea name="pinfo"><?php echo $_smarty_tpl->tpl_vars['wuliu']->value['pinfo'];?>
</textarea>
									<span class="input-notification success png_bg">选填</span>
									
									
								</p>
								
								
								<p>
									<label>备注</label>
									<input  type="text" class="large-input" name="beizu" value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['beizu'];?>
" />
									<span class="input-notification success png_bg">选填</span>
									
									
								</p>
								
								
								
								
							
								<input type="hidden"  name="id" value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['id'];?>
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
