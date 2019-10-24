<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
    <meta name="view" >
    <title>Pagina de Incio</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos/index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
</head>

<body>

   <!-- NAVBAR-->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="home.php"><img src="imagenes/logo.png" alt="Feria de jerez" class="rounded"></a>
            <label  class="form-group col-sm-6" style="color: white;font-size: 30px;"> Sistema web tutorías del ITSJ</label>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" role="tooltip">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active" >
                        <a class="nav-link" href="Altas.php" data-toggle="tooltip" title="Alumnos">Alumnos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="AltasMaterias.php">Tutores</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Formatos</a>
                    </li>
                   <li class="nav-item active">
                        <a class="nav-link" href="#">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#"><strong>Cerrar Sesión</strong> </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">

                </form>
            </div>
        </div>

    </nav>

    <!-- NAVBAR-->

<script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  
   
<body/>