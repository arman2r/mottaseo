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
<section class="blog-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>
   <section class="page-section bg-white o-hidden blog-content">
        <div class="container relative">
            <div class="row">
                <div class="col-sm-8">
                    <div class="blog-item">
                        <h2 class="blog-item-title font-alt"><a href="">¿QUÉ HACE UN DISEÑADOR WEB?</a></h2>
                        <div class="blog-item-data"> <a href="blog.html#"><i class="icon-calendar-full"></i> 31 Augosto, 2018</a> <span class="separator">&nbsp;</span> <a href="blog.html#"><i class="icon-list4"></i> Categoría de diseño</a> <span class="separator">&nbsp;</span>
                            <br class="visible-xs">
                            <a href=""><i class="icon-user"></i> Admin</a> <span class="separator">&nbsp;</span> <a href=""><i class="icon-bubbles"></i> Comentarios (2)</a> </div>
                        <div class="blog-media">
                            <ul class="clearlist content-slider">
                                <li> <img src="images/blog/blog-img-standard-1.jpg" alt="" /> </li>
                                <li> <img src="images/blog/blog-img-standard-2.jpg" alt="" /> </li>
                                <li> <img src="images/blog/blog-img-standard-3.jpg" alt="" /> </li>
                            </ul>
                        </div>
                        <div class="blog-item-body">
                            <p>Dolore magna aliquam erat volutpat: Dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure </p>
                        </div>
                       <div class="blog-item-foot"> <a href="{{ route('nota1') }}" class="medium-btn3 btn btn-nofill green-text">Lee más
</a> </div>
                    </div>
                    <div class="blog-item">
                        <h2 class="blog-item-title font-alt"><a href="">CÓMO APARECER EN LA PÁGINA # 1 DE GOOGLE</a></h2>
                        <div class="blog-item-data"> <a href="blog.html#"><i class="icon-calendar-full"></i> 31 Augosto, 2018</a> <span class="separator">&nbsp;</span> <a href="blog.html#"><i class="icon-list4"></i>Categoría de diseño</a> <span class="separator">&nbsp;</span>
                            <br class="visible-xs">
                            <a href=""><i class="icon-user"></i> Admin</a> <span class="separator">&nbsp;</span> <a href=""><i class="icon-bubbles"></i> Comentarios (2)</a> </div>
                       <div class="blog-media">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/rrT6v5sOwJg" allowfullscreen></iframe>
                        </div>
                        <div class="blog-item-body">
                            <p> A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es. Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, </p>
                        </div>
                        <div class="blog-item-foot"> <a href="blog-video-post.html" class="medium-btn3 btn btn-nofill green-text">Lee más</a> </div>
                    </div>
                   <div class="blog-item">
                        <h2 class="blog-item-title font-alt"><a href="">¿CÓMO DISEÑAR EQUIPOS EFECTIVOS?</a></h2>
                       <div class="blog-item-data"> <a href="blog.html#"><i class="icon-calendar-full"></i> 31 Augosto, 2018</a> <span class="separator">&nbsp;</span> <a href="blog.html#"><i class="icon-list4"></i> Categoría de diseño</a> <span class="separator">&nbsp;</span>
                            <br class="visible-xs">
                            <a href=""><i class="icon-user"></i> Admin</a> <span class="separator">&nbsp;</span> <a href=""><i class="icon-bubbles"></i> Comentarios (2)</a> </div>
                        <div class="blog-media">
                            <a href="blog-details.html"><img src="images/blog/effective-team.jpg" alt="" /></a>
                        </div>
                        <div class="blog-item-body">
                            <p> Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e </p>
                        </div>
                        <div class="blog-item-foot"> <a href="blog-details.html" class="medium-btn3 btn btn-nofill green-text">Lee más</a> </div>
                    </div>
                   <div class="blog-item">
                        <h2 class="blog-item-title font-alt"><a href="">ELEVAR EL DISEÑO A TRAVÉS DE LA FORMACIÓN</a></h2>
                        <div class="blog-item-data"> <a href="blog.html#"><i class="icon-calendar-full"></i> 31 Augosto, 2018</a> <span class="separator">&nbsp;</span> <a href="blog.html#"><i class="icon-list4"></i> Categoría de diseño</a> <span class="separator">&nbsp;</span>
                            <br class="visible-xs">
                            <a href=""><i class="icon-user"></i> Admin</a> <span class="separator">&nbsp;</span> <a href=""><i class="icon-bubbles"></i> Comentarios (2)</a> </div>
                       <div class="blog-media">
                            <a href="blog-details.html"><img src="images/blog/design-through-traininge.jpg" alt="" /></a>
                        </div>
                        <div class="blog-item-body">
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Ut wisi enim ad minim venia. </p>
                        </div>
                        <div class="blog-item-foot"> <a href="" class="medium-btn3 btn btn-nofill green-text">Lee más</a> </div>
                    </div>
                   <div class="blog-item">
                        <h2 class="blog-item-title font-alt"><a href="">POR QUÉ EL SEO ES NECESARIO</a></h2>
                       <div class="blog-item-data"> <a href="blog.html#"><i class="icon-calendar-full"></i> 31 Augosto, 2018</a> <span class="separator">&nbsp;</span> <a href="blog.html#"><i class="icon-list4"></i> Categoría de diseño</a> <span class="separator">&nbsp;</span>
                            <br class="visible-xs">
                            <a href=""><i class="icon-user"></i> Admin</a> <span class="separator">&nbsp;</span> <a href=""><i class="icon-bubbles"></i> Comentarios (2)</a> </div>
                       <div class="blog-media">
                            <a href="blog-details.html"><img src="images/blog/why-seo-necessery.jpg" alt="" /></a>
                        </div>
                        <div class="blog-item-body">
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Ut wisi enim ad minim venia. </p>
                        </div>
                        <div class="blog-item-foot"> <a href="blog-details.html" class="medium-btn3 btn btn-nofill green-text">Lee más</a> </div>
                    </div>
                    <div class="blog-item">
                        <h2 class="blog-item-title font-alt"><a href="">EVITE ERRORES SEO CON 5 PASOS</a></h2>
                        <div class="blog-item-data"> <a href="blog.html#"><i class="icon-calendar-full"></i> 31 Augosto, 2018</a> <span class="separator">&nbsp;</span> <a href="blog.html#"><i class="icon-list4"></i>  Categoría de diseño</a> <span class="separator">&nbsp;</span>
                            <br class="visible-xs">
                            <a href=""><i class="icon-user"></i> Admin</a> <span class="separator">&nbsp;</span> <a href=""><i class="icon-bubbles"></i> Comentarios(2)</a> </div>
                       <div class="blog-media">
                            <a href="blog-details.html"><img src="images/blog/how-to-hire.jpg" alt="" /></a>
                        </div>
                        <div class="blog-item-body">
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Ut wisi enim ad minim venia. </p>
                        </div>
                        <div class="blog-item-foot"> <a href="blog-details.html" class="medium-btn3 btn btn-nofill green-text">Lee más</a> </div>
                    </div>
                   <ul class="pagination top-margin0">
                        <li class="page-item disabled"> <a class="page-link" href="blog.html#" tabindex="-1"><span class="icon-chevron-left"></span></a> </li>
                        <li class="page-item"><a class="page-link" href="">1</a></li>
                        <li class="page-item"><a class="page-link" href="">2</a></li>
                        <li class="page-item"><a class="page-link" href="">3</a></li>
                        <li class="page-item"> <a class="page-link" href=""><span class="icon-chevron-right"></span></a> </li>
                    </ul>
                </div>
               <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                   <div class="widget">
                        <form class="form-inline form">
                            <div class="search-wrap">
                                <button class="search-button animate" type="submit" title="Start Search"> <i class="icon-magnifier"></i> </button>
                                <input type="text" class="form-control search-field" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                   <div class="widget">
                        <h5 class="widget-title font-alt">Mensajes recientes
</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-posts">
                                <li class="clearfix">
                                    <div class="widget-posts-descr"> <a href="blog.html#" title="">¿Cómo diseñar equipos efectivos?</a> 31 Augosto, 2018 </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-descr"> <a href="blog.html#" title="">Alivie el diseño a través del entrenamiento</a> 2 Septiembre, 2018 </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-descr"> <a href="blog.html#" title="">El diseño no es un departamento sino todo</a> 6 Julio, 2018</div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-descr"> <a href="blog.html#" title="">Cómo diseñar una página de inicio perfecta para PPC</a> 5 Mayo, 2018 </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   <div class="widget">
                        <h5 class="widget-title font-alt">Comentarios Recientes</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-comments">
                                <li> <span>Tony Stark</span> <a href="blog.html#" title="">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat...</a> </li>
                                <li> <span>Tony Stark</span> <a href="blog.html#" title="">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat...</a> </li>
                                <li> <span>Tony Stark</span> <a href="blog.html#" title="">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat...</a> </li>
                            </ul>
                        </div>
                    </div>
                   <div class="widget">
                        <h5 class="widget-title font-alt">Categorias</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-menu">
                                <li> <a href="blog.html#" title="">Diseño (4)</a> </li>
                                <li> <a href="blog.html#" title="">Desarrollo (2)</a> </li>
                                <li> <a href="blog.html#" title="">Marketing digital(10)</a> </li>
                                <li> <a href="blog.html#" title="">Website (3)</a> </li>
                            </ul>
                        </div>
                    </div>
                   <div class="widget">
                        <h5 class="widget-title font-alt">Tags</h5>
                        <div class="widget-body">
                            <div class="tags"> <a href="">Diseño</a> <a href="">Desarrollo</a> <a href="">Social Media</a> <a href="">SEO</a> <a href="">PPC</a> <a href="">Marketing digital</a> </div>
                        </div>
                    </div>
                   <div class="widget">
                        <h5 class="widget-title font-alt">Archivo</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-menu">
                                <li> <a href="blog.html#" title="">Mayo 2017</a> </li>
                                <li> <a href="blog.html#" title="">Abril 2017</a> </li>
                                <li> <a href="blog.html#" title="">Febrero 2017</a> </li>
                                <li> <a href="blog.html#" title="">Abril 2017</a> </li>
                                <li> <a href="blog.html#" title="">Janio 2017</a> </li>
                            </ul>
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
