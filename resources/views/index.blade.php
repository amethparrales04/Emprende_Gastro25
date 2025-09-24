<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="front/images/favicon.png" type="image/x-icon">

  <title>
    Emprendedor Gastronómico
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="front/css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="front/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="front/css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{ url('#') }}">
          <span>
            Emprendedor Gastronómico
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/conoce') }}">
                Conoce más
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.html">
                ¿Quíenes Somos?
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.html">
                Promociones
              </a>
            </li>
            
          </ul>
          <!-- Boton inicio de sesion -->
          <div class="user_option">
            @if(Auth::check())
            <a href="{{route('dashboard')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Dashboard
              </span>
            </a>
            @else()
            <a href="{{route('login')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Inicio de Sesion
              </span>
            </a>
           
          <!-- Boton registrarse -->
            <a href="{{route('register')}}">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span>
                Registrarse
              </span>
            </a>
             @endif
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>

    </header>
    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box"> 
                      <h1>
                        Bienvenidos <br>
                      </h1>
                      <p>
                        El lugar donde puedes descubrir emprendimientos gastrónomicos en Nicaragua, vive la aventura la Comida te espera!
                      </p>
                      <a href="">
                        Contactanos
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img style="width:600px" src="front/images/logoEG.jpeg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Descubre más
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="front/images/comida8.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Café Luz
                </h6>
                <h6>
                  Precio
                  <span>
                    C$200
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Nuevo
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="front/images/comida1.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Luci
                </h6>
                <h6>
                  Precio
                  <span>
                    C$120
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Nuevo
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="front/images/comida2.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Teddy <br>Bear
                </h6>
                <h6>
                  Precio
                  <span>
                    C$110
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Nuevo
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="front/images/comida3.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Flower <br>bit
                </h6>
                <h6>
                  Precio
                  <span>
                    C$95
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Nuevo
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="front/images/comida4.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Villa <br> Nica
                </h6>
                <h6>
                  Precio
                  <span>
                    C$95
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Nuevo
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="front/images/comida5.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Don <br>vigorón
                </h6>
                <h6>
                  Precio
                  <span>
                    C$185
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Nuevo
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="front/images/comida6.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Selección <br>Nic
                </h6>
                <h6>
                  Precio
                  <span>
                    C$100
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Nuevo
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="front/images/comida7.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Dulce Sueños
                </h6>
                <h6>
                  Precio
                  <span>
                    C$150
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Nuevo
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="{{ url('/conoce') }}">
          Ver Más
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->







  <!-- contact section -->

  <section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Contactanos
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d62176.22128811753!2d-86.35262982479249!3d13.098309926779734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sni!4v1758429868381!5m2!1ses!2sni" width="600" height="450" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <form action="#">
            <div>
              <input type="text" placeholder="Nombre" />
            </div>
            <div>
              <input type="email" placeholder="Correo electronico" />
            </div>
            <div>
              <input type="text" placeholder="Celular" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Mensaje" />
            </div>
            <div class="d-flex ">
              <button>
                Enviar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <br><br><br>

  <!-- end contact section -->

   

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col">
            <h6>
              Acerca de nosotros
            </h6>
            <p>
              Somos estudiantes de la Universidad Nacional Francisco Luis Espinoza Pineda, Entusiastas de la tecnología con ánimos de mostrar al mundo Emprendedor Gastronómico tu solución para emprendimiento 
              gastrónomico. 
            </p>
          </div>

          <div class="col">
            <h6>
              Contactanos
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Estelí, Nicaragua</span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+505 8521-5653</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> emprendedorgastr25@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> Todos los derechos reservados.
          <a href="https://html.design/">Emprendedor Gastronómico</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="front/js/jquery-3.4.1.min.js"></script>
  <script src="front/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="front/js/custom.js"></script>

  /<!-- integracion del chat bot -->
<script src="https://cdn.botpress.cloud/webchat/v3.2/inject.js" defer></script>
<script src="https://files.bpcontent.cloud/2025/09/22/22/20250922224234-P0GPJ8L6.js" defer></script>
</body>

</html>