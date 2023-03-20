@extends('master.navbar')
@extends('master.layout')
@extends('master.css')
@extends('master.links')

@section('title')
    contact
@endsection

<link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}">

@section('content')

<main id="main">
    <div class="breadcrumbs" style="margin-top:80px ">
    <div class="page-header d-flex align-items-center" style="background-image: url('{{asset("/images/3.jpg")}}');">
        <div class="container position-relative">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
            <h2 style="color:white">Contact</h2>
            <p>
              Nous sommes ravis de pouvoir vous aider et de répondre à toutes vos questions. 
              Si vous avez des commentaires, des suggestions ou des demandes spécifiques concernant nos produits ou services, 
              n'hésitez pas à nous contacter .
              <br><br>
            </p>
            </div>
        </div>
        </div>
    </div>
</main>

<section id="contact" class="contact4">
    <div class="container mt-5" data-aos="fade-up">

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3323.535583831203!2d-7.605011484797003!3d33.59140548073382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzPCsDM1JzI5LjEiTiA3wrAzNicxMC4yIlc!5e0!3m2!1sfr!2sma!4v1678290475278!5m2!1sfr!2sma" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div><!-- End Google Maps -->
    </div>
</section>

<main id="main">
  <section id="contact" class="contact">
    <div class="container mb-4" data-aos="fade-up">
      <div class="row gy-4 mt-4">

        <div class="col-lg-4">

          <div class="info-item d-flex">
            <i class="fa-solid fa-location-dot"></i>
            <div>
              <h4>Localisation:</h4>
              <p>N5,belledone 4eme etage,bd abdellah ben yacine</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="fa-solid fa-envelope"></i>
            <div>
              <h4>Email:</h4>
              <p>recrutement.idw@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="fa-solid fa-phone"></i>
            <div>
              <h4>Telephone:</h4>
              <p>05 22 30 07 28</p>
            </div>
          </div><!-- End Info Item -->
        </div>
        <div class="col-lg-8">
          <form action="{{route('send.message')}}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            @if ($errors->any())
              <div class="form-group mt-3">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </ul>
                  </div>
              </div>
            @endif

            <button class="mt-2" type="submit">Envoyer Message</button>
          </form>
        </div><!-- End Contact Form -->
      </div>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->
  @include('master.footer')
