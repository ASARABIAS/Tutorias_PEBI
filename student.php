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
            <h3 class="active">Mis Tutorías</h3>
          </div>

          <div class="tab_title">
            <h3 class="deactivate">Tutoría Activas</h3>
          </div>

          <div class="tab_title">
            <h3 class="deactivate">Solicitar tutoría</h3>
          </div>

          <div class="tab_title">
            <h3 class="deactivate">Tutoría en petición </h3>
          </div>

        </div>

        <!-- Contenedor Tutorias -->
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

        </div>
      </div>

      <!-- Contenedor parte derecha -->
      <div class="secondary_container">

        <!-- Contenedor de las tutorias activas -->
        <div class="tutoring_container">
          <?php
          include "Tools/global structure/active_tutorials.php";
          ?>
        </div>

        <!-- Contenedor del cronograma -->
        <div class="calendar_container">

          <?php
          include "Tools/global structure/calendar.php";
          ?>

        </div>
      </div>
    </div>

  </main>

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