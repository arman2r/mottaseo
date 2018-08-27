@extends('layouts.layout')

@section('title')
Trabajos en Coram Cuchiyuyo
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="No pierdas más oportunidades, aprende hoy mismo un nuevo idioma, más fácil y rápido, cuando quieras y donde quieras. Ideu Idiomas europeos.">
    <meta name="keywords" content="instituto Ideu">
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
<section class="banner o-hidden banner-inner ideu-banner">
        <div class="container">
            <div class="banner-txt">
                <h1>IDEU Idiomas Europeos</h1>
                <p class="semi-bold">No pierdas más oportunidades, aprende hoy mismo un nuevo 
                    <br>idioma, más fácil y rápido, cuando quieras y donde quieras.</p>
                <a href="https://ideu.com.co" class="medium-btn2 btn btn-nofill" target="_blank">VISITA EL SITIO WEB
</a> </div>
        </div>
    </section>
    <section class="bg-white o-hidden common-form-section case-study-details">
        <div class="container">
           <h2 class="b-clor">Desafíos</h2>
            <hr class="dark-line" />
            <div class="row">
                <div class="col-xs-12">
                    <div class="dis-table">
                        <div> <img src="images/desafio.jpg" alt="case studies" class="img-responsive" /> </div>
                        <div class="text-box">
                            <p align="justify">Para este instituto el gran reto era saber cuantas personas visitan su sitio web, además que no tenia el conocimiento de como estaba su sitio en cuanto a la carga se refiere y sin contar que no tenían un proceso de SEO,  en pocas palabras andaban a ciegas en Internet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white o-hidden common-form-section case-study-details">
        <div class="container">
            <h2 class="b-clor">Soluciones</h2>
            <hr class="dark-line" />
            <div class="row">
                <div class="col-xs-12">
                    <div class="dis-table">
                        <div> <img src="images/Analytics-clientes.jpg" alt="case studies" class="img-responsive" />
                        </div>
                        <div class="text-box order-left">
                            <p align="justify">Nosotros trabajo en el sitio web es de optimizar el sitio además de la integrar herramientas de analítica y seguimiento de posicionamiento web el cual permite que el instituto tenga información constante de el manejo o vistas de los usuarios países, ciudades y demás información de importancia para el inicio de campañas de marketing o de redes sociales. </p>
                            <ul class="list-with-arrow">
                                <li>Trabajo de optimización de sitio.</li>
                                <li>Integración de herramientas de SEO.</li>
                                <li>Integración de herramientas de analítica.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white o-hidden">
        <div class="container">
            <h2 class="b-clor text-align-center">Marcador</h2>
            <div class="row">
                <div class="col-xs-12">
                    <div class="score-table">
                        <ul>
                            <li>+2.64% de sesiones</li>
                            <li>+12.35% de duración promedio de la sesión</li>
                            <li>+ 25.47% páginas vistas</li>
                            <li>-53.21% tasa de rebote</li>
                            <li>+ 22.23% páginas por sesión</li>
                            <li>+ 22.23% de crecimiento en ventas</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white o-hidden long-box-wrapper">
        <div class="container">
            <h2 class="b-clor">Estudios de casos de SEO</h2>
            <hr class="dark-line" />
            <div class="row">
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
                            <a href="{{ route('tecnomusic') }}" class="medium-btn2 btn btn-fill" target="_blank">VER DETALLES</a> </div>
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
                <div class="col-xs-12"> <a href="{{ route('portafolio') }}" class="btn btn-fill full-width">Descubrir más</a> </div>
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
    "url":"https://seographics.com.co/ideu.html",
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
