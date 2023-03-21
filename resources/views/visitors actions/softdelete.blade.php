
@extends('master.lastDashboard.including')

@section('title-2')
    Les condidatures supprimer
@endsection

@section('content-dahboard')
  <main id="main" class="main">

{{--! -----------------------------------------ALERT NOTIFICATION------------------------------------------ --}}
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
{{--! ---------------------------------------------------------------------------------------------------- --}}

    <div class="pagetitle">
      <h1>Les condidatures supprimer</h1>
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
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Type</th>
                    <th scope="col">Etudes</th>
                    <th scope="col">Annee experience</th>
                    <th scope="col">Processe</th>
                  </tr>
                </thead>
                @if ($visitors -> count() == 0)
                    <tbody>
                        <tr>
                            <td colspan="8">
                                le tableu est vide !
                            </td>
                        </tr>
                    </tbody>
                @else
                    @foreach ($visitors as $visitor)
                    <tr>
                        <th>{{ $loop -> iteration }}</th>
                        <td>{{ $visitor -> nom }}</td>
                        <td>{{ $visitor -> email }}</td>
                        <td>{{ $visitor -> telephone }}</td>
                        <td>{{ $visitor -> titre }}</td>
                        <td>{{ $visitor -> etudes }}</td>
                        @if ($visitor -> annee_experience == 1)
                            <td>{{ $visitor -> annee_experience }} An</td>
                        @else    
                            <td>{{ $visitor -> annee_experience }} Ans</td>
                        @endif
                        <td>
                            <a href="{{route('forceDeleteVisitor.visitor' , $visitor -> id)}}" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                            <a href="{{route('restore.visitor' , $visitor -> id)}}" class="btn btn-outline-success"><i class="fa-solid fa-rotate-left"></i></a>
                        </td>
                    </tr>
                    @endforeach
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

