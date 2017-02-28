function funcBefore () {
		var login = $("input[name='username']");
		if (login.val().length < 5) {
				$("#error").text ("Не менше 5 символів");
				return false;
			}
			else {
			$("#error").text ("...");
			}
		
	}
	function funcSuccess (data) {
			$("#error").text(data);
			/*if (data == "Такий логін уже існує"){
				$('input[type="submit"]').fadeOut(1000);//attr('disabled', 'disabled').removeClass("button");
				//$('input[type="submit"]').removeClass("button");
			}
			else $('input[type="submit"]').fadeIn(1000);//removeAttr('disabled').addClass("button");*/
		}
	$(document).ready(function () {
		$("input[name='username']").bind("change", function () {
			$.ajax ({
				url: "checklogin.php",
				type: "POST",
				data: ({checklogin: $("input[name='username']").val()}),
				dataType: "html",
				beforeSend: funcBefore,
				success: funcSuccess
			});
		});
		
	});
$(function () {
	//$('#body').css("backgroundColor", "red");
	$('input[name="password"]').bind("change", function () {
		var password = $('input[name="password"]').val();
		if ($('input[name="password"]').val().length < 8) {
			$('#er1').text("Не менше 8 символів");
		}
		else if(!/[a-z]/.test(password) || !/[A-Z]/.test(password) || !/[0-9]/.test(password)) {
			$('#er1').text("необхідно по одному символу із кожного набору");
		}
		else $('#er1').text("");
	});
	$('input[name="age"]').bind("change", function () {
		var age = $('input[name="age"]').val();
		if(isNaN(age)) {
			$('#er2').text("Некорректні дані");
		}
		else if(age<18 || age>80) {
			$('#er2').text("Вік повинен бути в межах від 18 до 80.");
		}
		else $('#er2').text("");
	});
	$('input[name="email"]').bind("change", function () {
		var email = $('input[name="email"]').val();
		if(!((email.indexOf(".")>0) && (email.indexOf("@")>0)) || /[^a-zA-Z0-9.@_-]/.test(email)) {
			$('#er3').text("Не вірний формат.");
		}
		else $('#er3').text("");
	});
	$('form').submit(function () {
		if ($('.error').text() == "") return true;
		else return false;
	});
});
	
