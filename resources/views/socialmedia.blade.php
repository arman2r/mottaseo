@extends('layouts.layout')

@section('title')
Redes Sociales  la mejor forma de aumentar tu trafico
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="Las campañas de redes sociales te ayudan a incrementar clientes potenciales ya que se conectan ha trabes de tus publicaciones de cada una de las redes.">
    <meta name="keywords" content="Publicaciones en Facebook, twitter, instagram,">
    <meta property=og:title content="Redes Sociales la mejor forma de aumentar tu traficob.">
    <meta property=og:type content=website>
    <meta property=og:url content=https://www.seographics.com.co>
    <meta property=og:image content=https://www.seographics.com.co/images/metasocialmendia.jpg alt="logo socialmedia" id="meta Logo SEOGraphics">
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
<section class="banner  o-hidden banner-inner social-media-marketing-banner">
        <div class="container">
            <div class="banner-txt">
                <h1>Social Media Marketing</h1>
                <p class="semi-bold">Aumente el tráfico y crea una mejor participación de tus clientes por medio 
                    <br />de nuestra estrategia en marketing de redes sociales.</p>
                <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="{{ route('portafolio') }}">Nuestro Portafolio</a> </div>
        </div>
    </section>
    <section class="bg-white o-hidden common-form-section  service-description-section">
        <div class="container">
            <h2 class="b-clor">Redes Sociales a tu medida</h2>
            <hr class="dark-line" />
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h3 class="semi-bold">Los contenidos son el rey entre comunidades conectadas</h3>
                    <p class="regular-text" align="justify">Las empresas en la actualidad necesitan innovar, ser productivas y competitivas, pero no basta solo con esto y grandes inversiones en publicidad tradicional, se debe llegar a los públicos deseados a través de un conocimiento claro de ellos y sus formas de ver, sentir, y escuchar, en resumen, de consumir. Por eso trabajamos en el conocimiento de públicos (empresas - clientes), para adaptar los mensajes y contenidos, y escoger los mejores medios para llegar a la mente, al corazón de cada persona y posicionar una marca a través de medios sociales. </p>
                    <ul>
                        <li><span class="icon-pen"></span>Gestión de contenidos eficaces.</li>
                        <li><span class="icon-vector"></span>Medios sociales optimizados.</li>
                        <li><span class="icon-laptop-phone"></span>Generación de comunidades.</li>
                    </ul>
                    <p class="regular-text" align="justify">Para SEOGraphics y WOM Digital (marca aliada*) es vital acompañarte en el proceso de consolidación de tu marca en redes sociales, medios que en la actualidad y con una alta frecuencia son consultados para informarse, buscar o comprar algún producto o servicio ¿Te imaginas estando allí? Nosotros destacamos y posicionamos tu marca, permítenos trabajar de la mano. 
 </p>
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
            <h2 class="b-clor text-align-center">Nuestro Proceso</h2>
            <p class="regular-text text-align-center">Los contenidos son el rey entre comunidades conectadas</p>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                        <li role="presentation" class="active"><a href="social-media-marketing.html#discover" aria-controls="discover" role="tab" data-toggle="tab"><span class="icon-magnifier"></span>
                                    <p>Descubrir</p>
                                </a></li>
                        <li role="presentation"><a href="social-media-marketing.html#strategy" aria-controls="strategy" role="tab" data-toggle="tab"><span class="icon-archery"></span>
                                    <p>Estrategia</p>
                                </a></li>
                        <li role="presentation">
                            <a href="social-media-marketing.html#campaign" aria-controls="campaign" role="tab" data-toggle="tab"> <span class="icon-flag"></span>
                                <p>Campaña</p>
                            </a>
                        </li>
                        <li role="presentation"><a href="social-media-marketing.html#content" aria-controls="content" role="tab" data-toggle="tab"><span class="icon-papers"></span>
                                    <p>Contenido</p>
                                </a></li>
                        <li role="presentation"><a href="social-media-marketing.html#reporting" aria-controls="reporting" role="tab" data-toggle="tab"><span class="icon-pie-chart"></span>
                                    <p>Informes</p>
                                </a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="discover">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Descubrir</h3>
                                <p class="regular-text" align="justify">Nos gusta conversar con nuestros clientes, conocer sus sueños empresariales, sus metas y cómo quieren proyectar su marca, ¡tomamos el pulso del negocio!,  todo esto con el único fin de prestar un servicio de calidad y enfocado a las necesidades puntuales de cada empresario. En el diagnóstico identificamos las necesidades de comunicación y así mismo dirigimos los medios y los mensajes. </p>
                                <br>
                                <img src="images/descubrir.jpg" alt="seo process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="strategy">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Estrategia</h3>
                                <p class="regular-text" align="justify">¡Acción! Aquí ejecutamos con pasión, capturamos los mejores instantes de un servicio en acción, o los atributos de un producto y los volvemos fotografía, hablamos contigo y con tus clientes, y registramos en vídeo el quehacer de tu negocio, escribimos las mejores notas para hacer el llamado a participar, visitar y fidelizar clientes a través de las redes sociales, en resumen, generamos comunidad.</p><br>
                                <img src="images/estrategiaresdes.jpg" alt="design process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="campaign">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Campaña</h3>
                                <p class="regular-text" align="justify">Luego de conocer e identificar las necesidades de comunicación digital de cada cliente, ideamos y planeamos cómo desarrollar el trabajo, aquí pensamos en la estrategia de contenidos idóneos de acuerdo a los productos y/o servicios de nuestros clientes para empezar a gestionar nuestros medios sociales.</p>
                                <br><br>
                                <img src="images/campana.jpg" alt="seo process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="content">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Contenido</h3>
                                <p class="regular-text" align="justify">El contenido es el rey, por eso trabajamos desde la ideación de textos, imágenes, fotografías y vídeos eficaces y de calidad, que respondan a las dinámicas y la identidad que quiere reflejar cada empresario ante sus clientes y/o usuarios, trabajando siempre de la mano y bajo el poder de la ESTRATEGIA.</p>
                                <br><br>
                                <img src="images/contenidoredes.jpg" alt="seo process" class="img-responsive" /> </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="reporting">
                            <div class="design-process-content">
                                <h3 class="semi-bold">Informes</h3>
                                <p class="regular-text" align="justify">Actividad que se respete debe ser seguida, medida y evaluada, solo así podremos identificar aciertos y acciones por mejorar, aquí nosotros hacemos seguimiento de cada acción digital para que estés informado y podamos tomar decisiones.</p><br><br><br>
    
                                <img src="images/informesredsocial.jpg" alt="seo process" class="img-responsive" /> </div>
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
    "url":"https://seographics.com.co/socialmedia.html",
    "telephone":"+57 3192948824",
    "logo":"https://seographics.com.co/images/logo.png",
    "description":"Las empresas en la actualidad necesitan innovar, ser productivas y competitivas, pero no basta solo con esto y grandes inversiones en publicidad tradicional, se debe llegar a los públicos deseados a través de un conocimiento claro de ellos y sus formas de ver, sentir, y escuchar, en resumen, de consumir. Por eso trabajamos en el conocimiento de públicos (empresas - clientes), para adaptar los mensajes y contenidos, y escoger los mejores medios para llegar a la mente, al corazón de cada persona y posicionar una marca a través de medios sociales.",
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
