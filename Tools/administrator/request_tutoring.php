<!-- el resultado de la búsqueda lo encapsularemos en un tabla -->
<table width="40%" border="0" align="rigth" cellpadding="1" cellspacing="1">
    <thead>
        <tr>
            <!--creamos los títulos de nuestras dos columnas de nuestra tabla -->
            <td width="100" align="center"><strong>Identificacion</strong></td>
            <td width="100" align="center"><strong>Nombre</strong></td>
            <td width="100" align="center"><strong>Programa</strong></td>
            <td width="100" align="center"><strong>Accion</strong></td>
        </tr>
    </thead>
    <?php
    if (!isset($conn)) {
        session_start();
        require_once '../Backend/conection.php';
    }
    if (isset($_SESSION['usuario'])) {

        $buscar = $_POST["nametutori"];

        $resul = $conn->query("SELECT * FROM `student` WHERE `identificacion` LIKE '$buscar' ")->fetch_assoc();
        $idd = $resul['id_career'];
        $result = $conn->query("SELECT * FROM `career` WHERE `id` LIKE '$idd' ")->fetch_assoc();

        $re = $conn->query("SELECT * FROM `studens_has_tutoring`");

        while ($fila = $re->fetch_assoc()) {
        $vari = $_SESSION['idst'];
        if ($fila['id_tutoring'] == $vari) {
        $idstudent = $fila['id_student'];
        $result = $conn->query("SELECT * FROM `student` WHERE `id` LIKE '$idstudent' ")->fetch_assoc();
        $idcar = $result['id_career'];
        $ids = $result['identificacion'];
        $names = $result['name'];
        $careerconsul = $conn->query("SELECT * FROM `career` WHERE `id` LIKE '$idcar' ")->fetch_assoc();
        $nameca = $careerconsul['name'];
        ?>
        <tr>
            <td><?php echo ($ids); ?></td>
            <td><?php echo ($names); ?></td>
            <td><?php echo ($nameca); ?></td>
            <td> <button style="cursor:pointer;" type="submit" onclick='add_estudiante_us_tutoring("<?php echo ($nombre); ?>","<?php echo ($ids); ?>");' value="Enviar" class="boton">Eliminar</button></td>
        </tr>

</table>
<?php

    } // fin if 
?>