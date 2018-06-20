
          <section id="portfolio" class="clearfix bgColor2">
                <div class="container">
                    <div class="row row-padding">
                        <div class="col-md-6">
                            <!--Section Title-->
                            <div class="heading wow fadeIn" data-wow-delay=".2s" data-wow-duration="1s">
                                <div class="title-style-3">
                                    <h2 class="text-uppercase"> Work</h2>
                                    <span class="title-spt"></span> </div>
                            </div>
                            <!--/Section Title-->
                        </div>
                        {{-- <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".7s">
                            <div id="filters-container" class="cbp-l-filters-alignRight filters-2">
                                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
                                <div data-filter=".identity" class="cbp-filter-item"> identity </div>
                                <div data-filter=".web-design" class="cbp-filter-item"> Web Design </div>
                                <div data-filter=".graphic" class="cbp-filter-item"> Graphic </div>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <!--Grid Container-->
                            <div id="portfolio-grid-container" class="cbp-l-grid-projects marT15" data-caption="overlayBottomReveal" data-animation="slideLeft" data-gaphorizontal="38" data-gapvertical="50" data-logo="images/logo/logo-black.png">
                                <!--Project 1-->
                                @foreach($projets as $projet)

                                <div class="cbp-item graphic identity">
                                    <a href="{{route('voir',['projet'=>$projet->id])}}" class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap"> <img src="{{Storage::disk('resizemd')->url($projet->image)}}" alt=""> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignLeft">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">{{$projet->titre}}</div>
                                                    <div class="cbp-l-caption-desc">{{$projet->created_at->format('d/m/Y')}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--/ Project 1-->
                                @endforeach
                                
                            </div>

                            <!--Load more-->

                            {{-- <div class="cbp-l-loadMore-button">
                                <a class="cbp-l-loadMore-button-link btn btn-dark" href="ajax/loadMore-3.html"> <span class="cbp-l-loadMore-button-defaultText">LOAD MORE</span> <span class="cbp-l-loadMore-button-loadingText">LOADING...</span> <span class="cbp-l-loadMore-button-noMoreLoading">NO MORE WORKS</span> </a>
                            </div> --}}
                            
                            <!--/ Load more-->
                        </div>
                    </div>
                </div>
            </section>
