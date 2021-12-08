<nav class="menu">
  <div class="logo-box">
    <img src="IMG/pebi.jpeg" alt="">
    <span class="btn-menu"><i class="fas fa-bars"></i></span>
  </div>

  <div class="list-container">
    <ul class="lists">
      <?php
      if (isset($_SESSION['usuario'])) {
      ?>
        <li><img src="IMG/notificaciones.png" alt="" width="20px" height="20px" style="margin-right: 10px;"></li>
        <li>
          <div class="btn_user">
            <h3><?php echo ($_SESSION['usuario']['name']); ?></h3><img src="IMG/usuario.png" alt="" width="25px" height="25px">
          </div>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>
</nav>