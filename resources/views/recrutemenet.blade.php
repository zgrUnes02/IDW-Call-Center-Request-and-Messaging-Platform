
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
                    <div class="col-lg-5 quote-bg" style="background-image: url('{{asset('/images/recrutement.png')}}');"></div>
                    <div class="col-lg-7">
                        <form action="{{route('send')}}" method="post" enctype="multipart/form-data" class="php-email-form">
                            @csrf
                                <div class="col-lg-12 mb-4">
                                    <h4>Your Personal Details</h4>
                                </div>
    
                                <div class="col-md-12 mb-2">
                                    <input type="text" name="nom" class="form-control" placeholder="Nom" required class="@error('nom') is-invalid @enderror" value="{{ old('nom') }}">
                                    @error('nom')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-2">
                                    <input type="text" name="family_name" class="form-control" placeholder="Prénom" required class="@error('family_name') is-invalid @enderror" value="{{ old('family_name') }}">
                                    @error('family_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-2">
                                    <input type="tel" class="form-control" name="tele" placeholder="Telephone" required class="@error('tele') is-invalid @enderror" value="{{ old('tele') }}">
                                    @error('tele')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
    
                                <div class="col-md-12  mb-2">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail" required class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12  mb-2">
                                    <input type="number" class="form-control" name="annee_experience" placeholder="Annee experience" required class="@error('annee_experience') is-invalid @enderror" value="{{ old('annee_experience') }}">
                                    @error('annee_experience')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12  mb-2">
                                    <select name="poste" class="form-control" style="padding: 10px 15px" required class="@error('poste') is-invalid @enderror" value="{{ old('poste') }}">
                                        <option disabled selected>Emploi</option>
                                        <option value="stage">Stage</option>
                                        <option value="emploi">Emploi</option>
                                    </select>
                                    @error('poste')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12  mb-2">
                                    <select name="etudes" class="form-control" style="padding: 10px 15px" required class="@error('etudes') is-invalid @enderror" value="{{ old('etudes') }}">
                                        <option disabled selected>Etudes</option>
                                        <option value="bac +5">Bac +5</option>
                                        <option value="bac +4">Bac +4</option>
                                        <option value="bac +3">Bac +3</option>
                                        <option value="bac +2">Bac +2</option>
                                        <option value="bac +1">Bac +1</option>
                                        <option value="bac">Bac</option>
                                    </select>
                                    @error('etudes')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12  mb-2">
                                    <select name="day" class="form-control" style="padding: 10px 15px" required class="@error('day') is-invalid @enderror" value="{{ old('day') }}">
                                        <option disabled selected>Jour d'entretien</option>
                                        <option value="Lundi">Lundi</option>
                                        <option value="Mardi">Mardi</option>
                                        <option value="Mercredi">Mercredi</option>
                                        <option value="Jeudi">Jeudi</option>
                                        <option value="Vendredi">Vendredi</option>
                                    </select>
                                    @error('day')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12  mb-2">
                                    <select name="time" class="form-control" style="padding: 10px 15px" required class="@error('time') is-invalid @enderror">
                                        <option disabled selected>Heure d'entretien</option>
                                        <option disabled class="text-center bg-primary text-white">Matin</option>
                                        <option value="10h">10h</option>
                                        <option value="10h15">10h15</option>
                                        <option value="10h30">10h30</option>
                                        <option value="10h45">10h45</option>
                                        <option value="11h">11h</option>
                                        <option value="11h15">11h15</option>
                                        <option value="11h30">11h30</option>
                                        <option value="11h45">11h45</option>
                                        <option value="12h">12h</option>
                                        <option value="12h15">12h15</option>
                                        <option value="12h30">12h30</option>
                                        <option disabled class="text-center bg-primary text-white">Apres-midi</option>
                                        <option value="15h ">15h</option>
                                        <option value="15h15">15h15</option>
                                        <option value="15h30">15h30</option>
                                        <option value="15h45">15h45</option>
                                        <option value="16h">16h</option>
                                        <option value="16h15">16h15</option>
                                        <option value="16h30">16h30</option>
                                        <option value="16h45">16h45</option>
                                        <option value="17h">17h</option>
                                        <option value="17h15">17h15</option>
                                        <option value="17h30">17h30</option>
                                    </select>
                                    @error('time')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12  mb-2">
                                    <input type="file" class="form-control" accept = ".pdf" name="cv" placeholder="file" required class="@error('cv') is-invalid @enderror" value="{{ old('cv') }}">
                                    @error('cv')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
                                    <button type="submit">Je m'inscris</button>
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

