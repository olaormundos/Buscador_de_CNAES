const rdstation = 'b1d1e5f23ec0596198802d7f2f77e43b'

document.querySelector('#btnenviaraliqota5').addEventListener('click', (e)=>{
	let firstname       = document.querySelector('#formal5 #firstname').value
	let email           = document.querySelector('#formal5 #email').value
	let phone_cliente5  = document.querySelector('#formal5 #phone-cliente5').value
	let input_cidades   = document.querySelector('#formal5 #input-cidades').value
	let periodo         = document.querySelector('#formal5 #selecione-um-periodo').value
	let identificador   = document.querySelector('#formal5 #ident').value
	let utmsource       = document.querySelector('#formal5 #utm_source').value
	let utmmedium       = document.querySelector('#formal5 #utm_medium').value
	let utmcampaign     = document.querySelector('#formal5 #utm_campaign').value
	let utmterm         = document.querySelector('#formal5 #utm_term').value
	let utmdevice       = document.querySelector('#formal5 #utm_device').value
	let utmpage         = document.querySelector('#formal5 #utm_page').value
	let utmgclid        = document.querySelector('#formal5 #gclid').value
	let utmpagepath     = document.querySelector('#formal5 #page_path').value
	let utmcutmz        = document.querySelector('#formal5 #c_utmz').value

	
	$.ajax({
		url: "https://www.rdstation.com.br/api/1.2/conversions",
		method: "POST",
		dataType: "JSON",
		crossDomain: true,
		data: {
			firstname,
			email,
			phone: phone_cliente5,
			cidade: input_cidades,
			token_rdstation: rdstation,
			['Quando pretente abrir sua empresa?']: periodo,
			identificador,
			utmsource,
			utmmedium,
			utmcampaign,
			utmterm,
			utmdevice,
			utmpage,
			utmgclid,
			utmpagepath,
			utmcutmz
		},
		error: function (response) {
		  console.log(response);
		  $('#modalFormAliquota5').modal('hide');
		  $('#modalanexo5').modal('show');
		},
		success: function (response) {
		  console.log(response);
		}
	  });

});

document.querySelector('#btnenviaraliqota4').addEventListener('click', (e)=>{
	let firstname       = document.querySelector('#formal4 #firstname').value
	let email           = document.querySelector('#formal4 #email').value
	let phone_cliente4  = document.querySelector('#formal4 #phone-cliente4').value
	let input_cidades   = document.querySelector('#formal4 #input-cidades').value
	let periodo         = document.querySelector('#formal4 #selecione-um-periodo').value
	let identificador   = document.querySelector('#formal4 #ident').value
	let utmsource       = document.querySelector('#formal4 #utm_source').value
	let utmmedium       = document.querySelector('#formal4 #utm_medium').value
	let utmcampaign     = document.querySelector('#formal4 #utm_campaign').value
	let utmterm         = document.querySelector('#formal4 #utm_term').value
	let utmdevice       = document.querySelector('#formal4 #utm_device').value
	let utmpage         = document.querySelector('#formal4 #utm_page').value
	let utmgclid        = document.querySelector('#formal4 #gclid').value
	let utmpagepath     = document.querySelector('#formal4 #page_path').value
	let utmcutmz        = document.querySelector('#formal4 #c_utmz').value

	
	$.ajax({
		url: "https://www.rdstation.com.br/api/1.2/conversions",
		method: "POST",
		dataType: "JSON",
		crossDomain: true,
		data: {
			firstname,
			email,
			phone: phone_cliente4,
			cidade: input_cidades,
			token_rdstation: rdstation,
			['Quando pretente abrir sua empresa?']: periodo,
			identificador,
			utmsource,
			utmmedium,
			utmcampaign,
			utmterm,
			utmdevice,
			utmpage,
			utmgclid,
			utmpagepath,
			utmcutmz
		},
		error: function (response) {
		  console.log(response);
		  $('#modalFormAliquota4').modal('hide');
		  $('#modalanexo4').modal('show');
		},
		success: function (response) {
		  console.log(response);
		}
	  });

});

document.querySelector('#btnenviaraliqota3').addEventListener('click', (e)=>{
	let firstname       = document.querySelector('#formal3 #firstname').value
	let email           = document.querySelector('#formal3 #email').value
	let phone_cliente3  = document.querySelector('#formal3 #phone-cliente3').value
	let input_cidades   = document.querySelector('#formal3 #input-cidades').value
	let periodo         = document.querySelector('#formal3 #selecione-um-periodo').value
	let identificador   = document.querySelector('#formal3 #ident').value
	let utmsource       = document.querySelector('#formal3 #utm_source').value
	let utmmedium       = document.querySelector('#formal3 #utm_medium').value
	let utmcampaign     = document.querySelector('#formal3 #utm_campaign').value
	let utmterm         = document.querySelector('#formal3 #utm_term').value
	let utmdevice       = document.querySelector('#formal3 #utm_device').value
	let utmpage         = document.querySelector('#formal3 #utm_page').value
	let utmgclid        = document.querySelector('#formal3 #gclid').value
	let utmpagepath     = document.querySelector('#formal3 #page_path').value
	let utmcutmz        = document.querySelector('#formal3 #c_utmz').value

	
	$.ajax({
		url: "https://www.rdstation.com.br/api/1.2/conversions",
		method: "POST",
		dataType: "JSON",
		crossDomain: true,
		data: {
			firstname,
			email,
			phone: phone_cliente3,
			cidade: input_cidades,
			token_rdstation: rdstation,
			['Quando pretente abrir sua empresa?']: periodo,
			identificador,
			utmsource,
			utmmedium,
			utmcampaign,
			utmterm,
			utmdevice,
			utmpage,
			utmgclid,
			utmpagepath,
			utmcutmz
		},
		error: function (response) {
		  console.log(response);
		  $('#modalFormAliquota3').modal('hide');
		  $('#modalanexo3').modal('show');
		},
		success: function (response) {
		  console.log(response);
		}
	  });

});

document.querySelector('#btnenviaraliqota2').addEventListener('click', (e)=>{
	let firstname       = document.querySelector('#formal2 #firstname').value
	let email           = document.querySelector('#formal2 #email').value
	let phone_cliente2  = document.querySelector('#formal2 #phone-cliente2').value
	let input_cidades   = document.querySelector('#formal2 #input-cidades').value
	let periodo         = document.querySelector('#formal2 #selecione-um-periodo').value
	let identificador   = document.querySelector('#formal2 #ident').value
	let utmsource       = document.querySelector('#formal2 #utm_source').value
	let utmmedium       = document.querySelector('#formal2 #utm_medium').value
	let utmcampaign     = document.querySelector('#formal2 #utm_campaign').value
	let utmterm         = document.querySelector('#formal2 #utm_term').value
	let utmdevice       = document.querySelector('#formal2 #utm_device').value
	let utmpage         = document.querySelector('#formal2 #utm_page').value
	let utmgclid        = document.querySelector('#formal2 #gclid').value
	let utmpagepath     = document.querySelector('#formal2 #page_path').value
	let utmcutmz        = document.querySelector('#formal2 #c_utmz').value

	
	$.ajax({
		url: "https://www.rdstation.com.br/api/1.2/conversions",
		method: "POST",
		dataType: "JSON",
		crossDomain: true,
		data: {
			firstname,
			email,
			phone: phone_cliente2,
			cidade: input_cidades,
			token_rdstation: rdstation,
			['Quando pretente abrir sua empresa?']: periodo,
			identificador,
			utmsource,
			utmmedium,
			utmcampaign,
			utmterm,
			utmdevice,
			utmpage,
			utmgclid,
			utmpagepath,
			utmcutmz
		},
		error: function (response) {
		  console.log(response);
		  $('#modalFormAliquota2').modal('hide');
		  $('#modalanexo2').modal('show');
		},
		success: function (response) {
		  console.log(response);
		}
	  });

});

document.querySelector('#btnenviaraliqota').addEventListener('click', (e)=>{
	let firstname       = document.querySelector('#formal #firstname').value
	let email           = document.querySelector('#formal #email').value
	let phone_cliente   = document.querySelector('#formal #phone-cliente').value
	let input_cidades   = document.querySelector('#formal #input-cidades').value
	let periodo         = document.querySelector('#formal #selecione-um-periodo').value
	let identificador   = document.querySelector('#formal #ident').value
	let utmsource       = document.querySelector('#formal #utm_source').value
	let utmmedium       = document.querySelector('#formal #utm_medium').value
	let utmcampaign     = document.querySelector('#formal #utm_campaign').value
	let utmterm         = document.querySelector('#formal #utm_term').value
	let utmdevice       = document.querySelector('#formal #utm_device').value
	let utmpage         = document.querySelector('#formal #utm_page').value
	let utmgclid        = document.querySelector('#formal #gclid').value
	let utmpagepath     = document.querySelector('#formal #page_path').value
	let utmcutmz        = document.querySelector('#formal #c_utmz').value
	

	
	$.ajax({
		url: "https://www.rdstation.com.br/api/1.2/conversions",
		method: "POST",
		dataType: "JSON",
		crossDomain: true,
		data: {
			firstname,
			email,
			phone: phone_cliente,
			cidade: input_cidades,
			token_rdstation: rdstation,
			['Quando pretente abrir sua empresa?']: periodo,
			identificador,
			utmsource,
			utmmedium,
			utmcampaign,
			utmterm,
			utmdevice,
			utmpage,
			utmgclid,
			utmpagepath,
			utmcutmz
		},
		error: function (response) {
		  console.log(response);
		  $('#modalFormAliquota1').modal('hide');
		  $('#modalanexo1').modal('show');
		},
		success: function (response) {
		  console.log(response);
		}
	  });

});