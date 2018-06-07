<?php /* Smarty version Smarty-3.1.15, created on 2014-08-01 03:10:11
         compiled from ".\templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2668353d895837ab293-09482443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd206b131138557fc135d01cb3f9c30ca11fcf92' => 
    array (
      0 => '.\\templates\\error.tpl',
      1 => 1406862574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2668353d895837ab293-09482443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53d89583c7d672_51805893',
  'variables' => 
  array (
    'flag' => 0,
    'msg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d89583c7d672_51805893')) {function content_53d89583c7d672_51805893($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/admin.js" language="javascript"></script>
<div class="taeapp">

<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
		<?php echo $_smarty_tpl->getSubTemplate ("../includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div class="main-content"> <!-- Main Content Section with everything -->
			
		
		
			<?php if ($_smarty_tpl->tpl_vars['flag']->value) {?>
			<div class="notification success png_bg">
				
				<div>
					<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
&nbsp;&nbsp; 点 <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" target="_self">这里</a> 跳转
				</div>
			</div>

			<?php } else { ?>
			
			<div class="notification error png_bg">
				
					<div>
						<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
  请仔细检查重新操作！点<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" target="_self">这里</a>返回<br/>如无法解决问题，请联系客服</a></div>
				</div>
			

			<?php }?>
		
		
			
			<!-- Page Head -->
						
		
			<div class="clear"></div> <!-- End .clear -->

<?php echo $_smarty_tpl->getSubTemplate ("../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
		</div> 
	</div>
	</div><?php }} ?>
