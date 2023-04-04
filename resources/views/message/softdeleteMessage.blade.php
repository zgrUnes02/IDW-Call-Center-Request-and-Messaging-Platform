
@extends('master.lastDashboard.including')

@section('title-2')
    Les messages supprimer
@endsection

<link rel="icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">

@section('content-dahboard')
  <main id="main" class="main">

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
    
    <div class="pagetitle">
      <h1>Les messages supprimer</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
    
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- Default Table -->
              <table class="table text-center table-responsive-lg">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Sujet</th>
                    <th scope="col">Processe</th>
                  </tr>
                </thead>

                @if ($messages -> count() == 0)
                <tbody>
                    <tr>
                        <td colspan="5">
                            le tableu est vide !
                        </td>
                    </tr>
                </tbody>

                @else
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <th>{{ $loop -> iteration }}</th>
                            <td>{{ $message -> nom }}</td>
                            <td>{{ $message -> email }}</td>
                            <td>{{ $message -> sujet }}</td>
                            <td>
                                <a href="{{route('forceDelete.message' , $message -> id)}}" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                                <a href="{{route('restore.message' , $message -> id)}}" class="btn btn-outline-success"> <i class="fa-solid fa-rotate-left"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @endif

              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

      
        </div>
      </div>
    </section>
  </main>
@endsection