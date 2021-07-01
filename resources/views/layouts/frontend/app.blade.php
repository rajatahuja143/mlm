<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title> MLM </title>
      <meta name="title" Content="MLM Mindhat - Home">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <!--  <meta name="apple-mobile-web-app-capable" content="yes">
         <meta name="apple-mobile-web-app-status-bar-style" content="black">
         <meta name="apple-mobile-web-app-title" content="MLM Mindhat - Home">

         <meta itemprop="name" content="MLM Mindhat - Home">
         <meta itemprop="description" content="">
         <meta itemprop="image" content="placeholder-image/undefined.html">

         <meta property="og:type" content="website">
         <meta property="og:title" content="MLM Lab">
         <meta property="og:description" content="">
         <meta property="og:image" content="placeholder-image/undefined.html"/>
         <meta property="og:image:type" content="image/png" />
             <meta property="og:image:width" content="600" />
         <meta property="og:image:height" content="315" />
         <meta property="og:url" content="index.html">

         <meta name="twitter:card" content="summary_large_image">-->
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/bootstrap.min.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/all.min.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/animate.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/nice-select.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/swiper.min.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/magnific-popup.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/odometer.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/flaticon.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/line-awesome.min.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/main.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/custom.css") }}>
      <link rel="stylesheet" href={{ asset("assets/templates/basic/frontend/css/color4d4c.css?color=1e90ff") }}>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css") }}>
   </head>
   <body>
    @include('layouts.frontend.header')
        @yield('content')
    @include('layouts.frontend.footer')
   </body>
</html>

