<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administración | Login</title>

    {!! HTML::style('static/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}

    {!! HTML::style('static/bower_components/font-awesome/css/font-awesome.min.css') !!}

    {!! HTML::style('static/admin/css/animate.css') !!}
    {!! HTML::style('static/admin/css/style.css') !!}

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">
                    <img src="{{asset('static/images/logo.png')}}" alt="{{ config('app.name')}}">
                </h1>

            </div>
            <h3>Panel administrativo</h3>
            <p>
                Iniciar sesión
            </p>
            {!! Form::open(['url'=>'login', 'method'=>'post', 'id'=>'admin-login-form', 'class'=>'m-t', 'role'=>'form']) !!}
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    {!! Form::email('email',old('email'),
                    [
                        'class'=>'form-control',
                        'required'=>'true',
                        'data-required-error'=>'El campo no puede estar vacío.',
                        'data-error'=>'El correo electrónico no tiene el formato correcto.',
                        'autocomplete'=>'off',
                        'id'=>'email',
                        'placeholder' => 'E-mail'
                    ]) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password',
                    [
                        'class'=>'form-control',
                        'required'=>'true',
                        'data-required-error'=>'El campo no puede estar vacío.',
                        'autocomplete'=>'off',
                        'id'=>'password',
                        'placeholder' => 'Contraseña'
                    ]) !!}
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Iniciar sesión</button>

                <a href="#"><small>¿Olvidaste la contraseña?</small></a>
            {!! Form::close() !!}
            <p class="m-t"> <small>&copy; {{date('Y')}}</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->

    {!! HTML::script('static/bower_components/jquery/dist/jquery.min.js') !!}
    {!! HTML::script('static/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}

</body>

</html>
