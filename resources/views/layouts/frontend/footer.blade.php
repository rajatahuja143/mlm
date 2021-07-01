  <!-- ============Footer Section Starts Here============ -->
  <footer>
    <div class="footer_mn">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="link_mn">
                   <div class="row">
                      <div class="col-md-4">
                         <div class="logo_pic2">
                            <img src="{{ asset('assets/images/logoIcon/logo.png')}}" alt="logo">
                         </div>
                         <hr>
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                      </div>
                      <div class="col-md-3">
                         <h3>Important Links</h3>
                         <hr>
                         <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about-us.index') }}">About</a></li>
                            <li><a href="{{ route('marketing-tool.index') }}">Marketing Tool</a></li>
                            <li><a href="{{ route('faq.index') }}">Faq</a></li>
                            <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                         </ul>
                      </div>
                      <div class="col-md-5">
                         <h3>Follow Us</h3>
                         <hr>
                         <div class="link_sl">
                            <ul>
                               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                               <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <div class="footer-bottom">
    <p>Copyright © 2021. BR TECHGEEKS PRIVATE LIMITED All Rights Reserved</p>
 </div>
 <!-- ============Footer Section Ends Here============ -->
 <script src="{{ asset('assets/templates/basic/frontend/js/jquery-3.3.1.min.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/modernizr-3.6.0.min.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/plugins.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/magnific-popup.min.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/swiper.min.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/wow.min.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/odometer.min.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/viewport.jquery.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/nice-select.js') }}"></script>
 <script src="{{ asset( 'assets/templates/basic/frontend/js/main.js') }}"></script>
 <link rel="stylesheet" href="{{ asset( 'assets/admin/css/iziToast.min.css') }}">
 <script src="{{ asset( 'assets/admin/js/iziToast.min.js') }}"></script>
 <script>
    'use strict';
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
 </script>
