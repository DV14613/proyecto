<div class="barra_lateral">
      <div class="logo">
        <img class="img-fluid" style="max-width: 120px;" src="<?= BASE_ASSETS . 'img/logo.png'; ?>" alt="">
      </div>

      <nav class="nav">
        <div class="nav__entry nav__entry--active">
          <a class="icono-menu" href="<?= BASE_URL . 'Dashboard/dashboard'; ?>"  title="Menu"><i class="bi bi-house-fill"></i></a>
        </div>

        <div class="nav__entry nav__entry--active">
          <!--Agregar Documento-->
          <a class="icono-menu" href="<?= BASE_URL . 'Dashboard/RegistrarCliente'; ?>" title="Agregar Cliente"><i class="bi bi-person-plus"></i></a>

        </div>
        <div class="nav__entry nav__entry--active">
           <!--Mapa De procesos-->
          <a class="icono-menu" href="<?= BASE_URL . 'Dashboard/dashboard'; ?>" title="Registrar Servicios"><i class="bi bi-scissors"></i></a>
        </div>
        <div class="nav__entry nav__entry--active">
           <!--Categorias-->
          <a class="icono-menu" href="<?= BASE_URL . 'Dashboard/dashboard'; ?>" title="Venta de productos"><i class="bi bi-cart4"></i></a>
        </div>
        <div class="nav__entry nav__entry--active">
          <!-- Cerrar Sesion -->
          <a class="icono-menu" href="<?= BASE_URL . 'Dashboard/otros'; ?>" title="Otros"><i class="bi bi-tools"></i></a>
        </div>
       
        <div class="nav__entry nav__entry--active">
          <!-- Cerrar Sesion -->
          <a class="icono-menu" href="<?= BASE_URL . 'Dashboard/login'; ?>" title="Cerrar Sesión"><i class="bi bi-box-arrow-left"></i></a>
        </div>
      </nav>
</div>