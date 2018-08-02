
$(document).ready(function() {
 //нажали сохранить 
 $("#load").hide();
  $("#completeSQL").hide();
 $('#btnSave').click (function(){
 $.ajax({
url:"insert.php",
type:"POST",
cashe:false,
data:{ name:$('#name').val(), surname:$('#surname').val(),age:$('#age').val() }, // Отправка
beforeSend:function() {
				$("#load").show();
			},
complete: function () {

document.write('<center>Успешная запись.</center>');
document.write('<center><a href="https://simka18.su/test/Form.html"><<<назад</a></center>');



}
});
});
//////////////////////////////////////////////////////////
///нажали выгрузить
 $('#btnLoad').click (function(){
$(this).load('ajax/example.html'); 
 $.ajax({
url:"load.php",
type:"POST",
cashe:false,
beforeSend:function() {
				$("#load").show();
			},
success: function (data) {
$("#load").hide();
$('#GoogleDoc').show();
//$('#GoogleDoc').html();

}
});
});

});