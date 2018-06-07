<?php /* Smarty version Smarty-3.1.15, created on 2016-08-15 01:30:00
         compiled from ".\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1447153cf1531dd5649-00579389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde4406728b78ad8acb77d025ffd08e41bf138dd' => 
    array (
      0 => '.\\templates\\admin.tpl',
      1 => 1471224560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1447153cf1531dd5649-00579389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53cf15325a9ef9_39924491',
  'variables' => 
  array (
    'rank' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cf15325a9ef9_39924491')) {function content_53cf15325a9ef9_39924491($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/admin.js" language="javascript"></script>
<div class="taeapp">
<div class="body-admin">
<!-- Wrapper for the radial gradient background -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" width="230"><?php echo $_smarty_tpl->getSubTemplate ("../includes/sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</td>
    <td>	<div class="main-content"> 
			
			<noscript>
			
			</noscript>
			
			<!-- Page Head -->
						<div class="notification information png_bg">
		
				<div>
					欢迎您登陆使用物流信息查询评价系统，祝您使用愉快！
				</div>
			</div>
			<p class="page-intro">您需要如何操作？</p>
			
			<ul class="shortcut-buttons-set">
				
				<?php if ($_smarty_tpl->tpl_vars['rank']->value=='1') {?>
				
				<li style="list-style-type:none;"><a class="shortcut-button" href="/wuliuAdd.php?m=wuliu&n=add"><span>
					<img src="./css/images//icons/pencil_48.png" alt="icon" /><br />
					新增物流信息
				</span></a></li>
				
				<?php } else { ?>
					<li style="list-style-type:none;"><a class="shortcut-button" href="/wuliuManage.php?m=wuliu&n=manage"><span>
					<img src="./css/images//icons/pencil_48.png" alt="icon" /><br />
					物流信息查询
				</span></a></li>
				<?php }?>
				<li style="list-style-type:none;"><a class="shortcut-button" href="/fxsadd.php?m=fxs&n=add"><span>
					<img src="./css/images//icons/tick.png" alt="icon" /><br />
					新增分销商
				</span></a></li>
				
				<?php if ($_smarty_tpl->tpl_vars['rank']->value=='1') {?>
				
				<li style="list-style-type:none;"><a class="shortcut-button" href="/ghsadd.php?m=ghs&n=add"><span>
					<img src="./css/images//icons/tick.png" alt="icon" /><br />
					新增供货商
				</span></a></li>
				<?php }?>
		
				
				<li style="list-style-type:none;"><a class="shortcut-button" href="/user.php?m=user&n=set" rel="modal"><span>
					<img src="./css/images//icons/preferences.png" alt="icon" /><br />
					账户设置
				</span></a></li>
				
			</ul>

			<div class="clear"></div> <!-- End .clear -->

<?php echo $_smarty_tpl->getSubTemplate ("../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
		</div> 
	</div>
</div></td>
  </tr>
</table>




<?php }} ?>
