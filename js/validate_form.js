function validate(form){
		fail = validateForeName(form.forename.value);
		fail += validateSureName(form.surname.value);
		fail += validateUserName(form.username.value);
		fail += validatePassword(form.password.value);
		fail += validateAge(form.age.value);
		fail += validateEmail(form.email.value)
		if(fail == "") return true
		else{
			alert(fail); return false;
		}
	}
	function validateForeName(field){
		return (field == "") ? "Не введено ім'я.\n" : ""
	}
	function validateSureName(field){
		return (field == "") ? "Не введена фамілія.\n" : ""
	}
	function validateUserName(field){
		if(field == "") return "Не введено ім'я користувача.\n"
		else if(field.length < 5) return "Ім'я користувача менше 5 символів.\n"
		else if(/[\W]/.test(field)) return "В імені допустимі тільки a-z, A-Z, 0-9, - i _.\n"
		else return ""
	}
	function validatePassword(field){
		if(field == "") return "Введіть пароль.\n"
		else if(field.length < 8) return "В паролі повинно бути не менше 8 символів.\n"
		else if(!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field)) return "В паролі повинно бути по 1 символу із кожного набору a-z, A-Z, 0-9.\n"
		else return ""
	}
	function validateAge(field){
		if(isNaN(field)) return "Не введений пароль"
		else if(field < 18 || field > 110) return "Вік повинен бути в межах від 18 до 110.\n"
		else return ""
	}
	function validateEmail(field){
		if(field == "") return "Не введений email.\n"
		else if(!((field.indexOf(".")>0) && (field.indexOf("@")>0)) || /[^a-zA-Z0-9.@_-]/.test(field))
			return "Електрониий адрес має не вірний формат.\n"
		else return ""
	}