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
		return (field == "") ? "�� ������� ��'�.\n" : ""
	}
	function validateSureName(field){
		return (field == "") ? "�� ������� �����.\n" : ""
	}
	function validateUserName(field){
		if(field == "") return "�� ������� ��'� �����������.\n"
		else if(field.length < 5) return "��'� ����������� ����� 5 �������.\n"
		else if(/[\W]/.test(field)) return "� ���� �������� ����� a-z, A-Z, 0-9, - i _.\n"
		else return ""
	}
	function validatePassword(field){
		if(field == "") return "������ ������.\n"
		else if(field.length < 8) return "� ����� ������� ���� �� ����� 8 �������.\n"
		else if(!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field)) return "� ����� ������� ���� �� 1 ������� �� ������� ������ a-z, A-Z, 0-9.\n"
		else return ""
	}
	function validateAge(field){
		if(isNaN(field)) return "�� �������� ������"
		else if(field < 18 || field > 110) return "³� ������� ���� � ����� �� 18 �� 110.\n"
		else return ""
	}
	function validateEmail(field){
		if(field == "") return "�� �������� email.\n"
		else if(!((field.indexOf(".")>0) && (field.indexOf("@")>0)) || /[^a-zA-Z0-9.@_-]/.test(field))
			return "����������� ����� �� �� ����� ������.\n"
		else return ""
	}