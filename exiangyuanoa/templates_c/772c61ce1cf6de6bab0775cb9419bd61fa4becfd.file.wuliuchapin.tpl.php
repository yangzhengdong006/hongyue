<?php /* Smarty version Smarty-3.1.15, created on 2014-08-09 08:20:47
         compiled from ".\templates\wuliuchapin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2931953e5d9df396a53-31292385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '772c61ce1cf6de6bab0775cb9419bd61fa4becfd' => 
    array (
      0 => '.\\templates\\wuliuchapin.tpl',
      1 => 1406866182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2931953e5d9df396a53-31292385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myname' => 0,
    'wuliu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53e5d9dfc51197_78261442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e5d9dfc51197_78261442')) {function content_53e5d9dfc51197_78261442($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<script src="js/admin.js" language="javascript"></script>


<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
		<?php echo $_smarty_tpl->getSubTemplate ("../includes/sideMenu_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div class="main-content"> 
			
		
			<!-- Page Head -->
			<div class="notification information png_bg">
		
				<div>
					<?php echo $_smarty_tpl->tpl_vars['myname']->value;?>
,请查看评价物流信息，有问题请联系我们
				</div>
			</div>
		
			<p class="page-intro">物流信息查询与评价</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
					<form action="wuliufront.php" method="post" name="form1" id="form1">
						<fieldset> 
								
								<p>
									<label>供货商(发货方)：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['aname'];?>
</label>
									
									
								
									
									
								</p>
								
								<p>
									<label>经销商(收货方)：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['uname'];?>
</label>
									
									
									
								</p>
								<p>
									<label>发货时间：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['fatime'];?>

									</label>
									
									
								</p>
							
								<p>
									<label>预计到货时间：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['daotime'];?>

									</label>
								
									
								</p>
								
							
								
								
								<p>
									<label>货物名称：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['name'];?>
</label>
									
								
									
									
								</p>
								
								<p>
									<label>数量：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['shumu'];?>
</label>
								
									
									
								</p>
								
								<p>
									<label>总价：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['price'];?>
</label>
									
									
									
								</p>
								
								<p>
									<label>到货地址：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['address'];?>
</label>
									
									
								</p>
								
								<p>
									<label>查询电话：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['phone'];?>
</label>
									
									
									
								</p>
								
								<p>
									<label>备注： <?php echo $_smarty_tpl->tpl_vars['wuliu']->value['beizu'];?>
</label>
									
									
									
								</p>
								
								
								<p>
									<label>评价等级：</label>
									<select   class="small-input uid" name="prank"   id="prank"/>
										
										
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
								
								
								
								
								
								
							
								<input type="hidden"  name="id" value="<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['id'];?>
">
								 <input type="hidden"  name="act" value="editdo">
								<input class="button ml10" type="submit" name="post_title" value="确认评价" />
						</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						
				</form>

												
						
						</div>
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			

			<div class="clear"></div> <!-- End .clear -->

<?php echo $_smarty_tpl->getSubTemplate ("../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
		</div> 
	</div>
</div><?php }} ?>
