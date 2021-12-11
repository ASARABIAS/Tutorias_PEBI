<div class="tutorial_containert">
    <ul>
        <li>
            <h3><?php echo ($nombre); ?></h3>
            <br>
            <div id="main-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre Universidad</th>
                            <th>Programas con la estrategia de tutoria</th>
                        </tr>
                    </thead>
                    <?php
                    if (!isset($conn)) {
                        session_start();
                        require_once '../Backend/conection.php';
                    }
                    if (isset($_SESSION['usuario'])) {
                        $re = $conn->query("SELECT * FROM `career`");
                        while ($fila = $re->fetch_assoc()) {
                            $cant = $cant + 1;
                        }
                    ?>
                        <tr>
                            <td>UNIVERSIDAD POPULAR DEL CESAR SECCIONAL AGUACHICA</td>
                            <td onclick='ver_programas();' style="padding-right: 5px;cursor: pointer;color: #0080FA;"><?php echo ($cant); ?></td>
                        </tr>
                    <?php
                    }

                    ?>

                </table>
            </div>
        </li>
        <li>
            <label></label>
        </li>

        <li>
            <div id="tracing"></div>
        </li>

        </li>

        <li>
            <label></label>
        </li>

        <li>
            <div id="tracing2"></div>
        </li>

        <li>
            <label></label>
        </li>

        <li>
            <div id="tracing3"></div>
        </li>

        <li>
            <label></label>
        </li>

        <li>
            <div id="tracing4"></div>
        </li>


    </ul>
</div>