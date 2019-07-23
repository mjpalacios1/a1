<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">

<link rel="stylesheet" href="../a1/formularios.css" />
<head>
  <title>Registro Anuncio</title>
  <meta charset="UTF-8">

</head>
<body>
<ul>
  <input type="image" src="https://pngimage.net/wp-content/uploads/2018/06/icono-nuevo-registro-png-4.png" align="left" width="30" height="30" alt="Submit">
<h2>Formulario</h2>

<form method="POST" action="../a1/index_1.php">
  <fieldset class="fieldset-principal">
  <legend>Datos Generales</legend>
  Detalle del anuncio: <br> 
  <textarea  name="detalle" value=""> 
  </textarea>
<br><br>
  Fecha de inicio: 
  <input type="date" name="inicio"><br><br>
  Fecha de fin: 
  <input type="date" name="fin"><br><br>
  Salario: 
  <input type="number" name="salario"><br><br>
 </fieldset>
  <input type="reset" value="Limpiar">
  <input type="submit" name="btnGuardar" value="Guardar">
</form> 
</body>
</html>

