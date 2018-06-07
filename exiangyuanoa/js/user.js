
$(document).ready(function(){
	$.formValidator.initConfig({formid:"form1",onerror:function(){alert("校验没有通过，具体错误请看错误提示")}});
	
	$("#password1").formValidator({onshow:"请输入密码",onfocus:"密码不能为空",oncorrect:"密码合法"}).inputValidator({min:1,empty:{leftempty:false,rightempty:false,emptyerror:"密码两边不能有空符号"},onerror:"密码不能为空,请确认"});
	$("#password2").formValidator({onshow:"请输入重复密码",onfocus:"两次密码必须一致哦",oncorrect:"密码一致"}).inputValidator({min:1,empty:{leftempty:false,rightempty:false,emptyerror:"重复密码两边不能有空符号"},onerror:"重复密码不能为空,请确认"}).compareValidator({desid:"password1",operateor:"=",onerror:"2次密码不一致,请确认"});

	$("#sj").formValidator({onshow:"请输入你的手机号码",onfocus:"必须是13或15或18打头哦",oncorrect:"谢谢你的合作，你的手机号码正确"}).regexValidator({regexp:"mobile",datatype:"enum",onerror:"手机号码格式不正确"});
	


	$("#email").formValidator({onshow:"请输入联系人",onfocus:"联系人不能为空",oncorrect:"联系人合法"}).inputValidator({min:1,empty:{leftempty:false,rightempty:false,emptyerror:"联系人两边不能有空符号"},onerror:"联系人不能为空,请确认"});

	

	$("#qq").formValidator({onshow:"请输入联系地址",onfocus:"联系地址不能为空",oncorrect:"联系地址合法"}).inputValidator({min:1,empty:{leftempty:false,rightempty:false,emptyerror:"联系地址两边不能有空符号"},onerror:"联系地址不能为空,请确认"});


});

