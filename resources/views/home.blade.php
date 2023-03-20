@extends('master.navbar')
@extends('master.css')

@section('title')
        Center d'appele IDW
@endsection

<link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}">

@section('content')   
{{-- ? ----------------------------------------- PAGE I ------------------------------------------------ --}}
    <!-- =======  Section ======= -->
    <section id="hero" class="main" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 style="font-size: 70px ; color:#1554B1" class="mb-4 mt-5">BESOIN D’UN EXPERT EN IDW ?</h2>
                    <p class="mb-4" style="color: black ; font-size:20px">Mettre en œuvre des outils de prospection, de vente, de qualification ou de récupération qui prennent en compte vos spécificités (zones géographiques, langage, habitudes de consommation, et toute autre segmentation que nous pouvons identifier)</p>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" >
                    <img style="width: 550px;margin-top:90px" src="{{asset('images/man.png')}}" alt="">
                </div>

            </div>
        </div>
    </section>
    
{{--? ----------------------------------------------------- cards ---------------------------------------- --}}

<div class="article-list mt-4">
    <div class="container">

        <div class="row articles">
            <div class="col-sm-6 col-md-6 item"><a href="{{route('service')}}"><img class="img-fluid" src='{{asset("/images/1.jpg")}}'></a>
                <h3 class="name">Services</h3>
                <p class="description">
                    Nous sommes ravis de vous présenter nos services, conçus pour répondre à vos besoins spécifiques .
                </p>
                <a href="{{route('service')}}" class="action"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
            <div
                class="col-sm-6 col-md-6 item"><a href="{{route('recrutement')}}"><img class="img-fluid" src='{{asset("/images/4.jpg")}}'></a>
                <h3 class="name">Recrutement</h3>
                <p class="description">
                    Nous sommes ravis de vous offrir la possibilité de vous inscrire rapidement et facilement en ligne .
                </p>
                <a href="{{route('recrutement')}}" class="action">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="row articles">
            <div class="col-sm-6 col-md-6 item"><a href="{{route('contact')}}"><img class="img-fluid" src='{{asset("/images/3.jpg")}}'></a>
                <h3 class="name">Contact</h3>
                <p class="description">
                    Nous sommes ravis de pouvoir vous aider et de répondre à toutes vos questions . 
                </p>
                <a href="{{route('contact')}}" class="action">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <div
                class="col-sm-6 col-md-6 item"><a href="{{route('apropos')}}"><img class="img-fluid" src='{{asset("/images/2.jpg")}}'></a>
                <h3 class="name">A propos</h3>
                <p class="description">
                    Nous sommes ravis de vous présenter notre entreprise et notre mission .
                </p>
                <a href="{{route('apropos')}}" class="action">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        
        </div>
    </div>
</div>

@include('master.footer')
@endsection