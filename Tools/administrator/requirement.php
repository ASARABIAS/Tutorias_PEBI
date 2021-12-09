<div class="tutorial_container">
 
 <form action="Tools/Backend/load_administrator.php" method="POST">
       <ul>
            <li>
                <h3>REQUERIMIENTOS DEL SOFTWARE </h3>
            </li>
            <li>
                <label></label>
            </li>
            <h4>Debe existir:  </h4>
            <label class="labelre">1.al menos una programa academico</label>
            <label class="labelre">2.una asignatura del programa academico</label>
            <li>
                <label></label>
            </li>
            <h4>Para la puesta en practica de las tutorias</h4>
            <h4>Debe existir:  </h4>
            <label class="labelre">3.al menos un docente registrado</label>
            <label class="labelre">4.al menos un estudiante registrado</label>
            </li>
            <li>
                <label></label>
            </li>
            <li>
                <h4>Datos - Programa academico: </h4>
            </li>
            <li>
                <form  action="Tools/Backend/load_administrator.php" method="POST">
                <ul>
                    <li>
                        <label class="labelre">Nombre del programa: </label>
                        <input type="text" name="name_career"  style="text-transform:uppercase;"   onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                    </li>
                    <li>
                        <button  type="submit" value="Enviar" id="name_career" class="boton">Agregar</button>
                    </li>
                </ul>
                </form>
            </li>
            <li>
                <label></label>
            </li>
            <li>
                <h4>Datos - Asignatura: </h4>
            </li>
            <li>
                <form action="Tools/Backend/load_administrator.php" method="POST">
                <ul>
                    <li>
                    <label class="labelre">Escoja un programa:</label>
                            <select name="programas" >
                            <option value="0">Seleccione:</option>

                            <?php   
                            if(!isset($conn)){
                                session_start();
                                require_once '../Backend/conection.php';
                            }      
                            if (isset($_SESSION['usuario'])) {
                                 $id=$_SESSION['id_user'];
                                $result = $conn->query("SELECT * FROM `career` WHERE `id_administrator` LIKE '$id' ");
                                var_dump($result);
                                 while ($fila=$result->fetch_assoc()) {
                                    $idc=$fila['id'];
                                    $namec=$fila['name'];
                                 ?>
                                   <option  value="<?php echo($idc); ?>"> <?php echo($namec); ?></option>
                                  <?php 
                                 }
                               
                            }
                            ?>

                          </select>
                    </li>
                    <li>
                        <label class="labelre">Nombre de la asignatura: </label>
                        <input type="text" name="name_course" style="text-transform:uppercase;"   onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                    </li>
                    <li>
                        <button  type="submit" value="Enviar" id="name_course" class="boton">Agregar</button>
                    </li>
                </ul>
                </form>
            </li>
            <li>
                <label></label>
            </li>
            <li>
                <h4>Datos - Estudiante o Docente: </h4>
            </li>
            <li>
                <form action="Tools/Backend/load_administrator.php" method="POST">
                <ul>
                    <li>
                        <label class="labelre">Rol:</label>
                        <select name="rol" >
                            <option value="docente"> Docente</option>
                            <option value="estudiante"> Estudiante</option>
                        </select>
                    </li>
                    <li>
                        <label class="labelre">Nombre completo: </label>
                        <input type="text" name="name_completo" style="text-transform:uppercase;"   onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                    </li>
                    <li>
                        <label class="labelre">Correo electronico: </label>
                        <input type="text" name="email_completo" style="text-transform:uppercase;"   onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                    </li>
                    <li>
                        <label class="labelre">Contraseña: </label>
                        <input type="text" name="password_completo" style="text-transform:uppercase;"   onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                    </li>
                    <li>
                        <button  type="submit" value="Enviar" class="boton">Agregar</button>
                    </li>
                </ul>
                </form>
            </li>
       </ul>
       </form>
   </div> 