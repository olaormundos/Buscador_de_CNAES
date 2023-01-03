/* Faz o campo principal do buscador receber apenas números */
function onlynumber(evt) {
	var theEvent = evt || window.event;
	var key = theEvent.keyCode || theEvent.which;
	key = String.fromCharCode( key );
	var regex = /^[0-9.]+$/;
	if( !regex.test(key) ) {
	   theEvent.returnValue = false;
	   if(theEvent.preventDefault) theEvent.preventDefault();
	}
}
/* Mascaras para o número de CNAE aparecer com a marcação */
$("#cnaenumero").mask("9999-9/99");
$("#cnaenumeromei").mask("9999-9/99");
$("#cnaenumeromeisim").mask("9999-9/99");
$("#cnaenumeromeinao").mask("9999-9/99");
$("#cnaenuf").mask("9999-9/99");
$("#cnaenuft").mask("9999-9/99");
$("#cnaenumerof").mask("9999-9/99");
$("#cnaenumft").mask("9999-9/99");
/* Mascara para o campo de CNAE buscador */
$("#c").mask("9999-9/99");
/* Mascara para o campo de telefone form de conversão modal */
$("#phone").mask("(00) 00000-0000");
/* Mascara para o campo de telefone form de conversão modal aliquota I */
$("#phone-cliente").mask("(00) 00000-0000");
/* Mascara para o campo de telefone form de conversão modal aliquota II */
$("#phone-cliente2").mask("(00) 00000-0000");
/* Mascara para o campo de telefone form de conversão modal aliquota III */
$("#phone-cliente3").mask("(00) 00000-0000");
/* Mascara para o campo de telefone form de conversão modal aliquota IV */
$("#phone-cliente4").mask("(00) 00000-0000");
/* Mascara para o campo de telefone form de conversão modal aliquota V */
$("#phone-cliente5").mask("(00) 00000-0000"); 
/* Validação do campo de e-mail se ele é válido ou não form abertura cnpj */
function validacaoEmail(field) {
	usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
	
	if ((usuario.length >=1) &&
		(dominio.length >=3) &&
		(usuario.search("@")==-1) &&
		(dominio.search("@")==-1) &&
		(usuario.search(" ")==-1) &&
		(dominio.search(" ")==-1) &&
		(dominio.search(".")!=-1) &&
		(dominio.indexOf(".") >=1)&&
		(dominio.lastIndexOf(".") < dominio.length - 1)) {
	document.getElementById("msgemail").innerHTML="E-mail válido";
	}
	else{
	document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
	}
}
/* Validação do campo de e-mail se ele é válido ou não form alíquota I */
function validacaoEmailaliquota1(field) {
	usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
	
	if ((usuario.length >=1) &&
		(dominio.length >=3) &&
		(usuario.search("@")==-1) &&
		(dominio.search("@")==-1) &&
		(usuario.search(" ")==-1) &&
		(dominio.search(" ")==-1) &&
		(dominio.search(".")!=-1) &&
		(dominio.indexOf(".") >=1)&&
		(dominio.lastIndexOf(".") < dominio.length - 1)) {
	document.getElementById("msgemailvalid").innerHTML="E-mail válido";
	}
	else{
	document.getElementById("msgemailvalid").innerHTML="<font color='red'>E-mail inválido </font>";
	}
}
/* Validação do campo de e-mail se ele é válido ou não form alíquota II */
function validacaoEmailaliquota2(field) {
	usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
	
	if ((usuario.length >=1) &&
		(dominio.length >=3) &&
		(usuario.search("@")==-1) &&
		(dominio.search("@")==-1) &&
		(usuario.search(" ")==-1) &&
		(dominio.search(" ")==-1) &&
		(dominio.search(".")!=-1) &&
		(dominio.indexOf(".") >=1)&&
		(dominio.lastIndexOf(".") < dominio.length - 1)) {
	document.getElementById("msgemailvalid2").innerHTML="E-mail válido";
	}
	else{
	document.getElementById("msgemailvalid2").innerHTML="<font color='red'>E-mail inválido </font>";
	}
}
/* Validação do campo de e-mail se ele é válido ou não form alíquota III */
function validacaoEmailaliquota3(field) {
	usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
	
	if ((usuario.length >=1) &&
		(dominio.length >=3) &&
		(usuario.search("@")==-1) &&
		(dominio.search("@")==-1) &&
		(usuario.search(" ")==-1) &&
		(dominio.search(" ")==-1) &&
		(dominio.search(".")!=-1) &&
		(dominio.indexOf(".") >=1)&&
		(dominio.lastIndexOf(".") < dominio.length - 1)) {
	document.getElementById("msgemailvalid3").innerHTML="E-mail válido";
	}
	else{
	document.getElementById("msgemailvalid3").innerHTML="<font color='red'>E-mail inválido </font>";
	}
}
/* Validação do campo de e-mail se ele é válido ou não form alíquota IV */
function validacaoEmailaliquota4(field) {
	usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
	
	if ((usuario.length >=1) &&
		(dominio.length >=3) &&
		(usuario.search("@")==-1) &&
		(dominio.search("@")==-1) &&
		(usuario.search(" ")==-1) &&
		(dominio.search(" ")==-1) &&
		(dominio.search(".")!=-1) &&
		(dominio.indexOf(".") >=1)&&
		(dominio.lastIndexOf(".") < dominio.length - 1)) {
	document.getElementById("msgemailvalid4").innerHTML="E-mail válido";
	}
	else{
	document.getElementById("msgemailvalid4").innerHTML="<font color='red'>E-mail inválido </font>";
	}
}
/* Validação do campo de e-mail se ele é válido ou não form alíquota V */
function validacaoEmailaliquota5(field) {
	usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
	
	if ((usuario.length >=1) &&
		(dominio.length >=3) &&
		(usuario.search("@")==-1) &&
		(dominio.search("@")==-1) &&
		(usuario.search(" ")==-1) &&
		(dominio.search(" ")==-1) &&
		(dominio.search(".")!=-1) &&
		(dominio.indexOf(".") >=1)&&
		(dominio.lastIndexOf(".") < dominio.length - 1)) {
	document.getElementById("msgemailvalid5").innerHTML="E-mail válido";
	}
	else{
	document.getElementById("msgemailvalid5").innerHTML="<font color='red'>E-mail inválido </font>";
	}
}