
@extends('index')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores de Nicaragua - Gastronomía Nicaragüense</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="stylesheet" href="/vista/estilo.css">
    
</head>
<body>
    <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
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
              <a class="nav-link" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/conoce') }}">
                Conoce más
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                ¿Quíenes Somos?
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
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

    <!-- Carrusel Section -->
    <section class="carousel-section">
        <div class="container">
            <div class="carousel-container">
                <div class="carousel-slide active">
                    <img src="/vista/img/vigoron.png" alt="Comida Nicaragüense">
                    <div class="slide-content">
                        <h2>¿Tienes un Emprendimiento Gastronómico?</h2>
                        <p>Date a Conocer con Nosotros</p>
                    </div>
                </div>
            </div>
            <div class="carousel-controls">
                <button class="carousel-btn prev" href="{{route('login')}}">Inicia Sesión</button>
                <button class="carousel-btn next" href="{{route('register')}}">Registrate</button>
            </div>
        </div>
    </section>

    <!-- Lugares Section -->
    <section class="lugares">
        <div class="container">
            <div class="section-title">
                <h2>Visita Nicaragua</h2>
                <p>Descubre la riqueza gastronómica de estas maravillosas ciudades nicaragüenses</p>
            </div>
            <div class="lugares-grid">
                <div class="lugar-card">
                    <div class="lugar-img">
                        <img src="/vista/img/esteli.jpg" alt="Estelí">
                    </div>
                    <div class="lugar-content">
                        <h3>Estelí</h3>
                        <p>Conocida como la "Diamante de las Segovias", ofrece una gastronomía influenciada por las tradiciones del norte.</p>
                        <a href="#" class="lugar-btn">Explorar</a>
                    </div>
                </div>
                <div class="lugar-card">
                    <div class="lugar-img">
                        <img src="/vista/img/leon.jpg" alt="León">
                    </div>
                    <div class="lugar-content">
                        <h3>León</h3>
                        <p>Ciudad universitaria y cultural, famosa por su vigorón, leche burra y otros platillos tradicionales.</p>
                        <a href="#" class="lugar-btn">Explorar</a>
                    </div>
                </div>
                <div class="lugar-card">
                    <div class="lugar-img">
                        <img src="/vista/img/managua.jpg" alt="Managua">
                    </div>
                    <div class="lugar-content">
                        <h3>Managua</h3>
                        <p>La capital ofrece una fusión de sabores de todas las regiones del país en un ambiente cosmopolita.</p>
                        <a href="#" class="lugar-btn">Explorar</a>
                    </div>
                </div>
                <div class="lugar-card">
                    <div class="lugar-img">
                        <img src="/vista/img/sanjuandelsur.jpg" alt="Rivas">
                    </div>
                    <div class="lugar-content">
                        <h3>Rivas</h3>
                        <p>Puerta de entrada a Ometepe, su gastronomía está influenciada por el lago y los productos frescos.</p>
                        <a href="#" class="lugar-btn">Explorar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categorías Section -->
    <section class="categorias">
        <div class="container">
            <div class="section-title">
                <h2>Categorías Gastronómicas</h2>
                <p>Explora los emprendimientos gastronómicos por especialidad culinaria</p>
            </div>
            <div class="categorias-grid">
                <div class="categoria-card">
                    <div class="categoria-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Comida Nicaragüense</h3>
                    <p>Sabores auténticos y tradicionales de la cocina nicaragüense, preparados con recetas ancestrales.</p>
                    <a href="#" class="categoria-btn">Ver</a>
                </div>
                <div class="categoria-card">
                    <div class="categoria-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Comida a la Carta</h3>
                    <p>Menús variados con opciones para todos los gustos, desde platos internacionales hasta fusiones creativas.</p>
                    <a href="#" class="categoria-btn">Ver</a>
                </div>
                <div class="categoria-card">
                    <div class="categoria-icon">
                        <i class="fas fa-hamburger"></i>
                    </div>
                    <h3>Comida Rápida</h3>
                    <p>Opciones prácticas y deliciosas para cuando el tiempo es limitado pero el apetito es grande.</p>
                    <a href="#" class="categoria-btn">Ver</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
                <span> Estelí, Nicaragua </span>
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

    <script>
        // JavaScript para el menú móvil
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const nav = document.querySelector('nav ul');
            
            mobileMenuBtn.addEventListener('click', function() {
                nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
            });
            
            // Ajustar para pantallas grandes
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    nav.style.display = 'flex';
                } else {
                    nav.style.display = 'none';
                }
            });
            
            // Carrusel simple
            const slides = [
                {
                    image: "https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
                    title: "Gallo Pinto Tradicional",
                    description: "El desayuno nicaragüense por excelencia, acompañado de huevo, queso y plátano maduro."
                },
                {
                    image: "https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
                    title: "Nacatamal Nicaragüense",
                    description: "Delicioso tamal relleno de carne, arroz y verduras, envuelto en hoja de plátano."
                },
                {
                    image: "https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
                    title: "Indio Viejo",
                    description: "Plato tradicional a base de maíz, carne y hierbas aromáticas, de sabor único."
                }
            ];
            
            let currentSlide = 0;
            const carouselSlide = document.querySelector('.carousel-slide');
            const prevBtn = document.querySelector('.carousel-btn.prev');
            const nextBtn = document.querySelector('.carousel-btn.next');
            
            function showSlide(index) {
                const slide = slides[index];
                carouselSlide.innerHTML = `
                    <img src="${slide.image}" alt="${slide.title}">
                    <div class="slide-content">
                        <h2>${slide.title}</h2>
                        <p>${slide.description}</p>
                    </div>
                `;
            }
            
            prevBtn.addEventListener('click', function() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            });
            
            nextBtn.addEventListener('click', function() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            });
            
            // Iniciar carrusel
            showSlide(currentSlide);
        });
    </script>

    
</body>
</html>