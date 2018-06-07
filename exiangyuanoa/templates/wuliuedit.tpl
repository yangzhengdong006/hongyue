
{include file="../includes/top.tpl"}




<script src="js/admin.js" language="javascript"></script>
<script src="js/datepicker.js" language="javascript"></script>
<script src="js/wuliu.js" language="javascript"></script>
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
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
					为了能准确信息，请务必正确填写每一项！
				</div>
			</div>
		
			<p class="page-intro">编辑物流信息</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
						<form action="wuliumanage.php" method="post" name="form1" id="form1">
						<fieldset> 
								
								<p>
									<label>供货商(发货方)：</label>
									<select   class="small-input aid" name="aid" value=""  id='aid' />
										
										{foreach from=$ghss item=vo}
											<option value="{$vo.aid}" {if $vo.aid eq $wuliu.aid}selected{/if}>{$vo.name}</option>
										{/foreach}
									</select>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label style="color:red">所属省份</label>
									<select id="province" class="text-input small-input datepicker" name="province"  style="color:red">
										<option value="{$wuliu.province}"> {$wuliu.province}</option>
										<option></option>
										{foreach from=$ghs item=voo}
											<option value="{$voo.province}"> {$voo.province}</option>
										{/foreach}
										
									</select>
									
									<span class="input-notification success png_bg">必填</span>
									
								</p>

								<p>
									<label>经销商(收货方)：</label>
									<select   class="small-input uid" name="uid" value=""  id="uid"/>
										{foreach from=$fxss item=vo}
											<option value="{$vo.uid}" {if $vo.uid eq $wuliu.uid}selected{/if}>{$vo.name}</option>
										{/foreach}
									</select>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								<p>
									<label>发货时间</label>
									<input class="text-input small-input datepicker inputDate" type="text" class="small-input" name="fatime" value="{$wuliu.fatime}"  id="inputDate"/>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
							
								<p>
									<label>预计到货时间</label>
									<input class="text-input small-input datepicker inputDate2" type="text" class="small-input" name="daotime" value="{$wuliu.daotime}"  id="inputDate2"/>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
							
								
								
								<p>
									<label>货物名称</label>
									
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="name" value="{$wuliu.name}" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>数量</label>
									<input class="text-input small-input datepicker" type="text" class="small-input" name="shumu" value="{$wuliu.shumu}" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>总价</label>
									<input class="text-input small-input datepicker" type="text" class="small-input" name="price" value="{$wuliu.price}" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>到货地址</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="address" value="{$wuliu.address}" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>查询电话</label>
									<input  type="text" class="text-input small-input datepicker" name="phone" value="{$wuliu.phone}" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>评价等级：</label>
									<select   class="small-input uid" name="prank"   id="prank"/>
										
											<option value="0" {if  $wuliu.prank eq 0}selected{/if}>未评价</option>
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
								
								
								<p>
									<label>备注</label>
									<input  type="text" class="large-input" name="beizu" value="{$wuliu.beizu}" />
									<span class="input-notification success png_bg">选填</span>
									
									
								</p>
								
								
								
								
							
								<input type="hidden"  name="id" value="{$wuliu.id}">
								 <input type="hidden"  name="act" value="editdo">
								<input class="button ml10" type="submit" name="post_title" value="编辑" />
								<br/><br/>
						</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>


												
						
						</div>
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			

			<div class="clear"></div> <!-- End .clear -->

{include file="../includes/footer.tpl"}
			
</div> </td></tr></table>
	</div>
</div></body></html>