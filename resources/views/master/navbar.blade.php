
@extends('master.layout')
@extends('master.links')
@extends('master.css')

<nav id="navbar" style="z-index: 99" class="navbar navbar-expand-lg navbar-light bg-light py-3">        
    <div class="container-fluid">
        <a href="{{route('home')}}"><img class="navbar-brand" style="margin-left: 40px ; width: 100px" src="{{asset('/images/logo.png')}}" alt="logo"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="links" class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('service')}}" tabindex="-1" aria-disabled="true">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('recrutement')}}" tabindex="-1" aria-disabled="true">Recrutement</a>
                </li>
                <li lass="nav-item">
                    <a class="nav-link" href="{{route('contact')}}" tabindex="-1" aria-disabled="true">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('apropos')}}">A propos</a>
                </li>
            </ul>

            @if ( getHostByName(getHostName()) == '192.168.137.148')
                <div class="row" style="margin-right: 20px">
                    <a href="/login" class="col btn btn-outline-primary">Se connecter &nbsp; <i class="fa-solid fa-right-to-bracket"></i></a>
                </div>
            @endif
            
        </div>
    </div>
</nav>
