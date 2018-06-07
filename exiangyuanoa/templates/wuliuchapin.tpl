
{include file="../includes/top.tpl"}




<script src="js/admin.js" language="javascript"></script>


<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
		{include file="../includes/sideMenu_top.tpl"}

	<div class="main-content"> 
			
		
			<!-- Page Head -->
			<div class="notification information png_bg">
		
				<div>
					{$myname},请查看评价物流信息，有问题请联系我们
				</div>
			</div>
		
			<p class="page-intro">物流信息查询与评价</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
					<form action="wuliufront.php" method="post" name="form1" id="form1">
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
									<label>备注： {$wuliu.beizu}</label>
									
									
									
								</p>
								
								
								<p>
									<label>评价等级：</label>
									<select   class="small-input uid" name="prank"   id="prank"/>
										
										
											<option value="1" {if  $wuliu.prank eq 1}selected{/if}>非常满意</option>
											<option value="2" {if  $wuliu.prank eq 2}selected{/if}>满意</option>
											<option value="3" {if  $wuliu.prank eq 3}selected{/if}>一般</option>
											<option value="4" {if  $wuliu.prank eq 4}selected{/if}>不满意</option>
											<option value="5" {if  $wuliu.prank eq 5}selected{/if}>非常不满意</option>
										
									</select>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>评价信息</label>
									<textarea name="pinfo">{$wuliu.pinfo}</textarea>
									<span class="input-notification success png_bg">选填</span>
									
									
								</p>
								
								
								
								
								
								
							
								<input type="hidden"  name="id" value="{$wuliu.id}">
								 <input type="hidden"  name="act" value="editdo">
								<input class="button ml10" type="submit" name="post_title" value="确认评价" />
						</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						
				</form>

												
						
						</div>
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			

			<div class="clear"></div> <!-- End .clear -->

{include file="../includes/footer.tpl"}
			
		</div> 
	</div>
</div>