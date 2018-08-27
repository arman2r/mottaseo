@extends('layouts.layout')

@section('title')
Aquí encontraras los trabajos más destacados
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="Cuando trabajamos en un proyecto damos todo nuestro conocimiento y creatividad de esta forma logramos los objetivos que nuestro cliente desea.">
    <meta name="keywords" content="Portafolio, casos de exito, exito, casos">
    <meta property=og:title content="Optimización de sitios web.">
    <meta property=og:type content=website>
    <meta property=og:url content=https://www.seographics.com.co>
    <meta property=og:image content=https://www.seographics.com.co/images/metaseo.jpg alt="logo SEOGraphics" id="meta Logo SEOGraphics">
    <meta property=og:site_name content="SEOGraphics en bogotá, Neiva, Ibague, Colombia">
    <meta property=og:description content="Mejora el rendimiento de tu sitio web.">
    <meta property="fb:admins" content="834441610022571">
    <meta property="fb:app_id" content="470450446638168">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://twitter.com/">
    <meta name="twitter:creator" content="@">
    <link rel="alternate" href="https://www.seographics.com.co/es-co" hreflang="es-co" />
    <link rel=canonical href=https://www.seographics.com.co>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('scripts')
    @parent
@endsection

@section('css')
    @parent
@endsection

@section('content')
<section class="banner o-hidden banner-inner case-studies-details-banner">
        <div class="container">
           <div class="banner-txt">
                <h1>Casos de Éxito</h1>
                <p class="semi-bold">Descubre cómo ayudamos a nuestros clientes a crecer en su negocio en línea.
                 <br /> Te dará una idea de nuestras capacidades.</p>
                <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="{{ route('portafolio') }}">Nuestro Portafolio</a> </div>
        </div>
    </section>
  <section class="o-hidden case-studies-content long-box-wrapper" id="more-case-studies">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6">
                    <div class="box-content-with-img"> <img src="images/ideu-img.jpg" class="img-responsive" alt="seo-case-studies" />
                        <div class="box-content-text">
                            <h3 class="semi-bold">IDEU Idiomas Europeos</h3>
                            <p class="regular-text" align="justify">Al implementar la optimización en el sitio web han mejorado el proceso y la carga del la misma y con ello el aumento de visitas.</p>
                            <ul>
                                <li>Optimización del sitio web en WordPress.</li>
                                <li>Mapa del sitio planeado para aumento de  usuarios, audiencias y objetivos.</li>
                                <li>Estrategia creadas para plataformas de escritorio y móviles.</li>
                            </ul>
                            <a href="{{ route('ideu') }}" class="medium-btn2 btn btn-fill">VER DETALLES</a> </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="box-content-with-img"> <img src="images/web.tecno.jpg" class="img-responsive" alt="web Tecnomusic" />
                        <div class="box-content-text">
                            <h3 class="semi-bold">Tecnomusic</h3>
                            <p class="regular-text" align="justify">Desarrollo de sitio web con optimización y posicionamiento SEO, el posicionamiento fue enfocado en motores de búsqueda como a nivel local.</p>
                            <ul>
                                <li>Desarrollo del sitio en código HTML5 CSS 3 Y JS.</li>
                                <li>Integración de herramientas de analítica y posicionamiento web.</li>
                                <li>Diseño agradable, dinámico, adaptable y muy funcional.</li>
                            </ul>
                            <a href="{{ route('tecnomusic') }}" class="medium-btn2 btn btn-fill">VER DETALLES</a> </div>
                    </div>
                </div>
               <div class="col-xs-6 col-sm-6">
                    <div class="box-content-with-img"> <img src="images/clien.sulicam.jpg" class="img-responsive" alt="seo-case-studies" />
                        <div class="box-content-text">
                            <h3 class="semi-bold">Hotel Sulicam</h3>
                            <p class="regular-text" align="justify">Desarrollo de sitio web con optimización y posicionamiento SEO, el posicionamiento fue enfocado en motores de búsqueda como a nivel local.</p>
                            <ul>
                                <li>Desarrollo del sitio en código HTML5 CSS 3 Y JS.</li>
                                <li>Integración de herramientas de analítica y posicionamiento web.</li>
                                <li>Diseño agradable, dinámico, adaptable y muy funcional.</li>
                            </ul>
                            <a href="{{ route('sulicam') }}" class="medium-btn2 btn btn-fill">VER DETALLES</a> </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="box-content-with-img"> <img src="images/clien.cuchi.jpg" class="img-responsive" alt="seo-case-studies" />
                        <div class="box-content-text">
                            <h3 class="semi-bold">Corporación Ambiental Cuchiyuyo</h3>
                            <p class="regular-text" align="justify">Este proyecto fue gratificante ya que fue un trabajo en grupo y en el campo donde se desarrollan las actividades de la corporación.</p>
                            <ul>
                                <li>Diseño del sitio web en WordPress .</li>
                                <li>Integración de herramientas de analítica y posicionamiento web.</li>
                                <li>Diseño agradable, dinámico, adaptable y muy funcional.</li>
                            </ul>
                            <a href="{{ route('cuchiyuyo') }}" class="medium-btn2 btn btn-fill">VER DETALLES</a> </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="box-content-with-img margin-btm-60"> <img src="images/pekascaso.jpg" class="img-responsive" alt="seo-case-studies" />
                        <div class="box-content-text">
                            <h3 class="semi-bold">Pekas Pizza</h3>
                            <p class="regular-text">Pekas pizza es uno de los mejores restaurantes de comida rápida en la ciudad e Pitalito Huila, pero quisieron dar un paso más allá y nos contrataron para hacer su sitio web y de esta forma brindar un mejor servicio a sus clientes mejorando los tiempos de entrega y pedido a domicilio.</p>
                            <ul>
                                <li>Desarrollo del sitio en código HTML5 CSS 3 Y JS.</li>
                                <li>Integración de herramientas de analítica y posicionamiento web.</li>
                                <li>Diseño agradable, dinámico, adaptable y muy funcional.</li>
                            </ul>
                            <a href="{{ route('portafolio') }}" class="medium-btn2 btn btn-fill proDetModal">VER DETALLES</a> </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="box-content-with-img margin-btm-60"> <img src="images/cssicaso.jpg" class="img-responsive" alt="seo-case-studies" />
                        <div class="box-content-text">
                            <h3 class="semi-bold">CSSI Colombia</h3>
                            <p class="regular-text">CSSI Colombia es una empresa de servicios petroleros de cables de alta y baja atención, al ver que tenían un sitio web no agradable y poca dinámico para sus clientes nos contrataron para cambiar su sitio y de esta forma dar a sus clientes una web más dinámica y de fácil navegación</p>
                            <ul>
                                <li>Desarrollo del sitio en código HTML5 CSS 3 Y JS.</li>
                                <li>Integración de herramientas de analítica y posicionamiento web.</li>
                                <li>Diseño agradable, dinámico, adaptable y muy funcional.</li>
                            </ul>
                            <a href="{{ route('portafolio') }}" class="medium-btn2 btn btn-fill proDetModal">VIEW DETAILS</a> </div>
                    </div>
                </div>
              <!--<div class="col-xs-12">
                    <nav aria-label="Page navigation" class="pagination-case ">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"> <a class="page-link" href="case-studies.html#" tabindex="-1"><span class="icon-chevron-left"></span></a> </li>
                            <li class="page-item"><a class="page-link" href="case-studies.html#">1</a></li>
                            <li class="page-item"><a class="page-link" href="case-studies.html#">2</a></li>
                            <li class="page-item"><a class="page-link" href="case-studies.html#">3</a></li>
                            <li class="page-item"> <a class="page-link" href="case-studies.html#"><span class="icon-chevron-right"></span></a> </li>
                        </ul>
                    </nav>
                </div>-->
            </div>
        </div>
   </section>
@endsection

@section('footer')
	@parent
@endsection

@section('scripts')
    @parent
    <script type=application/ld+json>
    {
    "@context":"http://www.schema.org",
    "@type":"LocalBusiness",
    "image":"https://www.seographics.com.co/images/meta-logo.jpg",
    "name":"SEOGaphics",
    "url":"https://seographics.com.co/casosexito.html",
    "telephone":"+57 3192948824",
    "logo":"https://seographics.com.co/images/logo.png",
    "description":"SeoGraphics es una agencia dedicada a diseñar sitios Web de gran impacto comercial con las mejores herramientas de optimización y posicionamiento en los motores de búsqueda, de esta forma será más fácil para los clientes encontrar los productos y servicios de tu empresa. En SEOGraphics trabajamos de la mano contigo para hacer crecer tu negocio mejorando los medios digitales, ya que integramos el sitio web con las redes sociales así optimizando el alcance de nuevos clientes y lograr las metas que deseas.",
    "priceRange":"$$$","address":{"@type":"PostalAddress","streetAddress":"Carrera 46 # 137 - 32 Bogotá, Colombia ","addressLocality":"bogota",
    "addressRegion":"Cundinamarca",
    "postalCode":"111111",
    "addressCountry":"Colombia"},
    "geo":{"@type":"GeoCoordinates",
    "latitude":"4.722963","longitude":"-74.052821"},
    "openingHours":"Mo, Tu, We, Th, Fr 09:00-20:00 Sa 09:00-14:00",
    "contactPoint":{"@type":"ContactPoint",
    "telephone":"+57 3192948834","contactType":"sales"},
    "aggregateRating":{"@type":"AggregateRating",
    "ratingValue":"4.8","ratingCount":"95"}}</script>
@endsection
