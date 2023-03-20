
@extends('master.navbar')
@extends('master.links')
@extends('master.css')

@section('title')
    Service
@endsection

<link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}">

@section('content')
    
<main id="main">
    <div class="breadcrumbs" style="margin-top: 80px">
    <div class="page-header d-flex align-items-center" style="background-image: url('{{asset("/images/1.jpg")}}');">
        <div class="container position-relative">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
            <h2 style="color:white">Service</h2>
            <p>
                Nous sommes ravis de vous présenter nos services, conçus pour répondre à vos besoins spécifiques .
                <br><br>
            </p>
            </div>
        </div>
        </div>
    </div>
</main>


<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg mt-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('/images/service2.jpeg')}}" class="img-fluid" alt=""></div>
              <h4><a href="">Système de gestion des appels</a></h4>
              <p>
                un système de gestion des appels permet de gérer efficacement le flux des appels entrants et sortants. 
                Il peut également fournir des informations sur les appels, telles que la durée de l'appel, 
                le temps d'attente, le temps de réponse et plus encore.
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('/images/service2.jpeg')}}" class="img-fluid" alt=""></div>
              <h4><a href="">Logiciel de centre d'appels</a></h4>
              <p>
                un logiciel de centre d'appels est conçu pour aider à gérer les interactions avec les clients. 
                Il peut inclure des fonctionnalités telles que des scripts de conversation, 
                des options de routage des appels, des analyses des performances des agents et bien plus encore.
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('/images/service2.jpeg')}}" class="img-fluid" alt=""></div>
              <h4><a href="">Service de numérotation en masse</a></h4>
              <p>
                si vous avez besoin d'appeler un grand nombre de clients, 
                un service de numérotation en masse peut être très utile. 
                Cela vous permettra de composer plusieurs numéros à la fois, 
                ce qui vous fera économiser du temps et de l'énergie.
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('/images/service2.jpeg')}}" class="img-fluid" alt=""></div>
              <h4><a href="">Service d'analyse de la voix du client</a></h4>
              <p>
                ce service utilise l'intelligence artificielle pour analyser les appels et détecter les tendances et les problèmes fréquents. 
                Il peut également fournir des informations sur la satisfaction des clients, la qualité des appels et bien plus encore.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

   
   

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg mt-5 mb-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('/images/1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('/images/1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('/images/1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('/images/1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

</main>

{{--? ------------------------------------------------------------------------------------------ --}}

@include('master.footer')
@endsection



    