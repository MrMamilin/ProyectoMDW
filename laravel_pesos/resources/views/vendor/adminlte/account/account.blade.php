@extends('adminlte::layouts.app')




@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="box-body">
					<div class="container-fluid spark-screen" ng-controller="listusersController">
						<div class="row">
							<div class="col-md-12">
								<div class="box box-admin-border">
									<div class="box-header with-border">
										<i class="fa fa-bank"></i><h3 class="box-title"><b>Cuentas</b></h3>
									 	
									 	<a class="btn btn-primary " style="float: right;" href="/account/create"><i class="fa fa-plus"></i> Nuevo </a>
									</div>
									
									<div class="box-body responsive-table">

										<div id="lista_item_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
											<div class="row">
												<div class="col-sm-12">
													<table id="accounts" class="display" cellspacing="0" width="100%">
												        <thead>
												            <tr>
												                	<th>Id</th>
																	<th>Nombre</th>
																	<th>Numero de cuenta</th>
																	<th>Tipo</th>
																	<th>Acción</th>
												            </tr>
												        </thead>
												      
												        <tbody>
												        	 @foreach ($account as $accounts)
															    <tr>
															    	<td>{{ $accounts->id }}</td>
															    	<td>{{ $accounts->name }}</td>
															    	<td>{{ $accounts->number }}</td>
															    	<td>{{ $accounts->type }}</td>
															        <td>
																	
														            <form role="form" action = "/account/eliminar/{{ $accounts->id }}" method="post"  enctype="multipart/form-data">
														                {{method_field('DELETE')}}
														                {{ csrf_field() }}

														            <a class="btn btn-sm btn-default"  href="/account/detalle/{{ $accounts->id }}"><i class="fa fa fa-eye"></i></a>     
														            <a class="btn btn-sm btn-default" href="/account/edit/{{ $accounts->id }}"><i class="fa fa-edit"></i></a>
														            <button onclick='if(confirmDel() == false){return false;}' class="btn btn-sm btn-default" type="submit"><i class="fa fa-trash"></i></button></a>
														          </form>

															        </td>
															    </tr>
															    @endforeach
												        </tbody>     
													</table>
												</div>
											</div>
										</div>
										<!-- /.box-body -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border text-center"> <!-- Añadido "text-center" para centrar -->
                <h4 class="box-title"><strong>Servicio ver cuentas ya creadas <br></strong></h4><br> <!-- Añadido "strong" para negritas -->
<p class="box-subtitle"><br>

Nuestro servicio te brinda la comodidad de visualizar de manera rápida y 
eficiente todas las cuentas que has creado. Con la función "Ver Cuentas Ya Creadas", 
tendrás acceso inmediato a un resumen detallado de tus cuentas registradas. 
Esta característica te permite mantener un seguimiento preciso de tu situación 
financiera, proporcionándote una visión clara y organizada de tus activos y 
transacciones. Con nuestra plataforma, la gestión de cuentas se vuelve transparente y
 accesible, permitiéndote tomar decisiones informadas sobre tus finanzas, ademas tiene opcion de poder editar o borrar las cuentas con un simple click.
</p>
<br>


                </div>
            </div>
        </div>
    </div>
</div>							




@endsection
