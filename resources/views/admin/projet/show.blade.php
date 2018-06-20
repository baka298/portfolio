@extends('adminlte::page')

@section('title', 'Admin Project')

@section('content_header')
    <h1>Show Projets</h1>
@stop

@section('content')
<div class="row">
    <div class="card col-10">
        <div class="card-body">
            <p class="card-text"><small class="text-muted">TITRE :</small></p>
          <h5 class="card-title">{{ $projet->titre }}</h5>
          <p class="card-text"><small class="text-muted">CONTENU :</small></p>
        <p class="card-text">{!! $projet->contenu !!}</p>
        <p class="card-title"><small class="text-muted">ENTREPRISE :</small></p>
          <h5 class="card-title">{{ $projet->entreprise }}</h5>
        </div>
        @if($projet->image != null)
        <div>

            <img  src="{{Storage::disk('resizemd')->url($projet->image)}}">
        </div>
    
        @endif
    </div>
  <div class="col-2">
  <a name="" id="" class="btn btn-primary" href="{{route('projets.edit',['projet'=>$projet->id])}}" role="button">@lang('general.edit')</a>
  <form class="d-inline" action="{{Route('projets.destroy',['projet'=>$projet->id])}}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">@lang('general.delete')</button>
  </form>
  </div>
</div>

@stop


