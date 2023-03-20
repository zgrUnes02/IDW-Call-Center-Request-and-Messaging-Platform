
@extends('master.layout')
@extends('master.css')

@section('title')
    {{ $visitorInfo -> nom }}
@endsection

@extends('master.lastDashboard.including')

@section('content-dahboard')

<main id="main" style="margin-top: 83px">
    <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('{{asset("/images/visitors.jpg")}}');">
        <div class="container position-relative">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
            <h2>{{ $visitorInfo -> nom }}</h2>
            <p>
                est un visiteur qui envoye leur cv !
            </p>
            </div>
        </div>
        </div>
    </div>
    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" style="margin:80px 0" class="get-a-quote">
        <div class="container" data-aos="fade-up">
            <div class="row g-0">
                <div class="col-lg-5 quote-bg" style="background-image: url('{{asset('/images/pic7.jpg')}}');"></div>
                <div class="col-lg-7">
                    <form action="#" method="post" enctype="multipart/form-data" class="php-email-form">
                        @csrf
                            <div class="col-lg-12 mb-4">
                                <h4>{{ $visitorInfo -> nom }} Personal Details</h4>
                            </div>

                            <div class="col-md-12 mb-2">
                                <input type="text" name="nom" class="form-control" value="{{ $visitorInfo -> nom }}" placeholder="Name" required readonly>
                            </div>

                            <div class="col-md-12  mb-2">
                                <input type="email" class="form-control" value="{{ $visitorInfo -> email }}" name="email" placeholder="E-mail" readonly>
                            </div>

                            <div class="col-md-12 mb-2">
                                <input type="tel" class="form-control" value="{{ $visitorInfo -> telephone }}" name="tele" placeholder="Telephone" readonly>
                            </div>
                        <div class="col-md-12  mb-2">
                            <input type="number" class="form-control" value="{{ $visitorInfo -> annee_experience }}" name="annee_experience" placeholder="Annee experience" readonly>
                        </div>
                        <div class="col-md-12  mb-2">
                            <input type="text" class="form-control" value="{{ $visitorInfo -> titre }}" name="poste" placeholder="Poste" readonly>
                        </div>
                        <div class="col-md-12  mb-2">
                            <select name="etudes" class="form-control" style="padding: 10px 15px" readonly>
                                <option selected> {{ $visitorInfo -> etudes }}</option>
                            </select>
                        </div>
                        <div class="col-md-12  mb-2">
                            <input type="text" class="form-control" value="{{ $cvs -> path }}" accept = ".pdf" name="cv" placeholder="file" readonly >
                        </div>

                        <div class="mt-5">
                            <a href="{{ url('/download') }}/{{$visitorInfo -> nom}}/{{ $cvs -> path }}" class="btn btn-outline-success">Telecharger &nbsp; <i class="fa-solid fa-download"></i></a>
                            <a href="{{ url('/show') }}/{{$visitorInfo -> nom}}/{{ $cvs -> path }}" class="btn btn-outline-primary">Visiter &nbsp; <i class="fa-solid fa-download"></i></a>
                            {{-- public_path('visitors/' . $visitorName . '/' . $cvName) --}}
                        </div>
                        </div>
                    </form>
                </div>
                <!-- End Quote Form -->
            </div>
        </div>
    </section>
    <!-- End Get a Quote Section -->
</main>

@endsection