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
  <title>PEBI | Estudinate</title>
  <link rel="stylesheet" href="CSS/student.css">
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
    <div class="container_student">

      <!-- Contenedor del Menú General -->
      <div class="main_container">

        <div class="general_menu_title">
          <h3>Menú General</h3>
        </div>

        <div class="tab">

          <div class="tab_title">
            <h3 class="active"onclick="Opciones(0);">Mis Tutorías</h3>
          </div>

          <div class="tab_title">
            <h3 class="deactivate" onclick="Opciones(1);">Tutoría Activas</h3>
          </div>

          <div class="tab_title">
            <h3 class="deactivate" onclick="Opciones(2);">Solicitar tutoría</h3>
          </div>

          <div class="tab_title">
            <h3 class="deactivate" onclick="Opciones(3);">Tutoría en petición </h3>
          </div>

        </div>

        <!-- Contenedor Tutorias -->
        <div class="my_tutorials" id="my_tutorials">

        
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
      </div>
    </div>

  </main>

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