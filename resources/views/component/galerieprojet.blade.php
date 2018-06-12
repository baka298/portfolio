
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
                                    <a href="ajax/ajax-page-single-image.html" class="cbp-caption cbp-singlePage">
                                        <div class="cbp-caption-defaultWrap"> <img src="{{Storage::disk('resizemd')->url($projet->image)}}" alt=""> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignLeft">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">{{$projet->titre}}</div>
                                                    <div class="cbp-l-caption-desc">{{$projet->created_at}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--/ Project 1-->
                                @endforeach
                                <!--Project 2-->
                                <div class="cbp-item graphic web-design">
                                        <a href="ajax/ajax-page-image-slider.html" class="cbp-caption cbp-singlePage">
                                            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/2.jpg" alt=""> </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignLeft">
                                                    <div class="cbp-l-caption-body">
                                                        <div class="cbp-l-caption-title">JJ Royal</div>
                                                        <div class="cbp-l-caption-desc">Ajax Page Slider</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/ Project 2-->
                                    <!--Project 3-->
                                    <div class="cbp-item identity web-design">
                                        <a href="ajax/ajax-page-single-video.html" class="cbp-caption cbp-singlePage">
                                            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/3.jpg" alt=""> </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignLeft">
                                                    <div class="cbp-l-caption-body">
                                                        <div class="cbp-l-caption-title">Yolo Glass</div>
                                                        <div class="cbp-l-caption-desc">Ajax Page Video</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/ Project 3-->
                                    <!--Project 4-->
                                    <div class="cbp-item graphic web-design">
                                        <a href="ajax/ajax-page-single-sound.html" class="cbp-caption cbp-singlePage">
                                            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/4.jpg" alt=""> </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignLeft">
                                                    <div class="cbp-l-caption-body">
                                                        <div class="cbp-l-caption-title">Energy Drink</div>
                                                        <div class="cbp-l-caption-desc">Ajax Page Sound</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/ Project 4-->
                                    <!--Project 5-->
                                    <div class="cbp-item identity web-design">
                                        <a href="ajax/big/5-big.jpg" class="cbp-caption cbp-lightbox">
                                            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/5.jpg" alt=""> </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignLeft">
                                                    <div class="cbp-l-caption-body">
                                                        <div class="cbp-l-caption-title">Willowtree</div>
                                                        <div class="cbp-l-caption-desc">Light Box Image</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/ Project 5-->
                                    <!--Project 6-->
                                    <div class="cbp-item graphic web-design">
                                        <a href="http://vimeo.com/14912890" class="cbp-caption cbp-lightbox">
                                            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/6.jpg" alt=""> </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignLeft">
                                                    <div class="cbp-l-caption-body">
                                                        <div class="cbp-l-caption-title">Toy House</div>
                                                        <div class="cbp-l-caption-desc">Light Box Video</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/ Project 6-->
                                    <!--Project 7-->
                                    <div class="cbp-item identity web-design">
                                        <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/4900333&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" class="cbp-caption cbp-lightbox">
                                            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/7.jpg" alt=""> </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignLeft">
                                                    <div class="cbp-l-caption-body">
                                                        <div class="cbp-l-caption-title">Chocolate Milkshake</div>
                                                        <div class="cbp-l-caption-desc">Light Box Sound</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <!--/ Project 7-->
                            </div>

                            <!--Load more-->
                            <div class="cbp-l-loadMore-button">
                                <a class="cbp-l-loadMore-button-link btn btn-dark" href="ajax/loadMore-3.html"> <span class="cbp-l-loadMore-button-defaultText">LOAD MORE</span> <span class="cbp-l-loadMore-button-loadingText">LOADING...</span> <span class="cbp-l-loadMore-button-noMoreLoading">NO MORE WORKS</span> </a>
                            </div>
                            <!--/ Load more-->
                        </div>
                    </div>
                </div>
            </section>
