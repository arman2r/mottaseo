@extends('layouts.layout')

@section('title')
SEOGraphics encontraras los mejores diseñadores web
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="Un sitio web es la carta de presentación de tu empresa por lo tanto en SEOGraphics te  ayudaremos  con el mejor diseño del mercado al mejor precio. ">
    <meta name="keywords" content="Diseño, diseño web, páginas web, paginas, diseño de páginas">
    <meta property=og:title content="Encontraras los mejores diseñadores web.">
    <meta property=og:type content=website>
    <meta property=og:url content=https://www.seographics.com.co>
    <meta property=og:image content=https://www.seographics.com.co/images/metadiseño.jpg alt="logo SEOGraphics" id="meta Logo SEOGraphics">
    <meta property=og:site_name content="Diseños web frescos y dinámicos para tu empresa o negocio.">
    <meta property=og:description content="SEOGraphics encontraras un diseño web moderno">
    <meta property="fb:admins" content="834441610022571">
    <meta property="fb:app_id" content="470450446638168">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://twitter.com/seographics">
    <meta name="twitter:creator" content="@seographics">
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
<section class="banner  o-hidden banner-inner website-banner">
        <div class="container">
           <div class="banner-txt">
                <h1>Diseño de páginas web</h1>
                <p class="semi-bold">Un buen  sitio web agrega grandes valores a tu negocio <br>desde la idea lo diseñamos todo.</p>
                <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="portafolio.html">Nuestro Portafolio</a>
                 </div>
        </div>
    </section>
    <section class="bg-white o-hidden common-form-section  service-description-section">
        <div class="container">
            <h2 class="b-clor">Diseño web adaptable</h2>
            <hr class="dark-line" />
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h3 class="semi-bold">Un diseño para todas las plataformas</h3>
                    <p class="regular-text" align="justify">Es en la forma que diseñamos, ya que las nuevas tecnologías nos exigen que una página web se adapte a los dispositivos que los usuarios disponen para la navegación en Internet y como dicen ahora si no estás en Internet no existes, así que nuestro trabajo es desarrollar sitios dinámicos, adaptables y funcionales para todo tipo de proyecto ya sea empresarial o personal. </p>
                    <ul>
                        <li><span class="icon-laptop-phone"></span>Un diseño para su escritorio, tablet y dispositivo móvil.</li>
                        <li><span class="icon-lollipop"></span>Hermoso y moderno diseño que hace la diferencia.</li>
                        <li><span class="icon-rocket"></span>Aumente tus ventas con una experiencia de usuario construida estratégicamente.</li>
                    </ul>
                    <p class="regular-text" align="justify">En SEOGraphics contamos con profesionales que cada día están en aprendizaje constante para entregar a cada uno de nuestros clientes lo mejor del desarrollo de un sitio web con lo último en tecnología y plataformas de construcción y diseño. </p>
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
            <p class="regular-text text-align-center">Nuestra estrategia integral garantiza un sitio web perfectamente diseñado para tu negocio.</p>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs process-model" role="tablist">
                        <li role="presentation" class="active">
                            <a href="website-development.html#consultation" aria-controls="consultation" role="tab" data-toggle="tab"> <span class="icon-bubble-user"></span>
                                <p>Ideas</p>
                            </a>
                        </li>
                        <li role="presentation"><a href="website-development.html#wire-frame" aria-controls="wire-frame" role="tab" data-toggle="tab"><span class="icon-pencil-ruler"></span>
                                    <p>Diseño</p>
                                </a></li>
                        <li role="presentation"><a href="website-development.html#final-design" aria-controls="final-design" role="tab" data-toggle="tab"><span class="icon-laptop-phone"></span>
                                    <p>Entrega</p>
                                </a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="consultation">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Ideas</h3>
                                <p class="regular-text" align="justify">Para SEOGraphics es de suma importancia tener clara la idea que cada uno de nuestros clientes a la hora de desarrollar su sitio web, este es nuestro punto de partida en el cual nos reunimos en nuestro estudio con el grupo de creativos y diseñadores a plasmar en bocetos como será el desarrollo paso a paso del nuevo proyecto, esto nos permite ampliar la idea del cliente con nuestro conocimiento y poder desarrollar el sitio web que siempre ha deseado.</p>
                                <img src="images/ideas-luz.jpg" alt="design process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="wire-frame">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Diseño</h3>
                                <p class="regular-text" align="justify">Este es el segundo y más importante paso del proyecto, ya que aquí es donde el grupo se integra y se inicia con un diseño digital donde se estructura el sitio web del cliente, si dejar pasar la supervisión de los desarrolladores los cuales son los encargados de dar vida a este diseño ya que  pasarán horas  del día digitado código para armar desde allí un sitio dinámico, amable, adaptable y de fácil usabilidad para los usuarios.</p><br>
                               <img src="images/dise%C3%B1o-web.jpg" alt="design process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="final-design">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Entrega</h3>
                                <p class="regular-text" align="justify">Ya que previamente hemos hecho un estudio de nombre y dominio adecuado para la empresa o negocio, siendo este el paso final y aprobado por nuestro cliente procedemos a hacer la instalación del sitio el cual permitirá su búsqueda mucho más facilidad a usuarios y clientes, ya que el sitio ha sido desarrollado para que se adapte a todo dispositivo tecnológico que permita la navegación en Internet.</p><br>
                              <img src="images/final.jpg" alt="design process" class="img-responsive" /> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="o-hidden bg-white featured-design-section mobile-app-featured">
        <div class="container">
            <h2 class="b-clor">Nuestros Clientes</h2>
            <hr class="dark-line" />
            <div class="row margin-top-40 logo-b portfolio">
                <div class="col-xs-6 col-sm-4">
                    <div class="a3 a4 a1 grid-item">
                    <div class="img_container">
                        <img src="images/web-cuchiyuyo.jpg" alt="Corporación Ambiental Cuchiyuyo" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal1">Descubrir</a>
                        </div>
                    </div>
                   
                    <div class="text-content">
                        <h3><a class="proDetModal proDetModal1">Coram. Cuchiyuyo. <span>Website</span></a></h3>
                    </div>
                </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                        <img src="images/web-amarres.jpg" alt="amarres y dominios mexico" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal2">Descubrir</a>
                        </div>
                     </div>
                  
                    <div class="text-content">
                        <h3><a class="proDetModal proDetModal2">Amarre y Dominos.<span>Website</span></a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                        <img src="images/web-sulicam.jpg" alt="Hotel Sulicam Neiva" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal3">Descubrir</a>
                        </div>
                    </div>
                   
                    <div class="text-content">
                        <h3><a class="proDetModal proDetModal3">Hotel Sulicam.<span>Website</span></a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                        <img src="images/web-infihuila.jpg" alt="Infihuila Neiva" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal4">Descubrir</a>
                        </div>
                     
                    </div>
                   
                    <div class="text-content">
                        <h3><a class="proDetModal proDetModal4">Infihuila.<span>Website</span></a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                        <img src="images/web-autocintas.jpg" alt="Autocintas Pitalito" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal5">Descubrir</a>
                        </div>
                      
                    </div>
                   
                    <div class="text-content">
                        <h3><a class="proDetModal proDetModal5">Autocintas.<span>Website</span></a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                        <img src="images/web-pekas.jpg" alt="Pekas pizza" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal6">Descubrir</a>
                        </div>
                      
                    </div>
                  
                    <div class="text-content">
                        <h3><a class="proDetModal proDetModal6">Pekas Pizza.<span>Website</span></a></h3>
                    </div>
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
    <script type=application/ld+json>
    {
    "@context":"http://www.schema.org",
    "@type":"LocalBusiness",
    "image":"https://www.seographics.com.co/images/metadiseño.jpg",
    "name":"SEOGaphics",
    "url":"https://seographics.com.co/disenoweb.html",
    "telephone":"+57 3192948824",
    "logo":"https://seographics.com.co/images/logo.png",
    "description":"Un diseño para todas las plataformas - Es en la forma que diseñamos, ya que las nuevas tecnologías nos exigen que una página web se adapte a los dispositivos que los usuarios disponen para la navegación en Internet y como dicen ahora si no estás en Internet no existes, así que nuestro trabajo es desarrollar sitios dinámicos, adaptables y funcionales para todo tipo de proyecto ya sea empresarial o personal.",
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
