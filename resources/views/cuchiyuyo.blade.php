@extends('layouts.layout')

@section('title')
Trabajos en Coram Cuchiyuyo
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="La corporación es una organización sin ánimo de lucro creada en el año 2000, con el 
objetivo de lograr la confluencia de esfuerzos de agricultore">
    <meta name="keywords" content="corporacion. ambiental, campo.">
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
<section class="banner o-hidden banner-inner cuchiyuyo-banner">
        <div class="container">
            <div class="banner-txt">
                <h1>Corporación Ambiental Cuchiyuyo</h1>
                <p class="semi-bold">La corporación es una organización sin ánimo de lucro creada en el año 2000, con el <br>objetivo de lograr la confluencia de esfuerzos de agricultores, técnicos y científicos.</p>
                <a href="http://coramcuchiyuyo.com/" class="medium-btn2 btn btn-nofill" target="_blank">VISITA EL SITIO WEB
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
                            <p align="justify">La corporación venia con la idea de darse a conocer tanto a nivel local como nacional ya que su trabajo es a nivel social y el campo por lo tanto al hacerse conocer y encontrar posibilidades de apoyo internacional en sus proyectos ambientales.</p>
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
                            <p align="justify">En el proceso que elaboramos para ellos fue del sitio web con posicionamiento y nicho de mercado con el cual puedan logra los adjetivos iniciales para su crecimiento, damas de esto integramos herramientas de seguimiento y analítica logrando un incremento de localización de usuarios.</p>
                            <ul class="list-with-arrow">
                                <li>Diseño de sitio web.</li>
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
                            <li>+1.64% de sesiones</li>
                            <li>+1.35% de duración promedio de la sesión</li>
                            <li>+16.47% páginas vistas</li>
                            <li>-53.21% tasa de rebote</li>
                            <li>+ 22.23% páginas por sesión</li>
                            <li>+ 18.23% de crecimiento en ventas</li>
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
                            <a href="tecnomusic.html" class="medium-btn2 btn btn-fill">VER DETALLES</a> </div>
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
                            <a href="sulicam.html" class="medium-btn2 btn btn-fill">VER DETALLES</a> </div>
                    </div>
                </div>
                <div class="col-xs-12"> <a href="portafolio.html" class="btn btn-fill full-width">Descubrir más</a> </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
	@parent
@endsection

@section('scripts')
    @parent

    <script>
        $(document).ready(function () {
            var form = $('.emailform');

            /*console.log(form.serialize());*/

            form.submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('contacto.store') }}",
                    method: 'POST',
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(data) {
                        alert('success');
                    },
                    error: function(data) {
                        alert('error');
                    }
                });
            });
        });
    </script>
    <script type=application/ld+json>
    {
    "@context":"http://www.schema.org",
    "@type":"LocalBusiness",
    "image":"https://www.seographics.com.co/images/meta-logo.jpg",
    "name":"SEOGaphics",
    "url":"https://seographics.com.co",
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
