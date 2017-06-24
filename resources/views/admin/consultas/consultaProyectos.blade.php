@extends('admin.plantilla.layout')

@section('content')
	<body class="hold-transition skin-blue sidebar-mini">
		<section class="content">
			<div class="row">
        		<div class="col-xs-12">
          			<div class="box">
            			<div class="box-header">
              				<h3 class="box-title">Listado de Proyectos</h3>
            			</div>
            			<!-- /.box-header -->
            			<div class="box-body table-responsive no-padding">
              				<table class="table table-hover">
               					 <tr>
                  					<th>Titulo</th>
                            <th>Resumen</th>
                            <th>Objetivos</th>
                            <th>Justificacion</th>
                  					<th>Linea de investigacion</th>
                            <th>Tipo de proyecto</th>
                            <th>Fecha de registro</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de culminacion</th>
                            <th>Estatus</th>
                				</tr>
				                  <td>Desarrollo de un sistema para la coordinacion de investigacion</td>
                           <td>Se desarrollara para la coordinacion de investigacion del area de ingenieria en sistemas de la universidad Romulo Gallegos</td>
                          <td>Automatizar la informacion</td>
                          <td>Desarrollo de proyecto para la mejora del manejo de la informacion dentro de la coordinacion de investigacion</td>
				                  <td>software libre</td>
                          <td>Innovacion</td>
                          <td>19-06-2017</td>
                          <td>21-06-2017</td>
                          <td>30-06-2017</td>
				                  <td><span class="label label-success">En desarrollo</span></td>
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