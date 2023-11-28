@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container-fluid spark-screen">
    <!-- Presentación del Software de Despacho Contable -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border text-center"> <!-- Añadido "text-center" para centrar -->
                <h4 class="box-title"><strong>Bienvenido al Software de Despacho Contable</strong></h4> <!-- Añadido "strong" para negritas -->
<p class="box-subtitle">
    Optimiza la gestión de tus recursos financieros con nuestra plataforma de despacho contable.
    Gestiona tus finanzas de manera eficiente y fácil, <br>permitiéndote tomar el control total
    de tus transacciones, abonos, retiros y análisis detallados para una toma de decisiones más informada.
</p>
<br>
<p>
    Aquí podrás realizar las siguientes acciones:
</p>
<ul>
    <li>Abonos y Movimientos</li>
    <li>Gráficos Dinámicos</li>
    <li>Saldo Disponible</li>
    <li>Detalles de Movimientos</li>
</ul>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid spark-screen">
    
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border text-center"> <!-- Añadido "text-center" para centrar -->
                <h4 class="box-title"><strong>Servicio de Grafica, Saldo Disponible y Detalles de movimiento <br></strong></h4><br> <!-- Añadido "strong" para negritas -->
<p class="box-subtitle"><br>
Explora la eficiencia de nuestro servicio integral de finanzas, que abarca gráficos intuitivos,
seguimiento en tiempo real del saldo disponible y detalles exhaustivos de cada 
movimiento financiero. Con herramientas de representación gráfica potentes, 
nuestra plataforma te permite visualizar la evolución de tus finanzas y tomar decisiones informadas. Transparentes y accesibles, ofrecemos un servicio en tiempo real que proporciona una visión instantánea de tus recursos financieros, facilitando decisiones informadas sobre gastos, inversiones y ahorros. Además, brindamos un desglose minucioso de cada transacción para un control total sobre tus actividades financieras. 
</p>
<br>


                </div>
            </div>
        </div>
    </div>
</div>
	<div class="container-fluid spark-screen">
		<div class="row">
		
		
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Abonos</span>
              </br>
              <a href="/summary/create?type=add">Añadir Movimiento</a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow "><i class="fa fa-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Movimiento de Retiro</span>
              </br>
             <a href="/summary/create?type=out">Añadir Movimiento</a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
    
      </div>
		<div class="row">
			<div class="col-md-12 ">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<i class="fa fa-bar-chart"></i><h3 class="box-title">Grafica de movimientos</h3>
					</div>
					<div class="col-sm-12 add_top_10">
						<form id="form_filter">
							<div class="form-group col-sm-5">
								<input type="date" name="start" id="start" class="form-control">
							</div>
							<div class="form-group col-sm-5">
								<input type="date" name="finish" id="finish" class="form-control">
							</div>
							<div class="form-group col-sm-2">
								<a href="javascript:void(0)" id="filter_btn" class="btn btn-sm btn-default form-control"><i class="fa fa-filter"></i> Filtrar</a>
							</div>
						</form>
						
					</div>
					<div class="box-body">
						<canvas id="myChart" class="col-sm-12"></canvas>
						<center><label>Abonos&nbsp; </label><label class="entrada" >&nbsp;&nbsp;&nbsp;&nbsp; </label> &nbsp;&nbsp;  <label>Retiros &nbsp;</label><label class="salida" > &nbsp;&nbsp;&nbsp;&nbsp;</label></center>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-6">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<i class="fa fa-credit-card"></i> <h3 class="box-title">Saldo Disponible</h3>

						
					</div>
					<div class="box-body responsive-table">
						<table  class="table table-striped">
														<thead>
															<tr>
																
																<th>Nombre</th>
																<th>tipo </th>
																<th>Numero</th>
																
																<th>Saldo</th>
															
															</tr>
														</thead>
														<tbody>
    @foreach ($summary as $summarys)
    <tr>
        <td>{{ $summarys->name }}</td>
        <td>{{ $summarys->type}}</td>
        <td>{{ $summarys->number }}</td>
        <td><n class="n">{{ 'MXN ' . number_format($summarys->total , 2, ',', '.') }}</n></td>
    </tr>  
    @endforeach
</tbody>

													</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<i class="fa fa-code-fork"></i><h3 class="box-title">Movimientos</h3>

						
					</div>
					<div class="box-body responsive-table">
						<table  class="table table-striped">
														<thead>
															<tr>
																
																<th>Tipo</th>
																<th>Monto</th>
																<th>Impuesto</th>
																<th>Cuenta</th>
																<th>Categorias</th>
																
															</tr>
														</thead>
														<tbody>
    @foreach ($account as $accounts)
    <tr>
        @if($accounts->type=="add")
            <td>Ingreso</td>
        @else
            <td>Salida</td>
        @endif
        <td>{{ 'MXN ' . number_format($accounts->amount, 2, ',', '.') }}</td>
        <td>{{ $accounts->tax }}</td>
        <td>{{ $accounts->name_account }}</td>
        <td>{{ $accounts->name_categories }}</td>
        <td>
        </td>
    </tr>  
    @endforeach
</tbody>

													</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
	
	

@endsection
