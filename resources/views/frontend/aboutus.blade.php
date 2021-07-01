@extends('layouts.frontend.app')
    @section('content')
    <!-- ============Header Section Ends Here============ -->
<section class="page-header bg_img"
data-background="{{ asset('assets/images/frontend/breadcrumb/5fc60b6f0b76e1606814575.jpg') }}">
<div class="container">
<div class="page-header-wrapper">
   <h2 class="title">About</h2>
   <ul class="breadcrumb">
       <li><a href="index.html">Home</a></li>
       <li>About</li>
   </ul>
</div>
</div>
</section>

<section class="about-section padding-top padding-bottom">
<div class="container">
   <div class="row justify-content-between mb--50 flex-wrap-reverse">
       <div class="col-lg-6 pr-xl-5 mb-50">
         <div class="n_pic">
            <img class="img-responsive" src="{{  asset('images/n1.jpg') }}">
         </div>
       </div>
       <div class="col-lg-6 mb-50">
           <div class="about-content">
               <div class="section-header left-style margin-olpo">
                   <h2 class="title">About Us</h2>
               </div>
               <p><div style="text-align:justify;"><div>We are not just an online version of any Business market, but also, the reflection of each and every MLM business. We are an international financial company engaged in investment activities, which are related to MLM on financial markets by qualified professional traders.</div><div><br /></div><div>Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the investors and the trustees. We work towards increasing your profit margin by profitable investment. We look forward to you being part of our community.</div></div><blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote><blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote></p>
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
                   <img src="{{ asset('placeholder-image/524x614,jpg') }}" alt="team">
               </div>
               <div class="team-content">
                   <h6 class="title">
                       Sergio Leonel                            </h6>
                   <span class="info">CEO @ Adobe</span>
               </div>
           </div>
       </div>
                   <div class="col-lg-3 col-md-6 col-sm-9">
           <div class="team-item">
               <div class="team-thumb">
                   <img src="{{ asset('placeholder-image/524x614,jpg') }}" alt="team">
               </div>
               <div class="team-content">
                   <h6 class="title">
                       MR. Jhon                            </h6>
                   <span class="info">CEO @ Adobe</span>
               </div>
           </div>
       </div>
                   <div class="col-lg-3 col-md-6 col-sm-9">
           <div class="team-item">
               <div class="team-thumb">
                   <img src="{{ asset('placeholder-image/524x614,jpg') }}" alt="team">
               </div>
               <div class="team-content">
                   <h6 class="title">
                       Jon Doi                            </h6>
                   <span class="info">CEO @ Adobe</span>
               </div>
           </div>
       </div>
                   <div class="col-lg-3 col-md-6 col-sm-9">
           <div class="team-item">
               <div class="team-thumb">
                   <img src="{{ asset('placeholder-image/524x614,jpg') }}" alt="team">
               </div>
               <div class="team-content">
                   <h6 class="title">
                       MR. Jhon                            </h6>
                   <span class="info">someone @ anything</span>
               </div>
           </div>
       </div>
           </div>
</div>
</section>



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
                           <img src="{{ asset('placeholder-image/524x6144,jpg') }}" alt="team">
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
                           <img src="{{ asset('placeholder-image/524x6144,jpg') }}" alt="team">
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
                          <img src="{{ asset('placeholder-image/524x6144,jpg') }}" alt="team">
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
                           <img src="{{ asset('placeholder-image/524x6144,jpg') }}" alt="team">
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
    @stop
