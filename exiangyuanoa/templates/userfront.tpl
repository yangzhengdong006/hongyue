
{include file="../includes/top.tpl"}
<script src="js/admin.js" language="javascript"></script>
<link type="text/css" rel="stylesheet" href="css/validator.css"></link>
<script src="js/formValidator.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script src="js/user.js" language="javascript"></script>
<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->
		{include file="../includes/sideMenu_top.tpl"}

	<div class="main-content"> 
			
		
			<!-- Page Head -->
			<div class="notification information png_bg">
		
				<div>
					请修改账户信息
				</div>
			</div>
		
			<p class="page-intro">编辑账户信息 / user edit</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-content">
					
					<div class="tab-content" class="tab2">
					<div class="forms">
<form action="userfront.php" method="post" name="form1" id="form1">
	
  <table border="0px" style="font-size:12px">
  
  
   
     <tr> 
      <td align="right">用户名:</td>
      <td><input type="text" id="yhm" style="width:220px"  name="username" value="{$user.username}" readonly/></td>
      <td><div id="yhmTip" style="width:300px"></div></td>
    </tr>
	
	
	
	
    <tr> 
      <td align="right">密码:</td>
      <td><input type="password" id="password1" class="sz" style="width:220px"  name="password"/></td>
      <td><div id="password1Tip" style="width:250px"></div></td>
    </tr>
    <tr> 
      <td align="right">重复密码:</td>
      <td><input type="password" id="password2" class="sz" style="width:220px"  name="password2"/></td>
      <td><div id="password2Tip" style="width:250px"></div></td>
    </tr>
   
    <tr> 
      <td align="right">联系人:</td>
      <td><input type="text" id="email" style="width:220px"  name="realname" value="{$user.realname}"/></td>
      <td><div id="emailTip" style="width:300px"></div></td>
    </tr>
    <tr> 
      <td align="right">手机:</td>
      <td><input type="text" id="sj" style="width:220px"  name="mobile" value="{$user.mobile}"/></td>
      <td><div id="sjTip" style="width:300px"></div></td>
    </tr>
  
    
    <tr> 
      <td align="right">联系地址:</td>
      <td><input type="text" id="qq" style="width:320px"  name="address" value="{$user.address}"/></td>
      <td><div id="qqTip" style="width:300px"></div></td>
    </tr>
   
   <tr> 
    <td align="right"></td>
	<input type="hidden" name="domod" value="1">
      <td colpan="3"><input type="submit" name="button" id="button" value="修改" /></td>
    </tr>
  
   

  </table>
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