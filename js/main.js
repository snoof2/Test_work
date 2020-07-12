$("#Send").on("click", function(){
	var email = $("#email").val();
	var name = $("#name").val();
	var surname = $("#surname").val();
	var password = $("#password").val();
	var passwordRepeat = $("#passwordRepeat").val();

	if (email == "") {
		$("#message").text("Введите email");
		return false;
	} else if (name == "") {
		$("#message").text("Введите имя");
		return false;
	} else if (surname == "") {
		$("#message").text("Введите фамилию");
		return false;
	} else if (password == "") {
		$("#message").text("Введите пароль");
		return false;
	} else if (passwordRepeat == "") {
		$("#message").text("Повторите пароль");
		return false;
	} else if (passwordRepeat != password ) {
		$("#message").text("Пароли несовпадают");
		return false;
	}

	$("#message").text("");
	

	$.ajax({
		url: '../ajax/main.php',
		type: 'POST',
		cache: false,
		data: {'name':name,'email':email,'surname':surname,'password':password},
		dataType: 'html',
		beforeSend: function() {
			$("#Send").prop("disabled",true);
		},
		success: function(data) {
			if(!data) {
				alert("Такой email уже используется"); 
				$("#Send").prop("disabled",false);
			}else {
			alert("Успешная отправка");
			$("#formReg").fadeOut("slow");
			$("#Send").prop("disabled",false);
		}
	}
	});

	
		
});
