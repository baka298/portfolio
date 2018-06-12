
<section class="containe p4 ">
    <div class="row text-center">
        @foreach($projets as $projet)
        <div class="card col-3 m-5 fondperso2" style="width: 18rem;">
                <img class="card-img-top" src="{{Storage::disk('resizemd')->url($projet->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$projet->titre}}</h5>
                    <p class="card-text">{{$projet->contenu}}</p>
                    <a href="{{route('voir', ["projet"=>$projet->id])}}" class="btn btn-success">@lang('general.see')</a>
                </div>
            </div>
        @endforeach
    </div>
</section>