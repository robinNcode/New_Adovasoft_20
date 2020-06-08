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

    <hr class="space l" />
    <?php //Facebook Post Part startes Here......................................?>
    
    

    <?php //facebook post part Ends Here..........................................?>

    <?php //package Part starts Here....................................?>
    <div class="section-bg-image text-center" style="background-image:url(../images/bg-12.png)">
        <div class="container content">
            <div class="row">
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-down-text shadow-1 decorplus text-center">
                        <h2><a href="/starter_packages">Starter Website Package</a></h2>
                        <a target="_blank" class="img-box i-center" href="/starter_packages">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="/images/db/497.png" alt="">
                            <h5 class="text-center">
                                <span class='blue'>Price<br/>5,500 Taka Only<br/><small>Including Domain and Hosting</small></span></h4>
                        </a>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-down-text  shadow-1 decorplus text-center">
                        <h2 class="text-primary"><a href="/dynamic_website_package">Dynamic Website Package</a></h2>
                        
                        <a target="_blank" class="img-box i-center row" href="index-freelancer.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src='images/db/498.png' alt='Dynamic Website Package'/>
                           <h5 class="text-center"><span class='blue'>Price<br/>11,000 Taka Only<br/><small>Including Domain and Hosting</small></span></h4>
                        </a>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-down-text  shadow-1 decorplus text-center">
                        <h2 class="text-primary"><a href="/basic_inventory_soft">Basic Inventory Software</a></h2>
                        
                        <a target="_blank" class="img-box i-center row" href="index-freelancer.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src='images/db/500.png' alt='Basic Inventory Software'/>
                           <h5 class="text-center"><span class='blue'>Price<br/>5,500 Taka Only<br/><small>Including Hosting</small></span></h4>
                        </a>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-down-text  shadow-1 decorplus text-center">
                        <h2 class="text-primary"><a href="/advance_inventory_soft">Advance Inventory Software</a></h2>
                        
                        <a target="_blank" class="img-box i-center row" href="index-freelancer.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src='images/db/501.png' alt='Advance Inventory Software'/>
                           <h5 class="text-center"><span class='blue'>Price<br/>11,000 Taka Only<br/><small>Including Domain and Hosting</small></span></h5>
                        </a>
                    </div>
                </div>
            <hr class="space l" />
            <div class="row">
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-down-text  shadow-1 decorplus text-center">
                        <h2 class="text-primary"><a href="/advance_hosting">Advance Hosting (1GB)</a></h2>
                        <br>
                        <a target="_blank" class="img-box i-center row" href="/advance_hosting">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src='images/db/433.png' alt='Advance Hosting Package (1GB) Yearly 1000 Taka Only.'/>
                           <h5 class="text-center"><span class='blue'>Price<br/>1,000 Taka Only<br/><small>Per Year</small></span></h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-down-text  shadow-1 decorplus text-center">
                        <h2 class="text-primary"><a href="/advance_two_hosting">Advance 4 Hosting (4GB)</a></h2>
                        
                        <a target="_blank" class="img-box i-center row" href="/advance_two_hosting">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src='images/db/434.png' alt='Advance 2 Hosting (2GB) Yearly 1900 Taka Only.'/>
                           <h5 class="text-center"><span class='blue'>Price<br/>1,900 Taka Only<br/><small>Per Year</small></span></h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-down-text  shadow-1 decorplus text-center">
                        <h2 class="text-primary"><a href="/advance_three_hosting">Advance 3 Hosting (3GB)</a></h2>
                        
                        <a target="_blank" class="img-box i-center row" href="/advance_three_hosting">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src='images/db/435.png' alt='Advance 3 Hosting (3GB) Yearly 2800 Taka Only.'/>
                           <h5 class="text-center"><span class='blue'>Price<br/>2,800 Taka Only<br/><small>Per year</small></span></h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-down-text  shadow-1 decorplus text-center">
                        <h2 class="text-primary"><a href="/advance_inventory_soft">Advance Inventory Software</a></h2>
                        
                        <a target="_blank" class="img-box i-center row" href="index-freelancer.html">
                            <div class="caption">
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src='images/db/436.png' alt='Advance 4 Hosting (4GB) Yearly 3500 Taka Only.'/>
                           <h5 class="text-center"><span class='blue'>Price<br/>3,500 Taka Only<br/><small>Per year</small></span></h5>
                        </a>
                    </div>
                </div>
        </div>
    </div>

   @endsection

   @section ('script')
        <script src="/js/carouselex.js" type="text/javascript" ></script>

   @endsection