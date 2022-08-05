<?php
    
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $correu=$_POST['correu'];
        #inici variable enviament

        $destinatario='chesvoc1@yahoo.es';
        //$destinatario='chesvoc1@gmail.com';
        $asunto='Dades enviades des de lloc web del chesvoc';
        $contenido="Nom Usuari ".$nombre."\n"."Cognoms de l´usuari: ".$apellidos."\n"."email:".$correu;

        #enviament  del correu

        mail($destinatario,$asunto,$contenido);

    ?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estils.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monofett" rel="stylesheet"><!-- google fonts (titulars)-->
    <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet"><!-- google fonts (resta de contingut)-->
    <link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">

    <title>viu el futur - contacte enviament</title>

  </head>
  <body class="container-fluid fonsGlobal restaFonts">
    <!-- header del document -->
    <header class="container-fluid ">
        
        <img src="img/header-gran.jpg" class="img-fluid headerOvalat" alt="Responsive image">
        <!-- <img src="img/photo-1404397bis22.jpg" class="img-fluid headerOvalat" alt="Responsive image"> -->
        <!-- menú de navegació -->
        <nav class="navbar navbar-expand-lg navbar-light menuEnImg"><!--row-->
          <a class="navbar-brand" href="#"><img src="img/melancolia_editat_logo_petit.jpg" class="imatgeLogo img-fluid" alt="Responsive image"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link text-light" href="inici.html">Inici</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" text-light href="contacte.html">Contacte<span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item dropright">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Serveis
                </a>
                <!-- submenú -->
                <div class="dropdown-menu bg-success text-light" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item bg-success text-light submenuOpcions" href="viatges.html">Viatges</a>
                  <a class="dropdown-item bg-success text-light submenuOpcions" href="tecnologia.html">Tecnología</a>
                  <a class="dropdown-item bg-success text-light submenuOpcions" href="salut.html">Salut</a>
                  <a class="dropdown-item bg-success text-light submenuOpcions" href="alimentacio.html">Alimentació</a>
                  <a class="dropdown-item bg-success text-light submenuOpcions" href="educacio.html">Educació</a>
                  <a class="dropdown-item bg-success text-light submenuOpcions" href="habitatge.html">Habitatge</a>
                  <a class="dropdown-item bg-success text-light submenuOpcions" href="obra-publica.html">Obra pública</a>
                  <a class="dropdown-item bg-success text-light submenuOpcions" href="seguretat.html">Seguretat</a>
                  <a class="dropdown-item bg-success text-light submenuOpcions" href="treball.html">Treball</a>
                  <a class="dropdown-item bg-success text-light submenuOpcions" href="vida.html">Vida</a>
                </div>

              </li>
            </ul>
          </div>
        </nav>
    </header>
    
    <!-- contingut principal del document -->
    <main class="container">
        <section class="container seccionsOvalades">
        <div class="respuesta">
            <p>Gràcies per contactar amb nosaltres, en breu un  consultor es posarà en contacte amb vostè</p>
            <p><a href="index.html"><input type="submit" value="Tornar enrere..."></a></p>
        </div>
        </section>

      
    </main>
    <!-- peu del document -->
    <footer>
      <div class="container-fluid display-4 text-light restaFonts peuOvalat">
        <h2>Autor:David Llobet Sarria</h2>
        <div class="materialExtern">Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
      </div>
      
    </footer>
    

    <!-- Links a arxius jquery i bootstrap en javascript -->
    <script src="js/jquery-v-3-3-1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>