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
                				<tr>
				                  <td>Orlando</td>
				                  <td>Peña</td>
                          <td>24.282.254</td>
                          <td>Masculino</td>
                          <td>orlando_pl_95@hotmail.com</td>
                          <td>04241831303</td>
                          <td>software Libre</td>
                          <td>Estudiante</td>
                          <td>21-06-2017</td>
				                </tr>
				            </table>
            			</div>
            		<!-- /.box-body -->
          			</div>
          		<!-- /.box -->
       			 </div>
      		</div>
		</section>
	</body>
@stop