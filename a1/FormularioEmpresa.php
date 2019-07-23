<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">

<link rel="stylesheet" href="../a1/formularios.css" />
<head>
  <title>Registro Empresa</title>
  <meta charset="UTF-8">

</head>
<body>
<ul>
  <input type="image" src="https://pngimage.net/wp-content/uploads/2018/06/icono-nuevo-registro-png-4.png" align="left" width="30" height="30" alt="Submit">
<h2>Formulario</h2>

<form method="POST" action="../a1/mostrarEmpresa.php">
  <fieldset class="fieldset-principal">
  <legend>Datos Generales</legend>
  Nombre:  
  <input type="text" name="txtnombre" value=""> 
<br><br>
  Descripción breve:
  <input type="text" name="descrip" value="">  <br><br>
  
 </fieldset>
<fieldset class="fieldset-principal">
  <legend>Datos de Contacto</legend>
  E-mail: <input type="email" name="txtemail"><br><br>
  Teléfono: <input type="tel" name="txttelefono"><br><br>
  Facebook(url): <input type="url" name="facebook"><br><br>
  
</fieldset>

<fieldset class="fieldset-principal">
  <legend>Datos de ingreso</legend>
  Usuario:
  <input type="text" name="usuario" value="">  <br><br>
  Contraseña: 
  <input type="password" name="pwd"><br><br>
  
  <input type="reset" value="Limpiar">
  <input type="submit" name="btnGuardar" value="Guardar">
</form> 
</body>
</html>

