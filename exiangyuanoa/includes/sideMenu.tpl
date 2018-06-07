
<div class="sidebar"><div class="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

			<!-- Logo (221px wide) -->
			
		  
			<!-- Sidebar Profile links -->
			
			<ul class="main-nav">  <!-- Accordion Menu -->
				
				<li class="lili">
					<a class="nav-top-item no-submenu {if $m eq 'index'}current{/if}"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						管理首页
					</a>
					<ul>
					<li><a class="{if $n eq 'index'}current{/if}"  href="admin.php">欢迎首页
                        </a></li>
					</ul>
				</li>
				
				
				{if $rank eq '1'}
				
				
				<li class="lili"> 
					<a class="nav-top-item {if $m eq 'sites'}current{/if}"> <!-- Add the class "current" to current menu item -->
					供货商管理
					</a>
					<ul class="t" style="display:{if $m eq 'ghs'}block{else}none{/if}">
						<li><a class="{if $n eq 'add'}current{/if}"  href="/ghsAdd.php?m=ghs&n=add">新增供货商
                        </a></li> <!-- Add class "current" to sub menu items also -->
						<li><a class="{if $n eq 'manage'}current{/if}" href="/ghsManage.php?m=ghs&n=manage">
                        供货商列表
                        </a></li>
					

					</ul>
				</li>
				
				{/if}	
				
				<li class="lili">
					<a class="nav-top-item {if $m eq 'fxs'}current{/if}">
						分销商管理
						</a>
					<ul class="t" style="display:{if $m eq 'fxs'}block{else}none{/if}">
						<li><a class="{if $n eq 'add'}current{/if}"  href="/fxsAdd.php?m=fxs&n=add">新增分销商
                        </a></li> <!-- Add class "current" to sub menu items also -->
						<li><a class="{if $n eq 'manage'}current{/if}" href="/fxsManage.php?m=fxs&n=manage">
                        分销商列表
                        </a></li>
					

					</ul>
				</li>
				
				<li class="lili">
					<a class="nav-top-item {if $m eq 'wuliu'}current{/if}">
						物流信息
						</a>
					<ul class="t" style="display:{if $m eq 'wuliu'}block{else}none{/if}">
						
						{if $rank eq 1}
						<li><a class="{if $n eq 'add'}current{/if}"  href="/wuliuAdd.php?m=wuliu&n=add">新增物流信息
                        </a></li> 
						{/if}
						
						<li><a class="{if $n eq 'manage'}current{/if}" href="/wuliuManage.php?m=wuliu&n=manage">
                        物流信息查询
                        </a></li>
					

					</ul>
				</li>
				
				
				
			
				
				<li class="lili">
					<a class="nav-top-item {if $m eq 'user'}current{/if}" >
						系统设置
					</a>
					<ul style="display:{if $m eq 'user'}block{else}none{/if}">
						<li><a class="{if $n eq 'set'}current{/if}" href="/user.php?m=user&n=set">账户信息设置</a></li>
						<li><a class="{if $n eq 'logout'}current{/if}" href="/adminlogout.php">退出登陆</a></li>
					</ul>
				</li> 
				
					
				
			</ul> <!-- End #main-nav -->
			
		
			<div style="text-align:center;  margin-top:15px; margin-bottom:15px;">
			</div>
		</div></div> <!-- End #sidebar -->
		