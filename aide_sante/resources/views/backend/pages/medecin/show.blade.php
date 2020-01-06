@extends('backend.layouts.master',['heading' => 'Medecins', 'icon'=>'fa-fw fa-user-nurse'])

@section('content')

    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page affiche les informations du medecin
    </div>


    <div class="card shadow mb-3 center-block">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-info-circle"></i> Informations</h6>
        </div>
        <div class="card-body">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4 ">
                        <img src="/profiles/{{$medecin->photo}}" alt="{{$medecin->nom .' '. $medecin->prenom}}" width="200" height="200" class="img-responsive" />
                        <p>
                            <a href="#">
                                <i class="fa fa-edit"></i> Modifier
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h5>Dr {{$medecin->nom .' '. $medecin->prenom}}</h5>
                        <small>
                            <cite title="{{ $medecin->adresse }}">{{ $medecin->adresse }}
                                <i class="fa fa-map-marker-alt"></i>
                            </cite>
                        </small>

                        <p>
                            <i class="fa fa-envelope"></i> {{$medecin->email}}
                            <br />
                            <i class="fa fa-user-md"></i> {{$medecin->specialite}}
                            <br />
                            <i class="fa fa-hospital-symbol"></i> CHU de Rennes
                        </p>

                    </div>
                </div>
                <div class="row float-right ">
                    <div class="btn-group-justified">
                        <a href="{{route('medecins.index')}}" class="btn btn-outline-primary"><i class="fa fa-backward"></i> Retour</a>
                        <a href="{{route('medecins.edit', $medecin)}}" class="btn btn-outline-dark"> <i class="fa fa-edit"></i> Editer</a>

                        <form action="{{route('medecins.destroy', $medecin)}}" method="post" class="btn btn-sm">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-outline-danger"
                                    onclick="return confirm('Etes-vous sur de supprimer cet medecin ?')" >
                                <i class="fa fa-trash"></i>  Supprimer
                            </button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
