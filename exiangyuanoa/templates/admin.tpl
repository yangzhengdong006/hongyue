{include file="../includes/top.tpl"}
<script src="js/admin.js" language="javascript"></script>
<div class="taeapp">
<div class="body-admin">
<!-- Wrapper for the radial gradient background -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" width="230">{include file="../includes/sideMenu.tpl"}</td>
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
				
				{if $rank eq '1'}
				
				<li style="list-style-type:none;"><a class="shortcut-button" href="/wuliuAdd.php?m=wuliu&n=add"><span>
					<img src="./css/images//icons/pencil_48.png" alt="icon" /><br />
					新增物流信息
				</span></a></li>
				
				{else}
					<li style="list-style-type:none;"><a class="shortcut-button" href="/wuliuManage.php?m=wuliu&n=manage"><span>
					<img src="./css/images//icons/pencil_48.png" alt="icon" /><br />
					物流信息查询
				</span></a></li>
				{/if}
				<li style="list-style-type:none;"><a class="shortcut-button" href="/fxsadd.php?m=fxs&n=add"><span>
					<img src="./css/images//icons/tick.png" alt="icon" /><br />
					新增分销商
				</span></a></li>
				
				{if $rank eq '1'}
				
				<li style="list-style-type:none;"><a class="shortcut-button" href="/ghsadd.php?m=ghs&n=add"><span>
					<img src="./css/images//icons/tick.png" alt="icon" /><br />
					新增供货商
				</span></a></li>
				{/if}
		
				
				<li style="list-style-type:none;"><a class="shortcut-button" href="/user.php?m=user&n=set" rel="modal"><span>
					<img src="./css/images//icons/preferences.png" alt="icon" /><br />
					账户设置
				</span></a></li>
				
			</ul>

			<div class="clear"></div> <!-- End .clear -->

{include file="../includes/footer.tpl"}
			
		</div> 
	</div>
</div></td>
  </tr>
</table>




