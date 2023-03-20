
@extends('master.lastDashboard.including')

@section('title-2')
    Message du {{ $message -> nom }}
@endsection

@section('content-dahboard')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1> Message du {{ $message -> nom }} </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
    
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

                <main id="main" style="margin:20px;padding: -40px;margin-bottom:-18px " class="main">

                    <div class="pagetitle">
                
                    </div><!-- End Page Title -->
                
                    <section class="section profile">
                        <div class="row">
                
                
                            <div class="col-xl-12" >
                
                                <div class="card">
                                    <div class="card-body pt-3">
                                        <!-- Bordered Tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bordered">
                
                                            <li class="nav-item">
                                                <button class="nav-link active" data-bs-toggle="tab" >Message</button>
                                            </li>
                
                                        </ul>
                                        <div class="tab-content pt-2">
                
                                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                                <h5 class="card-title">Le sujet</h5>
                                                <p class="small fst-italic"> {{ $message -> sujet }} </p>
                
                                                <h5 class="card-title">Content</h5>

                                                <div class="form-floating mb-4">
                                                    <textarea disabled style="min-height:200px" class="form-control"> {{ $message -> message }} </textarea>
                                                </div>
                
                                        </div><!-- End Bordered Tabs -->
                
                                    </div>
                                </div>
                
                            </div>
                        </div>
                    </section>
                
                </main><!-- End #main -->

            </div>
          </div>
        </div>
      </div>
  </main>
@endsection
        

