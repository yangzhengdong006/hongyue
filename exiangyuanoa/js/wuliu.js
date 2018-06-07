$(document).ready(function(){

  $('#inputDate').DatePicker({
    format:'Y-m-d',
    date: $('#inputDate').val(),
    current: $('#inputDate').val(),
    starts: 1,
    position: 'right',
    onBeforeShow: function(){
     $('#inputDate').DatePickerSetDate($('#inputDate').val(), true);
   },
   onChange: function(formated, dates){
     $('#inputDate').val(formated);
     $('#inputDate').DatePickerHide();
   }
 });

  $('#inputDate2').DatePicker({
    format:'Y-m-d',
    date: $('#inputDate2').val(),
    current: $('#inputDate2').val(),
    starts: 1,
    position: 'right',
    onBeforeShow: function(){
     $('#inputDate2').DatePickerSetDate($('#inputDate2').val(), true);
   },
   onChange: function(formated, dates){
     $('#inputDate2').val(formated);
     $('#inputDate2').DatePickerHide();
   }
 });


  $("#aid").change(function(){

   $.post(
    'ajax_json.php',
    {
      aid:$("#aid").val(),
      province:$("#province").val(),

      aj:1
    },
		function (data) //回传函数
		{
      $("#uid").html(data);
    }
    );
 });

  $("#province").change(function(){

   $.post(
    'ajax_json.php',
    {
      aid:$("#aid").val(),
      province:$("#province").val(),

      aj:1
    },
    function (data) //回传函数
    {
      $("#uid").html(data);
    }
    );
 });

});