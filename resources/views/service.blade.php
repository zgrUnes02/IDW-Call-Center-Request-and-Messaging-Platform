
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
                Offrez à vos clients un accueil téléphonique convivial et professionnel.
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('/images/service2.jpeg')}}" class="img-fluid" alt=""></div>
              <h4><a href="">Logiciel de centre d'appels</a></h4>
              <p>
                Bénéficiez d’un script d’accueil professionnel et répondant à vos exigences.
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('/images/service2.jpeg')}}" class="img-fluid" alt=""></div>
              <h4><a href="">Service de numérotation en masse</a></h4>
              <p>
                Identifiez les zones d’insatisfaction et prenez en charge les remontées de vos clients : un client mécontent pris en charge est plus prescripteur qu’un client lambda.
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('/images/service2.jpeg')}}" class="img-fluid" alt=""></div>
              <h4><a href="">Service d'analyse</a></h4>
              <p>
                Des solutions techniques expertes à moindre coût : CRM, DATA analyse.
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



    