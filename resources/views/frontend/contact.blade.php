@extends('layouts.frontend.app')
@section('content')

<section class="page-header bg_img"
data-background="assets/images/frontend/breadcrumb/5fc60b6f0b76e1606814575.jpg">
<div class="container">
<div class="page-header-wrapper">
   <h2 class="title">Contact Us</h2>
   <ul class="breadcrumb">
       <li><a href="index.html">Home</a></li>
       <li>Contact Us</li>
   </ul>
</div>
</div>
</section>

<div class="contact-info  padding-top">
<div class="container">
   <div class="row justify-content-center mb-30-none">
       <div class="col-sm-10 col-md-6 col-lg-4">
           <div class="contact--item">
               <div class="contact-item">
                   <div class="contact-thumb">
                       <i class="fa fa-envelope" aria-hidden="true"></i>
                   </div>
                   <div class="contact-content">
                       <h6 class="title">Email Address</h6>
                       <ul>
                           <li>
                               <a href="">your@email.com</a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-sm-10 col-md-6 col-lg-4">
           <div class="contact--item ">
               <div class="contact-item">
                   <div class="contact-thumb">
                       <i class="fa fa-building" aria-hidden="true"></i>

                   </div>
                   <div class="contact-content">
                       <h6 class="title">Office Address</h6>
                       <ul>
                           <li>
                               Sector 2, B 55 Noida, Uttar Pradesh 201301
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-sm-10 col-md-6 col-lg-4">
           <div class="contact--item">
               <div class="contact-item">
                   <div class="contact-thumb">
                       <i class="fa fa-phone-square" aria-hidden="true"></i>
                   </div>
                   <div class="contact-content">
                       <h6 class="title">Phone Number</h6>
                       <ul>
                           <li>
                               <a href="">0012354000</a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</div>

<section class="contact-section padding-top padding-bottom">
<div class="container">
   <div class="row">
       <div class="col-lg-6">
           <div class="section-header left-style margin-olpo">
               <h2 class="title">Contact Information</h2>
               <p>We are here for you always! please fill up the information and feel free ask if you have any query.</p>
           </div>
           <form method="post" action="#" class="contact-form">
               <input type="hidden" name="_token" value="">                        <div class="row">
                   <div class="col-lg-12 form-group">
                       <input type="text" name="name" value=""  placeholder="Your Name" id="name" required>
                   </div>
                   <div class="col-lg-12 form-group">
                       <input type="text" name="subject" placeholder="Write your subject" value=""  id="subject" required>
                   </div>
                   <div class="col-lg-12 form-group">
                       <input type="email" name="email"  value="" id="email" placeholder="Enter E-Mail Address" required>
                   </div>
                   <div class="col-lg-12 form-group">
                       <textarea placeholder="Write your message" name="message" id="message" required></textarea>
                   </div>

                                               <div class=" col-lg-12 form-group my-3">
                       <div class="form-group row ">
<div class="col-md-12">
   <link href="#" rel="stylesheet"><div style="height: 46px; line-height: 46px; width:100%; text-align: center; background-color: #003; color: #1e90ff; font-size: 26px; font-weight: bold; letter-spacing: 20px; font-family: 'Henny Penny', cursive;  -webkit-user-select: none; -moz-user-select: none;-ms-user-select: none;user-select: none;  display: flex; justify-content: center;"><span style="    float:left;     -webkit-transform: rotate(-58deg);">4</span><span style="    float:left;     -webkit-transform: rotate(-24deg);">3</span><span style="    float:left;     -webkit-transform: rotate(6deg);">0</span><span style="    float:left;     -webkit-transform: rotate(51deg);">0</span><span style="    float:left;     -webkit-transform: rotate(23deg);">3</span><span style="    float:left;     -webkit-transform: rotate(21deg);">5</span></div><input type="hidden" name="captcha_secret" value="">        </div>
<div class="col-md-12 mt-4">
   <input type="text" name="captcha" maxlength="6" placeholder="Enter Code" required>
</div>
</div>
                   </div>

                   <div class="col-lg-12 form-group">
                       <input type="submit" class="cmn-btn" value="Submit Now">
                   </div>
               </div>
           </form>
       </div>
       <div class="col-lg-6 d-none d-lg-block">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.542035336404!2d77.31703131440604!3d28.583511693050138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce459b9eee365%3A0xa13a4f83b5b1060!2sD-9-11%2C%20Vyapar%20Marg%2C%20Block%20D%2C%20Sector%203%2C%20Noida%2C%20Uttar%20Pradesh%20201301!5e0!3m2!1sen!2sin!4v1600318539777!5m2!1sen!2sin" width="100%" height="552" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       </div>
   </div>
</div>
</section>
@stop
