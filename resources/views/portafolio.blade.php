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
               <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="portafolio.html">Nuestro Portafolio</a> </div>
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
