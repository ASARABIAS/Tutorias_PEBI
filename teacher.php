<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
} else {

?>
<!DOCTYPE html>
<html lang="en">
<!-- hola como vamos-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PEBI | Docente</title>
  <link rel="stylesheet" href="CSS/teacher.css">

  
</head>

<body>
  <header id="header">
    <!-- Se incluye la barra de navegacion | INICIO -->
    <?php
    include 'Tools/global structure/navigation_bar.php';
    ?>
    <!-- Se incluye la barra de navegacion | INICIO -->
  </header>
  <main>

    <!-- Contenedor de todo -->
    <div class="container_teacher">

      <!-- Contenedor del Menú General -->
      <div class="main_container">

        <div class="general_menu_title">
          <h3>Menú General</h3>
        </div>

        <div class="tab">

          <div class="tab_title">
            <h3 class="deactivate">Tutoría Activas</h3>
          </div>

          <div class="tab_title">
            <h3 class="active">Nueva Tutorías</h3>
          </div>

          <div class="tab_title">
            <h3 class="deactivate">Asignaciones</h3>
          </div>

          <div class="tab_title">
            <h3 class="deactivate">Seguimiento</h3>
          </div>

        </div>


        <!-- Contenedor Tutorias 
        <div class="my_tutorials">

          <div class="tutorial_container">

            <div class="tutorial_container_coumn_1">
              <h3>Calculo Integral </h3>
              <p>Solución de integrales indefinidas directas, método de sustitución y métodos de integración.</p>
            </div>
            <div class="tutorial_container_coumn_2">
              <h4>Ing. Carlos jalabe </h4>
            </div>
          </div>

          <div class="tutorial_container">
            <div class="tutorial_container_coumn_1">
              <h3>Calculo Integral </h3>
              <p>Solución de integrales indefinidas directas, método de sustitución y métodos de integración.</p>
            </div>
            <div class="tutorial_container_coumn_2">
              <h4>Ing. Carlos jalabe </h4>
            </div>
          </div>

          <div class="tutorial_container">
            <div class="tutorial_container_coumn_1">
              <h3>Calculo Integral </h3>
              <p>Solución de integrales indefinidas directas, método de sustitución y métodos de integración.</p>
            </div>
            <div class="tutorial_container_coumn_2">
              <h4>Ing. Carlos jalabe </h4>
            </div>
          </div>

        </div>

        
        <div class="tutorials_browser">
          <div class="home">
            <img src="IMG/casa.png" alt="">
          </div>

          <div class="btn_nage">
            <img src="IMG/atras.png" alt="">
            <div>
              <p> 1 de 4 </p>
            </div>
            <img src="IMG/flecha.png" alt="">
          </div>
          -->

          <!-- Contenedor nueva Tutoria -->
        <div class="new_tutorials">

          <div class="tutorial_container">
 
          <form action="/my-handling-form-page" method="POST">
                <ul>
                <li>
                <h3>INFORMACION DE LA TUTORIA </h3>
                </li>
                <li>
                <label>Nombre: </label>
              <input type="text" name="nombre" required>
              </li>
                <li>
                <label >Programa:</label>
              <select name="programas" >
                  <option> Ingenieria de sistemas</option>
                  <option> Ingenieria ambiental y sanitaria</option>
                  <option> Ingenieria agroindustrial</option>
                  <option> Contaduria publica</option>
                  <option> Adminstracion de empresas</option>
                  <option> Tecnología Agropecuaria</option>
                  <option> Economia</option>
                </select>
                </li>
                <li>
                <label>Descripcion temas:</label>
                <textarea name="texto" placeholder="Descripcion"></textarea>
                </li>
                <li>
                <label>Tutor asignado:</label>
              <select name="programas" >
                  <option> Miguel rincon</option>
                  <option> darwin navarro</option>
                  <option> jhon timi lopez</option>
                </select>
                </li>
                <li>
                <label>Horario:</label>
                <input type="radio"  class="selected" name="presencial" value="presencial" required> presencial
                <input type="radio" class="selected"  name="virtual" value="virtual" required> virtual 
                </li>      
                <li>
                <label></label>  
                <a href="https://calendar.google.com/calendar/u/0/r/settings/createcalendar?cid=cjkyOWhjZzF0MHFpdDNjbmM5Nzg3cGJraWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&pli=1">Click aqui! , Crea el horario en Google calendar y captura el link</a>
               </li>
                <li>
                <label >Link tutoria: </label>
              <input type="text" name="link" required>
              </li>
              <li>
                <label >Salon: </label>
              <input type="text" name="salon" required>
              </li>
              <li>
              <label> </label>
              <button  type="reset" class="boton">Crear tutoria</button>
              </li>
                </ul>
                </form>
                
            <div class="tutorial_container_coumn_1">
           <div class="special">
            <form class="login-form" >
            <div class="row">
                <div src="" class="dropimage">
                        <input title="HacerClick aqui" type="file" class="foto" name="foto1" id="foto1" required="true">
                </div> 
            </div>  
            </form>
            </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

  </main>

  
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
  [].forEach.call(document.querySelectorAll('.dropimage'), function(img){
    img.onchange = function(e){
      var inputfile = this, reader = new FileReader();
      reader.onloadend = function(){
        inputfile = 'src('+reader.result+')';
      }
      reader.readAsDataURL(e.target.files[0]);
    }
  });
});
</script>

  <?php
  include 'Tools/global structure/footer.php';
  ?>

  <!-- Scripts -->
  <!-- Se Incluyen los Archivos de tipo JavaScrip | INICIO -->
  <script src="https://kit.fontawesome.com/35db202371.js"></script>
  <!-- Scripts -->
  <!-- Se Incluyen los Archivos de tipo JavaScrip | FIN -->
</body>

</html>
<?php
  mysqli_close($conn);
}
?>