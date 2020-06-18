$(document).ready(function() {
	
	//All form validate
	function validate() {
	return $("input:text,textarea,select").removeClass('blank').filter(function() {
    return !/\S+/.test($(this).val());
	}).addClass('blank').size() == 0;
	}
	
	$('#validall').submit(validate);
	$('#form').submit(validate);
	
	setTimeout(function() {
    $('.msg').fadeOut();
	}, 3000)

	$('table th input[type=checkbox]').click(function(){
			var table = $(this).parents('table');
			if($(this).is(':checked')){
				table.find('div.checker span').addClass('checked');
				table.find('input[type=checkbox]').attr('checked', true);
			}
			else if($(this).is(':not(:checked)')){
				table.find('div.checker span').removeClass('checked');
				table.find('input[type=checkbox]').attr('checked', false);
			}
	});
		
	$('#removedata').submit(function() {


	var checked = $('#datatable input[type=checkbox]:checked').length > 0;
	var filename = $("input#filename").val();
	var textmsg="Are you sure you remove selected content";
	
	if (!checked){
	alert("Error: Please check at least one checkbox");
    return false;}
	var answer = confirm(textmsg);
	if (answer) {
	
	//$("#content").empty().append("<p align='center' style='margin-top:15%'><img src='library/admin/tmp/ajaxloader.gif'></p>");
	$.post(
            "removedata.php",
            $("#removedata").serialize(),
            function(data){
			if (data=="1"){
			window.location=filename;
			}
		});
	return false;
	} else { 
	return false;
	}
	});
	
});