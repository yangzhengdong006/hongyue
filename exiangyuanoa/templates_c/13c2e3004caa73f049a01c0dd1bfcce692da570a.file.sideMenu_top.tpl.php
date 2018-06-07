<?php /* Smarty version Smarty-3.1.15, created on 2014-07-22 13:48:59
         compiled from "D:\web\exiangyuan\exiangyuanoa\includes\sideMenu_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:497753ce6bcb4de560-62944148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13c2e3004caa73f049a01c0dd1bfcce692da570a' => 
    array (
      0 => 'D:\\web\\exiangyuan\\exiangyuanoa\\includes\\sideMenu_top.tpl',
      1 => 1405778459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497753ce6bcb4de560-62944148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'm' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53ce6bcb9818e6_18243149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ce6bcb9818e6_18243149')) {function content_53ce6bcb9818e6_18243149($_smarty_tpl) {?>
<div class="sidebar"><div class="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

			<!-- Logo (221px wide) -->
			
		  
			<!-- Sidebar Profile links -->
			
			<ul class="main-nav">  <!-- Accordion Menu -->
				
				<li class="lili">
					<a class="nav-top-item no-submenu <?php if ($_smarty_tpl->tpl_vars['m']->value=='index') {?>current<?php }?>"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						管理首页
					</a>
					<ul>
					<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='index') {?>current<?php }?>"  href="index.php">欢迎首页
                        </a></li>
					</ul>
				</li>
				
				
				
				
				<li class="lili">
					<a class="nav-top-item <?php if ($_smarty_tpl->tpl_vars['m']->value=='wuliu') {?>current<?php }?>">
						物流信息
						</a>
					<ul class="t" style="display:<?php if ($_smarty_tpl->tpl_vars['m']->value=='wuliu') {?>block<?php } else { ?>none<?php }?>">
						
						
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='manage') {?>current<?php }?>" href="/wuliufront.php?m=wuliu&n=manage">
                        物流信息查询与评价
                        </a></li>
					

					</ul>
				</li>
				
				
				
			
				
				<li class="lili">
					<a class="nav-top-item <?php if ($_smarty_tpl->tpl_vars['m']->value=='user') {?>current<?php }?>" >
						系统设置
					</a>
					<ul style="display:<?php if ($_smarty_tpl->tpl_vars['m']->value=='user') {?>block<?php } else { ?>none<?php }?>">
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='set') {?>current<?php }?>" href="/userfront.php?m=user&n=set">账户信息设置</a></li>
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='logout') {?>current<?php }?>" href="/logout.php">退出登陆 </a></li>
					</ul>
				</li> 
				
					
				
			</ul> <!-- End #main-nav -->
			
		
			<div style="text-align:center;  margin-top:15px; margin-bottom:15px;">
			</div>
		</div></div> <!-- End #sidebar -->
		<?php }} ?>
