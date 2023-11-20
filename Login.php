
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - tags
  -->
  <title>Selene - Comida increíble y deliciosa</title>
  <link href="assets/images/Logo.png" rel="shortcut icon">
  <meta name="title" content="Selene - Comida increíble y deliciosa">
  <meta name="description" content="Pagina creada sin animo de lucro">

  <!-- 
    - google font links
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - css
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  
  <link rel="stylesheet" href="./assets/css/modificaciones_login.css">

  <!-- 
    - carga
  -->
  <link rel="preload" as="image" href="./assets/images/asset-menu1.jpg">
  <link rel="preload" as="image" href="./assets/images/asset-menu2.jpg">
  <link rel="preload" as="image" href="./assets/images/asset-menu3.jpg">

</head>

<body id="top">

  <!-- 
    - #precarga
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Selene</p>
  </div>





  <!-- 
    - #barra de arriba
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Plaza Mundo Apopa, Primera Etapa, SV
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Horario : 8.00 am to 10.00 pm</span>
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+503 7585-3257-4758</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:Selenerestaurant@yopmail.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Selenerestaurant@yopmail.com</span>
      </a>

    </div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.html" class="logo">
        <img src="./assets/images/Logo.png" width="100" height="50" alt="Selene - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="index.html" class="logo">
          <img src="./assets/images/Logo.png" width="150" height="50" alt="Selene - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.html" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="Menu.html" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Menu</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="nosotros.html" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Nosotros</span>
            </a>
          </li>


          <li class="navbar-item">
            <a href="Carrito.html" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Carrito</span>
            </a>
          </li>

        </ul>
<!-- 
    - #HEADER telefono
  -->
        <div class="text-center">
          <p class="headline-1 navbar-title">Visitanos</p>

          <address class="body-4">
            Plaza Mundo Apopa, <br>
            Primera Etapa, SV
          </address>

          <p class="body-4 navbar-text">Horario: 8.00 am - 10.00pm</p>

          <a href="mailto:Selenerestaurant@yopmail.com" class="body-4 sidebar-link">Selenerestaurant@yopmail.com</a>

          <div class="separator"></div>

          <p class="contact-label">Contacto</p>

          <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
            +503 7585-3257-4758
          </a>
        </div>

      </nav>

      <a href="Login.php" class="btn btn-secondary">
        <span class="text text-1">Iniciar Sesion</span>

        <span class="text text-2" aria-hidden="true">Iniciar Sesion</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/FL.jpg" width="1080" height="950" alt="" class="img-cover">
            </div>

            </div>
                <div class="d-none d-md-block ocupare80"><!--Login para pantallas medianas en adelantes-->
                <div class="container">

                    <div class="row">
                    <div class="col-6">
                     <form id="login-form" class="col-12">
                        <div class="row">
                          <div class="col-4">
                            <a href=""><img src="assets/images/Logo.png" class="img-fluid3"></a>
                          </div>
                          <div class="col-4">
                          </div>
                        </div>
                    

                    <div id="formularios" class="card-body"></form>

                    <form action="validacion.php" id="form-session" method="post">

                    <div class="input-group form-group">

                <div class="input-group-prepend">
            
                <span class="input-group-text"><i class="fa fa-user"></i></span> 

                </div>

                <input type="text" class="form-control" name="nombre" placeholder="Escriba su Usuario">

            </div>

                <div class="input-group form-group"> 

                <div class="input-group-prepend">

            <span class="input-group-text"><i class="fa fa-key"></i></span>

            </div>

            <input type="password" class="form-control" name="password" placeholder="Escriba su Contraseña">

            </div>

                
                <div class="form-group">

            <input type="submit" value="Iniciar Sesion" class="btn float-right login_btn">

            </div>

            </form>

            </div>

                <div class="card-footer">

                <div class="d-flex justify-content-center links"> No tienes cuenta?<a href="registrar.php">Registrar cuenta</a>

            </div>

		

            </div>

            </div>

            </div>

            </div>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="reservaciones.php" class="hero-btn has-after">
          <img src="./assets/images/hero-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Reserva Tu Mesa</span>
        </a>

      </section>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="index.html" class="logo">
            <img src="./assets/images/Logo.png" width="160" height="50" loading="lazy" alt="grilli home">
          </a>

          <address class="body-4">
            Plaza Mundo Apopa, Primera Etapa, SV
          </address>

          <a href="mailto:booking@grilli.com" class="body-4 contact-link">Selenerestaurant@yopmail.com</a>

          <a href="tel:+88123123456" class="body-4 contact-link">Contacto : +503 7585-3257-4758</a>

          <p class="body-4">
            Abierto : 08:00 am - 10:00 pm
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1">Obten Noticias y Ofertas</p>

          <p class="label-1">
            Subscribete y recibe un <span class="span">25% de descuento.</span>
          </p>

          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Tu Correo" autocomplete="off" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">Subscribete</span>

              <span class="text text-2" aria-hidden="true">Subscribete</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#Home" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="Menu.html" class="label-2 footer-link hover-underline">Menu</a>
          </li>

          <li>
            <a href="#about" class="label-2 footer-link hover-underline">Nosotros</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Blog</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Contacto</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Google Map</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2023 Selene. All Rights Reserved 
            </a>
        </p>

      </div>

    </div>
  </footer>




  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>