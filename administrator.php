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
  <title>PEBI | Administrador</title>
  <link rel="stylesheet" href="CSS/administrator.css">

  
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
            <h3 class="active" onclick="Opciones_administrator(0);">Tutoría Activas</h3>
          </div>

          <div class="tab_title">
            <h3 class="deactivate" onclick="Opciones_administrator(1);">Nueva Tutorías</h3>
          </div>

          <div class="tab_title">
            <h3 class="deactivate" onclick="Opciones_administrator(2);">Asignaciones</h3>
          </div>

          <div class="tab_title" >
            <h3 class="deactivate" onclick="Opciones_administrator(3);">Seguimiento</h3>
          </div>

          <div class="tab_title" >
            <h3 class="deactivate" onclick="Opciones_administrator(4);">Requerimientos</h3>
          </div>

        </div>

          <!-- Contenedor nueva Tutoria -->
        <div class="new_tutorials" >

          <div class="tutorial_container" id="vista" >
           <?php
           include "Tools/administrator/active_tutoring.php";
            //  if(!isset($_GET['case'])){
            //   include "Tools/administrator/active_tutoring.php";
            //     }else{
            //       switch ($_GET['case']) {
            //         case 'active_tutoring':
            //           include "Tools/administrator/active_tutoring.php";
            //           break;
            //           case 'new_tutoring':
            //             include "Tools/administrator/new_tutoring.php";
            //           break;
            //           case 'a':
                          
            //           break;
            //           case 'requirement':
            //             include "Tools/administrator/requirement.php";
            //           break;
                    
            //       }
                  
            //     }
             
           ?>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/35db202371.js"></script>
  <script src="JS/menu_tab.js"></script>
  <!-- Scripts -->
  <!-- Se Incluyen los Archivos de tipo JavaScrip | FIN -->
</body>

</html>
<?php
  mysqli_close($conn);
}
?>