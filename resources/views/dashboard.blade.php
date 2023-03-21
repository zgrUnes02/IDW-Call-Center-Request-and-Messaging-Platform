
@extends('master.lastDashboard.including')

@section('title-2')
    Dashboard
@endsection

@section('content-dahboard')

<style>
    body {
        overflow: hidden; /* Hide scrollbars */
    }
</style>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Accueil</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row   ">

            <!-- Sales Card -->
            <div class="col col-md-6" >
                <a href="{{route('showVisitor')}}">
                    <div class="card info-card sales-card" >
                        <div class="card-body">
                            <h5 class="card-title">Les condidatures</h5>
                            <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="ps-3">
                                <h6> {{ $countVisiteurs }} </h6>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- End Sales Card -->
            <div class="col col-md-6" >
            <a href="{{route('showMessages')}}">
                    <div class="card info-card sales-card" >
                        <div class="card-body">
                            <h5 class="card-title">Les messages</h5>

                            <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-message"></i>
                            </div>
                            <div class="ps-3">
                                <h6> {{ $countMessage }} </h6>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Revenue Card -->
            <div class="col col-md-12">
                <a href="{{route('showSoftdelete')}}">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Les condidatures supprimer</h5>
                            <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="ps-3">
                                <h6> {{ $countVisiteursSupprimer }} </h6>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Revenue Card -->

            <!-- Revenue Card -->
            <div class="col col-md-12">
                <a href="{{route('showForceDeleteMessages')}}">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Les messages supprimer</h5>
                            <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-message"></i>
                            </div>
                            <div class="ps-3">
                                <h6> {{ $countMessageSupprimer }} </h6>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Revenue Card -->
@endsection
