@extends('layouts.frontend.app')
@section('content')
<section class="page-header bg_img"
data-background="{{asset('assets/images/frontend/breadcrumb/5fc60b6f0b76e1606814575.jpg') }}">
<div class="container">
<div class="page-header-wrapper">
   <h2 class="title">Blog</h2>
   <ul class="breadcrumb">
       <li><a href="index.html">Home</a></li>
       <li>Blog</li>
   </ul>
</div>
</div>
</section>

<section class="blog-section padding-top padding-bottom">
    <div class="container">
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
                            <a href="#">2020 Top 50 MLM Companies in the U.S.</a>
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
                        <a href="#">
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

                            <div class="col-md-6 col-xl-4 col-sm-10">
                <div class="post-item">
                    <div class="post-thumb c-thumb">
                        <a href="#">
                            <img src="{{ asset('placeholder-image/410x4100.jpg') }}" alt="blog">
                        </a>
                    </div>
                    <div class="post-content">
                        <h5 class="title">
                            <a href="blog/details/what-is-multi-level-marketing-what-you-need-to-know-about-the-industry/64.html">What is Multi-Level Marketing? What You Need to Know About the Industry</a>
                        </h5>
                        <ul class="meta-post">
                            <li><i class="fas fa-calendar-day"></i><span>01 Dec, 2020</span></li>
                        </ul>
                        <div class="entry-content">
                            <p>This stands in stark contrast to most standard businesses, where employees are rewarded for sales made to other businesses (B2B companies) or to consumers (B2C companies). Add...</p>
                        </div>
                    </div>
                </div>
            </div>

                            <div class="col-md-6 col-xl-4 col-sm-10">
                <div class="post-item">
                    <div class="post-thumb c-thumb">
                        <a href="blog/details/history-of-multi-level-marketing/63.html">
                            <img src="{{ asset('placeholder-image/410x410.jpg') }}" alt="blog">
                        </a>
                    </div>
                    <div class="post-content">
                        <h5 class="title">
                            <a href="blog/details/history-of-multi-level-marketing/63.html">History of Multi-Level Marketing</a>
                        </h5>
                        <ul class="meta-post">
                            <li><i class="fas fa-calendar-day"></i><span>01 Dec, 2020</span></li>
                        </ul>
                        <div class="entry-content">
                            <p>The first recognized MLM businesses in the United States were the California Vitamin Company (founded in the 1920s and later renamed Nutrilite in 1939), and the California Per...</p>
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
                            <a href="#">Popular Words in the Multi-Level Marketing Industry</a>
                        </h5>
                        <ul class="meta-post">
                            <li><i class="fas fa-calendar-day"></i><span>01 Dec, 2020</span></li>
                        </ul>
                        <div class="entry-content">
                            <p>While MLMs focus almost exclusively on direct selling, this is not an accurate synonym because direct selling is simply the method by which distributors in MLMs sell products...</p>
                        </div>
                    </div>
                </div>
            </div>

                    </div>
    </div>
</section>
@stop
