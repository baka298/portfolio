<div class="card col-10 mx-auto fondperso2" >
    <div class="card-body text-center cardshow">
        <h1 class="card-title">{{$projet->titre}}</h1>
        <p style="color:blue;font-size:15px">contenu :</p>
        <p class="card-text">{{$projet->contenu}}</p>
        <p style="color:blue;font-size:15px">entreprise :</p>
        <h3 class="card-text">{{$projet->entreprise}}</h3>
            <img class="card-img-top" src="{{Storage::disk('resizel')->url($projet->image)}}" alt="Card image cap">
    </div>
</div>