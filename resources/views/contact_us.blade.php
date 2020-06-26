@extends ('layout')

@section ('title')
    Contact us - ADOVA SOFT
@endsection

@section ('content')

    <div class="section-empty">
        <div class="container content">
           
                <div class="" align="center"> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1826.2648533624078!2d90.36168925537775!3d23.774149096189035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c78af690e9%3A0x61703e653d9557c1!2sAdova+Soft!5e0!3m2!1sen!2sbd!4v1552566110714" width="935" height="450" frameborder="0" style="border:0" allowfullscreen>
                    </iframe>
            </div>
            <hr class="space" />
            <div class="row proporzional-row" >
                <div class="col-md-6 col-sm-12">
                    <h2 class="text-color">Contact us now</h2>
                    <hr class="space s" />
                    <form action="http://www.framework-y.com/scripts/php/contact-form.php" class="form-box form-ajax" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <p>Your name</p>
                                <input id="name" name="name" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-4">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="" type="email" class="form-control form-value" required>
                            </div>
                            <div class="col-md-4">
                                <p>Phone number</p>
                                <input id="phone" name="phone" placeholder="" type="text" class="form-control form-value">
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-12">
                                <p>Your message</p>
                                <textarea id="messagge" name="messagge" placeholder="" class="form-control form-value" required></textarea>
                                <hr class="space s" />
                                <button class="btn-sm btn circle-button" type="submit"><i class="fa fa-envelope-o"></i>Send messagge</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-6 boxed-inverse shadow-1 col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li>
                                    <i class="fa-li fa fa-home"></i>
                                   6/A, Ring Road, Shamoly, 2 Pearl St, Dhaka

                                </li>
                                <li>
                                    <i class="fa-li fa fa-home"></i>
                                    Studio Massimo
                                    PO Box 16120, Street
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-skype"></i>Adova Soft</li>
                                <li><i class="fa-li fa fa-headphones"></i>+88 01935540030 (Domain & Hosting)</li>
                                <li><i class="fa-li fa fa-fax"></i>+88 01402108912 (Sales & Marketing)</li>
                                <li><i class="fa-li fa fa-envelope-o"></i> info@adovasoft.com</li>
                                <li><i class="fa-li fa fa-envelope-o"></i> support@adovasoft.com</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="space m" />
                    <div class="btn-group social-group btn-group-icons">
                        <a target="_blank" href="https://www.facebook.com/adovasoft" data-social="share-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="fa fa-facebook text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="fa fa-twitter text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-google" data-toggle="tooltip" data-placement="top" title="Google+">
                            <i class="fa fa-google-plus text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn">
                            <i class="fa fa-linkedin text-s circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@section('script')
        <script src="../HTWF/scripts/parallax.min.js"></script>
        <link rel="stylesheet" href="../HTWF/scripts/font-awesome/css/font-awesome.css">
        <script async src="../HTWF/scripts/bootstrap/js/bootstrap.min.js"></script>
        <script src="../HTWF/scripts/imagesloaded.min.js"></script>
        <script src="../HTWF/scripts/google.maps.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl7p8SWg-5kLe7i-usdYCu5m3eVllMDTs"></script>
        <script src="../HTWF/scripts/jquery.tab-accordion.js"></script>
        <script src="../HTWF/scripts/smooth.scroll.min.js"></script>
@endsection

