@extends('layouts.layout')

@section('title')
Redes Sociales  la mejor forma de aumentar tu trafico
@endsection

@section('head')
	@parent
@endsection

@section('head')
    @parent
	<meta name="description" content="SeoGraphics es una agencia dedicada a diseñar sitios Web de gran impacto comercial con las mejores herramientas de optimización y posicionamiento SEO">
    <meta name="keywords" content="artes gráficas, diseño web. optimización web.posicionamiento web, socialmedia,pago por clic.">
    <meta property=og:title content="Optimización de sitios web.">
    <meta property=og:type content=website>
    <meta property=og:url content=https://www.seographics.com.co>
    <meta property=og:image content=https://www.seographics.com.co/images/meta-logo.jpg alt="logo SEOGraphics" id="meta Logo SEOGraphics">
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

    <section class="banner  o-hidden banner-inner about-banner">
        <div class="container">
            <div class="banner-txt">
                <h1>Sobre Nosotros</h1>
                <p class="semi-bold">¿Qué hace a una agencia sea genial? Así de simple.
                 <br />Son las personas que trabajan aquí.</p>
                <a href="index.html#" class="medium-btn btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal">¿Te cotizamos? <span class="icon-chevron-right"></span></a> <a class="medium-btn2 btn btn-nofill page-scroll" href="portafolio.html">Nuestro Portafolio</a> </div>
        </div>
    </section>
    <section class="bg-white o-hidden common-form-section contact-form-wrapper more-about" id="more-about">
        <div class="container">
            <h2 class="b-clor">Somos tu aliado estratégico para tu éxito.</h2>
            <hr class="dark-line" />
            <div class="row about-content">
                <div class="col-sm-5 col-xs-12 pull-right">
                    <div class="about-img"> <img src="images/nosotros.jpg" alt="about" class="img-responsive" /> </div>
                </div>
                <div class="col-sm-7 col-xs-12 pull-left">
                    <div>
                        <p class="regular-text" align="justify">SeoGraphics es una agencia dedicada a diseñar
                          sitios Web de gran impacto comercial con las mejores herramientas de optimización y
                          posicionamiento en los motores de búsqueda, de esta forma será más fácil para los clientes encontrar
                          los productos y servicios de tu empresa.</p>
                        <p class="regular-text" align="justify">En SEOGraphics trabajamos de la mano contigo
                         para hacer crecer tu negocio mejorando los medios digitales, ya que integramos el sitio web con las
                         redes sociales así optimizando el alcance de nuevos clientes y lograr las metas que deseas.</p>
                        <p class="regular-text"><strong>Somos expertos en:</strong> Diseño - Optimización - Posicionamiento web & Marketing Digital.</p>
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
    "url":"https://seographics.com.co/nosotros.html",
    "telephone":"+57 3192948824",
    "logo":"https://seographics.com.co/images/logo.png",
    "description":"SeoGraphics es una agencia dedicada a diseñar sitios Web de gran impacto comercial con las mejores herramientas de optimización y posicionamiento en los motores de búsqueda, de esta forma será más fácil para los clientes encontrar los productos y servicios de tu empresa.",
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
