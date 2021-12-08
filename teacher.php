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
 
          <form action="/my-handling-form-page" method="post">
                <ul>
                <li>
                <h3>INFORMACION DE LA TUTORIA </h3>
                </li>
                <li>
                <label for="name">Nombre: </label>
              <input type="text" name="nombre" required>
              </li>
                <li>
                <label for="name">Programa:</label>
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
                <label for="name">Descripcion temas:</label>
                <textarea name="texto" placeholder="Descripcion"></textarea>
                </li>
                <li>
                <label for="name">Tutor asignado:</label>
              <select name="programas" >
                  <option> Miguel rincon</option>
                  <option> darwin navarro</option>
                  <option> jhon timi lopez</option>
                </select>
                </li>
                <li>
                <label for="name">Horario:</label>
                <input type="radio"  class="selected" name="presencial" value="presencial" required> presencial
                <input type="radio" class="selected"  name="virtual" value="virtual" required> virtual 
                </li>
                <li>
                <label for="name">Dia:</label>
                <input type="checkbox" class="selected" name="lunes" value="lunes" required> lunes
                <input type="checkbox" class="selected" name="martes" value="martes" required> martes
                <input type="checkbox" class="selected" name="miercoles" value="miercoles" required> miercoles
                <input type="checkbox" class="selected" name="jueves" value="jueves" required> jueves
               </li>
                <li>
                <label for="name"></label>
                <input type="checkbox" class="selected" name="viernes" value="viernes" required> viernes
                <input type="checkbox" class="selected" name="sabado" value="sabado" required> sabado
                <input type="checkbox" class="selected" name="domingo" value="domingo" required> domingo 
                </li>
                <li>
                <label for="name">Hora:</label>
                <input type="time"  class="time" name="inicio" value="inicio" required> Inicio   
               </li>
                <li>
                <label for="name"></label>
                <input type="time" class="time"  name="fin" value="fin" required> Fin 
                </li>
                <li>
                <label for="name">Salon: </label>
              <input type="text" name="salon" required>
              </li>
              <li>
                <label for="name">Link tutoria: </label>
              <input type="text" name="link" required>
              </li>
              <li>
              <label for="name"> </label>
              <button  type="reset" class="boton">Crear tutoria</button>
              </li>
                </ul>
                </form>
                
            <div class="tutorial_container_coumn_1">
           <div class="container mt-5 special">
            <form method="POST" action="recibe_imgs.php" class="login-form" enctype="multipart/form-data">
            <div class="row">
            <img src="" id= height="70px" width="70px" > 
                <img src="" class="dropimage" width="30px" height="30px">
                        <input title="HacerClick aqui" type="file" class="foto" name="foto1" id="foto1" required="true">
                
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