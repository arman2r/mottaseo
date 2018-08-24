@extends('layouts.layout')

@section('title')
Artes gráficas la mejor forma de comunicarte con tus clientes.
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="En SEOgraphics tenemos un grupo de personas con la mejor experiencia en artes gráficas los cuales están la tu disposición a la hora que hacer o cambiar la imagen corporativa de ti negocio o empresa.">
    <meta name="keywords" content="Tarjetas, pendones, camisetas, pancartas, papelería empresarial, rivistas, catalogos.">
    <meta property=og:title content=" Artes gráficas la mejor forma de comunicarte.">
    <meta property=og:type content=website>
    <meta property=og:url content=https://www.seographics.com.co/artesgraficas.html>
    <meta property=og:image content=https://www.seographics.com.co/images/metaartes.jpg alt="logo SEOGraphics" id="meta Logo SEOGraphics">
    <meta property=og:site_name content="Artes Graficas la mejor forma de comunicar">
    <meta property=og:description content="SEOgraphics tenemos experiencia en artes gráficas">
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
	<section class="banner  o-hidden banner-inner logo-branding-banner">
        <div class="container">
            <div class="banner-txt">
                <h1>Artes Gráficas</h1>
                <p class="semi-bold">Dale a tu empresa una nueva identidad visual corporativa en la cual<br> ponemos a tu disposición profesionales del diseño.</p>
                <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="portafolio.html">Nuestro Portafolio</a>
                 </div>
         </div>
    </section>
    <section class="bg-white o-hidden common-form-section  service-description-section">
        <div class="container">
            <h2 class="b-clor">¿Por qué es importante la identidad corporativa?</h2>
            <hr class="dark-line" />
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h3 class="semi-bold">¡Sobresalir entre la multitud!</h3>
                    <p class="regular-text" align="justify">Sabemos que los clientes siempre tendrán una imagen de tu negocio y esto lo lograrás con una buena identidad corporativa que hable por sí solo de tu empresa, ya que te destacará entre muchas de las marcas del sector, al tener una buena  identidad corporativa  te dará prestigio y de fácil recordación a los clientes, los cuales siempre tendrán presente a la hora de adquirir tus productos o servicios. </p>
                    <ul>
                        <li><span class="icon-star"></span>Identidad corporativa moderna y adecuado para tu negocio.</li>
                        <li><span class="icon-users"></span>Marca que se destaca en la multitud.</li>
                        <li><span class="icon-road-sign"></span>Enfoque estratégico para tu Identidad corporativa.</li>
                    </ul>
                    <p class="regular-text"align="justify" >Para SEOGraphics es de suma importancia el poder ayudarte en tu proceso, ya que nuestra experiencia en diseño de piezas gráficas es de más de 12 años garantizándote que lo que dejes en nuestras manos será una de las piezas más novedosas que tendrás, así que permítenos trabajar para ti. </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"> </div>                            
                
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    @include('contactform')
                        
                    <!--
                    <div class="customise-form">
                        <form class="email_form" action="email.php" method="post">
                            <div class="form-element-wrapper">
                                <h3>¿Quieres una cotización?</h3>
                                <div class="form-group customised-formgroup"> <span class="icon-user"></span>
                                    <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-group customised-formgroup"> <span class="icon-envelope"></span>
                                    <input type="text"  id="txtEmail" name="txtEmail" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group customised-formgroup"> <span class="icon-telephone"></span>
                                    <input type="text" id="txtPhone" name="txtPhone" class="form-control" placeholder="Móvil">
                                </div>
                                <div class="form-group customised-formgroup"> <span class="icon-laptop"></span>
                                    <input type="text" id="txtSitio" name="txtSitio" class="form-control" placeholder="Website">
                                </div>
                                <div class="form-group customised-formgroup"> <span class="icon-bubble"></span>
                                    <textarea id="txtMensaje" name="txtMensaje" class="form-control" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-fill full-width"> Si la Quiero <span class="icon-chevron-right"></span></button>
                            </div>
                        </form>
                    </div>
                    -->
                </div>
                
            </div>
        </div>
    </section>
    <section class="bg-white design-process-section" id="process-tab">
        <div class="container">
            <h2 class="b-clor text-align-center">Nuestro proceso de identidad corporativa</h2>
            <p class="regular-text text-align-center">Nuestra estrategia integral de diseño garantiza un perfecto diseñado para su negocio.</p>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                        <li role="presentation" class="active"><a href="logo-and-branding.html#exploration" aria-controls="exploration" role="tab" data-toggle="tab"><span class="icon-magnifier"></span>
                                    <p>Exploración</p>
                                </a></li>
                        <li role="presentation"><a href="logo-and-branding.html#sketches" aria-controls="sketches" role="tab" data-toggle="tab"><span class="icon-pencil3"></span>
                                    <p>Bocetos</p>
                                </a></li>
                        <li role="presentation"><a href="logo-and-branding.html#digitization" aria-controls="digitization" role="tab" data-toggle="tab"><span class="icon-vector"></span>
                                    <p>Digitalización</p>
                                </a></li>
                        <li role="presentation"><a href="logo-and-branding.html#color" aria-controls="color" role="tab" data-toggle="tab"><span class=" icon-palette"></span>
                                    <p>Color</p>
                                </a></li>
                        <li role="presentation"><a href="logo-and-branding.html#logo" aria-controls="logo" role="tab" data-toggle="tab"><span class="icon-star"></span>
                                    <p>Arte final</p>
                                </a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="exploration">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Exploración</h3>
                                <p class="regular-text"align="justify" >Nos encanta hacer estudios de mercado y competencias ya que esto nos ayuda con grandes ideas a la hora de diseñar cualquiera que sea tu necesidad en artes gráficas de esta forma podemos brindarte un trabajo impreso de alta calidad, desempeño y alto impacto para tus clientes.</p>
                                <p class="regular-text">SeoGraphics es una agencia con profesionales experimentados en las diferentes áreas de las artes gráficas, diseño, optimización, posicionamiento web y Marketing digital.</p>
                                <img src="images/explorar.jpg" alt="seo process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="sketches">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Bocetos</h3>
                                <p class="regular-text"align="justify" >Todo lo hacemos a lápiz y papel ya que nos gusta jugar con la creatividad y el conocimiento de nuestros expertos en diseño, los cuales son los encargados de dar vida a un dibujo echo en un papel de aquí pasa a las computadoras donde inicia el verdadero proceso de arte digital.</p>
                                <p class="regular-text">Lo más rico de trabajar con diseño es saber que una pequeña idea se formara en una buena pieza gráfica llena de colores y toques magistrales de una mano experta.</p>
                                <img src="images/bocetos.jpg" alt="design process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="digitization">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Digitalización</h3>
                                <p class="regular-text"align="justify" >Es uno de los mejores procesos que podemos disfrutar ya que frente a una computadora desarrollamos y damos vida a nuestro boceto, aquí es donde la experiencia y el alto conocimiento de las herramientas digitales dan los frutos que espera cada uno de nuestros clientes.</p>
                                <p class="regular-text">Contamos con equipos y herramientas perfectas para cada una de las necesidades de nuestros clientes de esta forma podemos cumplir con sus sueños.</p>
                                <img src="images/digita.jpg" alt="seo process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="color">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Color</h3>
                                <p class="regular-text"align="justify" >El color es uno de los pasos más importantes ya que si no tenemos en cuenta cada uno de los factores que conllevan a una buena creación gráfica esto puede salir mal y de paso dañar nuestra reputación, así que vivimos cada momento del diseño de una pieza gráfica a la hora de implementarlo.</p>
                                <p class="regular-text">Trabajamos con las mejores herramientas de colores para brindar la calidad y optimización en cada proceso que realizamos.</p>
                                <img src="images/color.jpg" alt="seo process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="logo">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Arte final</h3>
                                <p class="regular-text"align="justify" >Aquí es cunado nuestros expertos en las artes del diseño examinan cada pieza grafía antes de su entrega, ya que de esto depende nuestro trabajo y que mejor es entregar un trabajo a tiempo y en excelentes condiciones ya que para SEOGraphics es de suma importancia el bienestar de nuestros clientes.</p>
                                <p class="regular-text">En este paso de finalización de cada trabajo de arte gráfico es en el que nos enfocamos aún más para hacer la entrega del material a cada uno de nuestros clientes. </p>
                                <img src="images/artefinal.jpg" alt="seo process" class="img-responsive" /> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <section class="o-hidden bg-white featured-design-section mobile-app-featured">
        <div class="container">
            <h2 class="b-clor">Lo que hacemos</h2>
            <hr class="dark-line" />
            <div class="row margin-top-40 logo-b portfolio">
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                            <img src="images/tarjetas.jpg" alt="port_img" class="img-responsive">
                            
                        </div>
                        <div class="text-content">
                            <h3><a class="proDetModal proDetModal1">Tarjetas de presentación</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                            <img src="images/pendones.jpg" alt="port_img" class="img-responsive">
                        </div>
                        <div class="text-content">
                            <h3><a class="proDetModal proDetModal2">Plublicidad impresa</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                            <img src="images/papeleria.jpg" alt="port_img" class="img-responsive">
                         </div>
                        <div class="text-content">
                            <h3><a class="proDetModal proDetModal3">Papelería Corporativa</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                            <img src="images/catalogo.jpg" alt="port_img" class="img-responsive">
                        </div>
                        <div class="text-content">
                            <h3><a class="proDetModal proDetModal4">Impresión Digital</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                            <img src="images/articulos.jpg" alt="port_img" class="img-responsive">
                         </div>
                       <div class="text-content">
                            <h3><a class="proDetModal proDetModal5">Artículos publicitarios</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                            <img src="images/revista.jpg" alt="port_img" class="img-responsive">
                        </div>
                       <div class="text-content">
                            <h3><a class="proDetModal proDetModal6">Revistas y Catálogos</a></h3>
                        </div>
                    </div>
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
    "image":"https://www.seographics.com.co/images/metaartes.jpg",
    "name":"SEOGaphics",
    "url":"https://seographics.com.co/artesgraficas.html",
    "telephone":"+57 3192948824",
    "logo":"https://seographics.com.co/images/logo.png",
    "description":"¡Sobresalir entre la multitud!\nSabemos que los clientes siempre tendrán una imagen de tu negocio y esto lo lograrás con una buena identidad corporativa que hable por sí solo de tu empresa, ya que te destacará entre muchas de las marcas del sector, al tener una buena identidad corporativa te dará prestigio y de fácil recordación a los clientes, los cuales siempre tendrán presente a la hora de adquirir tus productos o servicios.",
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
