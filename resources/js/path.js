function cobafungsi(){
	var hasil = 
	document.getElementById("nama").value;
	//alert("Hello " + hasil);
	var gejala =
	document.getElementById("penyakit").value;
	
	var jk = " ";
	if(jkp.checked){
		jk = document.getElementById("jkp").value;
	}
	else if (jkw.checked) {
		jk = document.getElementById("jkw").value;
	}
	else {
		jk="-";
	}
	
	var umr =
	document.getElementById("umur").value;
	
	
	document.getElementById ("leftside").innerHTML = ("<br> Terimakasih Telah Mendaftar! <br><br> Nama : " + hasil + "<br> Umur : " + umr + "<br> Jenis Kelamin : " + jk + "<br> Gejala Penyakit : " + gejala);
}