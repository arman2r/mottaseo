<div class="customise-form">
    @if(Session::has('flash_message'))
        <div class="alert alert-succes">{{ Session::get('flash_message') }}</div>
    @endif
    {!! Form::open(['class' => 'formContact']) !!}
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