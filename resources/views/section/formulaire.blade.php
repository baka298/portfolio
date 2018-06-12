<section class="container p3" id="contact">
        <div>
            <h1>
                Formulaire de Contact
            </h1>
        </div>
        <div class="row" id="divform">
            <div class="col-12">
                <form action="{{route('contact')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                                @if($errors->has('prenom'))
                                <div class="text-danger">{{$errors->first('prenom')}}</div>
                              @endif
                            <label for="prenom">Prénom:</label>
                            <input class="form-control" id="prenom" name="prenom" placeholder="votre prénom" value="{{old('prenom')}}">
                        </div>
                        <div class="col-6">
                            <label for="nom">Nom:</label>
                                @if($errors->has('nom'))
                                    <div class="text-danger">{{$errors->first('nom')}}</div>
                                @endif
                            <input class="form-control" id="nom" name="nom" placeholder="Votre nom" value="{{old('nom')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                            @if($errors->has('email'))
                                <div class="text-danger">{{$errors->first('email')}}</div>
                            @endif
                        <input class="form-control" id="email" name="email" placeholder="Votre email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="Societe">Société:</label>
                            @if($errors->has('societe'))
                                <div class="text-danger">{{$errors->first('societe')}}</div>
                            @endif
                        <input class="form-control" id="societe" name="societe" placeholder="Nom société" value="{{old('societe')}}">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                            @if($errors->has('message'))
                                <div class="text-danger">{{$errors->first('message')}}</div>
                            @endif
                        <input class="form-control" id="message" name="message" placeholder="Votre message" value="{{old('message')}}">
                    </div>

                    <button id="form5" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

