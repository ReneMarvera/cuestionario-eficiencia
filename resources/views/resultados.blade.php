@extends('base')

@section('titulo')
	Encuesta
@endsection

@section('main')
<div class="">
	<div class="row">
		<h3 class="col-md-8" style="color: #82B840;"><span class="font-weight-bold"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;Resultados de la empresa {{$empresa->nombre}}</span></h3>
		<div class="col-md-4 text-right">
			<a href="javascript:history.back()" class="btn btn-outline-info"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp;Regresar al cuestionario</a>
		</div>
	</div>
	<div class="border p-4 border-right-0 border-left-0 my-4">
		<div class="row">
			<div class="col-md-12">
				<span class="font-weight-bold" style="color: #82B840;">Resultados:&nbsp;</span>
				<span>A continuación se muestran los resultados obtenidos al procesar la información ingresada en el cuestionario. La evaluación se hace para cada uno de los aspectos energéticos y dependiendo de los datos ingresados, el sistema detecta si su empresa cumple o no con los requisitos de la Norma ISO 50001. En caso de no cumplir por lo menos con el cincuenta por ciento con lo establecido por esta, el sistema le hará recomendación para que su empresa adopte un Sistema de Gestión de la Energía eficiente.</span>
			</div>
		</div>
	</div>
	<div class="">
		<h4 class="font-weight-bold" style="color: #82B840;"><i class="fas fa-lightbulb"></i>&nbsp;&nbsp;Aspectos energéticos</h4>
		@foreach($apartados as $apartado)
			<div class="mt-4">
				<div class="row mb-3">
					<div class="col-md-12">
						@if($mensajes[$apartado->id]==1)
							<h5 class="font-weight-bold"><i class="fas fa-check-circle lead text-success"></i><span class="">&nbsp;&nbsp;{{$apartado->nombre}}</span>&nbsp;&nbsp;</h5>
						@else
							<h5 class="font-weight-bold"><i class="fas fa-exclamation-triangle lead text-danger"></i><span class="">&nbsp;&nbsp;{{$apartado->nombre}}</span></h5>
						@endif
						
					</div>
				</div>
				<div class="px-3">
					@if($mensajes[$apartado->id]!=1)
						<span class="mensaje">{!! $apartado->mensaje->contenido !!}</span>
					@else
						<span>Según lo ingresado en el cuestionario, su empresa cumple con la Norma ISO 50001 en este aspecto.</span>
					@endif
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{asset('js/mensajes.js')}}"></script>
@endsection