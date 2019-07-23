<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">

<link rel="stylesheet" href="../a1/formularios.css" />
<head>
  <title>Registro Usuario</title>
  <meta charset="UTF-8">
</head>
<body>
<ul>
  <input type="image" src="https://pngimage.net/wp-content/uploads/2018/06/icono-nuevo-registro-png-4.png" align="left" width="30" height="30" alt="Submit">
<h2>Formulario</h2>

<form method="POST" action="../a1/mostrarDatos.php">
  <fieldset class="fieldset-principal">
  <input type="hidden" id="idReserva" name="idReserva" value="123">
  <legend>Datos Personales</legend>
  Nombre:  
  <input type="text" name="txtnombre" value=""> &nbsp;&nbsp;&nbsp;&nbsp;
  Segundo Nombre: 
 <input type="text" name="txtnombre2" value=""><br><br>
  Apellido:  
  <input type="text" name="txtapellido" value="">&nbsp;&nbsp;&nbsp;&nbsp;
  Segundo Apellido:  
  <input type="text" name="txtapellido2" value=""><br><br>
  Género: 
  <input type="radio" name="genero" value="M"> Masculino &nbsp;&nbsp; <input type="radio" name="genero" value="F"> Femenino <br><br>
  Fecha de Nacimiento: 
  <input type="date" name="bday"><br><br>
  Estado Civil:
  <select name="estadoCivil">
  <option value="Solter@">Solter@</option>
  <option value="Casad@">Casad@</option>
  <option value="Divorciad@">Divorciad@</option>
  <option value="Viud@">Viud@</option>
  <option value="Unión Libre">Unión Libre</option>
</select> <br><br>
 
 </fieldset>

<fieldset class="fieldset-principal">
  <legend>Datos de Contacto</legend>
  E-mail: <input type="email" name="txtemail"><br><br>
  Teléfono: <input type="tel" name="txttelefono"><br><br>
  Facebook(url): <input type="url" name="facebook"><br><br>
  
</fieldset>

<fieldset class="fieldset-principal">
  <legend>Educación</legend>
  
  Seleccione el último nivel completado:
	<select name="nivelEducacion">
  <option value="Primaria">Primaria</option>
  <option value="Secundaria">Secundaria</option>
  <option value="Tecnologia">Tecnologia</option>
  <option value="Ingenieria/Licenciatura">Ingenieria/Licenciatura</option>
  <option value="Mestria/Posgrado">Mestria/Posgrado</option>
</select> <br><br>
  Fecha de Egreso: <input type="month" name="Egreso"><br><br>
  Área de trabajo:  
  <input type="text" name="txtArea" value="">
</fieldset>
<fieldset class="fieldset-principal">
  <legend>Datos de usuario</legend>
  Usuario:  
  <input type="text" name="txtusuario" value=""> 
  Contraseña: 
  <input type="password" name="pwd"><br><br>
  <input type="reset" value="Limpiar">
  <input type="submit" name="btnGuardar"value="Guardar">
</fieldset>
  
 
</form> 
</body>
</html>

