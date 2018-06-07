
$(document).ready(function(){
	$.formValidator.initConfig({formid:"form1",onerror:function(){alert("校验没有通过，具体错误请看错误提示")}});
	
	$("#password1").formValidator({onshow:"请输入密码",onfocus:"密码不能为空",oncorrect:"密码合法"}).inputValidator({min:1,empty:{leftempty:false,rightempty:false,emptyerror:"密码两边不能有空符号"},onerror:"密码不能为空,请确认"});
	$("#password2").formValidator({onshow:"请输入重复密码",onfocus:"两次密码必须一致哦",oncorrect:"密码一致"}).inputValidator({min:1,empty:{leftempty:false,rightempty:false,emptyerror:"重复密码两边不能有空符号"},onerror:"重复密码不能为空,请确认"}).compareValidator({desid:"password1",operateor:"=",onerror:"2次密码不一致,请确认"});

	$("#sj").formValidator({onshow:"请输入你的手机号码",onfocus:"必须是13或15或18打头哦",oncorrect:"谢谢你的合作，你的手机号码正确"}).regexValidator({regexp:"mobile",datatype:"enum",onerror:"手机号码格式不正确"});
	//$("#").formValidator({onshow:"",onfocus:"请输入",oncorrect:"谢谢你的合作，你的正确"}).regexValidator({regexp:"",datatype:"enum",onerror:"格式不正确"});
	$("#email").formValidator({onshow:"请输入你的email",onfocus:"请注意你输入的email格式，例如:wzmaodong@126.com",oncorrect:"谢谢你的合作，你的email正确"}).regexValidator({regexp:"email",datatype:"enum",onerror:"email格式不正确"});



	$("#qq").formValidator({onshow:"请输入QQ号码",oncorrect:"谢谢你的合作，你的QQ号码正确"}).regexValidator({regexp:"qq",datatype:"enum",onerror:"QQ号码格式不正确"});

	$("#yhm").formValidator({onshow:"请输入用户名",oncorrect:"谢谢你的合作，你的用户名正确"}).regexValidator({regexp:"username",datatype:"enum",onerror:"用户名格式不正确"});


});

