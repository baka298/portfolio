
<div class="container">

    <div class="cbp-l-project-title marT50 marB50">{{$projet->titre}}</div>
    
    
    
    
    <div class="cbp-l-project-container">
            <img class="cbp-l-project-desc" src="{{Storage::disk('resizel')->url($projet->image)}}" alt="img">
        <div class="cbp-l-project-details">
            <div class="cbp-l-project-desc-title"><span>Project Contenu</span></div>
            <div class="cbp-l-project-desc-text">{!! $projet->contenu !!}</div>
        </div>
    </div>
    <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-details-title"><span>Project Details</span></div>
        
                <ul class="cbp-l-project-details-list">
                    <li><strong>Client</strong>{{$projet->entreprise}}</li>
                    <li><strong>Date</strong>{{$projet->created_at->format('d/m/Y')}}</li>
                </ul>
            </div>

        </div>
        <div>
        <a class="btn btn-dark marT50 test" href="{{route('index')}}" role="button">Home</a>
        </div>
</div>


<br>

