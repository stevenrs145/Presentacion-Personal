@extends('layouts.app_prin')

@section('content')

<img class="espiral" src="{{URL::asset('img\espiral.png')}}" alt="espiral" >
<img class="circulo" src="{{URL::asset('img\circulo.png')}}" alt="circulo" >


<div class="container">
    <div class="row">
        <div class="col-md-6 f_text" style="margin-top: 6vh;">

            <div class="title">{{ __('Encantado!') }}</div>
            <div class="title2">{{ __('Yo soy Steven Rodriguez.') }}</div> <br><br>

            <div class="subtitle">{{ __('Soy de Guatemala, soy un desarrollador front-end ') }}</div>
            <div class="subtitle2">{{ __('apasionado por crear aplicaciones web accesibles ') }}</div>
            <div class="subtitle3">{{ __('que los usuarios aman.') }}</div> <br><br><br>

            <a class="nav-link" href="#"><div class="contact_f">{{ __('Contactame') }}</div></a>

        </div>

        <div class="col-md-6">
            <img class="photo" src="{{URL::asset('img\phot.jpg')}}" alt="photo" >
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

<hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="title_language">{{ __('HTML') }}</div>
            <div class="subtitle_lenguage">{{ __('2 Años de experiencia') }}</div>
        </div>

        <div class="col-md-4">
            <div class="title_language">{{ __('CSS') }}</div>
            <div class="subtitle_lenguage">{{ __('2 Años de experiencia') }}</div>
        </div>

        <div class="col-md-4">
            <div class="title_language">{{ __('Javascript') }}</div>
            <div class="subtitle_lenguage">{{ __('2 Años de experiencia') }}</div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-4">
            <div class="title_language">{{ __('Sql') }}</div>
            <div class="subtitle_lenguage">{{ __('1 Año de experiencia') }}</div>
        </div>

        <div class="col-md-4">
            <div class="title_language">{{ __('Laravel') }}</div>
            <div class="subtitle_lenguage">{{ __('1 Año de experiencia') }}</div>
        </div>

        <div class="col-md-4">
            <div class="title_language">{{ __('Angular') }}</div>
            <div class="subtitle_lenguage">{{ __('1 Año de experiencia') }}</div>
        </div>
    </div>

    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>

</div>

@endsection