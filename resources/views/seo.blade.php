@extends('layouts.layout')

@section('title')
SEO Posicionamiento en motores de busqueda
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="Con nuestra experiencia en SEO o posicionamiento web en los motores de búsqueda lograras las metas que deseas y así llegar más rápido a tus clientes">
    <meta name="keywords" content="SEO, seo, posicionamiento, posicionamiento en buscadores,">
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
<section class="banner  o-hidden banner-inner seo-banner">
        <div class="container">
            <div class="banner-txt">
                <h1>Posicionamiento web.</h1>
                <p class="semi-bold" align="justify">Conducir más tráfico a tu sitio web te ayudara  aumentar el rango en <br /> los diferentes motores de búsqueda.</p>
                <div><a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="{{ route('portafolio') }}">Nuestro Portafolio</a> </div>
            </div>
        </div>
    </section>
    <section class="bg-white o-hidden common-form-section  service-description-section">
        <div class="container">
            <h2 class="b-clor">Sé el número uno</h2>
            <hr class="dark-line" />
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h3 class="semi-bold">¡Sobresalir entre la multitud!</h3>
                    <p class="regular-text" align="justify">Para SEOGraphics es muy importante ayudar a nuestros clientes en el mejoramiento de su sitio web de esta forma nos encargamos de hacer un estudio de posicionamiento en motores de búsqueda, ya que al hacerlo se logran los mejores resultados en lo que se refiere a los nuevos usuarios que navegan buscando productos y servicios que brindan cada una de las empresas. </p>
                    <ul>
                        <li><span class="icon-clipboard-pencil"></span>Obtenga una auditoría SEO gratis.</li>
                        <li><span class="icon-find-replace"></span>Optimización completa para aumentar el rango.</li>
                        <li><span class="icon-laptop-phone"></span>Palabras claves e integración de la página de inicio.</li>
                    </ul>
                    <p class="regular-text" align="justify">Cuando se trabaja en posicionamiento web o SEO como es conocido hay que trabajar una buena estructura de palabras claves y manejo de herramientas que nos permite saber los alcances que se logran tanto en motores de búsqueda como usuarios en el sitio web. </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"> </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    @include('contactform')
                </div>
            </div>
        </div>
    </section>
     <section class=" bg-white design-process-section" id="process-tab">
        <div class="container">
            <h2 class="b-clor text-align-center">Nuestro proceso de diseño web</h2>
            <p class="regular-text text-align-center" align="justify">Nuestra estrategia de posicionamiento o SEO garantizá logros en un corto tiempo.</p>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs process-model" role="tablist">
                        <li role="presentation" class="active">
                            <a href="website-development.html#consultation" aria-controls="consultation" role="tab" data-toggle="tab"> <span class="icon-clipboard-pencil"></span>
                                <p>Planificar</p>
                            </a>
                        </li>
                        <li role="presentation"><a href="website-development.html#wire-frame" aria-controls="wire-frame" role="tab" data-toggle="tab"><span class="icon-find-replace"></span>
                                    <p>Implementar</p>
                                </a></li>
                        <li role="presentation"><a href="website-development.html#final-design" aria-controls="final-design" role="tab" data-toggle="tab"><span class="icon-archery"></span>
                                    <p>Objetivo</p>
                                </a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="consultation">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Planificar</h3>
                                <p class="regular-text" align="justify">Tenemos el pleno conocimiento y experiencia en posicionamiento web y esto nos permite hacer una planificación y un mejor proceso a la hora de trabajar el posicionamiento de cada una de las paginas web de nuestros clientes, así daremos mucho más valor al sitio implementando palabras claves en zonas estratégicas para los motores de búsqueda los cuales se encargaran de darnos las mejores ubicaciones en el mismo.</p><br>
                                <img src="images/planificar.jpg" alt="design process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="wire-frame">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Implementar</h3>
                                <p class="regular-text" align="justify">Ya teniendo los resultados y estudió del nicho de mercado como las palabras claves que implementaremos en textos de información al usuario como en al interior del código  del sitio web, con el fin que los motores de búsqueda nos encuentren mucho más rápido y poder lograr las mejores posición a la hora que un usuario este haciendo la búsqueda de algún producto o servicio.</p><br>
                               <img src="images/implementar.jpg" alt="design process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="final-design">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Objetivo</h3>
                                <p class="regular-text" align="justify">Ya tenemos implementada toda la estrategia en el sitio web así que solo es cargarlo en el dominio e implementar las herramientas de posicionamiento de cada uno de los motores de búsqueda con el fin que estos inicien a reconocer y visitar el sitio con más frecuencia para que así lo vayan colocando en los mejores lugares o posiciones de los motores de búsqueda.</p><br>
                              <img src="images/blanco.jpg" alt="design process" class="img-responsive" /> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white o-hidden long-box-wrapper">
        <div class="container">
            <h2 class="b-clor">Casos de éxito</h2>
            <hr class="dark-line" />
            <div class="row">
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
                <div class="col-xs-12">
                    <div><a href="{{ route('portafolio') }}" class="btn btn-fill full-width">Descubrir más</a></div>
                </div>
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
    "image":"https://www.seographics.com.co/images/metaseo.jpg",
    "name":"SEOGaphics",
    "url":"https://seographics.com.co/seo.html",
    "telephone":"+57 3192948824",
    "logo":"https://seographics.com.co/images/logo.png",
    "description":"Para SEOGraphics es muy importante ayudar a nuestros clientes en el mejoramiento de su sitio web de esta forma nos encargamos de hacer un estudio de posicionamiento en motores de búsqueda, ya que al hacerlo se logran los mejores resultados en lo que se refiere a los nuevos usuarios que navegan buscando productos y servicios que brindan cada una de las empresas.",
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
