@extends('master.navbar')
@extends('master.layout')
@extends('master.links')
@extends('master.css')

@section('title')
    A propos
@endsection

<link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}">

@section('content')
<main id="main">
    <div class="breadcrumbs" style="margin-top: 80px">
        <div class="page-header d-flex align-items-center" style="background-image: url('{{asset("/images/2.jpg")}}');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 style="color: white">A propos</h2>
                        <p>
                            Nous sommes ravis de vous présenter notre entreprise et notre mission
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<section class="contact10 container">
    <div class="features-clean mt-5">
        <div class="container">
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name" style="font-size : 30px;">Nous</h3>
                    <p class="description" style="font-size : 20px;">
                        Idw groupe Center est une entreprise spécialisée dans la gestion de la relation client en externalisation, 
                        située au cœur de Casablanca au Maroc. L'histoire de  idw  Center est celle de la rencontre d'une femme  melle houriya, 
                        qui'est travaillée pour des donneurs multinationales telle Forts de leur grande  expérience dans ce domaine
                    </p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name" style="font-size : 30px;">Domaine </h3>
                    <p class="description" style="font-size : 20px;">
                        Idw Center est une entreprise experte dans le domaine de la gestion externalisée de la relation client
                    </p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name" style="font-size : 30px;">Localisation</h3>
                    <p class="description" style="font-size : 20px;">
                        Idw groupe  située au centre ville de Casablanca a belvédère au Maroc    
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact10 container" style="margin-top:-150px;">
    <div class="features-clean mt-5">
        <div class="container">
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-leaf icon"></i>
                <h3 class="name" style="font-size : 30px;">Le respect</h3>
                <p class="description" style="font-size : 20px;">
                    Le respect est au cœur de nos valeurs, que ce soit envers nos clients, 
                    nos collaborateurs, les contrats que nous avons signés ou encore les lois en vigueur.
                </p>
            </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-plane icon"></i>
                    <h3 class="name" style="font-size : 30px;">Pourquoi nous</h3>
                    <p class="description" style="font-size : 20px;">
                        Nous sommes attachés à la performance, qui est garantie par l'excellence de nos collaborateurs, 
                        l'utilisation optimale de nos outils et la maîtrise de nos processus.    
                    </p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name" style="font-size : 30px;">Vous entendre</h3>
                    <p class="description" style="font-size : 20px;">
                        Nous sommes conscients de l'importance de la remise en question pour rester à la pointe de notre activité. 
                        Nous sommes à l'écoute des meilleures pratiques, nous nous organisons de manière flexible et nous adaptons notre taille pour répondre au mieux aux besoins spécifiques de chaque client.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('master.footer')
