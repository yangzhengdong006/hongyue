$(document).ready(function(){

	var d = new Date();
	var str = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
	
	

	$('#inputDate').DatePicker({
		format:'Y-m-d',
		date: $('#inputDate').val(),
		current: $('#inputDate').val(),
		starts: 1,
		position: 'right',
		onBeforeShow: function(){
			$('#inputDate').DatePickerSetDate(str, true);
		},
		onChange: function(formated, dates){
			$('#inputDate').val(formated);
			$('#inputDate').DatePickerHide();
		}
	});

	$('#inputDate1').DatePicker({
		format:'Y-m-d',
		date: $('#inputDate1').val(),
		current: $('#inputDate1').val(),
		starts: 1,
		position: 'right',
		onBeforeShow: function(){
			$('#inputDate1').DatePickerSetDate(str, true);
		},
		onChange: function(formated, dates){
			$('#inputDate1').val(formated);
			$('#inputDate1').DatePickerHide();
		}
	});

	$('#inputDate3').DatePicker({
		format:'Y-m-d',
		date: $('#inputDate3').val(),
		current: $('#inputDate3').val(),
		starts: 1,
		position: 'right',
		onBeforeShow: function(){
			$('#inputDate3').DatePickerSetDate(str, true);
		},
		onChange: function(formated, dates){
			$('#inputDate3').val(formated);
			$('#inputDate3').DatePickerHide();
		}
	});



	$('#inputDate2').DatePicker({
		format:'Y-m-d',
		date: $('#inputDate2').val(),
		current: $('#inputDate2').val(),
		starts: 1,
		position: 'right',
		onBeforeShow: function(){
			$('#inputDate2').DatePickerSetDate(str, true);
		},
		onChange: function(formated, dates){
			$('#inputDate2').val(formated);
			$('#inputDate2').DatePickerHide();
		}
	});

	
	$("#aid").change(function(){
		//  alert('dd');

		$.post(
			'ajax_json.php',
			{
				aid:$("#aid").val(),
				province:$("#province").val(),

				aj:1
			},
			function (data) //回传函数
			{
				// data="<option value=''></option>"+data;
				//alert(data);
				$("#uid").html(data);
			}
			);
	});
	$("#province").change(function(){
		//  alert('dd');

		$.post(
			'ajax_json.php',
			{
				aid:$("#aid").val(),
				province:$("#province").val(),

				aj:1
			},
			function (data) //回传函数
			{
				// data="<option value=''></option>"+data;
				//alert(data);
				$("#uid").html(data);
			}
			);
	});




});