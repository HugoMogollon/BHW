<!DOCTYPE html>
<html lang="es-CO">
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesión - Plataforma BHW</title>
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">
	</head>
	<body class="login">
		<div>
      <div class="login_wrapper">
        <div class="animate form login_form">
	        <section class="login_content">
						{!! BootForm::open(['url' => url('/login'), 'method' => 'post']) !!}
						<h1>Ingresar a BHW</h1>
						{!! BootForm::email('email', 'Correo electrónico', old('email'), ['placeholder' => 'Ingresa tu correo electrónico', 'afterInput' => '<span>test</span>'] ) !!}
						{!! BootForm::password('password', 'Contraseña', ['placeholder' => 'Ingresa tu contraseña']) !!}
		        <div>
							{!! BootForm::submit('Ingresar', ['class' => 'btn btn-default submit']) !!}
							<a class="reset_pass" href="{{  url('/password/reset') }}">¿Perdiste tu contraseña?</a>
						</div>
						<div class="clearfix"></div>
    	  		<div class="separator">
							<p class="change_link">¿No tienes una cuenta?
								<a href="{{ url('/register') }}" class="to_register">¡Crea una cuenta ahora!</a>
							</p>
	            <div class="clearfix"></div>
							<br/>
	            <div>
								<h1>Brain Healt and Work SAS</h1>
		            <p>
			            ©2017 Todos los derechos reservados.
			            <br/>
			            BHW plataforma para el teletrabajo.
		            </p>
		            <p>
			            Desarrollado por
			            <a href="http://www.CGH.com.co">
				            <b>C.G.H. Ingeniería</b>
			            </a>
			            .
		            </p>
		            <p>
			            Basado en el Template para Bootstrap y Laravel
			            <br/>
			            <i class="fa fa-paw"></i>
			            Gentelella Alela!
			            <i class="fa fa-paw"></i>
		            </p>
	            </div>
						</div>
						{!! BootForm::close() !!}
	        </section>
        </div>
      </div>
		</div>
	</body>
</html>