@extends('adminlte::page')

@section('title', 'Admin Project')

@section('content_header')
    <h1>Edit projet</h1>
@stop

@section('content')
<form action="{{route('projets.update',['projet'=>$projet->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="form-group">
      <label for="">Mon titre</label>
      @if($errors->has('titre'))
      @foreach ($errors->get('contenu') as $error)
      <div class="text-danger">{{$errors->first('titre')}}</div>
          @endforeach
            @endif
    <input type="text" name="titre" id="titre" class="form-control" class="{{$errors->has('titre')?'border-danger':""}}" placeholder="mon text" aria-describedby="helpId" value="{{old('titre',$projet->titre)}}">
    </div>

    <div class="form-group">
      <label for="">Mon contenu</label>
      @if($errors->has('contenu'))
      @foreach ($errors->get('contenu') as $error)
            <div class="text-danger">{{$errors->first('contenu')}}</div>
          @endforeach
            @endif
    <textarea class="form-control {{$errors->has('contenu')?'border-danger':""}}" name="contenu" id="contenu" placeholder="mon contenu" rows="3">{!! old('contenu',$projet->contenu) !!}</textarea>
    </div>
    <div class="form-group">
        <label for="">Entreprise</label>
        @if($errors->has('entreprise'))
        @foreach ($errors->get('entreprise') as $error)
        <div class="text-danger">{{$errors->first('entreprise')}}</div>
          @endforeach
              @endif
      <input type="text" name="entreprise" id="entreprise" class="form-control" class="{{$errors->has('entreprise')?'border-danger':""}}" placeholder="entreprise" aria-describedby="helpId" value="{{old('entreprise',$projet->entreprise)}}">
      </div>
    <div class="row">
        <div class="form-group col-md-4">
            @if($errors->has('image'))
            @foreach ($errors->get('image') as $error)
            <div class="text-danger">{{$errors->first('image')}}</div>
          @endforeach
          @endif
          <input type="file" name="image">
       </div>
      </div>
    <button type="submit">@lang('general.valid')</button>
</form>
@stop


@section('js')
  <script>
      CKEDITOR.replace( 'contenu', {
        extraPlugins : 'codesnippet'
      } );
  </script>
@endsection