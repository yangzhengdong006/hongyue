


$(document).ready(function () 
{ 
	$("#quanx").click(function () 
	{
		var flag = $("#quanx").is(':checked');//判断全选按钮的状态 
		if(flag)
		{
		 // alert('zhen');
			$(".sels").each(function () 
			{//查找每一个Id以Item结尾的checkbox 
				//alert($(this).attr('value'));
					//$(this).attr("checked", true);//选中或者取消选中	
					$(this).prop("checked", true)
			
			
			});
		}
		else
		{
			// alert('jia');
			$(".sels").each(function () 
			{//查找每一个Id以Item结尾的checkbox 
				//alert('bbb');
					$(this).attr("checked", false);//选中或者取消选中	
				
			
			
			});
		}
	}); 
}); 