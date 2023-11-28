@extends('adminlte::layouts.auth') <!-- Extiende el diseño de autenticación de AdminLTE -->

@section('htmlheader_title')
    Register <!-- Define el título de la página -->
@endsection

@section('content') <!-- Inicio de la sección de contenido -->

<body class="hold-transition register-page" style="background-image: url(img/fondo.jpg); background-size: cover;">
    <!-- Configura el cuerpo de la página con una imagen de fondo y un tamaño de cobertura -->
    <div id="app" v-cloak>
        <!-- Inicia la aplicación Vue.js y utiliza v-cloak para evitar la visualización del marcador de Vue antes de la compilación -->

        <div class="register-box">
            <!-- Inicia la caja de registro -->

            <div class="register-logo">
                <a href="{{ url('/home') }}"><b style="color: white">Despacho Contable</b></a>
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
                <p class="login-box-msg">Registrar Nuevo usuario</p>
                <!-- Mensaje de bienvenida -->

                <register-form>
                    
                </register-form>
                <!-- Componente Vue.js para el formulario de registro -->

                @include('adminlte::auth.partials.social_login')
                <!-- Incluye la sección de inicio de sesión social -->

                <a href="{{ url('/login') }}" class="text-center">¿Ya tienes cuenta?</a>
                <!-- Enlace para dirigirse a la página de inicio de sesión -->
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')
    <!-- Incluye los scripts necesarios para la autenticación -->


</body>
@endsection <!-- Fin de la sección de contenido -->
