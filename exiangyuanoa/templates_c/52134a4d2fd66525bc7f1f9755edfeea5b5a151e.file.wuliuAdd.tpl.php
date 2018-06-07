<?php /* Smarty version Smarty-3.1.15, created on 2016-08-15 01:42:13
         compiled from ".\templates\wuliuAdd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:773253d895b4295443-49836300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52134a4d2fd66525bc7f1f9755edfeea5b5a151e' => 
    array (
      0 => '.\\templates\\wuliuAdd.tpl',
      1 => 1471225291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '773253d895b4295443-49836300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53d895b4635ac3_51244482',
  'variables' => 
  array (
    'ghss' => 0,
    'vo' => 0,
    'user' => 0,
    'ghs' => 0,
    'voo' => 0,
    'now' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d895b4635ac3_51244482')) {function content_53d895b4635ac3_51244482($_smarty_tpl) {?>
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
		
			<p class="page-intro">新增物流信息</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
						<form action="wuliuAdd.php" method="post" name="form1" id="form1">
						<fieldset> 
								
								<p>
									<label>供货商(发货方)：</label>
									<select   class="small-input aid" name="aid" value=""  id='aid' />
										<option value=""></option>
										<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ghss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['aid'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</option>
										<?php } ?>
									</select>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>


								<p>
									<label style="color:red">所属省份</label>
									<select class="text-input small-input datepicker" name="province" id="province" style="color:red">
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
									<label>经销商(收货方)：</label>
									<select   class="small-input uid" name="uid" value=""  id="uid"/>
									</select>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								<p>
									<label>发货时间</label>
									<input class="text-input small-input datepicker inputDate" type="text" class="small-input" name="fatime" value="<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
"  id="inputDate"/>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
							
								<p>
									<label>预计到货时间</label>
									<input class="text-input small-input datepicker inputDate2" type="text" class="small-input" name="daotime" value="<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
"  id="inputDate2"/>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
							
								
								
								<p>
									<label>货物名称</label>
									
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="name" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>数量</label>
									<input class="text-input small-input datepicker" type="text" class="small-input" name="shumu" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>总价</label>
									<input class="text-input small-input datepicker" type="text" class="small-input" name="price" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>到货地址</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="address" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>查询电话</label>
									<input  type="text" class="text-input small-input datepicker" name="phone" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>备注</label>
									<input  type="text" class="large-input" name="beizu" value="" />
									<span class="input-notification success png_bg">选填</span>
									
									
								</p>
								
								
								
								
							
								
								 <input type="hidden"  name="doadd" value="1">
								<input class="button ml10" type="submit" name="post_title" value="增加" />
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
