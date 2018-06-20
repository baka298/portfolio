<section id="contact" class="clearfix bgcolor2 marT50 marB50">
        <div class="container">
            <div class="row">

        <div>
            <h1>
                Contact form
            </h1>
        </div>
        <div class="row" id="divform">
            <div class="col-md-8">
                <form action="{{route('contact')}}" method="POST">
                    @csrf
                    <div class="hidden error text-danger">please check the fields</div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                            <label for="prenom">Last-name* :</label>
                            @if($errors->has('prenom'))
                            <div class="text-danger">{{$errors->first('prenom')}}</div>
                          @endif
                        <input class="form-control jsinput {{$errors->has('prenom')? 'border-danger' : ''}}" id="prenom" name="prenom" placeholder="votre prénom" value="{{old('prenom')}}">
                        </div>
                        <div class="col-md-6">
                            <label for="nom">First-name* :</label>
                                @if($errors->has('nom'))
                                    <div class="text-danger">{{$errors->first('nom')}}</div>
                                @endif
                            <input class="form-control {{$errors->has('nom')? 'border-danger' : ''}}" id="nom" name="nom" placeholder="Votre nom" value="{{old('nom')}}">
                        </div>
                    </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email* :</label>
                            @if($errors->has('email'))
                                <div class="text-danger">{{$errors->first('email')}}</div>
                            @endif
                        <input class="form-control {{$errors->has('email')? 'border-danger' : ''}}" id="email" name="email" placeholder="Votre email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="Societe">Company:</label>
                            
                        <input class="form-control" id="societe" name="societe" placeholder="Nom société" value="{{old('societe')}}">
                    </div>
                    <div class="form-group marB0">
                        <label for="message">Message* :</label>
                            @if($errors->has('message'))
                                <div class="text-danger">{{$errors->first('message')}}</div>
                            @endif
                            <textarea class="form-control {{$errors->has('message')? 'border-danger' : ''}}" id="message" name="message" placeholder="Votre message" cols="30" rows="10">{{old('message')}}</textarea>
                    </div>
                    <p>*champs obligatoire</p>
                    

                    <button id="form5" type="submit" class="btn btn-primary envoi">Submit</button>
                </form>
            </div>
        </div>
    </div>

    </div>
    </section>

