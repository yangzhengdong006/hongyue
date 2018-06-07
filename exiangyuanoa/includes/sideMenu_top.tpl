
<div class="sidebar"><div class="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

			<!-- Logo (221px wide) -->
			
		  
			<!-- Sidebar Profile links -->
			
			<ul class="main-nav">  <!-- Accordion Menu -->
				
				<li class="lili">
					<a class="nav-top-item no-submenu {if $m eq 'index'}current{/if}"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						管理首页
					</a>
					<ul>
					<li><a class="{if $n eq 'index'}current{/if}"  href="index.php">欢迎首页
                        </a></li>
					</ul>
				</li>
				
				
				
				
				<li class="lili">
					<a class="nav-top-item {if $m eq 'wuliu'}current{/if}">
						物流信息
						</a>
					<ul class="t" style="display:{if $m eq 'wuliu'}block{else}none{/if}">
						
						
						<li><a class="{if $n eq 'manage'}current{/if}" href="/wuliufront.php?m=wuliu&n=manage">
                        物流信息查询与评价
                        </a></li>
					

					</ul>
				</li>
				
				
				
			
				
				<li class="lili">
					<a class="nav-top-item {if $m eq 'user'}current{/if}" >
						系统设置
					</a>
					<ul style="display:{if $m eq 'user'}block{else}none{/if}">
						<li><a class="{if $n eq 'set'}current{/if}" href="/userfront.php?m=user&n=set">账户信息设置</a></li>
						<li><a class="{if $n eq 'logout'}current{/if}" href="/logout.php">退出登陆 </a></li>
					</ul>
				</li> 
				
					
				
			</ul> <!-- End #main-nav -->
			
		
			<div style="text-align:center;  margin-top:15px; margin-bottom:15px;">
			</div>
		</div></div> <!-- End #sidebar -->
		