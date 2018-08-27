@extends('layouts.layout')

@section('title')
Aumente el tráfico con las publicaciones de pago
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="Al realizar campañas de pago en plataformas como los son Google Adwords, Bing, Facebook, Youtube, Twitter e Instagran aumentaras él potencias web.">
    <meta name="keywords" content="Publicidad de pago, google adwords, Youtube, twittre app, Facebook business, campañas de pago, SEM">
    <meta property=og:title content="Optimización de sitios web.">
    <meta property=og:type content=website>
    <meta property=og:url content=https://www.seographics.com.co>
    <meta property=og:image content=https://www.seographics.com.co/images/metapagoxclick.jpg alt="logo" id="meta Logo SEOGraphics">
    <meta property=og:site_name content="SEOGraphics en bogotá, Neiva, Ibague, Colombia">
    <meta property=og:description content="Aumente el tráfico con las publicaciones de pago.">
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
	<link rel="stylesheet" type="text/css" href="css/foundation.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/styles_foundation.css" rel="stylesheet" />
	<style>
		.row{
			width:100% !important;
			margin:0 0 !important;
			max-width:100% !important;
			
		}
	</style>
@endsection

@section('content')
<section class="banner  o-hidden banner-inner pagosxclick-banner">
        <div class="container">
            <div class="banner-txt">
                <h1>Pago por clic</h1>
                <p class="semi-bold">Aumente el tráfico del sitio web rápidamente gracias a la publicidad de pago en motores
                 <br/>  de búsqueda.
                </p>
                <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="{{ route('portafolio') }}">Nuestro Portafolio</a> </div>
        </div>
    </section>
    <section class="bg-white o-hidden common-form-section  service-description-section">
        <div class="container">
            <h2 class="b-clor">Pagar solo por publicidad real</h2>
            <hr class="dark-line" />
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h3 class="semi-bold">Aumentar el tráfico a tu sitio web.</h3>
                    <p class="regular-text" align="justify">Sabemos que al tener un sitio web deseamos que este sea rentable ya que el proceso de posicionamiento es un tanto demorada debido a su complejidad, así que debemos ayudar a nuestro sitio con campañas de pago para acelerar el proceso de los motores de búsqueda de esta forma nos daremos a conocer mucho más rápido.</p>
                    <ul>
                        <li><span class="icon-pen"></span>La forma más rápida de aumentar el tráfico</li>
                        <li><span class="icon-find-replace"></span>Optimización completa para aumentar el rango.</li>
                        <li><span class="icon-laptop-phone"></span>Diseño e integración del sitio web.</li>
                    </ul>
                    <p class="regular-text" align="justify">Al hacer campañas de pago tienes un mundo de posibilidades ya que las plataformas tiene una gran cantidad de socios en los cuales se publicaran nuestros anuncios y así lograr el incremento en ventas y clientes además del seguimiento de los mismos para futuras campañas.</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"> </div>
             	<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					@include('contactform')
            	</div>
            </div>
        </div>
    </section>
    
    <section class="section p-t-100 p-b-60" id="service">
<div class="row" style="max-width:75rem !important;margin-right: auto !important;margin-left: auto !important;">
<div class="large-12 column">
<div class="el-content">
<h2 data-brackets-id="1407" class="b-clor">Campañas de pago que funcionan.</h2>
<hr class="dark-line" />
<div class="el-desc p-t-30 large-7 column large-centered"><p class="regular-text" align="justify" >Llevaremos a cabo un análisis a gran escala de tu panorama de SEO para descubrir el nicho de mercado y así implementar la mejor estrategia que te dará una mayor rentabilidad y impulsara el tráfico a tu sitio web mediante campañas en las diferentes plataformas de pago.</p></div>
</div>
</div>
</div>
<div class="row" style="max-width:75rem !important;margin-right: auto !important;margin-left: auto !important;">
<div class="large-12 columns">
<div class="block-tab-ppc p-t-60">
<ul class="accordion" data-responsive-accordion-tabs="tabs large-tabs">
	<li class="accordion-item is-active" data-accordion-item=""><a class="accordion-title ppc-tab_nav" href="#"><img src="images/ppc/adwordlogo.svg"  alt="Logo Adwords" width="60" /> </a>

	<div class="accordion-content ppc-tab_content" data-tab-content="">
	<div class="row align-middle">
	<div class="large-6 small-12 column">
	<div class="el-content p-t-30 p-b-30">
	<figure><img src="images/ppc/adwordimage.svg" alt="adwords"/></figure>
	</div>
	</div>

	<div class="large-6 small-12 column">
	<div class="el-content p-t-30 p-b-30">
	<p class="el-subtitle">Campañas en</p>

	<h3 data-brackets-id="2771" class="semi-bold">Google Adwords</h3>

	<div class="divider float-left"></div>

	<div class="clear"></div>

	<div class="el-desc m-t-30" >
	<p class="regular-text" align="justify">Nuestro servicio de administración de Pago Por Clic (PPC) en AdWords generar tráfico de alta calidad para tu sitio web ya que tiene varias posibilidades de publicación de anuncios entre ellos está el de búsqueda, Red display, video outstream, shopping y campaña de aplicaciones entre otras permitiendo trabajar diferentes formatos como lo son de texto, Reactivo, Imagen, Anuncios para promocionar una aplicación, video, Anuncio de productos de Shopping, Anuncios de muestra de productos en Shopping y Anuncios solo de llamada.</p>

	<div class="row m-t-30">
	<div class="large-6 column">
	<ul class="ls-list ls-list-check blue">
		<li>Red social pagada</li>
		<li>Pago por Clic &amp; Impresión</li>
		<li>Contenido Patrocinado</li>
	</ul>
	</div>

	<div class="large-6 column">
	<ul class="ls-list ls-list-check blue">
		<li>Anuncios Animados</li>
		<li>Segmentación &amp; Mercado</li>
		<li>Seguimiento de Visitas</li>
	</ul>
	</div>
	</div>

	<div class="divider-line m-t-15 m-b-15"></div>

	<p class="fs-12">Con Google Adwords podrás llegar a más persona y dar conocer tus productos y servicios e incrementar tus las ganancias de tu empresa.</p>
	</div>
	</div>
	</div>
	</div>
	</div>
	</li>
	<li class="accordion-item" data-accordion-item=""><a class="accordion-title ppc-tab_nav" href="#"><img src="images/ppc/binglogo.svg" alt="Logo bing" width="60" /> </a>
	<div class="accordion-content ppc-tab_content" data-tab-content="">
	<div class="row align-middle">
	<div class="large-4 small-12 column">
	<div class="el-content p-t-30 p-b-30">
	<p class="el-subtitle">Campañas en</p>

	<h3 data-brackets-id="2771" class="semi-bold">Bing</h3>

	<div class="divider float-left"></div>

	<div class="clear"></div>

	<figure><img src="images/ppc/bingimage.svg" alt="Bing" /></figure>
	</div>
	</div>

	<div class="large-8 small-12 column">
	<div class="el-content p-t-30 p-b-30">
	<h4 class="el-title p-t-30">Usa Bing Ads para conectarte con millones de clientes potenciales que buscan tu negocio.</h4>

	<div class="clear"></div>

	<div class="el-desc m-t-30">
	<p class="regular-text" align="justify">La ventaja que obtenemos en costo por clic es un excelente retorno de la inversión, mejorando en un 85% las campañas así llegaremos a más usuarios en la Red de Bing ya que podemos centralizar las campañas  ya sea por ciudades, condados o áreas con cierta distancia de tu negocio. </p> 
    <p class="regular-text" align="justify">Si ya estas usando otro producto como Google Adwords es fácil sacar esa campaña a Bing Ads.</p>

	<div class="row large-up-4 medium-up-4 small-up-1 block-process m-b-30 m-t-30" data-equalize-by-row="true" data-equalizer="">
	<div class="column" data-equalizer-watch="">
	<div class="el-icons"><img src="images/ppc/bingicon1.svg" alt="Lupa" width="80" /></div>

	<h5 class="el-title no-margin">167 Milliones</h5>

	<p>B&uacute;squedas &uacute;nicas</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons"><img src="images/ppc/bingicon2.svg" alt="Rango Bing" width="80" /></div>

	<h5 class="el-title no-margin">62 Milliones</h5>

	<p>B&uacute;squedas no alcanzadas en Google</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons"><img src="images/ppc/bingicon3.svg" alt="Plan de búsqueda" width="80" /></div>

	<h5 class="el-title no-margin">5,5 Billiones</h5>

	<p>B&uacute;squedas mensuales</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons"><img src="images/ppc/bingicon4.svg" alt="Analítica" width="80" /></div>

	<h5 class="el-title no-margin">34%</h5>

	<p>Busca en el mercado estadounidense</p>
	</div>
	</div>

	<div class="divider-line m-t-15 m-b-15"></div>

	<p class="fs-12">Bing ads es las herramientas de anuncios de pago y SEO preferida por los estadounidenses, así que podemos tomar esta opción si queremos dar a conocer nuestros productos y servicios en ese país.</p>
	</div>
	</div>
	</div>
	</div>
	</div>
	</li>
	<li class="accordion-item" data-accordion-item=""><a class="accordion-title ppc-tab_nav" href="#"><img src="images/ppc/fblogo.svg" alt="Logo facebook" width="60" /> </a>
	<div class="accordion-content ppc-tab_content" data-tab-content="">
	<div class="row align-middle">
	<div class="large-3 small-12 column">
	<div class="el-content p-t-30 p-b-30">
	<figure><img src="images/ppc/facebookimage.svg" alt="facebook" /></figure>
	</div>
	</div>

	<div class="large-6 small-12 column">
	<div class="el-content p-t-30 p-b-30">
	<p class="el-subtitle">Campañas en</p>

	<h3 data-brackets-id="2771" class="semi-bold">Facebook Ads &amp; Negocios</h3>

	<div class="divider float-left"></div>

	<div class="clear"></div>

	<div class="el-desc m-t-30">
	<p class="regular-text" align="justify">Las soluciones de publicidad de Facebook se adaptan a los requisitos y al presupuesto exacto de tu campaña, ya sea mediante anuncios sociales, anuncios de página de inicio o historias patrocinadas. ¡Definimos tu público objetivo ideal y luego desarrollamos una campaña publicitaria perfecta! Nuestro servicio de marketing de Facebook:</p>
	</div>
	</div>
	</div>

	<div class="large-3  small-12 column">
	<div class="el-content p-t-60 p-b-30">
	<ul class="ls-list ls-list-check blue">
		<li>Identificación del público</li>
		<li>Páginas de FB para empresas</li>
		<li>Campaña publicitaria en FB</li>
		<li>Diseño creativo</li>
		<li>Monitoreo estadístico</li>
		<li>Informes de ROI</li>
	</ul>
	</div>
	</div>
	</div>

	<div class="row large-up-6 medium-up-3 small-up-1 block-process m-b-15" data-equalize-by-row="true" data-equalizer="">
	<div class="column" data-equalizer-watch="">
	<div class="el-icons m-b-10"><img src="images/ppc/fbicon1.svg" alt="usuarios" width="80" /></div>

	<h5 class="el-title no-margin">167 Milliones</h5>

	<p>Búsquedas únicas</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons m-b-10"><img src="images/ppc/fbicon2.svg" alt="usuario" width="80" /></div>

	<h5 class="el-title no-margin">1,7 Billiones</h5>

	<p>La gente usa Facebook</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons m-b-10"><img src="images/ppc/fbicon4.svg" alt="usuario nuevo" width="80" /></div>

	<h5 class="el-title no-margin">870 Milliones</h5>

	<p>Usuarios activos diarios</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons m-b-10"><img src="images/ppc/fbicon3.svg" alt="usuario móvil" width="80" /></div>

	<h5 class="el-title no-margin">600 Milliones</h5>

	<p>Usuarios móviles</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons m-b-10"><img src="images/ppc/fbicon5.svg" alt="renta" width="80" /></div>

	<h5 class="el-title no-margin">2 Milliones</h5>

	<p>Paga por los anuncios</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons m-b-10"><img src="images/ppc/fbicon6.svg" alt="tiempo" width="80" /></div>

	<h5 class="el-title no-margin">20 Minutos</h5>

	<p>Tiempo gastado</p>
	</div>
	</div>

	<div class="row">
	<div class="large-12 column">
	<div class="divider-line m-b-15"></div>

	<p class="fs-12">Por ser la red más grande del mundo es una de las mejores oportunidades que tenemos a la hora de anunciar nuestra empresa</p>
	</div>
	</div>
	</div>
	</li>
	<li class="accordion-item" data-accordion-item=""><a class="accordion-title ppc-tab_nav" href="#"><img src="images/ppc/youtubelogo.svg" alt="Logo youtube" width="60" /> </a>
	<div class="accordion-content ppc-tab_content" data-tab-content="">
	<div class="row align-middle">
	<div class="large-2 small-12 column">
	<div class="el-content p-t-30">
	<div class="el-icons"><img src="images/ppc/youtubeimage.svg" alt="youtube" /></div>
	</div>
	</div>

	<div class="large-4 small-12 column">
	<div class="el-content p-t-30">
	<p class="el-subtitle">Campañas en</p>

	<h3 data-brackets-id="2771" class="semi-bold">Youtube Ads</h3>

	<div class="divider float-left"></div>

	<div class="clear"></div>

	<div class="el-desc p-t-30">
	<p class="regular-text" align="justify">En SEOGraphics queremos ser tu socio estratégico y ayudarte a tu compañía a aumentar el conocimiento de tu marca construyendo las relaciones aumentaran tus ventas. Cuando tienes un flujo constante de visitas calificadas y comprometidas con tu marca, ¡tus posibilidades son ilimitadas!</p>
	</div>
	</div>
	</div>

	<div class="large-3 small-12 column">
	<div class="el-content p-t-30">
	<div class="el-icons"><img src="images/ppc/youtubeicon1stream.svg" alt="boton play" width="80" /></div>

	<h5 class="el-title">Publicidad In-Stream</h5>

	<div class="clear"></div>

	<div class="el-desc p-t-15">
	<p>Permite que el video promocional de tu marca aparezca inmediatamente antes de un video que un cliente potencial está a punto de ver en YouTube.</p>
	</div>
	</div>
	</div>

	<div class="large-3 small-12 column">
	<div class="el-content p-t-30">
	<div class="el-icons"><img src="images/ppc/youtubeicon1displayadv.svg" alt="portatil play" width="80" /></div>

	<h5 class="el-title">Publicidad In-Display</h5>

	<div class="clear"></div>

	<div class="el-desc p-t-15">
	<p>Permite que el video promocional de tu marca aparezca junto a los videos en la página de resultados de búsqueda de YouTube o en la secci&oacute;n &quot;videos relacionados&quot;.</p>
	</div>
	</div>
	</div>
	</div>

	<div class="row large-up-4 medium-up-4 small-up-1 block-process" data-equalize-by-row="true" data-equalizer="">
	<div class="column" data-equalizer-watch="">
	<div class="el-icons p-b-10"><img src="images/ppc/youtubeicon1.svg" alt=" usuarios youtube" width="70" /></div>

	<h5 class="el-title no-margin">Mil millones</h5>

	<p>Usuarios &uacute;nicos</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons p-b-10"><img src="images/ppc/youtubeicon2.svg" alt="numeró de reproducciones" width="70" /></div>

	<h5 class="el-title no-margin">6 billones de horas</h5>

	<p>Video visto / mes</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons p-b-10"><img src="images/ppc/youtubeicon3.svg" alt="trafico" width="70" /></div>

	<h5 class="el-title no-margin">100 horas</h5>

	<p>Video cargado / minuto</p>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons p-b-10"><img src="images/ppc/youtubeicon4.svg" alt="reproducciones" width="70" /></div>

	<h5 class="el-title no-margin">86%</h5>

	<p>Busca entretenimiento</p>
	</div>
	</div>

	<div class="divider-line m-t-15 m-b-15"></div>

	<p class="fs-12">Actualmente el video es la mejor forma de dar a conocer tú marca, productos y servicios y de eso si que sabe Youtube.</p>
	</div>
	</li>
	<li class="accordion-item" data-accordion-item=""><a class="accordion-title ppc-tab_nav" href="#"><img src="images/ppc/instagramlogo.svg" alt="Logo Instagran" width="60" /> </a>
	<div class="accordion-content ppc-tab_content" data-tab-content="">
	<div class="row align-middle">
	<div class="large-4 small-12 column">
	<div class="el-content p-t-30 p-b-30">
	<figure><img src="images/ppc/instagramimage2.svg" alt="instagram móvil" /></figure>
	</div>
	</div>

	<div class="large-8 small-12 column">
	<div class="row">
	<div class="large-3 small-12 column">
	<div class="el-content">
	<figure><img src="images/ppc/instagramimage.svg" alt="icono instagram"  /></figure>
	</div>
	</div>

	<div class="large-9 small-12 column">
	<div class="el-content p-t-40">
	<p class="el-subtitle">Campañas en</p>

	<h3 data-brackets-id="2771" class="semi-bold">Instagram Ads</h3>

	<div class="divider float-left"></div>

	<div class="clear"></div>
	</div>
	</div>
	</div>

	<div class="el-content">
	<div class="el-desc">
	<p class="regular-text" align="justify">Con más de 300 millones de usuarios, Instagram es una de las plataformas publicitarias para móviles más grande del mundo. Instagram es ahora una solución publicitaria de principio a fin que impulsa los resultados comerciales reales.</p>
	</div>
	</div>

	<div class="row large-up-3 medium-up-3 small-up-1" data-equalize-by-row="true" data-equalizer="">
	<div class="column" data-equalizer-watch="">
	<div class="el-icons p-b-10"><img src="images/ppc/youtubeicon1.svg" alt="Usuarios instagram" width="70" /></div>

	<h5 class="el-title no-margin">Muy relevante</h5>

	<div class="el-desc p-t-15">
	<p class="regular-text" align="justify">Mostramos anuncios a todas las personas adecuadas según la edad, el sexo, la ubicación, los intereses y mucho más.</p>
	</div>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons p-b-10"><img src="images/ppc/youtubeicon2.svg" alt="reproducciones" width="70" /></div>

	<h5 class="el-title no-margin">Altamente procesable</h5>

	<div class="el-desc p-t-15">
	<p class="regular-text" align="justify">Los anuncios de Instagram pueden enviar personas directamente a tú sitio web o aplicación para impulsar tú marca y las ventas.</p>
	</div>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons p-b-10"><img src="images/ppc/youtubeicon3.svg" alt="contenido" width="70" /></div>

	<h5 class="el-title no-margin">Naturalmente social</h5>

	<div class="el-desc p-t-15">
	<p class="regular-text" align="justify">Cuando a la gente le gusta tu Página las probabilidades de interesados aumentan en adquirir tus productos y servicios.</p>
	</div>
	</div>
	</div>
	</div>
	</div>

	<div class="divider-line m-t-15 m-b-15"></div>

	<p class="fs-12">Las campañas de imágenes y videos en instagram son de gran alcance comercial.</p>
	</div>
	</li>
	<li class="accordion-item" data-accordion-item=""><a class="accordion-title ppc-tab_nav" href="#"><img src="images/ppc/twitterlogo.svg" alt="twitter" width="60" /> </a>
	<div class="accordion-content ppc-tab_content" data-tab-content="">
	<div class="row align-middle">
	<div class="large-8 small-12 column">
	<div class="row">
	<div class="large-3 small-12 column">
	<div class="el-content">
	<figure><img src="images/ppc/twitterimage.svg" alt="icono twitter" /></figure>
	</div>
	</div>

	<div class="large-9 small-12 column">
	<div class="el-content p-t-40">
	<p class="el-subtitle">Campañas en</p>

	<h3 data-brackets-id="2771" class="semi-bold">Twitter Ads</h3>

	<div class="divider float-left"></div>

	<div class="clear"></div>
	</div>
	</div>
	</div>

	<div class="el-content">
	<div class="el-desc">
	<p class="regular-text" align="justify">Twitter proporciona la oportunidad perfecta para que capitalices los temas populares en todo el mundo y llegues a tus usuarios cuando más lo necesitan. Podemos ayudarte a cumplir tus objetivos en tu campaña de Twitter.</p>
	</div>
	</div>

	<div class="row large-up-3 medium-up-3 small-up-1" data-equalize-by-row="true" data-equalizer="">
	<div class="column" data-equalizer-watch="">
	<div class="el-icons p-b-10"><img src="images/ppc/youtubeicon1.svg" alt="usuarios twitter" width="70" /></div>

	<h5 class="el-title no-margin">Tweets promocionados</h5>

	<div class="el-desc p-t-15">
	<p class="regular-text" align="justify">Los usuarios pueden interactuar con tweets promocionados como lo har&iacute;an con un tweet normal: esto incluye favoritos, respuestas y retweets.</p>
	</div>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons p-b-10"><img src="images/ppc/youtubeicon2.svg" alt="reproducciones en twitter" width="70" /></div>

	<h5 class="el-title no-margin">Cuentas promocionadas</h5>

	<div class="el-desc p-t-15">
	<p class="regular-text" align="justify">Las cuentas promocionadas son cuentas de Twitter sugeridas que aparecen en la cuenta de Twitter de alguien.</p>
	</div>
	</div>

	<div class="column" data-equalizer-watch="">
	<div class="el-icons p-b-10"><img src="images/ppc/youtubeicon3.svg" alt="videos en línea" width="70" /></div>

	<h5 class="el-title no-margin">Tendencias promocionadas</h5>

	<div class="el-desc p-t-15">
	<p class="regular-text" align="justify">Tendencias promocionadas son los temas más populares de los que se habla en Twitter en este momento.</p>
	</div>
	</div>
	</div>
	</div>

	<div class="large-4 small-12 column">
	<div class="el-content p-t-30 p-b-30">
	<figure><img src="images/ppc/twitterimage2.svg" alt="twitter en móviles" /></figure>
	</div>
	</div>
	</div>
    <div class="divider-line m-t-15 m-b-15"></div>
    <p class="fs-12">Por ser una red social de sólo 144 caracteres nos permite llegar a nuevos clientes con mayor impacto comercial.</p>
	</div>
	</li>
</ul>
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
    <script src="libs/foundation.min.js"></script>
    <script src="libs/SmoothScroll.js"></script>
    <script src="libs/jquery.flexverticalcenter.js"></script>
    <script src="libs/javascript.js"></script>
    <script type=application/ld+json>
    {
    "@context":"http://www.schema.org",
    "@type":"LocalBusiness",
    "image":"https://www.seographics.com.co/images/metapagoxclick.jpg",
    "name":"SEOGaphics",
    "url":"https://seographics.com.co/pagoxclic.html",
    "telephone":"+57 3192948824",
    "logo":"https://seographics.com.co/images/logo.png",
    "description":"Sabemos que al tener un sitio web deseamos que este sea rentable ya que el proceso de posicionamiento es un tanto demorada debido a su complejidad, así que debemos ayudar a nuestro sitio con campañas de pago para acelerar el proceso de los motores de búsqueda de esta forma nos daremos a conocer mucho más rápido.",
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
