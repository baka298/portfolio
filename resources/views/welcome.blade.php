@extends('layouts.front')


@section('content')

        <div class="backg mb-5">
            <div class="filtre">
                <div class="containe p1">
                    <div class="row my-5">
                            @if(session('message'))
                            @include('component.notification')
                        @endif
                        <div class="col-12 text-center my-5">
                            <h2 class="">PortFolio</h2>
                            <h1 class="">Developpeur Web</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('text.article')
                   
        {{-- @include('text.galerie') --}}
        @include('component.projetfront')
                    
        @include('text.article2')

        @include('component.skillbar')
        
        @include('text.team')

        @include('section.formulaire')
        
@endsection