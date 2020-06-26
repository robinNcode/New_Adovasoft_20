@extends ('layout')

@section ('title')
    ADOVA SOFT - Website Design Company In Bangladesh
@endsection

@section ('css')
    <link rel="stylesheet" type="text/css" href="/css/carouselex.css">
@endsection

@section ('content')

<!--..........................  Header slide part  ....................... -->
<div class="container">
   <div class="row">
      <div class="col-md-12 flexslider">
         <ul class="slides">
            <li>
               <img src="images/db/496.jpg" />
            </li>
            <li>
               <img src="images/db/443.jpg" />
            </li>
            <li>
               <img src="images/db/445.jpg" />
            </li>
            <li>
               <img src="images/db/444.jpg" />
            </li>
            <li>
               <img src="images/db/441.jpg" />
            </li>
            <li>
               <img src="images/db/442.jpg" />
            </li>
         </ul>
      </div>
   </div>
</div>
<!--..........................  Header slide part end ....................... -->
<br>
<br>
<br>
<!---------    Facebook Post Part startes Here...................................... -->
<div style="background-image:url(../images/bg-12.png)">
   <div class="container">
      <div class="row">
         <div class="col-md-6 flexslider">
            <small>
               <h4>Website Design Company In Bangladesh</h4>
               <hr>
            </small>
            <p> Adova Soft is a website design company in bangladesh who also provides software development,e-commerce,effective SEO services,domain and hosting in bangladesh.
            </p>
            <br>
            <br>
            <div align="center">
               <h4>Domain Check</h4>
               <form action='index.php?page=domaincheck' method='POST'>
                  <br/><b>http:// </b> <input type='text' name='domainname'/>
                  <select name='extension'>
                     <option value='.com'>.com</option>
                     <option value='.net'>.net</option>
                     <option value='.org'>.org</option>
                     <option value='.info'>.info</option>
                     <option value='.biz'>.biz</option>
                     <option value='.mobi'>.mobi</option>
                     <option value='.in'>.in</option>
                  </select>
                  <br/>
                  <br/>
                  <input type='submit' name='submit' value='Check Availability'/>
                  <br/>          
               </form>
            </div>
            <br>
            <br>
         </div>
         <div class="col-md-6" align="right">
            <h4><small>Follow Us on Facebook</small></h4>
            <br/>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) return;
               js = d.createElement(s); js.id = id;
               js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=2124099774533174&autoLogAppEvents=1';
               fjs.parentNode.insertBefore(js, fjs);
               }
               (document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-like-box" data-href="https://www.facebook.com/adovasoft" data-width="340" data-height="440" data-show-faces="true" data-stream="false" data-header="true"></div>
            <div class="fb-page" data-href="https://www.facebook.com/adovasoft" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            </div>
         </div>
      </div>
   </div>
</div>
<!---------    Facebook Post Part ends  Here...................................... -->

<!---------    Package Part starts Here...................................... -->
<div class="section-bg-image text-center" style="background-image:url(../images/long-1.jpg)">
   <div class="container content">
      <div class="row">
         <div class="col-md-4">
            <a href=''>
               <h4>Starter Website Package</h4>
               <div class=" ">
                  <img src='images/db/497.png' alt='Starter Website Package'/>
                  <h4 class="car">
                     <span class='blue'>Price<br/>5,500 Taka Only<br/>
                     <small>Including Domain and Hosting</small>
                     </span>
                  </h4>
               </div>
            </a>
         </div>
         <div class="col-md-4">
            <a href=''>
               <h4>Dynamic Website Package</h4>
               <div class=" ">
                  <img src='images/db/498.png' alt='Dynamic Website Package'/>
                  <h4><span class='blue'>Price<br/>11,000 Taka Only<br/><small>Including Domain and Hosting</small></span></h4>
               </div>
            </a>
         </div>
         <div class="col-md-4">
            <a href=''>
               <h4>Advance Inventory Software</h4>
               <div class=" ">
                  <img src='images/db/501.png' alt='Advance Inventory Software'/>
                  <h4><span class='blue'>Price<br/>11,000 Taka Only<br/><small>Including Domain and Hosting</small></span></h4>
               </div>
            </a>
         </div>
      </div>
      <br>
      <br>
      <div class="row">
         <div class="col-md-4">
            <a href=''>
               <h4>Advance 4 Hosting (4GB)</h4>
               <div class=" ">
                  <img src='images/db/436.png' alt='Advance 4 Hosting (4GB) Yearly 3500 Taka Only.'/>
                  <h4><span class='blue'>Price<br/>3,500 Taka Only<br/><small>Per year</small></span></h4>
               </div>
            </a>
         </div>
         <div class="col-md-4">
            <a href=''>
               <h4>Advance Hosting (1GB)</h4>
               <div class=" ">
                  <img src='images/db/433.png' alt='Advance Hosting Package (1GB) Yearly 1000 Taka Only.'/>
                  <h4><span class='blue'>Price<br/>1,000 Taka Only<br/><small>Per Year</small></span></h4>
               </div>
            </a>
         </div>
         <div class="col-md-4">
            <a href=''>
               <h4>Advance 2 Hosting (2GB)</h4>
               <div class=" ">
                  <img src='images/db/434.png' alt='Advance 2 Hosting (2GB) Yearly 1900 Taka Only.'/>
                  <h4><span class='blue'>Price<br/>1,900 Taka Only<br/><small>Per Year</small></span></h4>
               </div>
            </a>
         </div>
      </div>
      <br>
      <br>
      <div class="row">
         <div class="col-md-4">
            <a href=''>
               <h4>Advance 3 Hosting (3GB)</h4>
               <div class=" ">
                  <img src='images/db/435.png' alt='Advance 3 Hosting (3GB) Yearly 2800 Taka Only.'/>
                  <h4><span class='blue'>Price<br/>2,800 Taka Only<br/><small>Per year</small></span></h4>
               </div>
            </a>
         </div>
         <div class="col-md-4">
            <a href=''>
               <h4>Basic Inventory Software</h4>
               <div class=" ">
                  <img src='images/db/500.png' alt='Basic Inventory Software'/>
                  <h4><span class='blue'>Price<br/>5,500 Taka Only<br/><small>Including Hosting</small></span></h4>
               </div>
            </a>
         </div>
         <div class="col-md-4">
            <a href=''>
               <h4>Inventory &amp; Accounting Software</h4>
               <div class=" ">
                  <img src='images/db/502.png' alt='Advance Inventory Software'/>
                  <h4><i class='blue'>Price<br/>21,000 Taka Only<br/><small>Including Domain and Hosting</small></i></h4>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>
@endsection

@section ('script')

<script src="/js/carouselex.js" type="text/javascript" ></script>

<script>
   $(window).load(function() {
       $('.flexslider').flexslider({
           animation: "slide"
       });
   });
   
</script>

@endsection

