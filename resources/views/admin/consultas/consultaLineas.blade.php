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
                				<tr>
				                  <td>Software libre</td>
				                  <td>11-5-2017</td>
				                  <td><span class="label label-success">Aprobado</span></td>
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