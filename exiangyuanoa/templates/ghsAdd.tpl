{include file="../includes/top.tpl"}
<script src="js/admin.js" language="javascript"></script>
<div class="taeapp">
<div class="body-admin">
<!-- Wrapper for the radial gradient background -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" width="230">{include file="../includes/sideMenu.tpl"}</td>
    <td><div class="main-content"> 
			
		
			<!-- Page Head -->
			<div class="notification information png_bg">
		
				<div>
					为了能准确信息，请务必正确填写每一项！
				</div>
			</div>
		
			<p class="page-intro">新增供货商</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
						<form action="ghsAdd.php" method="post" name="form1" id="form1">
						<fieldset> 
								
								<p>
									<label>供货商帐号(只能由英文字母，数字和下划线组成)：</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="username" value=""  id="username"/>
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								<p>
									<label>供货商密码</label>
									<input class="text-input medium-input datepicker" type="password" class="medium-input" name="password" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
							
								<p>
									<label>供货商名称</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="name" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>电话</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="mobile" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>联系人</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="realname" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>联系地址</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="address" value="" />
									<span class="input-notification success png_bg">必填</span>
									
									
								</p>
								
								<p>
									<label>备注</label>
									<input class="text-input medium-input datepicker" type="text" class="medium-input" name="beizu" value="" />
									<span class="input-notification success png_bg">选填</span>
									
									
								</p>
								
								
								
								
							
								
								 <input type="hidden"  name="doadd" value="1">
								<input class="button ml10" type="submit" name="post_title" value="增加" />
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
			
		</div> </td>
  </tr>
</table>
	</div>
</div>
</body></html>
	