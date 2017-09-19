<!DOCTYPE html>
<html lang="es-CO">
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Plataforma BHW</title>
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">
	</head>
	<body class="login" onload="campos()">
		<div class="login_wrapper">
	    <div class="animate form login_form">
        <section class="login_content">
					{!! BootForm::open(['url' => url('/register'), 'method' => 'post']) !!}
					<h1>Crear Cuenta</h1>
	        {!! BootForm::radios('tipo_usuario', 'Tipo de usuario', [1=> 'Cliente', 2 =>'Proveedor'] , 1, true) !!}
	        <div id="tipo_cliente">
		        {!! BootForm::radios('tipo_cliente', 'Tipo de cliente', [1=> 'Personal', 2 =>'Empresarial'] , 2, true) !!}
	        </div>
	        {!! BootForm::text('name', 'Nombre', old('name'), ['placeholder' => 'Ingresa tu nombre']) !!}
					{!! BootForm::email('email', 'Correo electrónico', old('email'), ['placeholder' => 'Ingresa el correo electrónico']) !!}
					{!! BootForm::password('password', 'Contraseña', ['placeholder' => 'Ingresa la contraseña']) !!}
					{!! BootForm::password('password_confirmation', 'Confirmación de contraseña', ['placeholder' => 'Vuelve a ingresar la contraseña']) !!}
					{!! BootForm::submit('Crear cuenta', ['class' => 'btn btn-default']) !!}
	        <div class="clearfix"></div>
					<div class="separator">
						<p class="change_link">¿Ya tienes una cuenta?
							<a href="{{ url('/login') }}" class="to_register">¡Ingresa ahora!</a>
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
		<!-- Archivo JavaScrip BHW -->
		<script type="text/javascript" src="{{ asset("js/BHW.js") }}"></script>
		<!-- jQuery -->
		<script type="text/javascript" src="{{ asset("js/jquery.min.js") }}"></script>
	</body>
</html>