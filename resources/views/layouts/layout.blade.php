<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>SEOGRAPHICS - @yield('title')</title>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N9R874L');
    </script>
    <!-- End Google Tag Manager -->
    <style>
    @charset "UTF-8";html{font-family:"Montserrat",sans-serif;-ms-text-size-adjust:100%;- webkit-text-size-adjust:100%}body{margin:0}nav{display:block}a{background-color:transparent}img{border:0}hr{box-sizing:content-box;height:0}input{line-height:normal}textarea{overflow:auto}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}a{color:# 337ab7;text-decoration:none}img{vertical-align:middle}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}h2,h3,h6,.h1,.h2{font- familia:heredar;font-weight:500;line-height:1.1;color:inherit}.h1,h2,.h2,h3{margin-top:20px;margen inferior:10px}h6{margen superior:10px;margen-inferior:10px}.h1{font-size:36px}h2,.h2{font-size:30px}h3{font-size:24px}h6{font-size:12px}p{margin:0 0 10px}ul{margin-top:0;margin-bottom:10px}ul ul{margin-bottom:0}textarea.form-control{height:auto}
    </style>
    <meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
    <meta name="dc.Language" scheme="RFC1766" content="Spanish">
    <meta content=Spanish name=language/>
    
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta charset="utf-8">
    <meta name="author" content="Crapas Mott">
    <meta name="REPLY-TO" content="contactanos@seographics.com.co">
    <meta name="Resource-type" content="Index">
    <meta name="Revisit-after" content="582 days">
    <meta name="robots" content="ALL">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    
    <meta property=og:type content=website>
    
    <meta property="fb:admins" content="834441610022571">
    <meta property="fb:app_id" content="470450446638168">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://twitter.com/seographics">
    <meta name="twitter:creator" content="@mottastudy">
    <link rel="alternate" href="https://www.seographics.com.co/es-co" hreflang="es-co" />
    
    <link rel="alternate" hreflang="en" href="https://www.seographics.com.co" />
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="114x114" href=""> 

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    @section('css')
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>    
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/fonts.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/responsive.css"/> 
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    <style>
        form label 				 {
            color:#999 !important; 
            font-size:14px !important;
            font-weight:normal !important;
            position:absolute !important;
            pointer-events:none !important;
            left:24px !important;
            top:18px !important;
            transition:0.2s ease all !important; 
            -moz-transition:0.2s ease all !important; 
            -webkit-transition:0.2s ease all !important;
        }

            /* active state */
        form input:focus ~ label, form input:valid ~ label,
        form textarea:focus ~ label, form textarea:valid ~ label {
            top:-5px !important;
            font-size:12px !important;
            color:#1a252b !important;
        }

        #newsletterform label 				 {
            color:#999 !important; 
            font-size:14px !important;
            font-weight:normal !important;
            position:absolute !important;
            pointer-events:none !important;
            left:45px !important;
            top:12px !important;
            transition:0.2s ease all !important; 
            -moz-transition:0.2s ease all !important; 
            -webkit-transition:0.2s ease all !important;
        }

            /* active state */
        #newsletterform input:focus ~ label, #newsletterform input:valid ~ label,
        #newsletterform textarea:focus ~ label, #newsletterform textarea:valid ~ label {
            top:-5px !important;
            font-size:12px !important;
            color:#1a252b !important;
        }
    </style>
    @show
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9R874L"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
    attribution=setup_tool
    page_id="340410283168547"
    theme_color="#13cf13"
    logged_in_greeting="¡Hola!¿como podemos ayudarte?"
    logged_out_greeting="¡Hola!¿como podemos ayudarte?">
    </div>
    @section('header')
    <!--<div class="header-wrapper">-->
        <nav id="navbar-main" class="navbar main-menu">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="images/logo.png" alt="logo agencia" class="img-responsive"/></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="index.html#" data-toggle="dropdown" class="dropdown-toggle">Servicios</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('artesgraficas') }}"><span class=" icon icon-pencil"></span>Artes gráficas</a></li>
                                <li><a href="{{ route('disenoweb') }}" class="b-clor"><span class="icon-laptop-phone"></span>Diseño Web</a></li>
                                <li><a href="{{ route('optimizar') }}"><span class="icon-puzzle"></span>Optimización Web</a></li>
                                <li><a href="{{ route('seo') }}"><span class="icon-magnifier"></span>Posicionaminto SEO</a></li>
                                <li><a href="{{ route('pagoxclic') }}"><span class="icon-select2"></span>Pago por clic</a></li>
                                <li><a href="{{ route('socialmedia') }}"><span class="icon-share"></span>Marketing de medios sociales</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('portafolio') }}">Portafolio</a></li>
                        <li><a href="{{ route('casosexito') }}">Casos de Éxitos</a></li>
                        <li><a href="{{ route('nosotros') }}">SEOGraphics</a></li>
                        <li class="dropdown"><a href="" data-toggle="dropdown">Blog</a></li>
                        <!--<li class="btn btn-fill" data-toggle="modal" data-target="#getAQuoteModal"><a href="{{ route('contactenos') }}">Contáctenos<span class="icon-chevron-right"></span></a></li>-->
                        <li class="btn btn-fill"><a href="{{ route('contactenos') }}">Contáctenos<span class="icon-chevron-right"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <!--</div>-->
    @show
    <div class="row">
        @yield('content')
    </div>
    @section('footer')    
        <footer id="footer">
            <a class="top-btn page-scroll" href="#top"><span class="icon-chevron-up b-clor regular-text text-center"></span></a>
            <div class="grey-dark-bg text-center">
                <div class="container">
                    <h2>¡Suscríbete a nuestro boletín para mantenerte al día con las novedades tecnológicas!</h2>
                    <div class="customise-form">
                        <!--<form>-->
                        {!! Form::open(['route' => 'newsletter.store', 'method' => 'POST', 'class' => 'emailform', 'id'=>'newsletterform']) !!}
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group customised-formgroup"> <span class="icon-user"></span>
                                        {{ Form::text('name',null,(['id'=>'name', 'class' => 'form-control', 'required'=>'true'])) }}
                                        {{ Form::label( 'name', 'nombres*:') }}
                                        <!--<input class="form-control" placeholder="Nombre">-->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group customised-formgroup"> <span class="icon-envelope"></span>
                                        {{ Form::email('email', null,(['id'=>'email', 'class' => 'form-control', 'required'=>'true'])) }}
                                        {{ Form::label( 'email', 'Email*:') }}
                                        <!--<input class="form-control" placeholder="Email">-->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div>
                                        <!--<input class="btn btn-fill full-width" type="submit" value="REGISTRATE GRATIS!" />-->
                                        {!!Form::submit('REGISTRATE GRATIS!', array('class' => 'btn btn-fill full-width btnsendemail', 'name'=>'button_action')) !!}
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                        <!--</form>-->
                        <p class="light-gray-font-color">Confía en nosotros y sea uno de los primeros en conocer nuestras noticias, ideas, actualizaciones y<br> últimas características.</p>
                    </div>
                </div>
            </div>
            <div class="light-ash-bg">
                <div class="container">
                    <ul>
                        <li>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}"><img src="images/small-logo.png" alt="SEO Graphics" class="img-responsive logo"></a>
                                </li>
                                <li>
                                    <p class="extra-small-text">&copy; 2018</p>
                                </li>
                                <li>
                                    <p class="extra-small-text">SEOGraphics.<br> Todos los derechos reservados.</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a class="regular-text text-color-light">Servicios</a></li>
                                <li><a href="{{ route('artesgraficas') }}" class="extra-small-text">Artes Gráficas</a></li>
                                <li><a href="{{ route('disenoweb') }}" class="extra-small-text">Diseño web</a></li>
                                <li><a href="{{ route('optimizar') }}" class="extra-small-text">Optimización web</a></li>
                                <li><a href="{{ route('seo') }}" class="extra-small-text">Posicionaminto SEO </a></li>
                                <li><a href="{{ route('pagoxclic') }}" class="extra-small-text">Pago por Clic</a></li>
                                <li><a href="{{ route('socialmedia') }}" class="extra-small-text">Marketing de medios sociales</a></li>
                            </ul>
                        </li>
                        <li>
                             <ul>
                                <li><a class="regular-text text-color-light">Recursos</a></li>
                                <li><a href="{{ route('portafolio') }}" class="extra-small-text">Portafolio</a></li>
                                <li><a href="{{ route('casosexito') }}" class="extra-small-text">Casos de exito</a></li>
                                <li><a href="" class="extra-small-text">Noticias</a></li>
                            </ul>
                      </li>
                        <li>
                           
                            <ul>
                                <li><a class="regular-text text-color-light">Soporte</a></li>
                                <li><a href="{{ route('contactenos') }}" class="extra-small-text">Contáctenos</a></li>
                                <li><a href="{{ route('politicas') }}" class="extra-small-text">Política de privacidad</a></li>
                                <li><a href="{{ route('terminosycondiciones') }}" class="extra-small-text">Términos & condiciones</a></li>
                            </ul>
                     </li>
                        <li class="big-width">
                           <ul class="list-inline">
                                <li>
                                    <p class="regular-text text-color-light">Estar en contacto</p>
                                    <ul class="social-links">
                                        <li><a href="https://www.facebook.com/SEOGraphicsColombia/" target="_blank"><span class="icon-facebook"></span></a></li>
                                        <li><a href="https://twitter.com/SEOGraphicsCol1" target="_blank"><span class="icon-twitter"></span></a></li>
                                        <li><a href="https://plus.google.com/u/1/114912547282020678629" target="_blank"><span class="icon-google-plus"></span></a></li>
                                        <li><a href="https://www.instagram.com/seographics/" target="_blank" ><span class="icon-instagram"></span></a></li>
                                        <li><a href="https://www.linkedin.com/company/seographics/" target="_blank"><span class="icon-linkedin"></span></a></li>
                                    </ul>
                                    <li><span class="icon-phone"></span> 319 2948824</li>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <!-- modal -->
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
                                @if(Session::has('flash_message'))
                                    <div class="alert alert-succes">{{ Session::get('flash_message') }}</div>
                                @endif
                                {!! Form::open(['class' => 'formCotizacion']) !!}
                                    {{ csrf_field() }}
                                    <div class="form-element-wrapper">
                                        <h3>¿Quieres una cotización?</h3>
                                        <div class="form-group customised-formgroup"> <span class="icon-user"></span>                                        
                                            {{ Form::text('name',null,(['id'=>'name', 'class' => 'form-control', 'required'=>'true'])) }}
                                            {{ Form::label( 'name', 'nombres*:') }}
                                            @if($errors->has('name'))
                                                <small class="form-text invalid-feedback">
                                                    {{ $errors->first('name') }}
                                                </small>
                                            @endif
                                        </div>
                                        <div class="form-group customised-formgroup"> <span class="icon-envelope"></span>
                                            {{ Form::email('email', null,(['id'=>'email', 'class' => 'form-control', 'required'=>'true'])) }}
                                            {{ Form::label( 'email', 'Email*:') }}
                                            @if($errors->has('email'))
                                                <small class="form-text invalid-feedback">
                                                    {{ $errors->first('email') }}
                                                </small>
                                            @endif
                                        </div>
                                        <div class="form-group customised-formgroup"> <span class="icon-telephone"></span>
                                            {{ Form::tel('movil', null,(['id'=>'movil', 'class' => 'form-control', 'required'=>'true'])) }}
                                            {{ Form::label( 'movil', 'Movil*:') }}
                                        </div>
                                        <div class="form-group customised-formgroup"> <span class="icon-laptop"></span>
                                            {{ Form::text('website', null,(['id'=>'website', 'class' => 'form-control', 'required'=>'true'])) }}
                                            {{ Form::label('website', 'Website:') }}
                                        </div>
                                        <div class="form-group customised-formgroup"> <span class="icon-bubble"></span>
                                            {{ Form::textarea('comment', null,(['id'=>'comment', 'class' => 'form-control', 'required'=>'true'])) }}
                                            {{ Form::label('comment', 'Mensaje*:') }}
                                            @if($errors->has('comment'))
                                                <small class="form-text invalid-feedback">
                                                    {{ $errors->first('comment') }}
                                                </small>
                                            @endif
                                        </div>
                                        <div>
                                            {!!Form::submit('ENVIAR', array('class' => 'btn btn-fill full-width btnsendemail')) !!}
                                            <!--<button type="submit" class="btn btn-fill full-width"> Si la Quiero <span class="icon-chevron-right"></span></button>-->
                                        </div>
                                    </div>
                                    @if(Session::has('message'))
                                        {{Session::get('message')}}
                                    @endif
                                {!! Form::close() !!}                     
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
    @show

    @section('scripts')
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/isotope.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script>
        $(document).ready(function () {
            
            var form = $('.formContact');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            //console.log(form);

            form.submit(function(e) {                
                e.preventDefault();

                var a = $("input[name='name']").val();
                var b = $("input[name='email']").val();
                var c = $("input[name='movil']").val();
                var d = $("input[name='website']").val();
                var e = $("textarea[name='comment']").val();
                //var myObj = [a, b, c, d, e];
                //myObj[0].push("name");                       

                $(form).find("input[type='submit']").addClass('disabled');

                if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "", e == null || e == "") {
                    $(form).append('<div class="alert alert-warning" role="alert">Por favor complete todos los campos :/ </div>');
                    setTimeout(function () {
                        $(form).children('.alert').remove();
                    }, 3000);
                    return false;
                }
                /*
                if(!$(form).valid()){
                    return
                }*/
                else {
                    $.ajax({
                        url: "{{ route('contacto.store') }}",
                        method: 'POST',
                        data: form.serialize(),
                        dataType: 'json',
                        success: function (msg) {
                            $(form).find("input[type='text'], input[type='tel'], input[type='email'], textarea").val("").attr('disabled', true);
                            $(form).append('<div class="alert alert-success" role="alert">Gracias por contactarnos :)</div>');
                            setTimeout(function () {
                                $(form).children('.alert').remove();
                                $(form).find("input[type='submit']").removeClass('disabled');
                                $(form).find("input[type='text'], input[type='tel'], input[type='email'], textarea").removeAttr('disabled');
                            }, 3000);
                            
                        },
                        error: function (msg) {
                            $(form).append('<div class="alert alert-danger" role="alert">Su mensaje no fue enviado, intente mas tarde.</div>');
                        }
                    });
                }
            });

            var formCotiza = $('.formCotizacion');
            
            //console.log(formCotizacion);

            formCotiza.submit(function(e) {                
                e.preventDefault();

                var v = $(formCotiza).find("input[name='name']").val();
                var w = $(formCotiza).find("input[name='email']").val();
                var x = $(formCotiza).find("input[name='movil']").val();
                var y = $(formCotiza).find("input[name='website']").val();
                var z = $(formCotiza).find("textarea[name='comment']").val();
                var myObj = [v, w, x, y, z];
                console.log(myObj);
                //myObj[0].push("name");                       

                $(formCotiza).find("input[type='submit']").addClass('disabled');

                if (v == null || v == "", w == null || w == "", x == null || x == "", y == null || y == "", z == null || z == "") {
                    $(formCotiza).append('<div class="alert alert-warning" role="alert">Por favor complete todos los campos :/ </div>');
                    setTimeout(function () {
                        $(formCotiza).children('.alert').remove();
                        $(formCotiza).find("input[type='submit']").removeClass('disabled');
                    }, 3000);
                    return false;
                }
                /*
                if(!$(formCotiza).valid()){
                    return
                }*/
                else {                    
                    $.ajax({
                        url: "{{ route('contacto.store') }}",
                        method: 'POST',
                        data: formCotiza.serialize(),
                        dataType: 'json',
                        success: function (msg) {
                            $(formCotiza).find("input[type='text'], input[type='tel'], input[type='email'], textarea").val("").attr('disabled', true);
                            $(formCotiza).append('<div class="alert alert-success" role="alert">Gracias por contactarnos :)</div>');
                            setTimeout(function () {
                                $(formCotiza).children('.alert').remove();
                                $(formCotiza).find("input[type='submit']").removeClass('disabled');
                                $(formCotiza).find("input[type='text'], input[type='tel'], input[type='email'], textarea").removeAttr('disabled');
                            }, 3000);

                        },
                        error: function (msg) {
                            $(formCotiza).append('<div class="alert alert-danger" role="alert">Su mensaje no fue enviado, intente mas tarde.</div>')
                        }
                    });
                }
            });

            var newsForm = $('#newsletterform');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            newsForm.submit(function(e) {
                e.preventDefault();

                var n = $("#newsletterform input[name='name']").val();
                var r = $("#newsletterform input[name='email']").val();
                
                //var myObj = [a, b, c, d, e];
                //myObj[0].push("name");

                $(newsForm).find("input[type='submit']").addClass('disabled');

                if (n == null || n == "", r == null || r == "") {
                    $(newsForm).append('<div class="alert alert-warning" role="alert">Por favor complete todos los campos :/ </div>');
                    setTimeout(function () {
                        $(newsForm).children('.alert').remove();
                    }, 3000);
                    return false;
                }
                /*
                if(!$(form).valid()){
                    return
        }*/
                else {
                    $.ajax({           
                        cache: false,                                  
                        url: "{{ route('newsletter.store') }}",
                        method: 'POST',                        
                        data: newsForm.serialize(),
                        dataType: 'json',                        
                        success: function (msg) {
                            if(msg.status == 'exito'){
                                $(newsForm).find("input[type='text'], input[type='email']").val("").attr('disabled', true);
                                $(newsForm).append('<div class="alert alert-success" role="alert">Gracias por Suscribirte a nuestro canal :)</div>');
                                setTimeout(function () {
                                    $(newsForm).children('.alert').remove();
                                    $(newsForm).find("input[type='submit']").removeClass('disabled');
                                    $(newsForm).find("input[type='text'], input[type='email']").removeAttr('disabled');
                                }, 3000);
                            }else {
                                $(newsForm).append('<div class="alert alert-danger" role="alert">' + msg.msg + '</div>')
                            }
                            

                        },
                        error: function (msg) {
                            //>$(form).append('<div class="alert alert-danger" role="alert">'+ $errors +'</div>');                            
                            $(newsForm).append('<div class="alert alert-danger" role="alert">Su mensaje no fue enviado, intente mas tarde.</div>')
                        }
                    });
                }
            });
        });
        </script>
        
    @show
</body>

</html>