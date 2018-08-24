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
@endsection


@section('css')
    @parent
@endsection

@section('content')
<section class="banner  o-hidden banner-inner contact-banner">
        <div class="container">
            <div class="banner-txt">
                <h1>Contáctanos ahora</h1>
                <p class="semi-bold">Ponte en contacto con nosotros y te ayudaremos <br />hacer crecer Tu negocio en línea.</p>
            </div>
        </div>
    </section>
    <section class="bg-white o-hidden common-form-section contact-form-wrapper">
        <div class="container">
            <h2 class="b-clor">Dinos en que podemos ayudarte.</h2>
            <hr class="dark-line" />
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="customise-form contact-form">
                        <!--<form class="email_form" method="post">-->
                        {!! Form::open(['route' => 'contacto.store', 'method' => 'POST', 'class' => 'emailform']) !!}
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group customised-formgroup"> <span class="icon-user"></span>
                                        {{ Form::text('name',null,(['id'=>'name', 'class' => 'form-control', 'required' => 'true'])) }}
                                        {{ Form::label( 'name', 'nombres*:') }}
                                        <!--<input type="text" name="full_name" class="form-control" placeholder="Nombre">-->
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group customised-formgroup"> <span class="icon-envelope"></span>
                                        {{ Form::email('email', null,(['id'=>'email', 'class' => 'form-control', 'required' => 'true'])) }}
                                        {{ Form::label( 'email', 'Email*:') }}
                                        <!--<input type="email" name="email" class="form-control" placeholder="Email">-->
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group customised-formgroup"> <span class="icon-telephone"></span>
                                        {{ Form::tel('movil', null,(['id'=>'movil', 'class' => 'form-control', 'required' => 'true'])) }}
                                        {{ Form::label( 'movil', 'Movil*:') }}
                                        <!--<input type="text" name="phone" class="form-control" placeholder="Móvil">-->
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group customised-formgroup"> <span class="icon-laptop"></span>
                                        {{ Form::text('website', null,(['id'=>'website', 'class' => 'form-control', 'required' => 'true'])) }}
                                        {{ Form::label('website', 'Website:') }}
                                        <!--<input type="text" name="website" class="form-control" placeholder="Website">-->
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group customised-formgroup"> <span class="icon-bubble"></span>
                                        {{ Form::textarea('comment', null,(['id'=>'comment', 'class' => 'form-control', 'required' => 'true'])) }}
                                        {{ Form::label('comment', 'Mensaje*:') }}
                                        <!--<textarea name="message" class="form-control" placeholder="Mesanje"></textarea>-->
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                {!!Form::submit('¡Contáctanos ahora!', array('class' => 'btn btn-fill full-width btnsendemail')) !!}
                                <!--<button type="submit" class="btn btn-fill">¡Contáctanos ahora!</button>-->
                            </div>
                        <!--</form>-->
                        {!! Form::close() !!}  
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-info-box-wrapper">
                        <div class="contact-info-box"> <span class="icon-telephone"></span>
                            <div>
                                <h6>Llamanos</h6>
                                <p>+57 3192948824</p>
                            </div>
                        </div>
                        <div class="contact-info-box"> <span class="icon-envelope"></span>
                            <div>
                                <h6>E-mail</h6>
                                <p>contactanos@seographics.com.co</p>
                              </div>
                        </div>
                        <div class="contact-info-box">
                            <ul class="social-links">
                                <li><a href=""><span class="icon-facebook"></span></a></li>
                                <li><a href=""><span class="icon-twitter"></span></a></li>
                                <li><a href=""><span class="icon-google-plus"></span></a></li>
                                <li><a href=""><span class="icon-instagram"></span></a></li>
                                <li><a href=""><span class="icon-pinterest"></span></a></li>
                                <li><a href=""><span class="icon-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white google-map-location">
        <div class="container">
            <h2 class="b-clor text-align-center">Visita nuestros lugares de trabajo</h2>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs process-model contact-us-tab" role="tablist">
                        <li role="presentation" class="active"><a href="contact.html#newYork" aria-controls="newYork" role="tab" data-toggle="tab"><span class="icon-map"></span>
            <p>Bogotá</p>
            </a></li>
                        <li role="presentation"><a href="contact.html#Dhaka" aria-controls="Dhaka" role="tab" data-toggle="tab"><span class="icon-map"></span>
            <p>Ibagué</p>
            </a></li>
                        <li role="presentation"><a href="contact.html#delhi" aria-controls="delhi" role="tab" data-toggle="tab"><span class="icon-map"></span>
            <p>Neiva</p>
            </a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="newYork">
                            <p class="regular-text">Cra. 46 # 137 - 32, Bogotá, Cundinamarca</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15905.08525140307!2d-74.052821!3d4.722867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6874a5bb7d0f778a!2sSEOGraphics+-+Agencia+Web!5e0!3m2!1ses-419!2sco!4v1534097293275" height="500" style="border:0; width:100%" allowfullscreen></iframe>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Dhaka">
                            <p class="regular-text">Manzana K Casa 3 </p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.829406766428!2d-75.19072510582903!3d4.442831015386902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38c50fa2e500d1%3A0x4d383a020a94eb9f!2sBrisas+Del+Pedregal!5e0!3m2!1ses-419!2sco!4v1534105828122" height="500" style="border:0; width:100%" allowfullscreen></iframe>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="delhi">
                            <p class="regular-text">Carrera 16 #41 - 72, Neiva, Huila</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.524669527779!2d-75.28926004867944!3d2.9517987551443454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b74516c076263%3A0xc7d73bfb782159f2!2sSan+Juan+Plaza!5e0!3m2!1ses-419!2sco!4v1534117434754" height="500" style="border:0; width:100%" allowfullscreen></iframe>
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
@endsection
