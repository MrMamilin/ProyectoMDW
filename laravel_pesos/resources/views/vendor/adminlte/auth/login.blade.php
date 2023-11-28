<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
</head>
<style>
    body {
        background-image: url('{{ asset('assets/fondo.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .login-box {
        border-radius: 10px; /* Bordes redondos */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra */
    }

    /* Otros estilos que quieras agregar */
</style>

<body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="container-fluid vh-100">
            <div class="row vh-100 justify-content-center align-items-center">
                <div class="col-md-4">
                    <!-- Cuadro de inicio de sesión -->
                    <div class="login-box" style="background: #CBE2F4;">
                        <div class="login-logo text-center mb-4">
                            <a href="{{ url('/home') }}"><img src="/img/logo2.png" style="width: 185px;" alt="logo"></a>
                            <h4 class="mt-1 mb-5 pb-1">Despacho Contable</h4>
                        </div>

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>¡Ups!</strong> <b>Contraseña o Correo incorrecto</b><br><br>
                        </div>
                        @endif

                        <div class="login-box-body">
                            <p class="login-box-msg"><b>Escribe tu correo para iniciar sesión</b></p>
                            <form action="{{ url('/login') }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input name="email" class="form-control mb-3" placeholder="Correo" />
                                <div class="form-group has-feedback mb-3">
                                    <input type="password" class="form-control" placeholder="Contraseña" name="password" />
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-8">
                                        <div class="checkbox icheck">
                                            <label>
                                                <input style="display:none;" type="checkbox" name="remember">
                                                <b>Recuérdame</b>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat"><b>Ingresar</b></button>
                                    </div>
                                </div>
                            </form>

                            @include('adminlte::auth.partials.social_login')

                            <a href="{{ url('/password/reset') }}"><b>Olvidé mi Contraseña</b></a><br>
                            <a href="{{ url('/register') }}" class="text-center"><b>Regístrate</b></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Nuevo cuadro a la derecha -->
                    <div class="login-box" style="background: #CBE2F4;">
                        <div class="login-logo text-center mb-4">
                        <div class="text-center">
    <h4 class="mb-4">Nuestros Servicios</h4>
    <p class="mb-0" style="font-size: 18px; line-height: 1.6;">
        En nuestro despacho contable, nos especializamos en ofrecer servicios integrales de contabilidad.
        Estamos comprometidos con la excelencia en la gestión financiera de tu empresa, brindando asesoría
        y soluciones adaptadas a tus necesidades. Algunos de nuestros servicios incluyen:
    </p>
    <ul style="font-size: 18px; line-height: 1.6; list-style-type: none; padding-left: 0;">
        <li>• Contabilidad general y fiscal</li>
        <li>• Asesoría personalizada para clientes frecuentes</li>
        <li>• Agenda flexible para visitas personalizadas a nuestros clientes</li>
    </ul>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('adminlte::layouts.partials.scripts_auth')

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
            crossorigin="anonymous"></script>
    </body>

</html>
