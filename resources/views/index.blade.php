@extends ('layout')

@section ('title')
   ADOVA SOFT - Website Design Company In Bangladesh
@endsection

@section ('css')
    <link rel="stylesheet" type="text/css" href="/css/carouselex.css">
@endsection

@section ('content')
      <div class="text-center" style="">
        <div class="content">
            <?php //Image Holder Starts Here.................................?>
             <div class="row">
                <div class="col-md-9 col-center text-center">
                    <div id="carouselexExampleControls" class="carouselex">
                      <div class="carouselex-inner">
                        
                        <!-- Image -->
                        <div class="carouselex-item active">
                          <a href="/home" title="">
                              <img class="carouselex-img " alt="Adova Banner" src="images/db/496.jpg">
                          </a>
                        </div>
                        <div class="carouselex-item ">
                          <a href="/website_packages" title="">
                              <img class="carouselex-img" alt="Website design and development" src="images/db/443.jpg">
                          </a>
                        </div>
                        <div class="carouselex-item ">
                          <a href="search_engine_op" title="">
                              <img class="carouselex-img" alt="Search Engine Optimization" src="images/db/445.jpg">
                          </a>
                        </div>
                        <div class="carouselex-item ">
                            <a href="custon_soft title=""></a>
                          <img class="carouselex-img" alt="Custom Software Development" src="images/db/444.jpg">
                        </div>
                        <div class="carouselex-item ">
                            <a href="website_hosting" title="">
                                <img class="carouselex-img" alt="Website Hosting'" src="images/db/441.jpg">
                            </a>
                        </div>
                        <div class="carouselex-item ">
                            <a href="domain_registation" title="">
                                <img class="carouselex-img" alt="Domain Registration" src="images/db/442.jpg">
                            </a>
                        </div>
                      </div>

                      <a id="carouselexPrev" class="carouselex-control-prev" href="#carouselexExampleControls" role="button">
                        <span class="carouselex-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a id="carouselexNext" class="carouselex-control-next" href="#carouselexExampleControls" role="button">
                        <span class="carouselex-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <?php //Image PArt Ends Here....................................?>
    <div class="section-bg-image text-center" style="background-image:url(../images/bg-12.png)">
        <div class="container content">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-box adv-img adv-img-down-text shadow-1">
                        <a target="_blank" class="img-box i-center" href="index-main.html">
                            <h4>Starter Website Package</h4>
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="../images/intro/home-main.jpg" alt="">
                        </a>
                        <div class="caption-bottom">
                            <h2><a href="#">Main</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box adv-img adv-img-down-text shadow-1">
                        <a target="_blank" class="img-box i-center" href="index-freelancer.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="../images/intro/home-freelancer.jpg" alt="">
                        </a>
                        <div class="caption-bottom">
                            <h2><a href="#">Freelancer</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box adv-img adv-img-down-text shadow-1">
                        <a target="_blank" class="img-box i-center" href="index-business.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="../images/intro/home-business.jpg" alt="">
                        </a>
                        <div class="caption-bottom">
                            <h2><a href="#">Business</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space l" />
            <div class="row">
                <div class="col-md-4">
                    <div class="img-box adv-img adv-img-down-text shadow-1">
                        <a target="_blank" class="img-box i-center" href="index-video.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="../images/intro/home-video.jpg" alt="">
                        </a>
                        <div class="caption-bottom">
                            <h2><a href="#">Video</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box adv-img adv-img-down-text shadow-1">
                        <a target="_blank" class="img-box i-center" href="index-cooworking.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="../images/intro/home-cooworking.jpg" alt="">
                        </a>
                        <div class="caption-bottom">
                            <h2><a href="#">Cooworking</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box adv-img adv-img-down-text shadow-1">
                        <a target="_blank" class="img-box i-center" href="index-fullpage.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="../images/intro/home-fullpage.jpg" alt="">
                        </a>
                        <div class="caption-bottom">
                            <h2><a href="#">Fullpage</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space l" />
            <div class="row">
                <div class="col-md-4">
                    <div class="img-box adv-img adv-img-down-text shadow-1">
                        <a target="_blank" class="img-box i-center" href="index-mobile.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="../images/intro/home-mobile.jpg" alt="">
                        </a>
                        <div class="caption-bottom">
                            <h2><a href="#">Mobile</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box adv-img adv-img-down-text shadow-1">
                        <a target="_blank" class="img-box i-center" href="index-application.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="../images/intro/home-application.jpg" alt="">
                        </a>
                        <div class="caption-bottom">
                            <h2><a href="#">Application</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box adv-img adv-img-down-text shadow-1">
                        <a target="_blank" class="img-box i-center" href="index.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="../images/intro/home-intro.jpg" alt="">
                        </a>
                        <div class="caption-bottom">
                            <h2><a href="#">Intro</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @endsection

   @section ('script')
        <script src="/js/carouselex.js" type="text/javascript" ></script>

   @endsection