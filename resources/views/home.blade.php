@extends('base')

@section('titulo')
	Home
@endsection

@section('main')
<div class="row">
	<h1 class="font-weight-bold mb-4" style="color:#163d4d;">¡Bienvenido!</h1>

	<div class="p-5 border border-left-0 border-right-0">
		<span>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Dignissimos, eveniet distinctio voluptas ea reiciendis, excepturi velit a sit rem dicta dolorum eos totam esse unde ducimus. Ipsum maxime perspiciatis eius.</span>
		
	</div>
	<div class="col-md-12 text-center h-100 mt-5">
		<a href="{{route('encuesta')}}" class="btn text-white" style="background-color: #82B840;"><i class="fas fa-poll-h"></i>&nbsp;&nbsp;Realizar Diagnóstico</a>		
	</div>	
</div>
@endsection

@section('footer')
<!-- <div class="container">
            <div class="row">
                <div class="col-md-12 pt-2 pb-2">
                    <div class="flex-center text-center">
                        <a class="fb-ic text-info" title="Perfil de Facebook de Escuela de Ingeniería Industrial de la Universidad de El Salvador" href="https://www.facebook.com/EscuelaDeIngenieriaIndustrialFIAUES">
                            <i class="fab fa-facebook-f fa-lg mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <a class="tw-ic text-info" title="Perfil de Twitter de Universidad de El Salvador" href="https://twitter.com/UESoficial">
                            <i class="fab fa-twitter fa-lg mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <a class="ins-ic text-info" title="Perfil de Instagram de Universidad de El Salvador" href="https://www.instagram.com/uesoficial/">
                            <i class="fab fa-instagram fa-lg fa-2x"> </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright text-info text-center py-3">
            <a class="text-info" href="http://www.fia.ues.edu.sv/industrial/index.html"> UES/EII</a> - 2020 &copy;
        </div> -->
@endsection