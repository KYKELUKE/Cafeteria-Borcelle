<?php

include("log.php")

?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFA500">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <!-- Desplegable Menú 1 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ventas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Estado de Cuenta</a></li>
            <li><a class="dropdown-item" href="#">Orden de Venta</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Facturación</a></li>
          </ul>
        </li>
        <!--  --> 
        <!-- Desplegable de Menú 2 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reportes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Producto</a></li>
            <li><a class="dropdown-item" href="#">Ventas</a></li>
            <li><a class="dropdown-item" href="#">Costo</a></li>
          </ul>
        </li>
        <!--  -->
        <!-- Desplegable de Menú 3 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mantenimiento
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Clientes</a></li>
            <li><a class="dropdown-item" href="#">Empleados</a></li>
            <li><a class="dropdown-item" href="#">Producto</a></li>
          </ul>
        </li>
        <!-- Para hacer botones inservibles -->
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

