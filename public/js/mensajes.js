$(document).ready(function(){
	$('#info-div').hide();

	$('#cuestionario-form').on('submit', function(event){
		
		event.preventDefault();

		var flag = true;

		for (var i = 0; i < 40; i++) {
			if($('input[name=respuesta'+(i+1)+']:checked', '#cuestionario-form').val()==null){
				$('.respuesta-'+(i+1)).css({'color':'red','font-weight':'bold'});
				flag = false;
			}else{
				$('.respuesta-'+(i+1)).css({'color':'black'});
			}
		}

		if($('#empresa-nombre').val()==''){
			$('#nombre-lbl').css({'color':'red','font-weight':'bold'});
			flag = false;
		}else{
			$('#nombre-lbl').css({'color':'black'});
		}

		if(flag){
			$('#info-div').hide();
			event.currentTarget.submit();
		}else{
			$('#info-div').show();
		}

	})

});