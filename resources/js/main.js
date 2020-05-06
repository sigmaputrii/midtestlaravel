
function _(el){
	return document.getElementById(el);

}

function ajax_data(php_file, el, send_data){
	_(el).innerHTML="Loading";
	var hr = new XMLHttpRequest();
	hr.open('POST', php_file, true);
	hr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function(){
		if(hr.readyState===4 && hr.status===200){
			_(el).innerHTML=hr.responseText;

		}
	};
	hr.send(send_data);
}

function login_page(){
	 ajax_data("./loginbener.php", "pages", null)
}

function regis_page(){
	 ajax_data("./masukbener.php", "pages", null)
}

function desti_page(){
	 ajax_data("./desti.php", "pages", null)
}


function find_page(){
	 ajax_data("./find.php", "pages", null)
}

function resto_page(){
	 ajax_data("./resto.php", "pages", null)
}

function regis_form() {
	var nama=_("nama").value;
	var email=_("email").value;
	var tgl=_("tgl").value;
	var telepon=_("telepon").value;
	var username=_("username").value;
	var password=_("password").value;

	var send_data=
		"&nama=" +nama+
		"&email=" +email+
		"&tgl=" +tgl+
		"&telepon=" +telepon+
		"&username=" +username+
		"&password=" +password;
	ajax_data("app/a_masukbener.php", "contact_response", send_data);
}

function login(){

	var username=$('#username').val();
	var password=$('#password').val();

	$.ajax({
		type:'POST',
		url:'app/a_login.php',
		data: {
			username:username,
			password:password
		},
		success: function(response){
			$("#login_response").html(response);
		}

	});
}
