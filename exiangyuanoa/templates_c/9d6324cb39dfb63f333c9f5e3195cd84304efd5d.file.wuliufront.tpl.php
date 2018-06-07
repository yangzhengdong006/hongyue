<?php /* Smarty version Smarty-3.1.15, created on 2014-08-02 06:57:25
         compiled from ".\templates\wuliufront.tpl" */ ?>
<?php /*%%SmartyHeaderCode:818553d8a4c69fea86-23132232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d6324cb39dfb63f333c9f5e3195cd84304efd5d' => 
    array (
      0 => '.\\templates\\wuliufront.tpl',
      1 => 1406866196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '818553d8a4c69fea86-23132232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53d8a4c6d79c22_31751477',
  'variables' => 
  array (
    'myname' => 0,
    'wulius' => 0,
    'item' => 0,
    'page_arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8a4c6d79c22_31751477')) {function content_53d8a4c6d79c22_31751477($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="js/admin.js" language="javascript"></script>
<script src="js/datepicker.js" language="javascript"></script>
<script src="js/wuliuM.js" language="javascript"></script>	
<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
<div class="taeapp">
<div class="body-admin"> <!-- Wrapper for the radial gradient background -->

<?php echo $_smarty_tpl->getSubTemplate ("../includes/sideMenu_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	

	<div class="main-content"> <!-- Main Content Section with everything -->
			
			
			<div class="notification information png_bg">
				
				<div>
					<?php echo $_smarty_tpl->tpl_vars['myname']->value;?>
,欢迎您登陆使用，祝您使用愉快！
				</div>
			</div>
			
			
			<!-- Page Head -->
			
		
		
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-content forms">
				
					<form action="wuliufront.php" method="get">
							<fieldset>  <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
			
								
		<p class="align-left vm">
									<label class="fl">评价等级：</label>              
									<select name="prank" class="mini-input">
										
										<option value=""></option>
										<option value="1">非常满意</option>
										<option value="2">满意</option>
										<option value="3">一般</option>
										<option value="4">不满意</option>
										<option value="5">非常不满意</option>
									</select> 
									<br />
								</p>


					<div style="clear:both;"></div>			
				<p class="align-left">
<label class="fl">发货时间：</label>   
<input name="fatime1" id="inputDate" class="input-small inputDate" value="">-
<input name="fatime2" id="inputDate1" class="input-small inputDate1" value="">

</p>

		        <p class="align-left">
								
				
				
								
<label class="fl">预计到货时间：</label>   
<input name="daotime1" id="inputDate2" class="input-small inputDate2" value="">-
<input name="daotime2" id="inputDate3" class="input-small inputDate3" value="">


</p>
				
								<p class="align-left">
								<input class="button" type="hidden" name="m"  value="wuliu" />
								<input class="button" type="hidden" name="n"  value="manage" />
									<input class="button" type="submit" name="search"  value="筛选" />
									
								</p>
								
			    <p class="clear"></p>
				</fieldset>
		</form>
		
				
		
				<div class="content-box-content">
					<form class="form-search" action="goodsManage.php" method="post">
		<fieldset>
					<div class="tab-content default-tab" class="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<div class="notification attention png_bg">
							
							<div>
								点击右侧查看评价进行操作
							</div>
						</div>
						
						<table>
							
							<thead>
								<tr>
								  
								 
								  <th>发货时间</th>
								    <th>预计到货时间</th>;
									<th style="width:70px">货物名称</th>
									<th style="width:40px;">数量</th>
									<th style="width:40px;">总价</th>
									
									<th>到货地址</th>
									<th>查询电话</th>
									
									<th style="width:40px;">评价</th>
									<th>更新时间</th>
								
								   <th>操作</th>
								</tr>
								
							</thead>
						 
							
						 
							<tbody>
							
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wulius']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								<tr class="vm">
									
								
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['fatime'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['daotime'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['shumu'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
									
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['prankname'];?>
</td>
									<td  align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['uptime'];?>
</td>
									
									<td  align="center">
										<!-- Icons -->
									
										 	 <a href="wuliufront.php?act=cha&m=wuliu&n=manage&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" target="_blank" title="Edit">查看评价</a>
										<!--<a href="#" title="Edit Meta"><img src="/assets/images//icons/hammer_screwdriver.png" alt="Edit Meta" /></a>-->
									</td>
								</tr>
								<?php } ?>
							
								
					</tbody>
							<tfoot>
								<tr>
									<td colspan="11">
										<div class="bulk-actions align-left">
										
										</div>
										<?php if ($_smarty_tpl->tpl_vars['page_arr']->value['str']!='') {?><?php echo $_smarty_tpl->tpl_vars['page_arr']->value['str'];?>
<?php }?>
										<!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>		
								</tfoot>
										
						</table>
								
						
					</div> <!-- End #tab1 -->
			</fieldset>
							<div class="clear"></div><!-- End .clear -->
					</form>
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
		
<?php echo $_smarty_tpl->getSubTemplate ("../includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>	
		</div> 
	</div><?php }} ?>
