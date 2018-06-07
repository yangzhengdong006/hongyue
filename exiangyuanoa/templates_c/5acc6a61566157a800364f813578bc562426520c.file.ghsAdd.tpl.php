<?php /* Smarty version Smarty-3.1.15, created on 2016-08-15 01:37:43
         compiled from ".\templates\ghsAdd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:572453cf1536c22395-89001107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5acc6a61566157a800364f813578bc562426520c' => 
    array (
      0 => '.\\templates\\ghsAdd.tpl',
      1 => 1471225027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '572453cf1536c22395-89001107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53cf1537298427_54150576',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cf1537298427_54150576')) {function content_53cf1537298427_54150576($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/admin.js" language="javascript"></script>
<div class="taeapp">
<div class="body-admin">
<!-- Wrapper for the radial gradient background -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" width="230"><?php echo $_smarty_tpl->getSubTemplate ("../includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</td>
    <td><div class="main-content"> 
			
		
			<!-- Page Head -->
			<div class="notification information png_bg">
		
				<div>
					为了能准确信息，请务必正确填写每一项！
				</div>
			</div>
		
			<p class="page-intro">新增供货商</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
						<form action="ghsAdd.php" method="post" name="form1" id="form1">
						<fieldset> 
								
								<p>
									<label>供货商帐号(只能由英文字母，数字和下划线组成)：</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="username" value=""  id="username"/>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								<p>
									<label>供货商密码</label>
									<input class="text-input medium-input datepicker" type="password" class="medium-input" name="password" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
							
								<p>
									<label>供货商名称</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="name" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>电话</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="mobile" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>联系人</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="realname" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>联系地址</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="address" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>备注</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="beizu" value="" />
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

			
		</div> </td>
  </tr>
</table>
	</div>
</div>
</body></html>
	<?php }} ?>
