/*!
 * Archivo JavaScript con las funciones
 * personalizadas necesarias para la plataforma
 * BHW
 */

/*!
 * Funciones de la vista Crear Cuenta (Register)
 */
function campos()
{
	nombre = $('label[for=name]')[0];
	for (i = 0; i < document.getElementsByClassName('radio-inline').length; i++)
	{document.getElementsByClassName('radio-inline')[i].setAttribute("onclick", "campos()");}
	if (document.getElementsByName('tipo_usuario')[0].checked)
	{
		document.getElementById('tipo_cliente').style.display = 'block';
		if (document.getElementsByName('tipo_cliente')[0].checked)
		{
			nombre.innerText = 'Nombre';
			document.getElementById('name').setAttribute('placeholder', 'Ingresa tu nombre');
			document.getElementById('email').setAttribute('placeholder', 'Ingresa tu correo electrónico');
			document.getElementById('password').setAttribute('placeholder', 'Ingresa tu contraseña');
			document.getElementById('password_confirmation').setAttribute('placeholder', 'Ingresa nuevamente tu contraseña');
		}
		if (document.getElementsByName('tipo_cliente')[1].checked)
		{
			nombre.innerText = 'Nombre de la empresa';
			document.getElementById('name').setAttribute('placeholder', 'Ingrese el nombre de la empresa');
			document.getElementById('email').setAttribute('placeholder', 'Ingrese el correo electrónico');
			document.getElementById('password').setAttribute('placeholder', 'Ingrese la contraseña');
			document.getElementById('password_confirmation').setAttribute('placeholder', 'Ingrese nuevamente la contraseña');
		}
	}
	if (document.getElementsByName('tipo_usuario')[1].checked)
	{
		document.getElementById('tipo_cliente').style.display = 'none';
		nombre.innerText = 'Nombre';
		document.getElementById('name').setAttribute('placeholder', 'Ingresa tu nombre');
		document.getElementById('email').setAttribute('placeholder', 'Ingresa tu correo electrónico');
		document.getElementById('password').setAttribute('placeholder', 'Ingresa tu contraseña');
		document.getElementById('password_confirmation').setAttribute('placeholder', 'Ingresa nuevamente tu contraseña');
	}
}