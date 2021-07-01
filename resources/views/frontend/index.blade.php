@extends('layouts.frontend.app')
@section('content')
          <!-- ============Header Section Ends Here============ -->
          <section class="banner-slider">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="banner-container bg-overlay bg_img" data-background="{{ asset('placeholder-image/1920x850.jpg') }}">
                     <div class="container">
                        <div class="banner-content">
                           <h3 class="sub-title">MlmLab</h3>
                           <h1 class="title">Multilevel Marketing Platform</h1>
                           <div class="button-area">
                              <p>We are a dedicated Binary Multilevel Marketing company for every MLM plan with custom features.</p>
                              <div class="button-group">
                                 <a href="login.html" class="custom-button active">sign in</a>
                                 <a href="register.html" class="custom-button">sign up</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="banner-container bg-overlay bg_img" data-background="{{ asset('placeholder-image/1920x850.jpg') }}">
                     <div class="container">
                        <div class="banner-content">
                           <h3 class="sub-title">MLMLab</h3>
                           <h1 class="title">Multilevel Marketing Platform</h1>
                           <div class="button-area">
                              <p>We are a dedicated Binary Multilevel Marketing company for every MLM plan with custom features.</p>
                              <div class="button-group">
                                 <a href="login.html" class="custom-button active">sign in</a>
                                 <a href="register.html" class="custom-button">sign up</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="banner-prev"><i class="fas fa-angle-left"></i></div>
            <div class="banner-next"><i class="fas fa-angle-right"></i></div>
         </section>
         <section class="about-section padding-top padding-bottom">
            <div class="container">
               <div class="row justify-content-between mb--50 flex-wrap-reverse">
                  <div class="col-lg-6 pr-xl-5 mb-50">
                     <div class="n_pic">
                        <img class="img-responsive" src="{{asset('images/n1.jpg') }}">
                     </div>
                  </div>
                  <div class="col-lg-6 mb-50">
                     <div class="about-content">
                        <div class="section-header left-style margin-olpo">
                           <h2 class="title">About Us</h2>
                        </div>
                        <p></p>
                        <div style="text-align:justify;">
                           <div>We are not just an online version of any Business market, but also, the reflection of each and every MLM business.&nbsp;We are an international financial company engaged in investment activities, which are related to MLM on financial markets by qualified professional traders.</div>
                           <div><br></div>
                           <div>Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.</div>
                        </div>
                        <blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote>
                        <blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote>
                        <blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote>
                        <blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote>
                        <p></p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="how-to-section padding-bottom padding-top section-bg">
            <div class="container">
               <div class="section-header">
                  <h2 class="title">Our Services</h2>
                  <p>This secured website with a user-friendly interface and support of various languages is a breeze to use. Additionally, this site has both desktop and mobile views!!</p>
               </div>
               <div class="row justify-content-center mb-30-none how-wrapper">
                  <div class="col-sm-10 col-md-6 col-lg-4">
                     <div class="how-item">
                        <div class="how-thumb">
                           <i class="fas fa-globe-americas"></i>
                        </div>
                        <div class="how-content">
                           <h5 class="title">Global</h5>
                           <p>We support a variety of the most popular digital currencies.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-10 col-md-6 col-lg-4">
                     <div class="how-item">
                        <div class="how-thumb">
                           <i class="far fa-life-ring"></i>
                        </div>
                        <div class="how-content">
                           <h5 class="title">Support</h5>
                           <p>We always provide the best
                              support to all our users.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-10 col-md-6 col-lg-4">
                     <div class="how-item">
                        <div class="how-thumb">
                           <i class="fab fa-btc"></i>
                        </div>
                        <div class="how-content">
                           <h5 class="title">Crypto</h5>
                           <p>Cryptocurrency stored on our servers is covered by our insurance policy.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-10 col-md-6 col-lg-4">
                     <div class="how-item">
                        <div class="how-thumb">
                           <i class="fas fa-language"></i>
                        </div>
                        <div class="how-content">
                           <h5 class="title">Language</h5>
                           <p>This site can be easily translated into your own language.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-10 col-md-6 col-lg-4">
                     <div class="how-item">
                        <div class="how-thumb">
                           <i class="fas fa-lock"></i>
                        </div>
                        <div class="how-content">
                           <h5 class="title">Secure</h5>
                           <p>Gives ultimate security with 2FA authentication with this system</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-10 col-md-6 col-lg-4">
                     <div class="how-item">
                        <div class="how-thumb">
                           <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="how-content">
                           <h5 class="title">Profitable</h5>
                           <p>You can get the golden opportunity to actually win a lot of profit here.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="feature-section padding-top padding-bottom">
            <div class="container">
               <div class="section-header">
                  <h2 class="title">How It's Work</h2>
                  <p>This secured website with a user-friendly interface and support of various languages is a breeze to use. Additionally, this site has both desktop and mobile views!!</p>
               </div>
               <div class="row justify-content-center mb-30-none">
                  <div class="col-xl-4 col-md-6 col-sm-10">
                     <div class="feature-item">
                        <div class="feature-header">
                           <div class="icon">
                              <i class="fas fa-user-edit"></i>
                           </div>
                           <h6 class="title">Sign Up</h6>
                        </div>
                        <div class="feature-body">
                           <p>Just click the register button on the website and fill up all the information there and get your account.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 col-sm-10">
                     <div class="feature-item">
                        <div class="feature-header">
                           <div class="icon">
                              <i class="fas fa-users"></i>
                           </div>
                           <h6 class="title">Bring People</h6>
                        </div>
                        <div class="feature-body">
                           <p>The strategy is new members sponsored by distributors are added either on the left or right leg.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 col-sm-10">
                     <div class="feature-item">
                        <div class="feature-header">
                           <div class="icon">
                              <i class="fas fa-money-bill-wave"></i>
                           </div>
                           <h6 class="title">Get Paid</h6>
                        </div>
                        <div class="feature-body">
                           <p>Each member will get a commission by adding a new member. So it&#039;s a profitable process for all.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="team-section padding-top padding-bottom section-bg">
            <div class="container">
               <div class="section-header">
                  <h2 class="title">Team Member</h2>
                  <p>The company empowers our team members to impact the company mission, grow personally and professionally, and reach an optimal work-life balance. So, meet with our awesome members!</p>
               </div>
               <div class="row justify-content-center mb-30-none">
                  <div class="col-lg-3 col-md-6 col-sm-9">
                     <div class="team-item">
                        <div class="team-thumb">
                           <img src="{{ asset('placeholder-image/524x614.jpg') }}" alt="team">
                        </div>
                        <div class="team-content">
                           <h6 class="title">
                              Sergio Leonel
                           </h6>
                           <span class="info">CEO @ Adobe</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-9">
                     <div class="team-item">
                        <div class="team-thumb">
                           <img src="{{ asset('placeholder-image/524x6144.jpg') }}" alt="team">
                        </div>
                        <div class="team-content">
                           <h6 class="title">
                              MR. Jhon
                           </h6>
                           <span class="info">CEO @ Adobe</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-9">
                     <div class="team-item">
                        <div class="team-thumb">
                           <img src="{{ asset('placeholder-image/524x614.jpg') }}" alt="team">
                        </div>
                        <div class="team-content">
                           <h6 class="title">
                              Jon Doi
                           </h6>
                           <span class="info">CEO @ Adobe</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-9">
                     <div class="team-item">
                        <div class="team-thumb">
                           <img src="{{ asset('placeholder-image/524x6144.jpg') }}" alt="team">
                        </div>
                        <div class="team-content">
                           <h6 class="title">
                              MR. Jhon
                           </h6>
                           <span class="info">someone @ anything</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="pricing-section padding-bottom padding-top">
            <div class="container">
               <div class="section-header">
                  <h2 class="title">Pricing Plan</h2>
                  <p>Our pricing plans are very simple and attractive, have a check!</p>
               </div>
               <div class="row justify-content-center mb-30-none">
                  <div class="col-lg-4 col-md-6 col-sm-10 mb-30 inr_mn">
                     <div class="plan-card text-center bg_img" data-background="assets/images/frontend/mlmPlan/608116bd3561b1619072701.jpg') }}">
                        <h4 class="plan-card__title mb-2">grocery kit</h4>
                        <div class="price-range text-white mt-5"> 1000  INR </div>
                        <ul class="plan-card__features mt-4">
                           <li>   Business Volume (BV) : <span class="amount">0</span>
                              <span class="icon float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-question-circle"></i></span>
                           </li>
                           <li>
                              Referral Commission : <span class="amount">Rs 100</span>
                              <span class="icon float-right" data-toggle="modal" data-target="#exampleModal2" ><i class="fas fa-question-circle"></i></span>
                           </li>
                           <li>
                              Commission To Tree : <span class="amount">Rs 200</span>
                              <span class="icon float-right" data-toggle="modal" data-target="#exampleModal3"><i class="fas fa-question-circle"></i></span>
                           </li>
                        </ul>
                        <a href="login.html" class="custom-button theme text-white mt-3">Subscribe now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Business Volume (BV) info</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <h5>   <span class="text-danger">When someone from your below tree subscribe this plan, You will get this Business Volume  which will be used for matching bonus.</span>
                     </h5>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Referral Commission info</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <h5>  <span class=" text-danger">When Your Direct-Referred/Sponsored  User Subscribe in <b> ANY PLAN </b>, You will get this amount.</span>
                        <br>
                        <br>
                        <span class="text-success"> This is the reason You should Choose a Plan With Bigger Referral Commission.</span>
                     </h5>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Commission to tree info</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <h5 class=" text-danger">When someone from your below tree subscribe this plan, You will get this amount as Tree Commission. </h5>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <section class="transaction-section padding-top section-bg padding-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="section-header">
                        <h2 class="title">Our Latest Transaction</h2>
                        <p>At this website, making deposits and widthway is simple and straight forward and hardly takes up any of your time. We are constantly striving to offer you, even more, deposit and withdraw options and to make the process even easier.</p>
                     </div>
                  </div>
               </div>
               <div class="tab deposit-tab">
                  <ul class="tab-menu text-center">
                     <li class="active custom-button">Latest Deposits</li>
                     <li class="custom-button">Latest Withdraws</li>
                  </ul>
                  <div class="tab-area">
                     <div class="tab-item active">
                        <div class="deposite-table">
                           <table>
                              <thead>
                                 <tr class="bg-2">
                                    <th>Name</th>
                                    <th>Plan</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                 </tr>
                              </thead>
                              <tbody>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="tab-item">
                        <div class="deposite-table">
                           <table>
                              <thead>
                                 <tr class="bg-2">
                                    <th>Name</th>
                                    <th>Plan</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                 </tr>
                              </thead>
                              <tbody>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="counter-section padding-top padding-bottom bg-overlay bg_fixed bg_img"
            data-background="">
            <div class="container">
               <div class="counter-wrapper">
                  <div class="counter-item">
                     <div class="counter-header">
                        <h2 class="title" >1300+</h2>
                     </div>
                     <h6 class="subtitle">Total Users </h6>
                  </div>
                  <div class="counter-item">
                     <div class="counter-header">
                        <h2 class="title" >8M+</h2>
                     </div>
                     <h6 class="subtitle">Total Withdraw </h6>
                  </div>
                  <div class="counter-item">
                     <div class="counter-header">
                        <h2 class="title" >10M+</h2>
                     </div>
                     <h6 class="subtitle">Total Deposit </h6>
                  </div>
                  <div class="counter-item">
                     <div class="counter-header">
                        <h2 class="title" >9M+</h2>
                     </div>
                     <h6 class="subtitle">Total Invest </h6>
                  </div>
               </div>
            </div>
         </div>
         <section class="client-section padding-top padding-bottom">
            <div class="container">
               <div class="section-header">
                  <h2 class="title">Our Happy Client</h2>
                  <p>We always care for our clients, lets see what's their opinion about us.</p>
               </div>
               <div class="client-slider">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="client-item">
                           <blockquote>
                              Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Alias Est Maiores Quo Tempora Illum Quibusdam, Incidunt Aspernatur, Voluptatem Maxime!
                           </blockquote>
                           <div class="author">
                              <div class="author-thumb">
                                 <img src="{{ asset('placeholder-image/524x6144.jpg') }}" alt="team">
                              </div>
                              <div class="author-content">
                                 <h6 class="title">Author</h6>
                                 <span>Designation</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="client-item">
                           <blockquote>
                              Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Alias Est Maiores Quo Tempora Illum Quibusdam, Incidunt Aspernatur, Voluptatem Maxime!
                           </blockquote>
                           <div class="author">
                              <div class="author-thumb">
                                 <img src="{{ asset('placeholder-image/524x6144.jpg') }}" alt="team">
                              </div>
                              <div class="author-content">
                                 <h6 class="title">Author</h6>
                                 <span>Designation</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="client-item">
                           <blockquote>
                              Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Alias Est Maiores Quo Tempora Illum Quibusdam, Incidunt Aspernatur, Voluptatem Maxime!
                           </blockquote>
                           <div class="author">
                              <div class="author-thumb">
                                 <img src="{{ asset('placeholder-image/524x6144.jpg') }}" alt="team">
                              </div>
                              <div class="author-content">
                                 <h6 class="title">Author</h6>
                                 <span>Designation</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="client-item">
                           <blockquote>
                              Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Alias Est Maiores Quo Tempora Illum Quibusdam, Incidunt Aspernatur, Voluptatem Maxime!
                           </blockquote>
                           <div class="author">
                              <div class="author-thumb">
                                 <img src="{{ asset('placeholder-image/524x6144.jpg') }}" alt="team">
                              </div>
                              <div class="author-content">
                                 <h6 class="title">Author</h6>
                                 <span>Designation</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="subscribe" class="subscribe-section padding-top padding-bottom bg-overlay bg_img bg_fixed"
            data-background="">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <div class="subscribe-content">
                        <h4 class="title">DON'T FORGET TO SUBSCRIBE OUR NEWSLETTER</h4>
                        <form class="subscribe-form" method="post" action="#">
                           <input type="hidden" name="_token" value=""><input type="email" name="email"  placeholder="Enter Your email address" required>
                           <button type="submit">
                           <i class="fas fa-paper-plane"></i>
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="blog-section padding-top padding-bottom">
            <div class="container">
               <div class="section-header">
                  <h2 class="title">Latest News</h2>
                  <p>Welcome! Please check our latest news and article here...</p>
               </div>
               <div class="row mb-30-none">
                  <div class="col-md-6 col-xl-4 col-sm-10">
                     <div class="post-item">
                        <div class="post-thumb c-thumb">
                           <a href="blog/details/2020-top-50-mlm-companies-in-the-us/67.html">
                           <img src="{{ asset('placeholder-image/410x410.jpg') }}" alt="blog">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5 class="title">
                              <a href="blog/details/2020-top-50-mlm-companies-in-the-us/67.html">2020 Top 50 MLM Companies in the U.S.</a>
                           </h5>
                           <ul class="meta-post">
                              <li><i class="fas fa-calendar-day"></i><span>01 Dec, 2020</span></li>
                           </ul>
                           <div class="entry-content">
                              <p>*Note: 2019 revenue numbers coming soon.Below is the comprehensive list of multi-level marketing companies generating the most amount of revenue in the United States. After co...</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-xl-4 col-sm-10">
                     <div class="post-item">
                        <div class="post-thumb c-thumb">
                           <a href="blog/details/amway-co-founder-richard-devos-passes-away-at-age-92/66.html">
                           <img src="{{ asset('placeholder-image/410x4100.jpg') }}" alt="blog">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5 class="title">
                              <a href="#">Amway Co-Founder Richard DeVos Passes Away at Age 92</a>
                           </h5>
                           <ul class="meta-post">
                              <li><i class="fas fa-calendar-day"></i><span>01 Dec, 2020</span></li>
                           </ul>
                           <div class="entry-content">
                              <p>Rick DeVos announced earlier today that his grandfather and co-founder of Amway Richard DeVos has passed away at age 92. DeVos got his start in the multi-level marketing world...</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-xl-4 col-sm-10">
                     <div class="post-item">
                        <div class="post-thumb c-thumb">
                           <a href="#">
                           <img src="{{ asset('placeholder-image/410x41000.jpg') }}" alt="blog">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5 class="title">
                              <a href="#">Melaleuca CEO Frank VanderSloot Promises to Resign if World Record Attempt Fails</a>
                           </h5>
                           <ul class="meta-post">
                              <li><i class="fas fa-calendar-day"></i><span>01 Dec, 2020</span></li>
                           </ul>
                           <div class="entry-content">
                              <p>In an interview with East Idaho News today, Melalecua CEO Frank Vandersloot promised to resign his executive position with the company if his world record rowing attempt fails...</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
@stop
