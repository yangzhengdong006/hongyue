<?php /* Smarty version Smarty-3.1.15, created on 2014-07-22 13:48:58
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2277953ce6bcad4e418-20982290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1405778439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2277953ce6bcad4e418-20982290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53ce6bcb3ae1a0_23413486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ce6bcb3ae1a0_23413486')) {function content_53ce6bcb3ae1a0_23413486($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/admin.js" language="javascript"></script>
<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
		<?php echo $_smarty_tpl->getSubTemplate ("../includes/sideMenu_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div class="main-content"> 
			
			<noscript>
			
			</noscript>
			
			<!-- Page Head -->
						<div class="notification information png_bg">
		
				<div>
					<?php echo $_smarty_tpl->tpl_vars['myname']->value;?>
,欢迎您登陆使用物流信息查询评价系统，祝您使用愉快！
				</div>
			</div>
			<p class="page-intro">您需要如何操作？</p>
			
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="/wuliufront.php?m=wuliu&n=manage"><span>
					<img src="./css/images//icons/pencil_48.png" alt="icon" /><br />
					物流信息查询与评价
				</span></a></li>
				
				
				
				
			<!--
				
				<li><a class="shortcut-button" href="/links.php?m=links"><span>
					<img src="./css/images//icons/comment_48.png" alt="icon" /><br />
					友链检测
				</span></a></li>-->
				
				<li><a class="shortcut-button" href="/userfront.php?m=user&n=set" rel="modal"><span>
					<img src="./css/images//icons/preferences.png" alt="icon" /><br />
					账户设置
				</span></a></li>
				
			</ul>

			<div class="clear"></div> <!-- End .clear -->

<?php echo $_smarty_tpl->getSubTemplate ("../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
		</div> 
	</div>
</div><?php }} ?>
