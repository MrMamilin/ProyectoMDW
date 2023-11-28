@extends('adminlte::layouts.auth') <!-- Extiende el diseño de autenticación de AdminLTE -->

@section('htmlheader_title')
    Register <!-- Define el título de la página -->
@endsection

@section('content') <!-- Inicio de la sección de contenido -->

<body class="hold-transition register-page"> <!-- Configura el cuerpo de la página para la página de registro -->
    <div id="app" v-cloak> <!-- Inicia la aplicación Vue.js y utiliza v-cloak para evitar la visualización del marcador de Vue antes de la compilación -->

        <div class="register-box"> <!-- Inicia la caja de registro -->

            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Admin</b>LTE</a>
                <!-- Logo y enlace para regresar a la página principal -->
            </div>

            @if (count($errors) > 0)
                <!-- Verifica si hay errores y muestra un mensaje de alerta si es necesario -->
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <!-- Mensaje de error y lista de errores -->
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            <!-- Muestra cada error de la lista -->
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="register-box-body">
                <!-- Cuerpo de la caja de registro -->
                <p class="login-box-msg">{{ trans('adminlte_lang::message.registermember') }}</p>
                <!-- Mensaje de bienvenida -->

                <form action="{{ url('/register') }}" method="post">
                    <!-- Formulario de registro -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- Token CSRF para protección contra ataques CSRF -->

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}" autofocus/>
                        <!-- Campo de nombre con retroalimentación -->
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        <!-- Icono de usuario para retroalimentación -->
                    </div>

                    @if (config('auth.providers.users.field','email') === 'username')
                        <!-- Verifica si el campo de usuario es el nombre de usuario -->
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.username') }}" name="username" autofocus/>
                            <!-- Campo de nombre de usuario con retroalimentación -->
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            <!-- Icono de usuario para retroalimentación -->
                        </div>
                    @endif

                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
                        <!-- Campo de correo electrónico con retroalimentación -->
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <!-- Icono de sobre para retroalimentación -->
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                        <!-- Campo de contraseña con retroalimentación -->
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <!-- Icono de candado para retroalimentación -->
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/>
                        <!-- Campo de confirmación de contraseña con retroalimentación -->
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        <!-- Icono de flecha derecha para retroalimentación -->
                    </div>

                    <div class="row">
                        <!-- Fila para disposición de elementos en línea -->
                        <div class="col-xs-1">
                            <!-- Columna pequeña para el checkbox -->
                   
                        </div><!-- /.col -->

          
                        <div class="col-xs-4 col-xs-push-1">
                            <!-- Columna para el botón de registro -->
                            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.register') }}</button>
                            <!-- Botón de registro -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </form>

                @include('adminlte::auth.partials.social_login')
                <!-- Incluye la sección de inicio de sesión social -->

                <a href="{{ url('/login') }}" class="text-center">{{ trans('adminlte_lang::message.membreship') }}</a>
                <!-- Enlace para dirigirse a la página de inicio de sesión -->
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')
    <!-- Incluye los scripts necesarios para la autenticación -->


    <script>
        $(function () {
            // Configuración de iCheck para estilizar los elementos de entrada
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // Área de aumento opcional
            });
        });
    </script>

    </body>

@endsection <!-- Fin de la sección de contenido -->
