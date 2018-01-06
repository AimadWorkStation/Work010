import $ from 'jquery';

$(function(){
	$.post('getAllnots.php',{}, function(data){
		$('#messages').html(data);
	});
});
//V3.0
$('#send').click(function(){
	var name = $('#inputName').val();
	var message = $('#inputMessage').val();
	var email = $('#inputMail').val();
	if(name == ''){
		$('#inputName').val('Empty value not allowed').css('color','#C83C36FF');
		setTimeout(function(){$('#inputName').val('').css('color','#303030EE');},1500);
	}
	else if(message == ''){
		$('#inputMessage').val('Empty value not allowed').css('color','#C83C36FF');
		setTimeout(function(){$('#inputMessage').val('').css('color','#303030EE');},1500);
	}
	else if(email == ''){
		$('#inputMail').val('Empty value not allowed').css('color','#C83C36FF');
		setTimeout(function(){$('#inputMail').val('').css('color','#303030EE');},1500);
	}
	else{
		$.post('addnote.php',{Name:name ,Message:message , Email : email},function(data){
			$('#messages').prepend(data);
		});
		$('#inputName').val('');
		$('#inputMessage').val('');
		$('#inputMail').val('');
	}
});