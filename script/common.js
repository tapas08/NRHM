function generatePassword(){
	var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789/+=*&%#@^!()";

    for( var i=0; i < 8; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    $('#generatedPassword').html("<p class='alert alert-info'>Copy this password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>"+text+"</b></p>");
    $('#password').val(text);
}

function getList(){
	$.ajax({
		url: 'functions/common_functions.php',
		type: 'post',
		data: {
			search_term: $('#username'),
			access: 'user_list'
		},
		success: function(data){
			$('#user-list').html(data);
			insertData();
		}
	});
}

function insertData(){
	var user = $('#username').val();

	$.ajax({
		url: 'functions/common_functions.php',
		type: 'post',
		dataType: 'JSON',
		data: {
			user: user,
			access: 'insert_user_data'
		},
		success: function(data){
			$('#email').val(data.email)
		}
	});
}

function save(){
	$.ajax({
		url: 'functions/common_functions.php',
		type: 'post',
		data: {
			username: $('#username').val(),
			email: $('#email').val(),
			password: $('#password').val(),
			access: 'save'
		},
		success: function(data){
			$('.reg-msg').html(data);
		}
	});
}

function update(){
	$.ajax({
		url: 'functions/common_functions.php',
		type: 'post',
		data: {
			username: $('#username').val(),
			email: $('#email').val(),
			access: 'update'
		},
		success: function(data){
			$('.reg-msg').html(data);
		}
	});
}

function delete_user(id){
	$.ajax({
		url: 'functions/common_functions.php',
		type: 'post',
		data: {
			id: id,
			access: 'delete'
		},
		success: function(data){
			$('#user_msg').html(data);
		}
	});
}

$('.list-unstyled li').on('click', function(){
	$(this).toggleClass("checked");
	//$(this+" input").attr('checked', 'true');
	// if (!$(this).hasClass('checked')) {
	// 	console.log($(this).attr('class'));
	// 	$(this).addClass('checked');
	// }else{
	// 	$(this).removeClass('checked');
	// }
});