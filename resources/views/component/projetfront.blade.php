<section class="containe p3 fondperso" id="projects">
        <div class="row text-center">
            @foreach($projets as $projet)
            <div class="col-md-4 col-sm-10 img-fluid my-auto">
                    <a class="btn" href="{{route('voir',['projet'=>$projet->id])}}" role="button">
                            <img  src="{{Storage::disk('resizemd')->url($projet->image)}}" alt="">
                        <div>
                            <hr>
                        <h2>{{$projet->titre}}</h2>
                        <h2>{{$projet->created_at}}</h2>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="mx-auto">
                <a class="btn btn-light" href="{{route('projets')}}" role="button">@lang('general.more')</a>
            </div>
        </div>
    </section>