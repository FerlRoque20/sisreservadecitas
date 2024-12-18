<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bienvenidos a ADSMOTORS</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-geo-alt d-flex align-items-center"><a href="https://www.google.com/maps/place/ADS+Motors+-+Taller+Automotriz/@-18.0025402,-70.2568532,17z/data=!4m15!1m8!3m7!1s0x915acf8a875cb921:0x1e5c2adf72fce6a9!2sADS+Motors+-+Taller+Automotriz!8m2!3d-18.0025453!4d-70.2542783!10e1!16s%2Fg%2F11k2z2sd34!3m5!1s0x915acf8a875cb921:0x1e5c2adf72fce6a9!8m2!3d-18.0025453!4d-70.2542783!16s%2Fg%2F11k2z2sd34?entry=ttu&g_ep=EgoyMDI0MTIwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank">
          Av. Patricio Melendez N. 1261 - Tacna</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+51 972672732 - 984280652</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://www.tiktok.com/@ads.motors" class="twitter"><i class="bi bi-tiktok"></i></a>
          <a href="https://web.facebook.com/adsmotors.1/photos_by" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">ADS MOTORS</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">Acerca de</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#departments">Departamentos</a></li>
            
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="{{url('login')}}">INGRESAR</a>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/Portada.png" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
        <h2 style="color: white;">Bienvenido</h2>
        <p style="color: white;">Al sistema de reservas de citas de ADS MOTROS, tu centro de confianza.</p>

        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Reserva tu cita</h3>
              <div class="text-center">
                <!-- Aplicando estilo en línea con fondo negro transparente y texto blanco -->
                <a href="{{url('/admin')}}" class="more-btn" style="display: inline-flex; align-items: center; padding: 10px 20px; background-color: rgba(0, 0, 0, 0.5); color: white; border-radius: 5px; text-decoration: none; font-size: 16px; transition: background-color 0.3s, transform 0.3s;">
                  <span>Reservar ahora</span> <i class="bi bi-chevron-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="bi bi-wrench"></i> <!-- Icono actualizado -->
                    <h4>Mantenimiento General de Vehículos</h4>
                    <p>Ofrecemos mantenimiento integral para tu vehículo: desde revisiones de motor hasta servicios de frenos, suspensión y más.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="bi bi-car-front"></i> <!-- Icono actualizado -->
                    <h4>Alineación y Balanceo</h4>
                    <p>Mejoramos la estabilidad de tu vehículo mediante una alineación y balanceo computarizado para garantizar una conducción segura.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-gear"></i> <!-- Icono actualizado -->
                    <h4>Reparación de Motor y Transmisión</h4>
                    <p>Brindamos diagnósticos y reparaciones precisas para motores y transmisiones, asegurando el mejor rendimiento de tu vehículo.</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>
          </div>

        </div><!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->
    
    <br>
    <br>
    
    <div class="container">
    <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="card-title">CALENDARIO DE ATENCION DE ENCARGADOS</h3>
                                        </div>
<br>
                                        <div class="col-md-12">
                                            <label for="area_id">AREAS DISPONIBLES</label>
<hr>
                                                <select name="area_id" id="area_select" class="form-control">
                                                    <option value="">Seleccione un Area...</option>
                                                    @foreach($areas as $area)
                                                        <option value="{{$area->id}}">{{$area->ubicacion . " - " . $area->especialidad}}</option>
                                                    @endforeach
                                                </select>   
                                        </div>
                                    </div>
                            </div>
                            <div class="card-body">
                                <script>
                                    $('#area_select').on('change',function () {
                                        var area_id = $('#area_select').val();
                                        //alert(area_id);
                                        

                                        if(area_id){
                                            $.ajax({
                                              url: "{{url('/areas/')}}" + '/' + area_id,
                                              type: 'GET',
                                                success: function (data) {
                                                    $('#area_info').html(data);
                                                },
                                                error: function () {
                                                    alert('Error al obtener los datos del consultorio'); 
                                                }
                                            });
                                        }else{
                                            $('#area_info').html('');
                                        }
                                    });
                                </script>
                                <div id="area_info">

                                </div>      

                                
                            </div>
                        </div>
                    </div>
                </div>
    </div>


    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/about.jpeg" class="img-fluid" alt="">
            <a href="https://web.facebook.com/watch/?v=837140671612895" class="glightbox pulsating-play-btn"></a>
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>Sobre nosotros</h3>
            <p>
              Somos ADS Motors Empresa líder en importacion y distribucion en el Sur del Perú de llantas y Aros nuestra amplia experiencia nos ha dado a conocer las diferentes necesidades en el rubro automotriz así complementando con nuestro taller multimarca.
            </p>
            <ul>
              <li>
                <i class="bi bi-ev-front"></i>
                <div>
                  <h5>"Tu auto merece lo mejor. ¡Dale el cuidado que necesita con nosotros!"</h5>
                  <p>"¿Problemas con tu coche? Déjanos ayudarte a volver a la carretera en un abrir y cerrar de ojos."</p>
                </div>
              </li>
              <li>
                <i class="bi bi-person-workspace"></i>
                <div>
                  <h5>"Nos apasiona tu coche tanto como a ti. Ven y descubre un servicio de calidad que se nota."</h5>
                  <p>"¿Tu coche está dando señales de alarma? ¡Actúa ahora y ahorra en reparaciones a largo plazo!"</p>
                </div>
              </li>
              <li>
                <i class="bi bi-car-front"></i>
                <div>
                  <h5>"¿A tu coche le hace falta un cuidado extra? Te ofrecemos el mantenimiento preventivo que tu vehículo necesita."</h5>
                  <p>"Te garantizamos un servicio rápido sin comprometer la calidad. ¡Vuelve a disfrutar de tu vehículo al 100%!"</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->



    <!-- Services Section -->
    <section id="services" class="services section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Servicios</h2>
  <p>¿Necesitas mantenimiento o reparación de tu vehículo? ¡Estamos listos para ofrecerte el mejor servicio y solución en el menor tiempo posible!</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">
    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-tools"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Mantenimiento Completo de Vehículos</h3>
        </a>
        <p>Brindamos un servicio integral para mantener tu vehículo en óptimas condiciones, revisando motor, frenos, suspensión y más.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-align-left"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Alineamiento Computarizado 3D</h3>
        </a>
        <p>Te ayudamos a corregir el ángulo de las ruedas para mejorar la estabilidad, el rendimiento de tus llantas y evitar el desgaste irregular.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-balance-scale"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Balanceo Computarizado</h3>
        </a>
        <p>Asegúrate de que tus llantas estén equilibradas correctamente para una conducción más suave y segura.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-car-crash"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Mantenimiento de Frenos</h3>
        </a>
        <p>Garantiza la seguridad de tu vehículo con un sistema de frenos en perfecto estado. Realizamos inspección y reemplazo de piezas cuando sea necesario.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-gas-pump"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Limpieza de Inyectores</h3>
        </a>
        <p>Mejora la eficiencia de tu motor y reduce el consumo de combustible con un servicio de limpieza de inyectores.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-database"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Rectificado de Disco y Tambor</h3>
        </a>
        <p>Restauramos la superficie de los discos y tambores para asegurar un rendimiento óptimo del sistema de frenos.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-oil-can"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Cambio de Aceite</h3>
        </a>
        <p>El cambio de aceite es fundamental para la vida útil de tu motor. Realizamos un servicio rápido y eficiente con los mejores productos.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-cogs"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Mantenimiento Preventivo y Correlativo</h3>
        </a>
        <p>Programamos mantenimientos periódicos para garantizar el buen estado de tu vehículo, reduciendo riesgos de fallas mayores.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-tachometer-alt"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Afinamiento de Motor</h3>
        </a>
        <p>Mejoramos el rendimiento de tu motor con ajustes precisos para que tu vehículo funcione de manera eficiente y sin pérdidas de potencia.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1000">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-snowflake"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Recarga de Aire Acondicionado</h3>
        </a>
        <p>Te ofrecemos un servicio completo de recarga de aire acondicionado para que disfrutes de un viaje cómodo durante todo el año.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1100">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-wrench"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Mecánica en General</h3>
        </a>
        <p>Solucionamos todo tipo de problemas mecánicos en tu vehículo. Desde reparaciones menores hasta trabajos más complejos.</p>
      </div>
    </div><!-- End Service Item -->

  </div>

</div>

</section><!-- /Services Section -->



    <!-- Departments Section -->
    <section id="departments" class="departments section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sucursales</h2>
        <p>Agenda tu cita hoy mismo y da el primer paso hacia un auto más seguro y eficiente.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">SUCURSAL-01</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">SUCURSAL-02</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">SUCURSAL-03</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="departments-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Sucursal-01-TACNA/PERU</h3>
                    <p class="fst-italic">ubicacion: AV. Patricio Melendez 1261 - Tacna</p>
                    <p class="fst-italic">Numero de celular: 972672732</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Sucursal-02-TACNA/PERU</h3>
                    <p class="fst-italic">ubicacion: AV. Jorgue Basadre Grohoman</p>
                    <p class="fst-italic">Mz. C. Lt. 12 - Alto de la Alianza - Tacna</p>
                    <p class="fst-italic">Numero de celular: 952528092</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Sucursal-03-MOQUEGUA/PERU</h3>
                    <p class="fst-italic">ubicacion: AV. Manuel C. de la Torre 134 - Moquegua</p>
                    <p class="fst-italic">Numero de telefono: 053-479233</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Departments Section -->

    

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Preguntas frecuentes</h2>
        <p>Sus necesidades resultan de algo de lo que quiere escapar.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">
            <div class="faq-item faq-active">
                <h3>¿Cuál es la ubicación de ADS Motors?</h3>
                <div class="faq-content">
                  <p>Nos encontramos en Av. Patricio Melendez N. 1261 - Tacna. Si tienes dudas sobre cómo llegar, no dudes en contactarnos, y te daremos indicaciones claras. También puedes ver nuestra ubicación en Google Maps para facilitar tu llegada.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>¿Qué servicios ofrece ADS Motors?</h3>
                <div class="faq-content">
                  <p>ADS Motors ofrece una amplia gama de servicios automotrices, que incluyen: mantenimiento preventivo, reparación de motores, diagnóstico electrónico, cambio de frenos, revisión de suspensión, alineación y balanceo, reparación de transmisiones, y mucho más. Trabajamos con vehículos de todas las marcas y modelos.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>¿Cómo puedo saber si mi vehículo necesita un mantenimiento?</h3>
                <div class="faq-content">
                  <p>Si notas cualquier sonido extraño, problemas con el rendimiento, o si tu vehículo ha alcanzado el kilometraje recomendado para algún servicio (como cambio de aceite o revisión de frenos), es hora de visitar ADS Motors para una revisión. Además, realizamos mantenimientos preventivos según el manual del fabricante de tu vehículo.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>¿Puedo solicitar una cotización antes de realizar un servicio?</h3>
                <div class="faq-content">
                  <p>Sí, puedes pedir una cotización antes de realizar cualquier servicio. Solo danos detalles sobre el tipo de reparación o mantenimiento que necesitas y con gusto te proporcionaremos un presupuesto detallado.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>¿Puedo ver el progreso de mi reparación mientras está en curso?</h3>
                <div class="faq-content">
                  <p>En ADS Motors, siempre mantenemos informados a nuestros clientes sobre el progreso de las reparaciones. Si deseas saber en qué estado se encuentra tu vehículo durante el proceso, no dudes en llamarnos y te proporcionaremos una actualización detallada.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>¿Tienen algún servicio para vehículos híbridos o eléctricos?</h3>
                <div class="faq-content">
                  <p>Sí, en ADS Motors también atendemos vehículos híbridos y eléctricos. Realizamos diagnósticos, mantenimiento de baterías, y reparación de los sistemas eléctricos, siempre con la tecnología adecuada para garantizar que tu vehículo funcione de manera óptima.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <div class="container">

        <div class="row align-items-center">

          <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
            <h3>Testimonios</h3>
            <p>
            En ADS Motors, nos dedicamos a ofrecer soluciones automotrices de alta calidad, brindando servicios personalizados 
            que cubren desde el mantenimiento preventivo hasta las reparaciones más complejas, siempre con el 
            compromiso de asegurar el mejor rendimiento y la seguridad de tu vehículo
            </p>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-1.png" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Jose charles Choque apaza</h3>
                        <h4>Cliene Habitual</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Llevo años confiando en ADS Motors para el mantenimiento de mi auto, y siempre me 
                        sorprenden con su profesionalismo y atención al detalle. No solo resuelven cualquier 
                        problema mecánico, sino que también se aseguran de que mi vehículo esté en las mejores 
                        condiciones posibles. ¡Totalmente recomendados!</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-2.png" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Ana C</h3>
                        <h4>Cliene Habitual</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Muy buen servicio</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-3.png" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Alberto Sánchez Paquera</h3>
                        <h4>Cliene Habitual</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Tuve una urgencia con mi vehículo y no sabía a quién acudir. ADS Motors me atendió 
                        de inmediato y resolvieron el problema rápidamente.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-4.png" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Fernando Mamani</h3>
                        <h4>Cliene Habitual</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>buen lugar , lo único es que me gustaría que implementen una sala de espera 
                        con asientos cómodos .., también un personal que este al 
                        tanto de que vehículo entran y los recepcióne y no estar ahí 
                        parado sin saber a quién hablar.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-5.png" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>John C.</h3>
                        <h4>Cliene Habitual</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Llevo años confiando en ADS Motors para el mantenimiento de mi auto, y siempre 
                        me sorprenden con su profesionalismo y atención al detalle. 
                        No solo resuelven cualquier problema mecánico, sino que 
                        también se aseguran de que mi vehículo esté en las mejores condiciones posibles. 
                        ¡Totalmente recomendados!</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galeria</h2>
        <p>Calidad en cada pieza, confianza en cada servicio.</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-1.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-2.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-3.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-4.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-5.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-6.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-7.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-8.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contactanos</h2>
        <p>¿A tu coche le hace falta un cuidado extra? Te ofrecemos el mantenimiento preventivo que tu vehículo necesita.</p>
      </div><!-- End Section Title -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.4880476700596!2d-70.2568532254484!3d-18.002540181192604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915acf8a875cb921%3A0x1e5c2adf72fce6a9!2sADS%20Motors%20-%20Taller%20Automotriz!5e0!3m2!1ses!2spe!4v1733936819793!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div><!-- End Google Maps -->
      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">ADS MOTORS</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>Av. Patricio Melendez N. 1261 - Tacna</p>
            <p class="mt-3"><strong>Celular:</strong> <span>+51 972672732</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://www.tiktok.com/@ads.motors" class="twitter"><i class="bi bi-tiktok"></i></a>
            <a href="https://web.facebook.com/adsmotors.1"><i class="bi bi-facebook"> </i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Servicios de ADS MOTORS</h4>
          <ul>
            <li><a href="#">Mantenimiento Completo de Vehiculos</a></li>
            <li><a href="#">Aliniamiento Computarizado 3D</a></li>
            <li><a href="#">Balanceo Computarizado</a></li>
            <li><a href="#">Mantenimiento de Frenos</a></li>
            <li><a href="#">Limpieza de Inyectores</a></li>
            <li><a href="#">Rectificado de Disco y Tambor</a></li>

          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
        <h4>Servicios de ADS MOTORS</h4>
        <ul>
            <li><a href="#">Cambio de Aceite</a></li>
            <li><a href="#">Mantenimiento Preventivo Y Correlativo</a></li>
            <li><a href="#">Afinamiento de Motor</a></li>
            <li><a href="#">Escaneo Electronico</a></li>
            <li><a href="#">Recarga de Aire Acondicionado</a></li>
            <li><a href="#">Mecanica en General</a></li>

          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Distribucion de Neumaticos la por Mayor y Menor</h4>
          <ul>
            <li><a href="#">Yokohama</a></li>
            <li><a href="#">Bridgestone</a></li>
            <li><a href="#">Hankook</a></li>
            <li><a href="#">Apollo</a></li>
            <li><a href="#">Habilead</a></li>
            <li><a href="#"> ETC...</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Redes Sociales</h4>
          <ul>
            <li><a href="https://web.facebook.com/adsmotors.1">Facebook</a></li>
            <li><a href="https://www.tiktok.com/@ads.motors">Tik Tok</a></li>
          </ul>
        </div>

      </div>
    </div>



  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>