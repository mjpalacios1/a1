   <?php
    
      $Nombre= $_REQUEST["q"];
      $servidor=mysqli_connect("localhost","root","","empleoya");
      $sql="select * from empresa WHERE nombre like'$Nombre';";
      $ejecutar=$servidor->query($sql);  
      $fila = mysqli_fetch_array($ejecutar);
      $aux="
      <tr>
      <th>Empresa</th>
      <th>Descripcion</th>
      <th>Nivel de educacion</th>
      </tr>
    </table>
      <tr>
      <th>". $fila['nombre']."</th>
      <th>". $fila['descripcion']."</th>
      <th>". $fila['nivelEducacion']."</th>
      </tr>";
     echo $aux;
  

   ?>