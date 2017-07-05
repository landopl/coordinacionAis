@extends('admin.plantilla.layout')

@section('content')

	<body class="hold-transition skin-blue sidebar-mini">
		<section class="content">
			<div class="row">
        		<div class="col-xs-12">
          			<div class="box">
            			<div class="box-header">
              				<h3 class="box-title">Coordinadores</h3>
            			</div>
            			<!-- /.box-header -->
            			<div class="box-body table-responsive no-padding">
              			<table class="table table-hover">
               					<tr>
                          <th>Linea de investigacion</th>
                  				<th>nombre</th>
                  				<th>Nombre</th>
                          <th>Apellido</th>
                          <th>Cedula</th>
                          <th>Sexo</th>
                          <th>Correo</th>
                          <th>Telefono</th>
                          <th>Tipo de investigador</th>
                          <th>Fecha de registro</th>
                				</tr>
				                @foreach($lineas as $linea)
                          <tr>  
                            <td>{{ $linea->denominacion }}</td>
                            <td>{{ $linea->fecha_aprobacion_linea }}</td>
                            
                            <td><a href="{{ route('lineas.edit', $linea->id) }}" class="btn btn-default btn-flat">Editar</a></td>

                            <td><a href="{{ route('admin.lineas.destroy', $linea->id) }}" onclick="return confirm('¿Esta seguro que desea eliminar el investigador?')" class="btn btn-default btn-flat">Eliminar</a></td>
                          </tr>
                        @endforeach
				            </table>
                    {!! $lineas->render() !!}
            			</div>
            		<!-- /.box-body -->
          			</div>
          		<!-- /.box -->
       			 </div>
      		</div>
		</section>
	</body>
@stop