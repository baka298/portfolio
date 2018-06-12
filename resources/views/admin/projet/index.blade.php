@extends('adminlte::page')

@section('title', 'Admin Project')

@section('content_header')
    <h1>Projets</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{route('projets.create')}}" role="button">Create</a>
    <div class="row">
        @foreach($projets as $projet)
            <div class="card text-white bg-secondary m-3 col-3 px-0" style="max-width: 18rem;">
                <div class="card-header">
                        <h3>
                            {{$projet->titre}}
                        </h3>
                            
                </div>
                <div class="card-body">
                    <p style="color:blue;font-size:12px">contenu :</p>
                    <p class="card-text">{{$projet->contenu}}</p>
                    <p style="color:blue;font-size:12px">entreprise :</p>
                    <p>{{$projet->entreprise}}</p>
                    <img  src="{{Storage::disk('resizesm')->url($projet->image)}}">
                </div>
                <a href="{{route('projets.show', ['projet'=>$projet->id])}}" class="btn btn-primary">voir</a>

            </div>
        @endforeach
    </div>

@stop


