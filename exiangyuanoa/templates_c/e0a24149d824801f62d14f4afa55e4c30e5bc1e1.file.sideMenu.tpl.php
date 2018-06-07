<?php /* Smarty version Smarty-3.1.15, created on 2014-07-23 01:51:46
         compiled from "D:\web\exiangyuan\exiangyuanoa\includes\sideMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2552453cf15326c4759-87930806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0a24149d824801f62d14f4afa55e4c30e5bc1e1' => 
    array (
      0 => 'D:\\web\\exiangyuan\\exiangyuanoa\\includes\\sideMenu.tpl',
      1 => 1405778459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2552453cf15326c4759-87930806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'm' => 0,
    'n' => 0,
    'rank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53cf153350b6b0_98210568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cf153350b6b0_98210568')) {function content_53cf153350b6b0_98210568($_smarty_tpl) {?>
<div class="sidebar"><div class="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

			<!-- Logo (221px wide) -->
			
		  
			<!-- Sidebar Profile links -->
			
			<ul class="main-nav">  <!-- Accordion Menu -->
				
				<li class="lili">
					<a class="nav-top-item no-submenu <?php if ($_smarty_tpl->tpl_vars['m']->value=='index') {?>current<?php }?>"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						管理首页
					</a>
					<ul>
					<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='index') {?>current<?php }?>"  href="admin.php">欢迎首页
                        </a></li>
					</ul>
				</li>
				
				
				<?php if ($_smarty_tpl->tpl_vars['rank']->value=='1') {?>
				
				
				<li class="lili"> 
					<a class="nav-top-item <?php if ($_smarty_tpl->tpl_vars['m']->value=='sites') {?>current<?php }?>"> <!-- Add the class "current" to current menu item -->
					供货商管理
					</a>
					<ul class="t" style="display:<?php if ($_smarty_tpl->tpl_vars['m']->value=='ghs') {?>block<?php } else { ?>none<?php }?>">
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='add') {?>current<?php }?>"  href="/ghsAdd.php?m=ghs&n=add">新增供货商
                        </a></li> <!-- Add class "current" to sub menu items also -->
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='manage') {?>current<?php }?>" href="/ghsManage.php?m=ghs&n=manage">
                        供货商列表
                        </a></li>
					

					</ul>
				</li>
				
				<?php }?>	
				
				<li class="lili">
					<a class="nav-top-item <?php if ($_smarty_tpl->tpl_vars['m']->value=='fxs') {?>current<?php }?>">
						分销商管理
						</a>
					<ul class="t" style="display:<?php if ($_smarty_tpl->tpl_vars['m']->value=='fxs') {?>block<?php } else { ?>none<?php }?>">
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='add') {?>current<?php }?>"  href="/fxsAdd.php?m=fxs&n=add">新增分销商
                        </a></li> <!-- Add class "current" to sub menu items also -->
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='manage') {?>current<?php }?>" href="/fxsManage.php?m=fxs&n=manage">
                        分销商列表
                        </a></li>
					

					</ul>
				</li>
				
				<li class="lili">
					<a class="nav-top-item <?php if ($_smarty_tpl->tpl_vars['m']->value=='wuliu') {?>current<?php }?>">
						物流信息
						</a>
					<ul class="t" style="display:<?php if ($_smarty_tpl->tpl_vars['m']->value=='wuliu') {?>block<?php } else { ?>none<?php }?>">
						
						<?php if ($_smarty_tpl->tpl_vars['rank']->value==1) {?>
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='add') {?>current<?php }?>"  href="/wuliuAdd.php?m=wuliu&n=add">新增物流信息
                        </a></li> 
						<?php }?>
						
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='manage') {?>current<?php }?>" href="/wuliuManage.php?m=wuliu&n=manage">
                        物流信息查询
                        </a></li>
					

					</ul>
				</li>
				
				
				
			
				
				<li class="lili">
					<a class="nav-top-item <?php if ($_smarty_tpl->tpl_vars['m']->value=='user') {?>current<?php }?>" >
						系统设置
					</a>
					<ul style="display:<?php if ($_smarty_tpl->tpl_vars['m']->value=='user') {?>block<?php } else { ?>none<?php }?>">
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='set') {?>current<?php }?>" href="/user.php?m=user&n=set">账户信息设置</a></li>
						<li><a class="<?php if ($_smarty_tpl->tpl_vars['n']->value=='logout') {?>current<?php }?>" href="/adminlogout.php">退出登陆</a></li>
					</ul>
				</li> 
				
					
				
			</ul> <!-- End #main-nav -->
			
		
			<div style="text-align:center;  margin-top:15px; margin-bottom:15px;">
			</div>
		</div></div> <!-- End #sidebar -->
		<?php }} ?>
