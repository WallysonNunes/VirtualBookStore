$(document).ready(function(){
	$("#enviar").click(function(){

		var email = $("#email").val();
		var senha = $("#senha").val();

		$.ajax({
			url: "script/login.php",
			
			type: "POST",
			
			dataType: "html",
			
			data:{n1:email, n2:senha},

			success: function(dados){
				alert(dados);
			}

		});
	});
});