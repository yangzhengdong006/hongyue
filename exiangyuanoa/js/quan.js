


$(document).ready(function () 
{ 
	$("#quanx").click(function () 
	{
		var flag = $("#quanx").is(':checked');//�ж�ȫѡ��ť��״̬ 
		if(flag)
		{
		 // alert('zhen');
			$(".sels").each(function () 
			{//����ÿһ��Id��Item��β��checkbox 
				//alert($(this).attr('value'));
					//$(this).attr("checked", true);//ѡ�л���ȡ��ѡ��	
					$(this).prop("checked", true)
			
			
			});
		}
		else
		{
			// alert('jia');
			$(".sels").each(function () 
			{//����ÿһ��Id��Item��β��checkbox 
				//alert('bbb');
					$(this).attr("checked", false);//ѡ�л���ȡ��ѡ��	
				
			
			
			});
		}
	}); 
}); 