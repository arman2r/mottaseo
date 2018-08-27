<?php

namespace seoGraphic\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return view('index');    
    }

    public function artesgraficas(){

        return view('artesgraficas');
    
    }
    public function disenoweb(){

        return view('disenoweb');
    
    }
    public function optimizar(){

        return view('optimizar');
    
    }
    public function seo(){

        return view('seo');
    
    }
    public function pagoxclic(){

        return view('pagoxclic');
    
    }
    public function socialmedia(){

        return view('socialmedia');
    
    }
    public function portafolio(){

        return view('portafolio');
    
    }
    public function casosexito(){

        return view('casosexito');
    
    }

    public function nosotros(){

        return view('nosotros');
    
    }
    public function politicas(){

        return view('politicas');
    
    }
    public function terminosycondiciones(){

        return view('terminosycondiciones');
    
    }
    
    public function ideu(){

        return view('ideu');
    
    }
    
    public function tecnomusic(){

        return view('tecnomusic');
    
    }
    public function sulicam(){

        return view('sulicam');
    
    }
    public function cuchiyuyo(){

        return view('cuchiyuyo');
    
    }
    public function blog(){

        return view('blog');
    
    }
    public function nota1(){

        return view('nota1');
    
    }
}
