
   <div class="tutorial_container">
 
      <form action="Tools/Backend/load_administrator.php" method="POST">
       <ul>
       <li>
       <h3>INFORMACION DE LA TUTORIA </h3>
       </li>
       <li>
       <label class="labelre">Nombre: </label>
     <input type="text" name="name_tutoring" style="text-transform:uppercase;"   onkeyup="javascript:this.value=this.value.toUpperCase();" required>
     </li>
       <li>
       <label class="labelre">Programa:</label>
       <select name="programa_tutoring" id="lista1" >
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
       <label class="labelre">Asignatura:</label>
       <div id="select2lista"></div>
       </li>
       <li>
       <label class="labelre"> Descripcion temas:</label>
       <textarea name="description" placeholder="Descripcion" style="text-transform:uppercase;"   onkeyup="javascript:this.value=this.value.toUpperCase();" ></textarea>
       </li>
       <li>
       <label class="labelre"> Tutor asignado:</label>
       <select name="docentes" >
                            <option value="0">Seleccione:</option>
                            <?php   
                            if(!isset($conn)){
                                session_start();
                                require_once '../Backend/conection.php';
                            }      
                            if (isset($_SESSION['usuario'])) {
                                
                                $result = $conn->query("SELECT * FROM `teacher`");
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
       <label > Horario:</label>
       <input type="radio"  class="selected" name="opcion_horario" value="presencial" required> presencial
       <input type="radio" class="selected"  name="opcion_horario" value="virtual" required> virtual 
       </li>      
       <li>
       <label></label>  
       <a target="_blank" href="https://calendar.google.com/calendar/u/0/r/settings/createcalendar?cid=cjkyOWhjZzF0MHFpdDNjbmM5Nzg3cGJraWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&pli=1">Click aqui! , Crea el horario en Google calendar y captura el link</a>
      </li>
       <li>
       <label class="labelre"> Link tutoria: </label>
      <input type="text"  name="link" style="text-transform:uppercase;"   onkeyup="javascript:this.value=this.value.toUpperCase();" required>
     </li>
     <li>
     <label class="labelre"> Salon: </label>
     <input type="number" name="salon"  >
     </li>
     <li>
     <label> </label>
     <button  type="submit" value="Enviar" class="boton">Crear tutoria</button>
     </li>
       </ul>
       </form>
   </div> 
   <script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(1);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"Tools/Backend/cargaroptions_administrator.php",
			data:"carrera=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>
