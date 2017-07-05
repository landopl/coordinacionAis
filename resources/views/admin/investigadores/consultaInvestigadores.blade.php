@extends('admin.plantilla.layout')

@section('content')
	<body class="hold-transition skin-blue sidebar-mini">
		<section class="content">
			<div class="row">
        		<div class="col-xs-12">
          			<div class="box">
            			<div class="box-header">
              				<h3 class="box-title">Listado de Investigadores</h3>
            			</div>
            			<!-- /.box-header -->
            			<div class="box-body table-responsive no-padding">
              				<table class="table table-hover">
               					 <tr>
                  					<th>Nombre</th>
                  					<th>Apellido</th>
                            <th>Cedula</th>
                            <th>Sexo</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Linea de investigacion</th>
                            <th>Tipo de investigador</th>
                            <th>Fecha de registro</th>
                				</tr>
                        @foreach($investigadores as $investigador)
                          <tr>
                            <td>{{ $investigador->nombre }}</td>
                            <td>{{ $investigador->apellido }}</td>
                            <td>{{ $investigador->cedula }}</td>
                            <td>{{ $investigador->sexo }}</td>
                            <td>{{ $investigador->correo }}</td>
                            <td>{{ $investigador->telefono }}</td>


                            @foreach($lineas_investigadores as $linea_investigador)
                            @foreach($lineas as $linea)
                              @if($linea['id'] == $linea_investigador['linea_investigacion_id'])
                              @if($investigador['id'] == $linea_investigador['investigador_id'])
                                <td>{{ $linea->denominacion }}</td>
                              @endif
                              @endif
                            @endforeach
                            @endforeach

                            @if(empty($linea)== true)
                                  <td align="center">{{ "-------" }}</td>
                                @endif

                            @foreach($tipos_investigadores as $tipo_investigador)
                              @if($investigador['tipo_id'] == $tipo_investigador['tipo_id'])
                                <td>{{ $tipo_investigador->tipo_investigador }}</td>
                              @endif
                            @endforeach
                            
                           
                            <td>{{ $investigador->fecha_registro_investigador }}</td>

                             <td><a href="{{ route('investigadores.edit', $investigador->id) }}" class="btn btn-default btn-flat">Editar</a></td>

                            <td><a href="{{ route('admin.investigadores.destroy', $investigador->id) }}" onclick="return confirm('¿Esta seguro que desea eliminar el investigador?')" class="btn btn-default btn-flat">Eliminar</a></td>
                          </tr>
                        @endforeach
				            </table>
                    {!! $investigadores->render() !!}
            			</div>
            		<!-- /.box-body -->
          			</div>
          		<!-- /.box -->
       			 </div>
      		</div>
		</section>
	</body>
@stop