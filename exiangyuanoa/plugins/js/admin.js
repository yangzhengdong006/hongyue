$(document).ready(function(){
						   

	$(".main-nav .lili").click(function(){
   
	//alert('sdsd');
	//alert($(this).find("ul").css("display"));
	
	
	if($(this).find("ul").css("display")=='none')
	{
		$(this).find("ul").show();		
	}
	else
	{
		$(this).find("ul").hide();
	}
  });
 
});

