@extends('layouts.layout')

@section('title')
    agencia de nuevas ideas para crecer
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="SEOGraphics es una agencia de optimización, posicionamiento, diseño y desarrollos web ">
    <meta name="keywords" content="SEO, seo, diseño, diseño web,">
    <meta property=og:title content="SEOGraphics, Optimización y Posicionamiento web.">
    <meta property=og:url content=https://www.seographics.com.co>
    <meta property=og:image content=https://www.seographics.com.co/images/meta-logo.png alt="logo SEO Graphics" id="meta Logo SEOGraphics">
    <meta property=og:site_name content="SEOGraphics en bogotá, Neiva, Ibague, Colombia">
    <meta property=og:description content="SEOGraphics agencia de nuevas ideas para crecer">
    <link rel=canonical href=https://www.seographics.com.co>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('css')
    @parent    
@endsection

@section('content')
	<div class="main-slider">
        <div class="content">
            <div id="rev_slider_1059_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept121" data-source="gallery">
                <div id="rev_slider_1078_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <li data-index="rs-2972" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="Love it?" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <img src="images/slider-1a.jpg" alt="oficina" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <div class="visible-xs caption-mobile">
                                <div class="h1" style="color: #90c404;">Un buen sitio web es la mejor presentación</div>
                                <div class="h2" style="color: #323a45;">de Servicios y productos incrementando tus ganancias.</div>
                            </div>
                            <div class="tp-caption NotGeneric-Title  tp-resizeme rs-parallaxlevel-3" id="slide-3046-layer-5" data-x="left" data-hoffset="0" data-y="center" data-voffset="0" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[60]" data-fontsize="[90,56,40,30]" data-paddingleft="[0,50,50,50]" style="z-index: 9; white-space: nowrap;text-transform:left;">
                                <div class="h1" style="color: #90c404;">Un buen sitio web
                                    <br>es la mejor presentación</div>
                            </div>
                            <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-2" id="slide-3046-layer-2" data-x="left" data-hoffset="0" data-y="center" data-voffset="140" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap;text-transform:left;">
                                <div class="h2" style="color: #323a45;">de Servicios y productos incrementando tus ganancias.</div>
                                <br>
                                <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="{{ route('portafolio') }}">Nuestro Portafolio</a> </div>
                        </li>
                        <li data-index="rs-3049" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="Love it?" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <img src="images/slider-2.jpg" alt="equipo código" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                          <div class="visible-xs caption-mobile">
                                <div class="h1" style="color: #90c404;">La optimización y el posicionamiento</div>
                                <div class="h2" style="color: #323a45;">mejora el sitio web logrando así muchos más clientes.</div>
                            </div>
                            <div class="tp-caption NotGeneric-Title  tp-resizeme rs-parallaxlevel-3" id="slide-3046-layer-7" data-x="left" data-hoffset="0" data-y="center" data-voffset="0" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[60]" data-fontsize="[90,56,40,30]" data-paddingleft="[0,50,50,50]" style="z-index: 9; white-space: nowrap;text-transform:left;">
                                <div class="h1" style="color: #90c404;">La optimización y
                                    <br>el posicionamiento</div>
                            </div>
                            <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-2" id="slide-3046-layer-15" data-x="left" data-hoffset="0" data-y="center" data-voffset="140" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap;text-transform:left;">
                                <div class="h2" style="color: #323a45;">mejora el sitio web logrando así muchos más clientes.</div>
                                <br>
                                <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="{{ route('portafolio') }}">Nuestro Portafolio</a> </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients">
       <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="">
                        <div class="owl-carousel">
                           <div>
                                <a href="http://pcexpert-online.com/" target="_blank"><img src="images/pc-expert.png" alt="pc.espert" class="img-responsive center-block" /></a>
                            </div>
                            <div>
                                <a href="http://tecnomusic.com.co/" target="_blank"><img src="images/tecnomusic.png" alt="tecnomusic" class="img-responsive center-block" /></a>
                            </div>
                            <div>
                                <a href="http://www.pekaspizza.com/" target="_blank"><img src="images/pekaspizza.png" alt="pekas pizza" class="img-responsive center-block" /></a>
                            </div>

                            <div>
                                <a href="https://www.infihuila.gov.co/" target="_blank"><img src="images/infihuila.png" alt="Infihuila" class="img-responsive center-block" /></a>
                            </div>

                            <div>
                                <a href="http://autocintaspitalito.com/" target="_blank"><img src="images/autocintas.png" alt="Autocintas" class="img-responsive center-block" /></a>
                            </div>

                            <div>
                                <a href="http://sulicam.com/" target="_blank"><img src="images/sulicam.png" alt="sulicam" class="img-responsive center-block" /></a>
                            </div>

                            <div>
                                <a href="http://amarresydominios.mx/" target="_blank"><img src="images/amarres.png" alt="amarres" class="img-responsive center-block" /></a>
                            </div>

                            <div>
                                <a href="http://coramcuchiyuyo.com/" target="_blank"><img src="images/cuchiyuyo.png" alt="coramcuchiyuyo" class="img-responsive center-block" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-white o-hidden services" id="services">
        <div class="container">
           <h2 class="b-clor">Nuestros Servicios</h2>
            <hr class="dark-line" />
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-green-border"> <a href="{{ route('artesgraficas') }}"><span  class="icon-pencil"></span>
                     <div>Artes Gráficas</div><br>
                            </a>
                        <p align="justify">Nuestros expertos hacen estudios previos de mercado hasta encontrar el mejor diseño en cada pieza gráfica, brindando una presentación impecable de tu empresa, así llegarás con una buena imagen corporativa, dinámica y de gran atracción para los nuevos clientes que buscan tus productos y servicios.</p>
                    </div>
                </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-green-border"> <a href="{{ route('disenoweb') }}"><span class="icon-laptop-phone"></span>
                        <div>Diseño Web</div><br>
                            </a>
                        <p align="justify">Después de un estudio de Ideas y posibilidades nos disponemos a crear un sitio adecuado, dinámico y con gran aceptación para los usuarios que están buscando los productos y servicios que ofreces, de esta forma se convertirán en nuevos clientes y lograremos así el crecimiento de tu empresa.</p><br>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-green-border"> <a href="{{ route('optimizar') }}"><span class="icon-puzzle"></span>
                                <div>Optimización Web</div><br>
                            </a>
                        <p align="justify">Cuando hablamos de sitios web que demoran a la hora de su carga y además no sé adaptan a todos los dispositivos tecnológicos, esto nos indica que es hora de hacer nuestro trabajo, el cual consiste en mejorar la carga y adaptación de un sitio en toda su estructura, esto no quiere decir que haremos un nuevo sitio web.</p>
                    </div>
                </div>

            </div>
            <div class="row margin-top-15">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-green-border"> <a href="{{ route('seo') }}"><span class="icon-magnifier"></span>
                                <div>Posicionamiento Web (SEO)</div><br>
                            </a>
                        <p align="justify">El posicionamiento web o SEO es uno de los trabajos que requiere ser llevado por un profesional con experiencia en este campo, ya que se trata de posicionar un sitio web en los mejores lugares de  los motores de búsqueda, donde es necesario el uso de herramientas específicas y de medición para lograr contenido de atracción al usuario, de esta forma tendremos mejores ingresos.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-green-border"> <a href="{{ route('pagoxclic') }}"><span class="icon-select2"></span>
                                <div>Pago por Clic</div><br>
                            </a>
                        <p align="justify">Para lograr un mayor alcance de usuarios que estén navegando en Internet es bueno poder invertir en campañas de marketing, estas ayudarán a lograr un aumento de visitas en nuestro sitio, ya que las campañas de publicidad digital nos permiten tener presencia en muchas páginas de los socios estratégicos de empresas como Google, Bing, Facebook, Twitter, Instagram y Linkedin.</p>
                    </div>
                </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-green-border"> <a href="{{ route('socialmedia') }}"><span class="icon-share"></span>
                                <div>Marketing de medios sociales</div>
                            </a>
                        <p align="justify">Sabemos de la importancia que tiene las redes sociales a la hora de interactuar con nuestros usuarios, por esta razón debemos tener una buena estrategia de marketing dirigida específicamente a brindar información de gran valor de cada producto y servicio de nuestra empresa, así  le daremos la confianza, garantía y seguridad al usuario que busca a la hora de hacer su compra.</p><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="case-studies-section" id="case_studies">
        <div id="case-studies-carousel" class="case-studies-carousel carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#case-studies-carousel" data-slide-to="0" class="active" id="slide-0"></li>
                <li data-target="#case-studies-carousel" data-slide-to="1" id="slide-1"></li>
                <li data-target="#case-studies-carousel" data-slide-to="2" id="slide-2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item item1 active">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 pull-left">
                                    <h2 class="b-clor">Haz crecer tu negocio.<br> ¡Contáctanos ya!</h2>
                                    <p class="regular-text" align="justify">Ayudamos a Jhon a hacer su primer sitio web. ¡Ahora vende deliciosas pizzas en su local además de otros productos que ofrece a sus clientes en su ciudad, ya sea en su establecimiento a domicilio!</p>
                                   <a  target="_blank" href="http://www.pekaspizza.com/"><span class="icon-play-circle"></span><span >Mira el sitio de Pekas Pizza</span></a>
                                </div>
                                <div class="col-md-5 col-xs-12 pull-right floating-img">
                                    <img src="images/pizza.png" alt="pizzero" class="img-responsive pull-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 pull-left">
                                    <h2 class="b-clor">Haz crecer tu negocio.<br> ¡Contáctanos ya!</h2>
                                    <p class="regular-text" align="justify">Ayudamos a Infihuila en el diseño de un sitio acorde a las necesidades ya que esta brinda mejor dinámica, orden y facilidad para sus usuarios ya que brinda la información de sus servicios como sus logros. </p>
                                    <a target="_blank" href="https://www.infihuila.gov.co/"><span class="icon-play-circle"></span><span>Mira el sitio de Infihuila </span></a>
                                </div>
                                <div class="col-md-5 col-xs-12 pull-right floating-img">
                                    <img src="images/browser-screen2.png" alt="funcionario" class="img-responsive pull-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item3">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 pull-left">
                                    <h2 class="b-clor">Haz crecer tu negocio.<br>¡Contáctanos ya!</h2>
                                    <p class="regular-text" align="justify">El hotel Sulicam es uno de los más prestigiosos de la ciudad, así que nuestra ayuda fue en dar a conocer por medio de un sitio web las bellas instalaciones y el servicio que brindan a sus huéspedes.</p>
                                    <a target="_blank" href="http://sulicam.com/"><span class="icon-play-circle"></span><span>Mira el sitio de Hotel Sulicam</span></a>
                                </div>
                                <div class="col-md-5 col-xs-12 pull-right floating-img">
                                    <img src="images/web-sulicam.png" alt="recepcionista" class="img-responsive pull-right">
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
             </div>
        </div>
    </section>
    <section class="bg-white o-hidden why-us common-form-section" id="why-us">
        <div class="container">
            <h2 class="b-clor">Razones para elegirnos</h2>
            <hr class="dark-line" />
            <div class="row">
             <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h3 class="semi-bold">Tenemos soluciones perfectas para tus proyectos.</h3>
                    <p class="regular-text" align="justify">No hay nada más importante que nuestros clientes, así que por cada uno de ellos trabajamos hasta el cansancio logrando las metas que se desean, de esta forma damos en cada proyecto nuestras experiencias y conocimientos de profesionales en complicidad de los clientes que hacemos lo posible que sean partícipes de los cambios de su empresa en el proyecto de innovación en el mundo digital ya que nos encanta las exigencias que nos ponen el día a día el mercado bursátil llamado Internet. </p>
                    <ul>
                        <li><span class="icon-man"></span>Orientación Profesional para construir tu puesta de gran Impacto digital.</li>
                        <li><span class="icon-bag-dollar"></span>Ahorre tiempo, recursos y dinero</li>
                        <li><span class="icon-golf2"></span>Creamos infinitas posibilidades de negocios</li>
                    </ul>
                    <p class="regular-text" align="justify">Lo más importante de cada proyecto que iniciamos es lograr el crecimiento empresarial de cada uno de nuestros clientes, ya que nuestro trabajo es dar a los medios digitales y motores de búsqueda las mejores razones que estas exigen, no es solo imágenes y un gran textos que impacte a los usuarios de un sitio web, la verdad es mucho más profundo nuestro trabajo, ya que nuestro punto de partida es desde el código del sitio web hasta llegar a las redes sociales e integrar todo en un conjunto de armonía digital para dar un gran valor comercial y lograr así las ganancias que tanto esperas. </p>
                </div>
               <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"> </div>
               
               <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    @include('contactform')
                </div>
                
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <div class="banner  o-hidden success-number">
        <div class="clearfix"></div>
        <div class="parallax-container">
            <div class="clearfix"></div>
            <section>
                <div class="clearfix"></div>
                <div class="stuff" data-type="content">
                    <div class="container">
                        <h2>Éxito en los números</h2>
                            <div class="row counter-inner">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="icon-holder pull-left"><span class="icon-users2"></span></div>
                                    <div class="pull-left counter-text">
                                        <div class="counter no_count b-clor">60</div>
                                        <p class="semi-bold">Clientes felices</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="icon-holder pull-left"><span class="icon-calendar-check"></span></div>
                                    <div class="pull-left counter-text">
                                        <div class="counter no_count b-clor">100</div>
                                        <p class="semi-bold">Proyectos completados</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="icon-holder pull-left"><span class="icon-clock"></span></div>
                                    <div class="pull-left counter-text">
                                        <div class="counter no_count b-clor">24,100</div>
                                        <p class="semi-bold">Horas trabajadas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

@section('footer')
	@parent
@endsection

@section('scripts')
    @parent
@endsection
