@extends('adminlte::layouts.app')
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="box-body">
					<div class="container-fluid spark-screen">
						<div class="row">
							<div class="col-md-12">
								<div class="box box-admin-border">
									<div class="box-header with-border">
										<i class="fa fa-credit-card"></i><h3 class="box-title"><b>Lista de Usuarios</b></h3>
									</div>
									<div class="box-body responsive-table">
										<div id="lista_item_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
											<div class="row">
												<div class="col-sm-12">
													<table id="users" class="display" cellspacing="0" width="100%">
							                            <thead>
							                                <tr>							                          
																<th>ID</th>
																<th>Nombre</th>
																<th>Correo</th>
																<th>Status</th>
																<th>Acción</th>
							                                </tr>
							                            </thead>
							                            <tbody>
															    @foreach ($user as $users)
															    <tr>
															    	<td>{{ $users->id }}</td>
															    	<td>{{ $users->name }}</td>
															    	<td>{{ $users->email }}</td>
															    	<td>
																		<!-- Verifica si es superusuario (ADMIN) -->
																	@if($users->level!=1)
															    	<div class="btn-group">
														                  <button type="button" class="btn btn-default">
														                  @if($users->status==1)
																			Activo  &nbsp;&nbsp;
														                  @else
																			Inactivo
														                  @endif
														                  
														                  </button>
														                  @if($log==1)
														                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															                    <span class="caret"></span>
															                    <span class="sr-only"></span>
														                  </button>
														                  @endif

															                  <ul class="dropdown-menu" role="menu">
															                   @if($users->status==1)
																					<li><a href="/users/desactivar/{{$users->id}}">Desactivar</a></li>
															                   @else
																					<li><a href="/users/activar/{{$users->id}}">Activar</a></li>
															                   @endif
																                   
																                    
															                  </ul>
														                </div>
														            @else
														            <label>Superusuario</label>
														            @endif
													                 </td>
													                 <td>
													                 @if($log==1)
														                 @if($users->level!=1)
														                 <form role="form" action = "/users/eliminar/{{ $users->id }}" method="post"  enctype="multipart/form-data">
								                                          			{{method_field('DELETE')}}
								                                          			{{ csrf_field() }}

								                                          		<a class="btn btn-sm btn-default"  href="/permisos/ver/{{ $users->id }}"><i class=" fa fa-cog"></i></a> 
								                                          			<button  onclick='if(confirmDel() == false){return false;}' class="btn btn-sm btn-default" type="submit"><i class="fa fa-trash"></i></button>
								                                          </form>
								                                          @endif
							                                          @else
							                                          --
							                                          @endif
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
                <h4 class="box-title"><strong>Servicio ver Lista de Usuarios <br></strong></h4><br> <!-- Añadido "strong" para negritas -->
<p class="box-subtitle"><br>

Nuestro servicio ofrece la capacidad de acceder fácilmente a una "Lista de Usuarios" donde puedes explorar y gestionar la información de los usuarios registrados. Utiliza la función de búsqueda para encontrar usuarios específicos. La lista proporciona detalles clave como ID, Nombre, Correo, Estado y Acciones disponibles. Esto te permite realizar un seguimiento eficiente de los usuarios en tu plataforma, facilitando la administración y el mantenimiento de la información de la cuenta. Con nuestra herramienta, la gestión de usuarios se vuelve clara y accesible.
</p>
<br>


                </div>
            </div>
        </div>
    </div>
</div>							

@endsection
