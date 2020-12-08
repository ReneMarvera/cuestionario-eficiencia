@extends('base')

@section('titulo')
	Encuesta
@endsection

@section('main')
<div class="">
	<h3 class="" style="color: #82B840;"><span class="font-weight-bold"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;Cuestionario</span>: {{$cuestionario->nombre}}</h3>
	<div class="border p-4 border-right-0 border-left-0 my-4">
		<div class="row">
			<div class="col-md-12">
				<span class="font-weight-bold" style="color: #82B840;">Objetivo de Cuestionario:&nbsp;&nbsp;</span>
				<span>Elaborar un diagnóstico a través de la información recolectada mediante la solución de un cuestionario para conocer la situación actual de una Industria manufacturera salvadoreña con respecto a su gestión energética, que permita el diseño de una metodología de implantación bajo el enfoque de la Norma ISO 50001 específica de acuerdo a sus necesidades.</span>			
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-12">
				<span class="font-weight-bold" style="color: #82B840;">Indicaciones:&nbsp;&nbsp;</span>
				<span>EL cuestionario se encuentra divido en diversas secciones, la primera es una recolección de datos sobre su empresa y las siguientes están dirigidas a aspectos enérgeticos, haciendo un total de cuarenta preguntas de este tipo. Responda cada uno de los items y al final de la encuesta se le brindará un resultado sobre el estado de su empresa respecto a los elementos sobre los cuales se fundamenta la norma ISO 50001.</span>
			</div>
		</div>
	</div>
	<div class="cuestionario-form">
		<form id="cuestionario-form" action="{{ route('generarResultados')}}" method="POST">
			<fieldset>
				<legend class="font-weight-bold" style="color: #82B840;"><i class="fas fa-industry"></i>&nbsp;&nbsp;Datos sobre empresa</legend>
				<div class="form-group row mt-2">
					<label id="nombre-lbl" for="empresa-nombre" class="col-sm-2 col-form-label font-weight-bold">Nombre de la Empresa:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="empresa-nombre" name="empresaNombre">
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend class="font-weight-bold" style="color: #82B840;"><i class="fas fa-lightbulb"></i>&nbsp;&nbsp;Aspectos energéticos</legend>
				@foreach($apartados as $apartado)
					<div class="mt-4">
						<div class="row mb-3">
							<div class="col-md-12">
								<h5 class="font-weight-bold"><i class="fas fa-plug"></i>&nbsp;&nbsp;{{$apartado->nombre}}</h5>
							</div>						
						</div>
						<div class="px-3">
							@foreach($apartado->preguntas as $pregunta)
								<div class="row">
									<div class="col-md-12">
										<span class="font-weight-bold">{{$loop->iteration}}.&nbsp;&nbsp;</span>
										<span>{{$pregunta->pregunta}}</span>
									</div>
								</div>
								<div class="form-group ml-4 mt-2">
									<div class="custom-control custom-radio">
										<input type="radio" id="si-{{$pregunta->id}}" name="respuesta{{$pregunta->id}}" class="custom-control-input respuesta-grupo" value="1">
										<label class="custom-control-label respuesta-{{$pregunta->id}}" for="si-{{$pregunta->id}}">Si</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="no-{{$pregunta->id}}" name="respuesta{{$pregunta->id}}" class="custom-control-input respuesta-grupo" value="0">
										<label class="custom-control-label respuesta-{{$pregunta->id}}" for="no-{{$pregunta->id}}">No</label>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				@endforeach
			</fieldset>
			<div id="info-div" class="row mt-4">
				<div class="col-md-12 d-flex justify-content-center">
					<div class="alert alert-dismissible alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Errores!&nbsp;</strong><span>Se han encontrado campos sin llenar</span><br>
						<span>Por favor, revisa los valores en rojo y llena el cuestionario.</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 d-flex justify-content-center">
					{{ csrf_field() }}
					<button id="cuestionario-submit-btn" type="submit" class="btn btn-outline-info"><i class="fas fa-file-alt"></i>&nbsp;&nbsp;Enviar todo y ver resultados</button>
				</div>
			</div>
			
		</form>
	</div>
	
</div>

@endsection

@section('scripts')
	<script type="text/javascript" src="{{asset('js/mensajes.js')}}"></script>
@endsection