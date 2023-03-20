
@extends('master.navbar')
@extends('master.links')
@extends('master.css')

@section('title')
    Recrutement
@endsection

<link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}">

@section('content')

    <main id="main">
        <div class="breadcrumbs" style="margin-top: 80px">
        <div class="page-header d-flex align-items-center" style="background-image: url('{{asset("/images/4.jpg")}}');">
            <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                <h2 style="color:white">Recrutement</h2>
                <p>
                    Nous sommes ravis de vous offrir la possibilité de vous inscrire rapidement et 
                    facilement en ligne
                    <br><br>
                </p>
                </div>
            </div>
            </div>
        </div>
    </main>

    <main id="main">
        <!-- ======= Get a Quote Section ======= -->
        <section id="get-a-quote" style="margin:80px 0" class="get-a-quote">
            <div class="container" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-lg-5 quote-bg" style="background-image: url('{{asset('/images/pic7.jpg')}}');"></div>
                    <div class="col-lg-7">
                        <form action="{{route('send')}}" method="post" enctype="multipart/form-data" class="php-email-form">
                            @csrf
                                <div class="col-lg-12 mb-4">
                                    <h4>Your Personal Details</h4>
                                </div>
    
                                <div class="col-md-12 mb-2">
                                    <input type="text" name="nom" class="form-control" placeholder="Name" required>
                                </div>
    
                                <div class="col-md-12  mb-2">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                                </div>
    
                                <div class="col-md-12 mb-2">
                                    <input type="tel" class="form-control" name="tele" placeholder="Telephone" required>
                                </div>
                            <div class="col-md-12  mb-2">
                                <input type="number" class="form-control" name="annee_experience" placeholder="Annee experience" required>
                            </div>
                            <div class="col-md-12  mb-2">
                                <input type="text" class="form-control" name="poste" placeholder="Poste" required>
                            </div>
                            <div class="col-md-12  mb-2">
                                <select name="etudes" class="form-control" style="padding: 10px 15px">
                                    <option disabled selected>etudes</option>
                                    <option value="bac +5">Bac +5</option>
                                    <option value="bac +4">Bac +4</option>
                                    <option value="bac +3">Bac +3</option>
                                    <option value="bac +2">Bac +2</option>
                                    <option value="bac +1">Bac +1</option>
                                    <option value="bac">Bac</option>
                                  </select>
                            </div>
                            <div class="col-md-12  mb-2">
                                <input type="file" class="form-control" accept = ".pdf" name="cv" placeholder="file" required>
                            </div>
                            @if ($errors->any())
                                <div class="text-success">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mt-5">
                                <button type="submit">Envoyer</button>
                            </div>
                            </div>
                        </form>
                    </div><!-- End Quote Form -->
                </div>
            </div>
        </section><!-- End Get a Quote Section -->
    </main><!-- End #main -->
    @include('master.footer')
@endsection

