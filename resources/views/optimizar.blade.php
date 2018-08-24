@extends('layouts.layout')

@section('title')
Optimizando tu sitio web darás una mejor experiencia
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="Quieres que tu sitio web este entre los mejores puestos de los motores de búsqueda, nosotros te ayudamos a lograr que tu sitio sea él más rápido.">
    <meta name="keywords" content="optimizar sitios web, optimiza, optimización de sitios web, optimización web">
    <meta property=og:title content="Optimización de sitios web.">
    <meta property=og:type content=website>
    <meta property=og:url content=https://www.seographics.com.co>
    <meta property=og:image content=https://www.seographics.com.co/images/metaoptimizar.jpg alt="logo SEO Graphics" id="meta Logo SEOGraphics">
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
<section class="banner  o-hidden banner-inner pay-per-click-banner">
        <div class="container">
            <div class="banner-txt">
                <h1>Optimización de sitios web</h1>
                <p class="semi-bold" align="justify">Optimizando el código de tu sitio web mejoraras el rendimiento de la misma, <br>ya que el sitio cargará mucho más rápido y así darás una buena experiencia<br> a tus usuarios.</p>
                <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="portafolio.html">Nuestro Portafolio</a>
            </div>
        </div>
    </section>
    <section class="bg-white o-hidden common-form-section  service-description-section">
        <div class="container">
            <h2 class="b-clor">Mejora la carga de tu sitio web</h2>
            <hr class="dark-line" />
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h3 class="semi-bold">Agiliza tu sitio y brinda la mejor experiencia.</h3>
                    <p class="regular-text" align="justify">Con nuestro proceso de optimización te permitirá mejorar la carga y procesos de tu sitio web de esta forma brindaras a tus usuarios la mejor experiencia a la hora de navegar en ella y así convertirlos en potenciales clientes de tus productos y servicios.</p>
                    <ul>
                        <li><span class="icon-clipboard-pencil"></span>Análisis de código del sitio.</li>
                        <li><span class="icon-find-replace"></span>Optimización completa para aumentar el rango.</li>
                        <li><span class="icon-laptop-phone"></span>Palabras claves e integración de la página.</li>
                    </ul>
                    <p class="regular-text" align="justify">Cuando un sitio web se encuentra optimizado brinda las mejores oportunidades de navegabilidad y procesos en menos tiempo, ya que en la actualidad todo sitio web debe de ser rápido y adaptable a cualquier dispositivo tecnología. </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"> </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    @include('contactform')
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white design-process-section" id="process-tab">
        <div class="container">
            <h2 class="b-clor text-align-center">Nuestro proceso de Optimización</h2>
            <p class="regular-text text-align-center">Nuestra estrategia de optimización de sitios web aumenta la velocidad de carga en los diferentes dispositivos tecnológicos.</p>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                        <li role="presentation" class="active"><a href="seo.html#discover" aria-controls="discover" role="tab" data-toggle="tab"><span class="icon-magnifier"></span>
                                    <p>Análisis</p>
                                </a></li>
                        <li role="presentation"><a href="seo.html#strategy" aria-controls="strategy" role="tab" data-toggle="tab"><span class="icon-archery"></span>
                                    <p>Estrategia</p>
                                </a></li>
                        <li role="presentation"><a href="seo.html#optimization" aria-controls="optimization" role="tab" data-toggle="tab"><span class="icon-puzzle"></span>
                                    <p>Optimización</p>
                                </a></li>
                        <li role="presentation"><a href="seo.html#content" aria-controls="content" role="tab" data-toggle="tab"><span class="icon-find-replace"></span>
                                    <p>Integración</p>
                                </a></li>
                        <li role="presentation"><a href="seo.html#reporting" aria-controls="reporting" role="tab" data-toggle="tab"><span class="icon-rocket"></span>
                                    <p>En marcha</p>
                                </a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="discover">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Análisis</h3>
                                <p class="regular-text" align="justify">Nos damos a la tarea de hacer estudios de campo o nichos de mercado digitales así podemos hacer un cronograma de trabajo y estructurar los pasos a seguir en el proceso de optimización del sitio web.</p>
                                <p class="regular-text">Al hacer la estructura del código nos permite que el sitio poco a poco logre posicionamiento en los motores de búsqueda así lograremos que haya más visitas </p>
                                <img src="images/ideas.jpg" alt="Análisis" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="strategy">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Estrategia</h3>
                                <p class="regular-text" align="justify">La estrategia que hacemos es estructurar el código del sitio web con este proceso damos a los motores de búsqueda la facilidad de encontrar y renderizar el sitio en cada uno de los dispositivos digitales que los usuarios utilizan para navegar en Internet.</p>
                                <p class="regular-text">Este es el proceso que permite mejorar considerablemente la carga de todo sitio web de esta forma darás una experiencia a los usuarios. </p>
                                <img src="images/Estrategia.jpg" alt="Estrategia" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="optimization">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Optimización</h3>
                                <p class="regular-text" align="justify">Al estructurar todo el código y mejorando la estructura del sitio con el fin de que su carga sea más rápida adaptándose a cada tipo de dispositivo digital así podrás llegar a más usuarios mejorando la experiencia.</p>
                                <p class="regular-text">Solo optimizar el código de su estructura también es mejorar el tamaño de las imágenes sea cual sea su formato ya que esto mejorara la carga del mismo.   </p>
                                <img src="images/opti.jpg" alt="Optimización" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="content">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Integración</h3>
                                <p class="regular-text" align="justify">En este paso ya tenemos estructurado y optimizado el código, imágenes y demás es hora de hacer integración de código de seguimiento de las redes sociales el cual permite a la hora de hacer campañas en ellas esta se integrara directamente al sitio web </p>
                                <p class="regular-text">Al hacer la integración de este código podrás hacer campañas de pago en las diferentes redes sociales y entregar a los clientes publicidad de productos servicios. </p>
                                <img src="images/integra.jpg" alt="Integración" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="reporting">
                            <div class="design-process-content">
                                <h3 class="semi-bold">En marcha</h3>
                                <p class="regular-text" align="justify">Ya teniendo todo listo solo queda subirlo al dominio correspondiente de esta forma ya los motores de búsqueda darán una mejor clasificación y así mismo te dará mejor posición en ellos.</p>
                                <p class="regular-text">Ya estando en este punto notaras que la carga de tu sitio será mejor y más dinámico así que los usuarios tendrán la mejor experiencia a la hora de navegar en el sitio web.  </p>
                                <img src="images/marcha.jpg" alt="En marcha" class="img-responsive" /> </div>
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
                    <div class="box-content-with-img"> <img src="images/ideu-img.jpg" class="img-responsive" alt="seo-case-studies" />
                        <div class="box-content-text">
                            <h3 class="semi-bold">IDEU Idiomas Europeos</h3>
                            <p class="regular-text" align="justify">Al implementar la optimización en el sitio web han mejorado el proceso y la carga del la misma y con ello el aumento de visitas.</p>
                            <ul>
                                <li>Optimización del sitio web en WordPress.</li>
                                <li>Mapa del sitio planeado para aumento de  usuarios, audiencias y objetivos.</li>
                                <li>Estrategia creadas para plataformas de escritorio y móviles.</li>
                            </ul>
                            <a href="ideu.html" class="medium-btn2 btn btn-fill">VER DETALLES</a> </div>
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
                            <a href="tecnomusic.html" class="medium-btn2 btn btn-fill">VER DETALLES</a> </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div><a href="portafolio.html" class="btn btn-fill full-width">Descubrir más</a></div>
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
    "image":"https://www.seographics.com.co/images/metaoptimizar.jpg",
    "name":"SEOGaphics",
    "url":"https://seographics.com.co/optimizar.html",
    "telephone":"+57 3192948824",
    "logo":"https://seographics.com.co/images/logo.png",
    "description":"Con nuestro proceso de optimización te permitirá mejorar la carga y procesos de tu sitio web de esta forma brindaras a tus usuarios la mejor experiencia a la hora de navegar en ella y así convertirlos en potenciales clientes de tus productos y servicios.",
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
