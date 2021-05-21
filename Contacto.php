<?php
include ("Header.php")
?>
    <section id="servicios">
        <div class="aa">
             <h2>CONTACTENOS</h2><br>
        </div>
        <div id="form">

            <div class="fish" id="fish"></div>
            <div class="fish" id="fish2"></div>
            
            <form id="waterform" method="POST" action="ValidacionBD.php" runat="server">
            
            <div class="formgroup" id="name-form">
                <label for="name">NOMBRES</label>
                <input type="text" id="name" name="name" required/>
            </div>
            
            <div class="formgroup" id="email-form">
                <label for="email">CORREO ELECTRONICO</label>
                <input type="email" id="email" name="email" requiered />
                <span class="form_hint">Formato Correcto "name@something.com"
            </div>
            
            <div class="formgroup" id="message-form">
                <label for="message">MENSAJE</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            
                <input type="submit" name="enviar_datos" value="Envia tu Mensaje !" /><br><br><br>
            </form>
            </div>
        </section>
<div class="tabla">
<br>
<h2>Consulta de los datos almacenados en le BD</h2>
<table border="1">
    <tr>
        <th>Nombres</th>
        <th>Email</th>
        <th>Comentarios</th>
    </tr>
    <?php
        require_once 'conexion.php';
        $consulta = "SELECT * FROM contactenos";
        $ejecutarConsulta = mysqli_query($mysqli, $consulta);
        $verFilas = mysqli_num_rows($ejecutarConsulta);
        $fila = mysqli_fetch_array($ejecutarConsulta);
        if (!$ejecutarConsulta){
        echo "Error en la consulta";}
        else{
            if ($verFilas<1){
            echo "<tr><td>Sin registros</td></tr>";}
        else{
            for ($i=0; $i<=$fila; $i++){
            echo'
            <tr>
            <td>'.$fila[0].'</td>
            <td>'.$fila[1].'</td>
            <td>'.$fila[2].'</td>
            </tr>';
            $fila = mysqli_fetch_array($ejecutarConsulta);}}}
    ?>
</table>
</div>   
             
<?php

include ('Footer.php')

?> 
