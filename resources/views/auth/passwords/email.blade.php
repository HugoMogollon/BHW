<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar contraseña - Plataforma BHW</title>
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">
	</head>
	<body class="login">
		<div>
	    <a class="hiddenanchor" id="signup"></a>
	    <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
						{!! BootForm::open(['url' => url('/password/email'), 'method' => 'post']) !!}
						<h1>Restablecer contraseña</h1>
						{!! BootForm::email('email', 'Correo electrónico', old('email'), ['placeholder' => 'Ingrese el correo electrónico']) !!}
						{!! BootForm::submit('Recuperar contraseña', ['class' => 'btn btn-default col-md-9']) !!}
						<div class="clearfix"></div>
						<div class="separator">
							<p class="change_link">¿Ya tienes tu contraseña?
								<a href="{{ url('/login') }}" class="to_register">¡Ingresa ahora!</a>
							</p>
							<div class="clearfix"></div>
							<br/>
							<!-- Inicio pie de página -->
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
							<!-- Fin pie de página -->
						</div>
		        {!! BootForm::close() !!}
          </section>
        </div>
      </div>
		</div>
	</body>
</html>