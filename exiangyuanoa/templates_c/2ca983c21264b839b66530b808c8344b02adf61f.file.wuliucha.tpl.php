<?php /* Smarty version Smarty-3.1.15, created on 2014-08-06 01:53:24
         compiled from ".\templates\wuliucha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2576253e18a93f364c0-61106311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca983c21264b839b66530b808c8344b02adf61f' => 
    array (
      0 => '.\\templates\\wuliucha.tpl',
      1 => 1406866178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2576253e18a93f364c0-61106311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wuliu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53e18a958bca38_84097338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e18a958bca38_84097338')) {function content_53e18a958bca38_84097338($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<script src="js/admin.js" language="javascript"></script>


<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
		<?php echo $_smarty_tpl->getSubTemplate ("../includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div class="main-content"> 
			
		
			<!-- Page Head -->
			<div class="notification information png_bg">
		
				<div>
					请查看物流信息，有问题请联系我们
				</div>
			</div>
		
			<p class="page-intro">物流信息查询</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
					
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
									<label>评价等级：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['prankname'];?>
</label>
										
									
								</p>
								
								<p>
									<label>评价信息：<?php echo $_smarty_tpl->tpl_vars['wuliu']->value['pinfo'];?>
</label>
									
									
									
								</p>
								
								
								<p>
									<label>备注： <?php echo $_smarty_tpl->tpl_vars['wuliu']->value['beizu'];?>
</label>
									
									
									
								</p>
								
								
								
								
							
							
								<br/>
						</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						


												
						
						</div>
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			

			<div class="clear"></div> <!-- End .clear -->

<?php echo $_smarty_tpl->getSubTemplate ("../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
		</div> 
	</div>
</div><?php }} ?>
