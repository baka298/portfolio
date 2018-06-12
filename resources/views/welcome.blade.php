
@extends('newlayout.app')

@section('content')

    
            <!-- Home Section
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
          @include('component.home-section')

            <!--/ Home Section-->

            <!-- About us
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
          @include('component.aboutme')

            <!--/ About us-->

            <!-- Portfolio Section
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            @include('component.galerieprojet')

            <!--/ Portfolio Section-->


            <!-- Services Section
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
          @include('component.listeservice')

            <!--/ Services Section-->

            <!-- Contact Section
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            {{-- @include('component.contactform') --}}
            @include('section.formulaire')
        

@endsection