<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PEBI | Estilo</title>
  <link rel="stylesheet" href="CSS/login.css">
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
    <!--Seccion del Login | INICIO-->
    <section class="body_login">
      <div class="login_box">
        <div class="contenedor__login-register">
          <!--Login-->
          <form action="Tools/Backend/login.php" method="POST" class="formulario__login">
            <img src="IMG/upc.png" alt="">
            <h2>Iniciar Cesion</h2>
            <div class="credenciales">
              <label for="">Correo</label>
              <input type="email" name="email" placeholder="Correo Electronico">
              <div class="password">
                <label for="">Contraseña</label>
                <a href="reset_user.php" style="color: blue;"  >¿Se te olvidó tu contraseña?</a>
              </div>
              <input type="password" name="password" placeholder="Contraseña">
            </div>
            <input type="submit" value="Enviar" class="btn">
          </form>
        </div>
      </div>
    </section>
    <!--Seccion del Login | FIN-->

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