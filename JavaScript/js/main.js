
window.addEventListener('load',function(){

	var fnn=document.querySelector("#form");
	fnn.addEventListener("submit",function(){

		var nombre=document.querySelector("#nom");
		var docum=parseInt(document.querySelector("#doc"));
		var telefono=document.querySelector("#tel");
		var direccion=document.querySelector("#dir");
		var edad=document.querySelector("#eda"); 	

		if (nombre.trim()==null || nombre.trim().lenght==0){

			nombre.style.border="red";
			alert("Digite un valor"); 
		}

	});	


});