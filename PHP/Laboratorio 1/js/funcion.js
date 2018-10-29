$(document).ready(function(){
$('#piedra, #papel, #tijera').click(function(){

		var eleccion = $(this).attr("id");
		$('#eleccion').html(eleccion);

		var maq = Math.floor(Math,random()*3);

		if(maq == 0)
		{
			maq="piedra";
		}
		else if (maq == 1)
		{
			maq="papel";
		}
		else if (maq ==2)
			{
			maq="tijera";
		}

		$('#maq_eleccion').html(maq);
	})
})