<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/dashboard.css" />
    <style>
	    .uno{
		    border-bottom: 2px rgba(0, 204, 255, 0.527);
		    background-color:#06a2c9;
	    }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center aling-content-center">
        <div class="col-20 barra">
          <h4 class="text-light">EanzDash</h4>
        </div>
        <div class="col-4" text-right barra>
          <ul class="navbar-nav mr-auto">
            <li>
              <a
                href="#"
                class="px-3 text-ligth perfil dropdown-toogle"
                id="navbar-Dropdown"
                role="button"
                data-toogle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                onclick="mostrarSalir();"
              >
                <i class="fas fa-user-circle"
                  ><i class="fas fa-caret-down flecha"></i></i
              ></a>
              <script type="text/javascript">
                function mostrarSalir() {
                  document.getElementById("salir").style.display = "block";
                }
              </script>
              <div
                class="menu-salida"
                id="salir"
                aria-labelledby="navbar-dropdown"
              >
                <a class="dropdown-item menuperfil cerrar" href="index.html"
                  ><i class="fas fa-sign-out-alt"></i>Salir</a
                >
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="barra-lateral col-12 col-sm-auto">
          <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
            <a href="#"
              ><i class="fas fa-home active"></i> <span class="1">Inicio</span></a
            >
            <a href="#"><i class="fas fa-database"></i> <span>Datos</span></a>
            <a href="#"
              ><i class="fas fa-pencil-ruler"></i> <span>Diseño</span></a
            >
            <a href="#"><i class="fas fa-users"></i> <span>Usuarios</span></a>
          </nav>
        </div>
        <main class="main col">
          <div class="row">
            <div class="columna col-lg-6">
              <div class="contenido-inicio text-center">
                <h1>Bienvenido</h1>
                <p>Te daremos una explicacion con brevedad</p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
      crossorigin="anonymous"
    ></script>
  </body>
  <script
    src="https://kit.fontawesome.com/a213dfc6d2.js"
    crossorigin="anonymous"
  ></script>
</html>
