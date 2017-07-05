@extends('admin.plantilla.layout')

@section('content')

	<body class="hold-transition skin-blue sidebar-mini">
		<section class="content">
			<div class="row">
        		<div class="col-xs-12">
          			<div class="box">
            			<div class="box-header">
              				<h3 class="box-title">Lineas de investigacion</h3>
            			</div>
            			<!-- /.box-header -->
            			<div class="box-body table-responsive no-padding">
              			<table class="table table-hover">
               					<tr>
                  				<th>Denominacion</th>
                  				<th>Fecha de aprobacion</th>
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