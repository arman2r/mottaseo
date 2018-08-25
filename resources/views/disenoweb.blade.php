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
                               <img src="images/diseno-web.jpg" alt="design process" class="img-responsive" /> </div>
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
                <div class="col-xs-12"> <a href="{{ route('portafolio') }}" class="btn btn-fill full-width">Descubrir más</a> </div>
            </div>
        </div>
    </section>

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
                                                <img src="images/cuchiyuyo.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/web2018-cuchiyuyo.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/web2-cuchi.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs">
                                                <!-- thumb navigation carousel items -->
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0" class="carousel-selector selected"> <img src="images/cuchiyuyo-mini.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1" class="carousel-selector"> <img src="images/web2018-cuchi-mini.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2" class="carousel-selector"> <img src="images/web2-cuchi-mini.jpg" class="img-responsive" alt=""> </a>
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
                            <div id="slider1">
                                <div id="carousel-bounding-box">
                                    <div id="myCarousel2" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/limpia-amarres.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/tarot.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/web-amarresdo.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs2">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-0" class="carousel-selector selected"> <img src="images/limpia-mini.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-1" class="carousel-selector"> <img src="images/tarot-mini.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-2" class="carousel-selector"> <img src="images/web-amarres-mini.jpg" class="img-responsive" alt=""> </a>
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
    <div class="modal fade verticl-center-modal" id="portfolioDetModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal3">
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
                                                <img src="images/web-sulicam540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/conta-sulicam540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/web-tablet540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs3">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-3" class="carousel-selector selected"> <img src="images/we-sulicam134.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-3" class="carousel-selector"> <img src="images/conta-suli154.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-3" class="carousel-selector"> <img src="images/web-table-mini.jpg" class="img-responsive" alt=""> </a>
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
    <div class="modal fade verticl-center-modal" id="portfolioDetModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal4">
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
                                                <img src="images/infiweb540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/notiinfi540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/infikisd540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs4">
                                                <!-- thumb navigation carousel items -->
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-4" class="carousel-selector selected"> <img src="images/infiweb153.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-4" class="carousel-selector"> <img src="images/notiinfi153.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-4" class="carousel-selector"> <img src="images/infikisd153.jpg" class="img-responsive" alt=""> </a>
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
    <div class="modal fade verticl-center-modal" id="portfolioDetModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal5">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider4">
                                <div id="carousel-bounding-box5">
                                    <div id="myCarousel5" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/web-auto540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/compra-auto540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/pago.auto540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs5">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-5" class="carousel-selector selected"> <img src="images/web-auto153.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-5" class="carousel-selector"> <img src="images/copra-auto153.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-5" class="carousel-selector"> <img src="images/pago-auto153.jpg" class="img-responsive" alt=""> </a>
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
    <div class="modal fade verticl-center-modal" id="portfolioDetModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioDetModal6">
        <div class="modal-dialog getguoteModal-dialog potfolio-modal" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-cross-circle"></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="slider5">
                                <div id="carousel-bounding-box6">
                                    <div id="myCarousel6" class="carousel slide myCarousel">
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/frentepekas540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="1">
                                                <img src="images/web-pekas540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div class="item" data-slide-number="2">
                                                <img src="images/pagopekas540.jpg" alt="images" class="img-responsive">
                                            </div>
                                            <div id="slider-thumbs6">
                                                <ul class="list-inline  thumb-list">
                                                    <li>
                                                        <a id="carousel-selector-0-6" class="carousel-selector selected"> <img src="images/frentepekas153.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-1-6" class="carousel-selector"> <img src="images/web-pekas153.jpg" class="img-responsive" alt=""> </a>
                                                    </li>
                                                    <li>
                                                        <a id="carousel-selector-2-6" class="carousel-selector"> <img src="images/pagopekas153.jpg" class="img-responsive" alt=""> </a>
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
