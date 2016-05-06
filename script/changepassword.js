/**
 * Script to change the password
 */

$('.changePass').on('submit', function(){
	var that = $(this),
		url  = that.attr('action'),
		type = that.attr('method'),
		data = {};

	$('#hiddenDiv').html('Processing...').fadeIn("fast");

	that.find('[name]').each(function (index, value){
		var that  = $(this),
			name  = that.attr('name'),
			value = that.val();

			data[name] = value;
	});

	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response){
			if (response == "true"){
				$('#hiddenDiv').html("Password has been chagned!");
			}else{
				$('#hiddenDiv').html(response + "Reloding the form! <br /> Please Wait...").fadeIn("slow");
				setTimeout(function(){
					$(".changeFormDiv").hide()
						   .load('passwordForm.php')
						   .css({"background-color": "rgba(0, 0, 0, 0.45)",
								"padding": "15px",
								"border-radius": "10px",
								"float": "left",
								"margin": "5% 10% 5% 15%",
								"box-shadow": "2px 2px 2px rgba(0, 0, 0, 0.56)"}).fadeIn("slow");
					}, 3000);
				}
			}
	});
	return false;
});