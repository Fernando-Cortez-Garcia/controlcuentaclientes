<style>
    .bg{
    background: linear-gradient( to right, #ecf5ff, #4683ffbd, #95c5f8, #f7f8f5, #eef0f2);
    background-size: 400% 400%;
    animation: animate-background-gradient 14s infinite ease-in-out;
  }
  @keyframes animate-background-gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
  }
  li a:hover{
    
    border-bottom: 3px solid #4683ffbd;
    transition: all 0.5s ease;
    
  }

</style>
<nav class="navbar navbar-light bg-light bg fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-star bg" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="cuentasActivas.php"><i class="fa-solid fa-chart-line"></i> Cuentas Activas </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="clientes.php"><i class="fa-solid fa-id-card-clip"></i> Clientes </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historialPagos.php"><i class="fa-solid fa-file-invoice-dollar"></i> Historial de pagos  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ajustes.php"><i class="fa-solid fa-gears"></i> Ajustes  </a>
          </li>
          <li class="nav-item mt-4">
            <a class="nav-link" href="../index.php"> <i class="fa-solid fa-chevron-left"></i> Salir</a>
          </li>
      </div>
      
    </div>
  </div>
</nav>

<h1>Control de cuentas</h1>

