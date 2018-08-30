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
                    <h2 class="blog-item-title font-alt"><a href="blog-media-gallery.html">Publicación de galería de medios</a></h2>
                    <div class="blog-item-data"> <a href="blog-media-gallery.html#"><i class="icon-calendar-full"></i> 31 Augosto, 2018</a> <span class="separator">&nbsp;</span> <a href=""><i class="icon-list4"></i> Categoría de diseño</a> <span class="separator">&nbsp;</span>
                        <br class="visible-xs">
                        <a href=""><i class="icon-user"></i> Admin</a> <span class="separator">&nbsp;</span> <a href="blog-media-gallery.html#"><i class="icon-bubbles"></i> Comentarios(2)</a> </div>
                    <div class="blog-media">
                        <ul class="clearlist content-slider">
                            <li> <img src="images/blog/blog-img-standard-1.jpg" alt="" /> </li>
                            <li> <img src="images/blog/blog-img-standard-2.jpg" alt="" /> </li>
                            <li> <img src="images/blog/blog-img-standard-3.jpg" alt="" /> </li>
                        </ul>
                    </div>
                    <div class="blog-item-body">
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Ut wisi enim ad minim venia. </p>
                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                    </div>
                    <div class="blog-post-share">
                        <ul class="social-links">
                            <li>Compartir esta publicacion:</li>
                            <li><a href=""><span class="icon-facebook"></span></a></li>
                            <li><a href=""><span class="icon-twitter"></span></a></li>
                            <li><a href=""><span class="icon-google-plus"></span></a></li>
                            <li><a href=""><span class="icon-instagram"></span></a></li>
                            <li><a href=""><span class="icon-pinterest"></span></a></li>
                            <li><a href=""><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                    <section class="bg-white o-hidden blog-content author-sec ">
                        <h2 class="b-clor">Detalles del autor</h2>
                        <hr class="dark-line">
                        <div class="row">
                            <div class="blogger-img"> <img src="images/blog/blog-details-pro-pic.png" class="img-responsive" alt="blog"> </div>
                            <div class="blog-description">
                                <p class="bloger-name">ALEX MOTTA</p>
                                <p class="regular-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>
                                <a href="blog-media-gallery.html#" class="b-clor regular-text">Follow me on Twitter</a> </div>
                            <div class="clearfix"></div>
                        </div>
                    </section>
                    <section class="bg-white o-hidden margin-top-15">
                        <h2 class="b-clor">Deja un comentario
</h2>
                        <hr class="dark-line">
                        <div class="customise-form contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group customised-formgroup"> <span class="icon-user"></span>
                                            <input class="form-control" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group customised-formgroup"> <span class="icon-envelope"></span>
                                            <input class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group customised-formgroup"> <span class="icon-laptop"></span>
                                            <input class="form-control" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group customised-formgroup"> <span class="icon-bubble"></span>
                                            <textarea class="form-control" placeholder="Mensaje"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <button type="submit" class="btn btn-fill">Enviar comentario</button>
                                </div>
                            </form>
                        </div>
                    </section>
                    <section class="bg-white o-hidden blog-design-category blog-rel-post">
                        <h2 class="b-clor">Artículos Relacionados</h2>
                        <hr class="dark-line">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="box-content-with-img "> <img src="images/blog/blog-img-1.jpg" class="img-responsive" alt="blog image">
                                    <div class="box-content-text equalheight" style="height: 293px;">
                                        <p class="gray-text"><span class="icon-calendar-full"></span>31 Augosto, 2018</p>
                                        <h3 class="semi-bold"><a href="">¿Cómo diseñar equipos efectivos?</a></h3>
                                        <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum my nibh euismod tincidunt.</p>
                                    </div>
                                </div>
                            </div>
                           <div class="col-xs-12 col-sm-6">
                                <div class="box-content-with-img "> <img src="images/blog/blog-img-2.jpg" class="img-responsive" alt="blog image">
                                    <div class="box-content-text equalheight" style="height: 293px;">
                                        <p class="gray-text"><span class="icon-calendar-full"></span>28 Augost0, 2018</p>
                                        <h3 class="semi-bold"><a href="">Elevando el diseño a través del entrenamiento</a></h3>
                                        <p class="regular-text">Lorem ipsum dolor sit amet, consect etuer adipi scing elit, sed diam nonum my nibh euismod tincidunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
                                    <div class="widget-posts-descr"> <a href="blog-media-gallery.html#" title="">How to design effective teams?</a> 31 August, 2018 </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-descr"> <a href="blog-media-gallery.html#" title="">Eleviate design through trainingt</a> 2 September, 2018 </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-descr"> <a href="blog-media-gallery.html#" title="">Design is not a department but everything</a> 6 July, 2018 </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-descr"> <a href="blog-media-gallery.html#" title="">How to design a perfect landing page for PPC</a> 5 May, 2018 </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   <div class="widget">
                        <h5 class="widget-title font-alt">Comentarios Recientes</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-comments">
                                <li> <span>Tony Stark</span> <a href="blog-media-gallery.html#" title="">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat...</a> </li>
                                <li> <span>Tony Stark</span> <a href="blog-media-gallery.html#" title="">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat...</a> </li>
                                <li> <span>Tony Stark</span> <a href="blog-media-gallery.html#" title="">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat...</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title font-alt">Categorías</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-menu">
                                <li> <a href="blog-media-gallery.html#" title="">Diseño (4)</a> </li>
                                <li> <a href="blog-media-gallery.html#" title="">Desarrollo (2)</a> </li>
                                <li> <a href="blog-media-gallery.html#" title="">MArketing digital (10)</a> </li>
                                <li> <a href="blog-media-gallery.html#" title="">Website (3)</a> </li>
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
                        <h5 class="widget-title font-alt">Archive</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-menu">
                                <li> <a href="blog-media-gallery.html#" title="">Mayo 2017</a> </li>
                                <li> <a href="blog-media-gallery.html#" title="">Abril 2017</a> </li>
                                <li> <a href="blog-media-gallery.html#" title="">Febrero 2017</a> </li>
                                <li> <a href="blog-media-gallery.html#" title="">Abril 2017</a> </li>
                                <li> <a href="blog-media-gallery.html#" title="">Junio 2017</a> </li>
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
