
{include file="../includes/top.tpl"}
<script src="js/admin.js" language="javascript"></script>
<div class="taeapp">

<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
		{include file="../includes/sideMenu.tpl"}

	<div class="main-content"> <!-- Main Content Section with everything -->
			
		
		
			{if $flag}
			<div class="notification success png_bg">
				
				<div>
					{$msg}&nbsp;&nbsp; 点 <a class="button" href="{$url}" target="_self">这里</a> 跳转
				</div>
			</div>

			{else}
			
			<div class="notification error png_bg">
				
					<div>
						{$msg}  请仔细检查重新操作！点<a class="button" href="{$url}" target="_self">这里</a>返回<br/>如无法解决问题，请联系客服</a></div>
				</div>
			

			{/if}
		
		
			
			<!-- Page Head -->
						
		
			<div class="clear"></div> <!-- End .clear -->

{include file="../includes/footer.tpl"}
			
		</div> 
	</div>
	</div>