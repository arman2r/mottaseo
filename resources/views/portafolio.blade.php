@extends('layouts.layout')

@section('title')
Portafolio de trabajos echos a nuestros clientes
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="En nuestro portafolio encontraras la dinámica de nuestro trabajo elaborado para cada uno de nuestros clientes proyectando sus ideas y metas.">
    <meta name="keywords" content="Páginas web, optimización, posicionamiento, marketing digital">
    <meta property=og:title content="Portafolio de trabajos echos a nuestros clientes.">
    <meta property=og:type content=website>
    <meta property=og:url content=https://www.seographics.com.co>
    <meta property=og:image content=https://www.seographics.com.co/images/metasocialmendia.jpg alt="logo socialmedia" id="meta Logo SEOGraphics">
    <meta property=og:site_name content="SEOGraphics en bogotá, Neiva, Ibague, Colombia">
    <meta property=og:description content="portafolio de clientes.">
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
<section class="banner  o-hidden banner-inner portfolio-banner">
        <div class="container">
            <div class="banner-txt">
                <h1>Portafolio</h1>
                <p class="semi-bold">Usamos enfoques estratégicos para ofrecer a nuestros clientes servicios de alta calidad.
                     <br /> servicios que aseguran una satisfacción empresarial.</p>
               <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="{{ route('portafolio') }}">Nuestro Portafolio</a> </div>
        </div>
    </section>
   <!--<section class="o-hidden bg-white featured-design-section mobile-app-featured">
        <div class="container">
            <h2 class="b-clor"> Nuevos Proyectos </h2>
            <hr class="dark-line" />
            <div class="row margin-top-40 portfolio-p l-margin portfolio">
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container ">
                            <img src="images/portfolio/por-fea-project-three.jpg" alt="port_img" class="img-responsive">
                            <div class="overlay">
                                <a class="btn btn-nofill proDetModal1">Descubrir</a>
                            </div>
                        </div>
                        <div class="text-content">
                            <h3><a class="proDetModal1">Square<span>Featured - Website</span></a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                            <img src="images/portfolio/por-fea-project.jpg" alt="port_img" class="img-responsive">
                            <div class="overlay">
                                <a class="btn btn-nofill proDetModal2">Descubrir</a>
                            </div>
                        </div>
                       <div class="text-content">
                            <h3><a class="proDetModal2">Google<span>Featured - Logo</span></a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="grid-item">
                        <div class="img_container">
                            <img src="images/portfolio/portfolio-img-one.jpg" alt="port_img" class="img-responsive">
                            <div class="overlay">
                                <a class="btn btn-nofill proDetModal3">Descubrir</a>
                            </div>
                        </div>
                       <div class="text-content">
                            <h3><a class="proDetModal3">Gumtree<span>Featured - eCommerce</span></a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <section id="more-portfolio" class="portfolio-full portfolio clearfix">
        <div class="container">
            <h2 class="b-clor">Portafolio completo</h2>
            <hr class="dark-line" />
            <div class="button-group filter-button-group clearfix">
                <button class="button is-checked" data-filter="*">Todo el trabajo</button>
                <button class="button" data-filter=".a1">Website</button>
                <button class="button" data-filter=".a3">Optimización</button>
            </div>
            <div class="grid clearfix row">
                <div class="a3 grid-item">
                    <div class="img_container">
                        <img src="images/webideu.jpg" alt="IDEU Idiomas Europeos" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal10">Descubrir</a>
                        </div>
                    </div>
                   <div class="text-content">
                        <h3><a class="proDetModal proDetModal10">IDEU Idiomas Europeos.<span>Optimización y posicionamiento web</span></a></h3>
                    </div>
                </div>
               <div class="a2 a1 grid-item">
                    <div class="img_container">
                        <img src="images/web-cuchiyuyo.jpg" alt="Corporación Ambiental Cuchiyuyo" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal1">Descubrir</a>
                        </div>
                    </div>
                   <div class="text-content">
                        <h3><a class="proDetModal proDetModal1">Coram. Cuchiyuyo.<span>Website</span></a></h3>

                    </div>
                </div>
               <div class="a2 a1 grid-item">
                    <div class="img_container">
                        <img src="images/webcssi.jpg" alt="cssi" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal2">Descubrir</a>
                        </div>
                    </div>
                   <div class="text-content">
                        <h3><a class="proDetModal proDetModal2">CSSI Colombia.<span>Website</span></a></h3>
                    </div>
                </div>
                <div class="a2 a1 grid-item">
                    <div class="img_container">
                        <img src="images/web-amarres.jpg" alt="amarres y dominios mexico" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal3">Descubrir</a>
                        </div>
                    </div>
                   <div class="text-content">
                        <h3><a class="proDetModal proDetModal3">Amarre y Dominos.<span>Website</span></a></h3>
                    </div>
                </div>
               <div class="a2 a1 grid-item">
                    <div class="img_container">
                        <img src="images/web-sulicam.jpg" alt="Hotel Sulicam Neiva" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal4">Descubrir</a>
                        </div>
                    </div>
                   <div class="text-content">
                        <h3><a class="proDetModal proDetModal4">Hotel Sulicam.<span>Website</span></a></h3>
                    </div>
                </div>
               <div class="a2 a1 grid-item">
                    <div class="img_container">
                        <img src="images/web-infihuila.jpg" alt="Infihuila Neiva" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal5">Descubrir</a>
                        </div>
                    </div>
                   <div class="text-content">
                        <h3><a class="proDetModal proDetModal5">Infihuila.<span>Website</span></a></h3>
                    </div>
                </div>
               <div class="a2 a1 grid-item">
                    <div class="img_container">
                        <img src="images/web-autocintas.jpg" alt="Autocintas Pitalito" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal6">Descubrir</a>
                        </div>
                    </div>
                   <div class="text-content">
                        <h3><a class="proDetModal proDetModal6">Autocintas.<span>Website</span></a></h3>
                    </div>
                </div>
                <div class="a2 a1 grid-item">
                    <div class="img_container">
                        <img src="images/web-pekas.jpg" alt="Pekas pizza" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal7">Descubrir</a>
                        </div>
                    </div>
                   <div class="text-content">
                        <h3><a class="proDetModal proDetModal7">Pekas Pizza.<span>Website</span></a></h3>
                    </div>
                </div>
                <div class="a3 a4 a1 grid-item">
                    <div class="img_container">
                        <img src="images/webtecnomisic.jpg" alt="Tecnomusic" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal8">Descubrir</a>
                        </div>
                    </div>
                   <div class="text-content">
                        <h3><a class="proDetModal proDetModal8">Tecnomusic.<span>Website - Optimización y posicionamiento</span></a></h3>
                    </div>
                </div>
                <div class="a2 a1 grid-item">
                    <div class="img_container">
                        <img src="images/webpcexpert.jpg" alt="PC Exprext" class="img-responsive">
                        <div class="overlay">
                            <a class="btn btn-nofill proDetModal9">Descubrir</a>
                        </div>
                    </div>
                   <div class="text-content">
                        <h3><a class="proDetModal proDetModal9">PC Expert.<span>Website</span></a></h3>
                    </div>
                </div>
            </div>
            <div class="text-center port-dms"> <a href="portafolio.html" class="btn btn-fill full-width">Descubrir más</a> </div>
        </div>
    </section>
    <div class="modal fade verticl-center-modal" id="getAQuoteModal" tabindex="-1" role="dialog" aria-labelledby="getAQuoteModal">
        <div class="modal-dialog getguoteModal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="customise-form">
                                <form id="contact-form"  action=email.php  method="post" enctype=multipart/form-data>
                                    <h3>¿Quieres una cotización?</h3>
                                    <div class="form-group customised-formgroup"> <span class="icon-user"></span>
                                        <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre">
                                    </div>
                                    <div class="form-group customised-formgroup"> <span class="icon-envelope"></span>
                                        <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email">
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
                                    <div>
                                        <button type="submit" class="btn btn-fill full-width">Si la Quiero<span class="icon-chevron-right"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>¿Que sigue?</h3>
                            <ul class="list-with-arrow">
                                <li>Te enviaremos un correo de confirmación de día y hora que  te contactara uno de nuestros expertos.</li>
                                <li>En un tiempo estimado cotizamos el servicio requerido.</li>
                                <li>Por último podríamos concretar una cita o reunión, ya sea personal o video llamada.</li>
                            </ul>
                            <div class="contact-info-box-wrapper">
                                <div class="contact-info-box"> <span class="icon-telephone"></span>
                                    <div>
                                        <h6>Llamanos</h6>
                                        <p>+57 3192948824</p>
                                    </div>
                                </div>
                                <div class="contact-info-box"> <span class="icon-envelope"></span>
                                    <div>
                                        <h6>Enviar un correo electrónico</h6>
                                        <p>contactanos@seographics.com.co</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="modal fade verticl-center-modal" id="portfolioDetModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal1">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider0">
                                <div id="carousel-bounding-box">
                                    <div id="myCarousel1" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/cuchiyuyo.jpg" alt="cuchi1" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/web2018-cuchiyuyo.jpg" alt="cuchi2" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/web2-cuchi.jpg" alt="cuchi3" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0" class="carousel-selector selected"> <img src="images/cuchiyuyo-mini.jpg" class="img-responsive" alt="cuchi4"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1" class="carousel-selector"> <img src="images/web2018-cuchi-mini.jpg" class="img-responsive" alt="cuchi5"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2" class="carousel-selector"> <img src="images/web2-cuchi-mini.jpg" class="img-responsive" alt="cuchi6"> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text">Diseño del sitio web.</p>
                                <h2 class="b-clor">Corporación Ambiental Cuchiyuyo</h2>
                                <p class="regular-text" align="justify">La corporación ambiental cuchiyuyo pensando en las nuevas tecnologías quiso iniciar su proceso de darse a conocer en el mundo digital, por lo tanto nos han contactado para este gran proyecto, el cual fue el desarrollo de su sitio web con su propuesta de servicios de reforestación, capacitación ambiental, granjas orgánicas y construcción de estufas ecoeficientes.  Ya que estos servicios van dirigidos a las personas que habitan nuestros campos Colombianos.</p>
                                <p class="regular-text" align="justify">Para SEOGraphics fue uno de los trabajos más gratificantes ya que trabajamos en campo y logramos tener contacto con cada una de las personas que participan de estos proyectos productivos, de esta forma pudimos desarrollar un sitio dinámico y muy fácil de navegar y entender por las personas que desean saber qué hace la corporación y de la misma forma a las ONG internacionales que están dispuestas a invertir en desarrollo de proyectos productivos en nuestro país.</p>
                            </div>
                            <h3>Entregamos:</h3>
                            <ul class="list-with-arrow">
                                <li><i class="icon-chevron-right"></i>Estrategia para hacer crecer el negocios en línea.</li>
                                <li><i class="icon-chevron-right"></i>Sitio web único con un excelente diseño de experiencia de usuario.</li>
                                <li><i class="icon-chevron-right"></i> Un sistema de gestión de contenido personalizado y administración del sitio web. </li>
                            </ul>
                            <a target="_blank" href=" http://coramcuchiyuyo.com/" class="medium-btn2  btn btn-fill" >Visita el sitio web</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="portfolioDetModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal2">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                           <div id="slider3">
                                <div id="carousel-bounding-box2">
                                    <div id="myCarousel22" class="carousel slide myCarousel">
                                       <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/cssi540b.jpg" alt="cssi1" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/cssi540.jpg" alt="cssi2" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/cssi504c.jpg" alt="cssi3" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs2">
                                               <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-2" class="carousel-selector selected"> <img src="images/cssi154b.jpg" class="img-responsive" alt="cssi4"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-2" class="carousel-selector"> <img src="images/cssi154.jpg" class="img-responsive" alt="cssi5"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-2" class="carousel-selector"> <img src="images/cssi154c.jpg" class="img-responsive" alt="cssi6"> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text">Diseño del sitio web.</p>
                                <h2 class="b-clor">Corporación de servicios y suministros integrales.</h2>
                                <p class="regular-text">CSSI Colombia es una corporación con alta experiencia en los sectores sociales e industriales dinamizando procesos confiables de calidad, generando oportunidades de desarrollo a escala humana, se cuenta con personal calificado, ubicada en la ciudad de Neiva Huila y su accionar es en todo territorio colombiano.</p>
                                <p class="regular-text">La corporación quería lograr un sitio web donde puedan interactuar con sus clientes además de dar a conocer sus servicios en el ámbito petrolero del departamento del huila.</p>
                            </div>
                            <h3>Entregamos:</h3>
                            <ul class="list-with-arrow">
                                <li><i class="icon-chevron-right"></i> Estrategia para hacer crecer el negocios en línea.</li>
                                <li><i class="icon-chevron-right"></i> Sitio web único con un excelente diseño de experiencia de usuario.</li>
                                <li><i class="icon-chevron-right"></i> Un sistema de gestión de contenido personalizado
                                    <br> en el sitio web.</li>
                            </ul>
                            <a target="_blank" href="http://cssicolombia.com.co/" class="medium-btn2  btn btn-fill" >Visita el sitio web</a>  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="portfolioDetModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal3">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider1">
                                <div id="carousel-bounding-box">
                                    <div id="myCarousel2" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/limpia-amarres.jpg" alt="amarres1" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/tarot.jpg" alt="amarres2" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/web-amarresdo.jpg" alt="amarres3" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs2">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-0" class="carousel-selector selected"> <img src="images/limpia-mini.jpg" class="img-responsive" alt="amarres4"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-1" class="carousel-selector"> <img src="images/tarot-mini.jpg" class="img-responsive" alt="amarres5"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-2" class="carousel-selector"> <img src="images/web-amarres-mini.jpg" class="img-responsive" alt="amarres6"> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text">Diseño de sitio web y campañas de pago en Adwords en la ciudad e México.</p>
                                <h2 class="b-clor">Amarres y Dominios</h2>
                                <p class="regular-text" align="justify">Siendo una pareja joven ya con una gran experiencia en las ciencias ocultas de la magia y lectura de tarot al igual que hechizos de amor y muchas cosas más de este mundo misterioso quisieron ampliar su círculo de clientes, así que nos propusieron que desarrolláramos un sitio web para ellos con cada uno de los servicios que brindan en la ciudad de tijuana México, ya que allí es donde residen la mayor parte de sus clientes como también en la frontera con san diego california.</p>
                                <p class="regular-text" align="justify">Nuestro trabajo fue crear un sitio acorde a las necesidades de esta pareja de místicos con facilidad de sus usuarios y clientes se contacte con ellos de una forma fácil y muy discreta y de esta forma estoy místicos puedan ayudar con su conocimiento milenario.</p>
                            </div>
                            <h3>Entregamos:</h3>
                            <ul class="list-with-arrow">
                                <li><i class="icon-chevron-right"></i> Estrategia para hacer crecer el negocios en línea.</li>
                                <li><i class="icon-chevron-right"></i> Sitio web único con un excelente diseño de experiencia de usuario.</li>
                                <li><i class="icon-chevron-right"></i> Un sistema de gestión de contenido personalizado
                                    <br> en el sitio web.</li>
                            </ul>
                            <a target="_blank" href="http://www.amarresydominios.mx" class="medium-btn2  btn btn-fill">Visita el sitio web</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="portfolioDetModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal4">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider2">
                                <div id="carousel-bounding-box">
                                    <div id="myCarousel3" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/web-sulicam540.jpg" alt="suli1" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/conta-sulicam540.jpg" alt="suli2" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/web-tablet540.jpg" alt="suli3" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs3">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-3" class="carousel-selector selected"> <img src="images/we-sulicam134.jpg" class="img-responsive" alt="suli4"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-3" class="carousel-selector"> <img src="images/conta-suli154.jpg" class="img-responsive" alt="suli5"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-3" class="carousel-selector"> <img src="images/web-table-mini.jpg" class="img-responsive" alt="suli6"> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text">Diseño de sitio web.</p>
                                <h2 class="b-clor">Hotel Sulicam Neiva</h2>
                                <p class="regular-text" align="justify">Es uno de los más prestigiosos hoteles de la ciudad de Neiva además de tener una excelente ubicación al complejo comercial preferido por empresas o grandes comerciantes que visitan esta ciudad, pero ellos notaron que tenían una falencia en la cual se hizo un estudio de medios y este arrojó que una de las grandes falencia era su sitio web el cual era muy complejo y algo desordenado.</p>
                                <p class="regular-text" align="justify">Así que nos contactaron para que presentaremos una nueva propuesta para el sitio web el cual dedicamos tiempo y muchas ideas para poder lograr lo que hoy en día tienen como presencia digital en Internet que es un sitio web que brinda todos los servicios de forma dinámica para los usuarios y clientes.</p>
                            </div>
                            <h3>Entregamos:</h3>
                            <ul class="list-with-arrow">
                                <li><i class="icon-chevron-right"></i>Estrategia para hacer crecer el negocios en línea.</li>
                                <li><i class="icon-chevron-right"></i> Sitio web único con un excelente diseño de experiencia de usuario.</li>
                            </ul>
                            <a target="_blank" href="http://sulicam.com/" class="medium-btn2  btn btn-fill">Visita el sitio web</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="portfolioDetModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal5">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider3">
                                <div id="carousel-bounding-box">
                                    <div id="myCarousel4" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/infiweb540.jpg" alt="infi1" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/notiinfi540.jpg" alt="infi2" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/infikisd540.jpg" alt="infi3" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs4">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-4" class="carousel-selector selected"> <img src="images/infiweb153.jpg" class="img-responsive" alt="infi4"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-4" class="carousel-selector"> <img src="images/notiinfi153.jpg" class="img-responsive" alt="infi5"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-4" class="carousel-selector"> <img src="images/infikisd153.jpg" class="img-responsive" alt="infi6"> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text" >Diseño de sitio web y blog de noticias</p>
                                <h2 class="b-clor">Instituto Financiero para el Desarrollo del Huila (Infihuila)</h2>
                                <p class="regular-text" align="justify">Siendo un instituto financiero para el desarrollo del huila el cual brinda ayuda a pequeñas empresas y comerciantes independientes, se vio en la necesidad de mejorar sus servicios y productos en cuanto a la atención de sus usuarios, por tal motivo fuimos contratados para el desarrollo de su sitio web ya que contaba con ciertos parámetros gubernamentales exigidos para este tipo de instituciones, de esta forma cambiar el aspecto de atención digital a sus usuarios y que estos pueda hacer consultas de sus productos y poder tener más información de los servicios que brinda el instituto.</p>
                                <p class="regular-text" align="justify">Para SEOGraphics fue uno de los trabajos con mayor atención en cada uno de los pasos a desarrollar, ya que en esta ocasión estábamos de la mano con un grupo de integrantes o empleados coordinados por el señor Gerente sugiriendo un montón de ideas para el desarrollo del nuevo sitio además del tiempo dedica a transcribir muchos textos que la mayor parte se encontraban impresos, pero todo este tiempo valió la pena para entregar un sitio acorde a las necesidades institucionales y de la misma forma a sus clientes.</p>
                            </div>
                            <h3>Entregamos:</h3>
                            <ul class="list-with-arrow">
                                <li><i class="icon-chevron-right"></i>Estrategia para hacer crecer el negocios en línea.</li>
                                <li><i class="icon-chevron-right"></i> Sitio web único con un excelente diseño de experiencia de usuario.</li>
                            </ul>
                            <a target="_blank" href="https://www.infihuila.gov.co/" class="medium-btn2  btn btn-fill">Visita el sitio web</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="portfolioDetModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal6">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider4">
                                <div id="carousel-bounding-box">
                                    <div id="myCarousel5" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/web-auto540.jpg" alt="cintas1" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/compra-auto540.jpg" alt="cintas2" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/pago.auto540.jpg" alt="cintas3" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs5">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-5" class="carousel-selector selected"> <img src="images/web-auto153.jpg" class="img-responsive" alt="cintas4"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-5" class="carousel-selector"> <img src="images/copra-auto153.jpg" class="img-responsive" alt="cintas5"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-5" class="carousel-selector"> <img src="images/pago-auto153.jpg" class="img-responsive" alt="cintas6"> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text">Diseño de sitio web.</p>
                                <h2 class="b-clor">Autocintas Pitalito</h2>
                                <p class="regular-text" align="justify">Es una de las empresas locales de venta de rines de lujo y llantas, pero al ver que su bodega aumentaba en productos y pocos clientes se vieron en la necesidad de entrar al mundo digital así que nos contactaron para poder hacer su sueño realidad y poder desarrollar su proyecto de una tienda virtual no sin antes hacer un estudio de mercado para mirar que tan efectiva será su nueva inversión, al nosotros realizar un estudio de mercado tanto internamente con en el resto del país nos dimos cuenta que hay una gran demanda de venta para este tipo de producto en todo el país, así que nos pusimos la camiseta e iniciamos el proceso de realizar su tienda virtual.</p>
                                <p class="regular-text" align="justify">Para nosotros fue una gran experiencia poder hacer este portal ya que aprendemos que otro tipo de mercado y venta así que al estar en el local y ver su movimiento aprendimos que es lo que la gente busca a la hora de decorar su vehículo.</p>
                            </div>
                            <h3>Entregamos:</h3>
                            <ul class="list-with-arrow">
                                <li><i class="icon-chevron-right"></i> Estrategia para hacer crecer el negocios en línea.</li>
                                <li><i class="icon-chevron-right"></i> Sitio web único con un excelente diseño de experiencia de usuario.</li>
                                <li><i class="icon-chevron-right"></i> Un sistema de gestión de contenido personalizado
                                    <br> en el sitio web.</li>
                            </ul>
                            <a target="_blank" href="http://autocintaspitalito.com/" class="medium-btn2  btn btn-fill">Visita el sitio web</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="portfolioDetModal7" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal7">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider5">
                                <div id="carousel-bounding-box">
                                    <div id="myCarousel6" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/frentepekas540.jpg" alt="pekas1" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/web-pekas540.jpg" alt="pekas2" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/pagopekas540.jpg" alt="pekas3" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs6">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-6" class="carousel-selector selected"> <img src="images/frentepekas153.jpg" class="img-responsive" alt="pekas4"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-6" class="carousel-selector"> <img src="images/web-pekas153.jpg" class="img-responsive" alt="pekas5"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-6" class="carousel-selector"> <img src="images/pagopekas153.jpg" class="img-responsive" alt="pekas6"> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text">Diseño de sitio web.</p>
                                <h2 class="b-clor">Pekas Pizza Pitalito</h2>
                                <p class="regular-text" align="justify">Es una de las mejores pizzerías de la ciudad de pitalito huila en donde podrás encontrar productos de altísima calidad así como un variado menú en comida rápida ellos al ver como es la aceptación de sus clientes quisieron incursionar en el mundo digital para lo cual nos contrataron para desarrollar este proyecto el cual brinda a su ciudad la facilidad de ver su carta de productos y contactar con ellos en cualquier momento de sus horarios de atención.</p>
                                <p class="regular-text" align="justify">Para SEOGraphics fue una de las tantas experiencias divertidas en la cual nos enseñaron a preparar cada uno de sus platos como poder probar de ellos y la verdad son muy buenos tanto así que el tiempo que duramos trabajando y comiendo fue estupendo con una gran recompensa para ambos ellos su sitio dinámico y moderno y nosotros unos kilos de más pero valió la pena.</p>
                            </div>
                            <h3>Entregamos:</h3>
                            <ul class="list-with-arrow">
                                <li><i class="icon-chevron-right"></i>Estrategia para hacer crecer el negocios en línea.</li>
                                <li><i class="icon-chevron-right"></i> Sitio web único con un excelente diseño de experiencia de usuario.</li>
                            </ul>
                            <a target="_blank" href="http://www.pekaspizza.com/" class="medium-btn2  btn btn-fill">Visita el sitio web</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="portfolioDetModal8" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal8">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider2">
                                <div id="carousel-bounding-box">
                                    <div id="myCarousel55" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/tecno540a.jpg" alt="tecno1" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/tecno540b.jpg" alt="tecno2" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/tecno540c.jpg" alt="tecno3" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0" class="carousel-selector selected"> <img src="images/tecno154a.jpg" class="img-responsive" alt="tecno4"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1" class="carousel-selector"> <img src="images/tecno154b.jpg" class="img-responsive" alt="tecno5"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2" class="carousel-selector"> <img src="images/tecno154c.jpg" class="img-responsive" alt="tecno6"> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text">Diseño de sitio web, posicionamiento y optimización web.</p>
                                <h2 class="b-clor">Tecnomusic</h2>
                                <p class="regular-text">En tecnomusic soluciones integrales en TIC nos dedicamos a la comercialización, mantenimiento preventivo, correctivo de equipos de cómputo, periféricos y fuentes de suministro eléctrico (UPS). Contamos con más de 15 años de experiencia nos hemos posicionado como una de las mejores empresas, tanto a nivel local como nacional, por esta razón nos sentimos comprometidos día a día con nuestros clientes.</p>
                                <p class="regular-text">Brindamos tecnomusic tener un sitio web más dinámico y de fácil adaptación a todo dispositivo tecnológico ya que son una empresa que vende tecnología a gran escala.</p>
                            </div>
                            <h3>Entregamos:</h3>
                            <ul class="list-with-arrow">
                                <li><i class="icon-chevron-right"></i> Estrategia para hacer crecer el negocios en línea.</li>
                                <li><i class="icon-chevron-right"></i> Sitio web único con un excelente diseño de experiencia de usuario.</li>
                                <li><i class="icon-chevron-right"></i> Un sistema de gestión de contenido personalizado
                                    <br> en el sitio web.</li>
                            </ul>
                            <a target="_blank" href="http://tecnomusic.com.co/" class="medium-btn2  btn btn-fill">Visita el sitio web</a> 
                </div>
            </div>
        </div>
    </div>
            </div>
            </div>
  <div class="modal fade verticl-center-modal" id="portfolioDetModal9" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal9">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider3">
                                <div id="carousel-bounding-box2">
                                    <div id="myCarousel22" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/pc-expert50a.jpg" alt="pc-expert-imac" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/pc-expert540b.jpg" alt="pc-expert-equipo2" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/pc-expert540c.jpg" alt="pc-expert-tablet" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs2">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-2" class="carousel-selector selected"> <img src="images/pc-expert154a.jpg" class="img-responsive" alt="pc-experporttil1"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-2" class="carousel-selector"> <img src="images/pc-expert154b.jpg" class="img-responsive" alt="pc-expertequipo1"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-2" class="carousel-selector"> <img src="images/pc-expert154c.jpg" class="img-responsive" alt="pc-experttablet"> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text">Diseño de sitio web.</p>
                                <h2 class="b-clor">PC Expert</h2>
                                <p class="regular-text">Somos una empresa con altos estándares de calidad, nuestras principales reglas son: Honestidad, Responsabilidad y Satisfacción, de esta forma, brindamos a nuestros clientes la confianza en cada servicios y productos con alta funcionalidad logrando así el verdadero compromiso con sus proyectos.</p>
                                <p class="regular-text">Es uno de nuestros primeros clientes al cual le dedicamos el mayor tiempo posible ya que quería que su sitio web comunicara cada uno de sus aspectos de venta al cada uno de sus cliente ya que es una empresa que brinda muchos servicios y productos en la ciudad de Neiva Huila.</p>
                            </div>
                            <h3>Entregamos:</h3>
                            <ul class="list-with-arrow">
                                <li><i class="icon-chevron-right"></i>Estrategia para hacer crecer el negocios en línea.</li>
                                <li><i class="icon-chevron-right"></i> Sitio web único con un excelente diseño de experiencia de usuario.</li>
                            </ul>
                            <a target="_blank" href="http://pcexpert-online.com/" class="medium-btn2  btn btn-fill">Visita el sitio web</a>  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade verticl-center-modal" id="portfolioDetModal10" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal10">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider4">
                                <div id="carousel-bounding-box3">
                                    <div id="myCarousel3" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/ideu540a.jpg" alt="imageporati1" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/ideu540b.jpg" alt="imageportail2" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/ideu540c.jpg" alt="imagentablet" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs3">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-3" class="carousel-selector selected"> <img src="images/ideu154a.jpg" class="img-responsive" alt="ideuportatil1"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-3" class="carousel-selector"> <img src="images/ideu154b.jpg" class="img-responsive" alt="ideuportatil2"> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-3" class="carousel-selector"> <img src="images/ideu154c.jpg" class="img-responsive" alt="ideutablet"> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="port-modal-content">
                                <p class="gray-text">Optimización de sitio web.</p>
                                <h2 class="b-clor">IDEU Idiomas Europeos</h2>
                                <p class="regular-text">Somos una Institución Educativa con más de 20 años de experiencia creando poliglotas, en conformidad con la ley 1651 y con el decreto 4904, tiene sus programas con el n° 1002476 de 9-9-2014 por parte del Ministerio de Educación Nacional.</p>
                                <p class="regular-text">Ya que es un instituto de idiomas que tiene una gran plataforma de estudio pero el cual no es muy conocida ya que no estaban haciendo un trabajo de posicionamiento y optimización web, para tal labor nos contrataron para incrementar sus clientes</p>
                            </div>
                            <h3>Entregamos:</h3>
                            <ul class="list-with-arrow">
                                <li><i class="icon-chevron-right"></i> Optimización de sitio web.</li>
                                <li><i class="icon-chevron-right"></i> Herramientas de posicionamiento SEO.</li>
                                <li><i class="icon-chevron-right"></i> Herramientas de analítica y seguimiento digital</li>
                            </ul>
                            <a target="_blank" href="https://ideu.com.co/" class="medium-btn2  btn btn-fill">Visita el sitio web</a></div>
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
    "image":"https://www.seographics.com.co/images/metasocialmendia.jpg",
    "name":"SEOGaphics",
    "url":"https://seographics.com.co/portafolio.html",
    "telephone":"+57 3192948824",
    "logo":"https://seographics.com.co/images/logo.png",
    "description":"Nuestro portafolio da a conocer de nuestro trabajo así que los nuevos clientes pueden mirar y visitar las diferentes paginas web y así admirar de nuestro trabajo.",
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
