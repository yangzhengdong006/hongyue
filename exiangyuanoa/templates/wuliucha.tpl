
{include file="../includes/top.tpl"}




<script src="js/admin.js" language="javascript"></script>


<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" width="230">{include file="../includes/sideMenu.tpl"}</td>
    <td>

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
									<label>供货商(发货方)：{$wuliu.aname}</label>
									
									
								
									
									
								</p>
								
								<p>
									<label>经销商(收货方)：{$wuliu.uname}</label>
									
									
									
								</p>
								<p>
									<label>发货时间：{$wuliu.fatime}
									</label>
									
									
								</p>
							
								<p>
									<label>预计到货时间：{$wuliu.daotime}
									</label>
								
									
								</p>
								
							
								
								
								<p>
									<label>货物名称：{$wuliu.name}</label>
									
								
									
									
								</p>
								
								<p>
									<label>数量：{$wuliu.shumu}</label>
								
									
									
								</p>
								
								<p>
									<label>总价：{$wuliu.price}</label>
									
									
									
								</p>
								
								<p>
									<label>到货地址：{$wuliu.address}</label>
									
									
								</p>
								
								<p>
									<label>查询电话：{$wuliu.phone}</label>
									
									
									
								</p>
								
								<p>
									<label>评价等级：{$wuliu.prankname}</label>
										
									
								</p>
								
								<p>
									<label>评价信息：{$wuliu.pinfo}</label>
									
									
									
								</p>
								
								
								<p>
									<label>备注： {$wuliu.beizu}</label>
									
									
									
								</p>
								
								
								
								
							
							
								<br/>
						</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						


												
						
						</div>
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			

			<div class="clear"></div> <!-- End .clear -->

{include file="../includes/footer.tpl"}
			
</div> </td></tr></table>
	</div>
</div></body></html>